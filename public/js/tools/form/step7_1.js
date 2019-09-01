/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-01 17:39:53
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

  $.getJSON(antibiotic_list, data => data.forEach(element => $(".select_khang_sinh").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>")));

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  let name = [
    "vi_tri_phau_thuat",
    "ngay_phau_thuat",
    "loai_phau_thuat",
    "implant",
    "phau_thuat_noi_soi",
    "thoi_gian",
    "diem_asa",
    "loai_vet_mo",
    "gay_me",
    "gay_te",
    "dan_luu",
    "nkvm",
    "dan_luu_tai_vm",
    "dan_luu_ngoai_vm",
    "dan_luu_kin",
    "so_ngay_dat_dan_luu",
    "loai_nhiem_khuan_vm",
    "bieu_hien_sot",
    "bieu_hien_do",
    "bieu_hien_sung",
    "bieu_hien_dau",
    "phau_thuat_lai",
    "dich_vet_mo",
    "toac_vet_mo_tu_nhien",
    "chu_dong_mo_vm",
    "chay_mu",
    "trieu_chung_chi_diem"
  ];

  let tableName = [
    "khang_sinh_truoc_phau_thuat",
    "khang_sinh_du_phong",
    "khang_sinh_sau_phau_thuat"
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
    $("#khang_sinh_truoc_phau_thuat").DataTable(config),
    $("#khang_sinh_du_phong").DataTable(config),
    $("#khang_sinh_sau_phau_thuat").DataTable(config)
  ];

  if (form[tableName[0]] != null)
    form[tableName[0]].forEach(element => table[0].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (form[tableName[1]] != null)
    form[tableName[1]].forEach(element => table[1].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.lieu1 == null ? "" : element.lieu1,
      element.lieu2 == null ? "" : element.lieu2,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (form[tableName[2]] != null)
    form[tableName[2]].forEach(element => table[2].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));

  name.forEach(element => putInto(element));

  $(".step-option [type='radio'][value='1']:checked").each(function () {
    $("." + $(this).attr("name")).fadeIn(200);
    $("." + $(this).attr("name") + " input").removeAttr("readonly");
    $("." + $(this).attr("name") + " textarea").removeAttr("readonly");
  });

  $(".step-option [type='radio']").on("click", function () {
    if ($(this).val() == "1") {
      $("." + $(this).attr("name")).fadeIn(200);
      $("." + $(this).attr("name") + " input").removeAttr("readonly");
      $("." + $(this).attr("name") + " textarea").removeAttr("readonly");
    }
    else {
      $("." + $(this).attr("name")).fadeOut(200);
      $("." + $(this).attr("name") + " input[type='radio']").attr("readonly", "readonly").prop("checked", false);
      $("." + $(this).attr("name") + " input[type!='radio']").attr("readonly", "readonly").val(null);
      $("." + $(this).attr("name") + " textarea").attr("readonly", "readonly").val(null);
    }
  });

  table.forEach(function (element, index) {
    $("#" + tableName[index] + " tbody").on("click", "tr", function () {
      if ($(this).hasClass("table-primary")) {
        $(this).removeClass("table-primary");
      }
      else {
        element.$("tr.table-primary").removeClass("table-primary");
        $(this).addClass("table-primary");
      }
    });

    $("#xoa_" + tableName[index]).click(function () {
      element.row(".table-primary").remove().draw(false);
    });
  });

  $("#submit_khang_sinh_truoc_phau_thuat").on("click", function () {
    if ($("#select_khang_sinh_truoc_phau_thuat").val() != null)
      table[0].row.add([
        $("#select_khang_sinh_truoc_phau_thuat").val(),
        $("#select_khang_sinh_truoc_phau_thuat option:selected").text(),
        $("#ngaybd_khang_sinh_truoc_phau_thuat").val(),
        $("#ngaykt_khang_sinh_truoc_phau_thuat").val(),
        $("#lieu_khang_sinh_truoc_phau_thuat").val(),
      ]).draw(false);
  });

  $("#submit_khang_sinh_du_phong").on("click", function () {
    if ($("#select_khang_sinh_du_phong").val() != null)
      table[1].row.add([
        $("#select_khang_sinh_du_phong").val(),
        $("#select_khang_sinh_du_phong option:selected").text(),
        $("#lieu1_khang_sinh_du_phong").val(),
        $("#lieu2_khang_sinh_du_phong").val(),
        $("#lieu_khang_sinh_du_phong").val(),
      ]).draw(false);
  });

  $("#submit_khang_sinh_sau_phau_thuat").on("click", function () {
    if ($("#select_khang_sinh_sau_phau_thuat").val() != null)
      table[2].row.add([
        $("#select_khang_sinh_sau_phau_thuat").val(),
        $("#select_khang_sinh_sau_phau_thuat option:selected").text(),
        $("#ngaybd_khang_sinh_sau_phau_thuat").val(),
        $("#ngaykt_khang_sinh_sau_phau_thuat").val(),
        $("#lieu_khang_sinh_sau_phau_thuat").val(),
      ]).draw(false);
  });

  $(".modal-footer button").on("click", function () {
    $(".modal-body input").val(null);
    $(".modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    name.forEach(element => getPair(element));
    tableName.forEach(element => getTable(element));
    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });
});