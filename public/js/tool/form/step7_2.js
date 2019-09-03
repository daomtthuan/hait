/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:14
 */

$(document).ready(() => {

  let form = JSON.parse(sessionStorage.form);

  function getPair(name) {
    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        form[name] = $("[name='" + name + "']:checked").val();
        break;

      default:
        form[name] = $("[name='" + name + "']").val();
        break;
    }

    if (form[name] == "" || form[name] == undefined) delete form[name];
  }

  function putInto(name) {
    if (form.hasOwnProperty(name))
      switch ($("[name='" + name + "']").attr("type")) {
        case "radio":
          $("[name='" + name + "'][value='" + form[name] + "']").prop("checked", true);
          break;

        default:
          $("[name='" + name + "']").val(form[name]);
          break;
      }
  }

  function getTable(table) {
    if (!$("#" + table + " td").hasClass("dataTables_empty")) {
      let Rows = [];
      let $headers = $("#" + table + " th");
      $("#" + table + " tbody tr").each(function (index) {
        $cells = $(this).find("td");
        Rows[index] = {};
        $cells.each(function (cellIndex) {
          if ($(this).html() != "")
            Rows[index][$($headers[cellIndex]).attr("name")] = $(this).html();
        });
        Rows[index].ksd = table;
      });
      form[table] = Rows;
    }
  }

  $.getJSON(antibiotic_list, data => data.forEach(element => $(".select_khang_sinh").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>"))
  );

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  let name = [
    "khang_sinh",
    "muc_dich_su_dung"
  ];

  let config = {
    "language": {
      "decimal": "",
      "emptyTable": "Không có dữ liệu",
      "info": "Hiển thị từ _START_ đến _END_ trong _TOTAL_ dòng",
      "infoEmpty": "",
      "infoFiltered": "(được lọc ra từ _MAX_ dòng)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Số dòng hiển thị _MENU_",
      "loadingRecords": "Đang tải...",
      "processing": "Đang xử lý...",
      "search": "Tìm kiếm",
      "zeroRecords": "Không tìm thấy",
      "paginate": {
        "first": "Đầu tiên",
        "last": "Cuối cùng",
        "next": "Kế tiếp",
        "previous": "Trở về"
      },
      "aria": {
        "sortAscending": ": sắp xếp tăng dần",
        "sortDescending": ": sắp xếp giảm dần"
      }
    }
  };

  let khang_sinh_khong_phau_thuat = $("#khang_sinh_khong_phau_thuat").DataTable(config);

  if (form["khang_sinh_khong_phau_thuat"] != null)
    form["khang_sinh_khong_phau_thuat"].forEach(element => khang_sinh_khong_phau_thuat.row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));

  name.forEach(element => putInto(element));

  $("[name='khang_sinh'][value='1']:checked").each(() => {
    $(".khang_sinh").fadeIn(200);
    $(".khang_sinh input").removeAttr("readonly");
  });

  $("[name='khang_sinh']").on("click", function () {
    if ($(this).val() == "1") {
      $(".khang_sinh").fadeIn(200);
      $(".khang_sinh input").removeAttr("readonly");
    }
    else {
      $(".khang_sinh").fadeOut(200);
      $(".khang_sinh input[type='radio']").attr("readonly", "readonly").prop("checked", false);
      $(".khang_sinh input[type!='radio']").attr("readonly", "readonly").val(null);
    }
  });

  $("#khang_sinh_khong_phau_thuat tbody").on("click", "tr", function () {
    if ($(this).hasClass("table-primary")) {
      $(this).removeClass("table-primary");
    }
    else {
      khang_sinh_khong_phau_thuat.$("tr.table-primary").removeClass("table-primary");
      $(this).addClass("table-primary");
    }
  });

  $("#xoa_khang_sinh_khong_phau_thuat").click(() => {
    khang_sinh_khong_phau_thuat.row(".table-primary").remove().draw(false);
  });

  $("#submit_khang_sinh_khong_phau_thuat").on("click", () => {
    if ($("#select_khang_sinh_khong_phau_thuat").val() != null)
      khang_sinh_khong_phau_thuat.row.add([
        $("#select_khang_sinh_khong_phau_thuat").val(),
        $("#select_khang_sinh_khong_phau_thuat option:selected").text(),
        $("#ngaybd_khang_sinh_khong_phau_thuat").val(),
        $("#ngaykt_khang_sinh_khong_phau_thuat").val(),
        $("#lieu_khang_sinh_khong_phau_thuat").val(),
      ]).draw(false);
  });

  $(".modal-footer button").on("click", () => {
    $(".modal-body input").val(null);
    $(".modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(() => {
    name.forEach(element => getPair(element));
    if ($("[name='khang_sinh'][value='1']").is(":checked"))
      getTable("khang_sinh_khong_phau_thuat")
    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });

  $("#buttonSubmit").click(() => {

    name.forEach(element => getPair(element));
    if ($("[name='khang_sinh'][value='1']").is(":checked"))
      getTable("khang_sinh_khong_phau_thuat")
    sessionStorage.form = JSON.stringify(form);

		let data = form;
		data.danh_sach_khang_sinh = [];
		data.stringJSON = JSON.stringify(form);
		[
			"vp_khang_sinh",
			"nktn_khang_sinh",
			"nkh_khang_sinh",
			"nkvm_khang_sinh",
			"khang_sinh_truoc_phau_thuat",
			"khang_sinh_du_phong",
			"khang_sinh_sau_phau_thuat",
			"khang_sinh_khong_phau_thuat"
		].forEach(list => {
			if (data.hasOwnProperty(list)) {
				data[list].forEach(element => data.danh_sach_khang_sinh.push(element));
				delete data[list];
			}
		});

		$.ajax({
			url: updateApi,
			type: "post",
			data: JSON.stringify(data),
			contentType: "application/json;charset=UTF-8",
			success: function () {
				alert("Lưu thành công");
			},
			error: function () {
				alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục");
			}
		});
	});
});