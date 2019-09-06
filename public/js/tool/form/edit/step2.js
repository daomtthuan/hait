/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:04:50
 */

$(document).ready(() => {

  let form = JSON.parse(sessionStorage.form);

  function getPair(part, name) {
    if (!form.hasOwnProperty(part)) form[part] = {};

    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        form[part][name] = $("[name='" + name + "']:checked").val();
        break;

      default:
        form[part][name] = $("[name='" + name + "']").val();
        break;
    }

    if (form[part][name] == "" || form[part][name] == undefined) delete form[part][name];
  }

  function putInto(part, name) {
    if (!form.hasOwnProperty(part)) form[part] = {};
    if (form[part].hasOwnProperty(name))
      switch ($("[name='" + name + "']").attr("type")) {
        case "radio":
          $("[name='" + name + "'][value='" + form[part][name] + "']").prop("checked", true);
          break;

        default:
          $("[name='" + name + "']").val(form[part][name]);
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

  $.getJSON(antibioticApi, data => data.forEach(element => $(".select_khang_sinh").append("<option class='d-none' value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>")));

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  let vp_name = [
    "vp_ngay_xuat_hien",
    "vp_trieu_chung",
    "vp_sot",
    "vp_bach_cau",
    "vp_tam_than",
    "vp_dom_mu",
    "vp_ho",
    "vp_rale",
    "vp_thong_khi",
    "vp_hang_phoi",
    "vp_dong_dac_phoi",
    "vp_tham_nhiem",
    "vp_tran_khi",
    "vp_cay_dich",
    "vp_phat_hien",
    "vp_tang4",
    "vp_pcr",
    "vp_micro",
    "vp_cay_dich_tiet",
    "vp_phat_hien_vi_khuan",
    "vp_tang_gap_4",
    "vp_ten_vi_khuan"
  ];

  let nktn_name = [
    "nktn_ngay_xuat_hien",
    "nktn_trieu_chung",
    "nktn_sot",
    "nktn_dau_mu",
    "nktn_mot_tieu",
    "nktn_tieu_buot",
    "nktn_tieu_dat",
    "nktn_tieu_mau",
    "nktn_cay_nuoc_tieu",
    "nktn_soi_can",
    "nktn_nhuom",
    "nktn_ten_vi_khuan"
  ];

  let nkh_name = [
    "nkh_ngay_xuat_hien",
    "nkh_trieu_chung",
    "nkh_sot",
    "nkh_huyet_ap",
    "nkh_than_nhiet",
    "nkh_ngung_tho",
    "nkh_nhip_tim",
    "nkh_cay_mau_1",
    "nkh_cay_mau_2",
    "nkh_cay_mau_3",
    "nkh_ten_vi_khuan"
  ];

  let nkvm_name = [
    "nkvm_ngay_xuat_hien",
    "nkvm_trieu_chung",
    "nkvm_loai_vet_mo",
    "nkvm_vm_nong_30_ngay",
    "nkvm_vm_nong_sot",
    "nkvm_vm_nong_chay_mu",
    "nkvm_vm_nong_dau",
    "nkvm_vm_nong_mo_vm",
    "nkvm_vm_nong_chan_doan",
    "nkvm_vm_sau_30_ngay",
    "nkvm_vm_sau_sot",
    "nkvm_vm_sau_chay_mu",
    "nkvm_vm_sau_toac",
    "nkvm_vm_sau_mo_vm",
    "nkvm_vm_sau_ap_xe",
    "nkvm_vm_sau_chan_doan",
    "nkvm_vm_vi_tri_30_ngay",
    "nkvm_vm_vi_tri_chay_mu",
    "nkvm_vm_vi_tri_ap_xe",
    "nkvm_vm_vi_tri_chan_doan",
    "nkvm_ten_vi_khuan"
  ];

  let tableName = [
    "vp_khang_sinh",
    "nktn_khang_sinh",
    "nkh_khang_sinh",
    "nkvm_khang_sinh"
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

  let table = [
    $("#vp_khang_sinh").DataTable(config),
    $("#nktn_khang_sinh").DataTable(config),
    $("#nkh_khang_sinh").DataTable(config),
    $("#nkvm_khang_sinh").DataTable(config)
  ];

  tableName.forEach((element, index) => {
    if (form.hasOwnProperty(element))
      form[element].forEach(element => table[index].row.add([
        element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
        element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
        element.ket_qua == null ? "" : element.ket_qua
      ]).draw(false));
  });


  if (form.hasOwnProperty("loai_nkbv")) {
    form.loai_nkbv.forEach(element => {
      $("[name='loai_nkbv'][value='" + element + "']").prop("checked", true);
      switch (element) {
        case "1":
          vp_name.forEach(element => putInto("vp", element));
          break;
        case "2":
          nktn_name.forEach(element => putInto("nktn", element));
          break;
        case "3":
          nkh_name.forEach(element => putInto("nkh", element));
          break;
        case "4":
          nkvm_name.forEach(element => putInto("nkvm", element));
          break;
      }
    });
  }

  $("#loai_nkbv tbody tr td [type='checkbox']").on("click", function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
  });

  $("#loai_nkbv tbody tr td [type='checkbox']").each(function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
  });

  $("[name='nkvm_loai_vet_mo']").on("click", function () {
    if ($(this).attr("id") == "nkvm_loai_vet_mo_nong") {
      $(".nkvm_loai_vet_mo_nong").fadeIn(200);
      $(".nkvm_loai_vet_mo_sau").fadeOut(200);
      $(".nkvm_loai_vet_mo_sau input[type='radio']").prop("checked", false);
    }
    else {
      $(".nkvm_loai_vet_mo_sau").fadeIn(200);
      $(".nkvm_loai_vet_mo_nong").fadeOut(200);
      $(".nkvm_loai_vet_mo_nong input[type='radio']").prop("checked", false);
    }
  });

  if ($("#nkvm_loai_vet_mo_nong").is(":checked")) $(".nkvm_loai_vet_mo_nong").fadeIn(200);
  else if ($("#nkvm_loai_vet_mo_sau").is(":checked")) $(".nkvm_loai_vet_mo_sau").fadeIn(200);

  table.forEach((element, index) => {
    $("#" + tableName[index] + " tbody").on("click", "tr", function () {
      if ($(this).hasClass("table-primary")) {
        $(this).removeClass("table-primary");
      }
      else {
        element.$("tr.table-primary").removeClass("table-primary");
        $(this).addClass("table-primary");
      }
    });

    $("#xoa_" + tableName[index]).click(() => {
      $("#select_khang_sinh option[value='" + $("#" + tableName[index] + ">tbody>tr.table-primary>td:eq(0)").text() + "']").removeClass(modal.substring(1));
      element.row(".table-primary").remove().draw(false);
    });
  });

  let modal = "";

  $(".btn_modal").click(function () { modal = $(this).attr("data-target") });

  $("[data-target='#modal_khang_sinh']").click(() => {
    $(modal).modal("hide");
    $("#select_khang_sinh option").not("." + modal.substring(1)).removeClass("d-none");
  });

  $('#modal_khang_sinh').on("hidden.bs.modal", () => {
    $("#select_khang_sinh option").addClass("d-none");
    $(modal).modal("show");
  })

  $("#submit_khang_sinh").on("click", () => {
    if ($("#select_khang_sinh").val() != null) {
      let
        ma_khang_sinh = $("#select_khang_sinh").val(),
        ten_khang_sinh = $("#select_khang_sinh option:selected").text(),
        ket_qua = $("[name='ket_qua']:checked").length == 0 ? "" : $("[name='ket_qua']:checked").val();

      $("#select_khang_sinh option[value='" + ma_khang_sinh + "']").addClass(modal.substring(1)).addClass("d-none");
      switch (modal) {
        case "#modal_viem_phoi":
          table[0].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
          break;
        case "#modal_nhiem_khuan_tiet_nieu":
          table[1].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
          break;
        case "#modal_nhiem_khuan_huyet":
          table[2].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
          break;
        case "#modal_nhiem_khuan_vet_mo":
          table[3].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
          break;
      }
    }
  });

  $("#modal_khang_sinh .modal-footer button").on("click", () => {
    $("#modal_khang_sinh .modal-body input").prop("checked", false);
    $("#modal_khang_sinh .modal-body select").val($(".modal-body select option:first").val());
  });

  $("#buttonStepNext, #buttonStepBack").click(() => {
    let loai_nkbv = [];
    $("[name='loai_nkbv']:checked").each(function () { loai_nkbv.push($(this).val()) });
    if (loai_nkbv.length > 0) form.loai_nkbv = loai_nkbv;

    if ($("[name='loai_nkbv'][value='1']").is(":checked"))
      vp_name.forEach(element => getPair("vp", element));

    if ($("[name='loai_nkbv'][value='2']").is(":checked"))
      nktn_name.forEach(element => getPair("nktn", element));

    if ($("[name='loai_nkbv'][value='3']").is(":checked"))
      nkh_name.forEach(element => getPair("nkh", element));

    if ($("[name='loai_nkbv'][value='4']").is(":checked"))
      nkvm_name.forEach(element => getPair("nkvm", element));

    tableName.forEach(element => getTable(element));
    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });

  $("#buttonSubmit").removeClass("d-none").click(() => {

    let loai_nkbv = [];
    $("[name='loai_nkbv']:checked").each(function () { loai_nkbv.push($(this).val()) });
    if (loai_nkbv.length > 0) form.loai_nkbv = loai_nkbv;

    if ($("[name='loai_nkbv'][value='1']").is(":checked"))
      vp_name.forEach(element => getPair("vp", element));

    if ($("[name='loai_nkbv'][value='2']").is(":checked"))
      nktn_name.forEach(element => getPair("nktn", element));

    if ($("[name='loai_nkbv'][value='3']").is(":checked"))
      nkh_name.forEach(element => getPair("nkh", element));

    if ($("[name='loai_nkbv'][value='4']").is(":checked"))
      nkvm_name.forEach(element => getPair("nkvm", element));

    tableName.forEach(element => getTable(element));
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