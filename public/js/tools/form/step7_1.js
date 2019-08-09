/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-09 18:29:37
 */

function getPair(name) {
  switch ($("[name='" + name + "']").attr("type")) {
    case "radio":
      var value = $("[name='" + name + "']:checked").val();
      if (value != undefined) return '"' + name + '":"' + value + '",';
      break;

    default:
      var value = $("[name='" + name + "']").val();
      if (value != "") return '"' + name + '":"' + value + '",';
      break;
  }
  return '';
}

function putInto(step, name) {
  if (step.hasOwnProperty(name))
    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        $("[name='" + name + "'][value='" + step[name] + "']").prop("checked", true);
        break;

      default:
        $("[name='" + name + "']").val(step[name]);
        break;
    }
}

function getTable(table) {
  if (!$("#" + table + " td").hasClass("dataTables_empty")) {
    var Rows = [];
    var $headers = $("#" + table + " th");
    $("#" + table + " tbody tr").each(function (index) {
      $cells = $(this).find("td");
      Rows[index] = {};
      $cells.each(function (cellIndex) {
        if ($(this).html() != "") Rows[index][$($headers[cellIndex]).attr("name")] = $(this).html();
      });
    });
    return '"' + table + '":' + JSON.stringify(Rows) + ',';
  }
  return '';
}

$(document).ready(function () {

  $.getJSON(antibioticUrl, function (data) {
    data.forEach(element => $(".select_khang_sinh").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>"));
  });

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  const name = [
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

  const tableName = ["khang_sinh_truoc_phau_thuat", "khang_sinh_du_phong", "khang_sinh_sau_phau_thuat"];

  const config = {
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

  var table = [
    $("#khang_sinh_truoc_phau_thuat").DataTable(config),
    $("#khang_sinh_du_phong").DataTable(config),
    $("#khang_sinh_sau_phau_thuat").DataTable(config)
  ];

  if (JSON.parse(sessionStorage.step7)[tableName[0]] != null)
    JSON.parse(sessionStorage.step7)[tableName[0]].forEach(element => table[0].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (JSON.parse(sessionStorage.step7)[tableName[1]] != null)
    JSON.parse(sessionStorage.step7)[tableName[1]].forEach(element => table[1].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.lieu1 == null ? "" : element.lieu1,
      element.lieu2 == null ? "" : element.lieu2,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (JSON.parse(sessionStorage.step7)[tableName[2]] != null)
    JSON.parse(sessionStorage.step7)[tableName[2]].forEach(element => table[2].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));

  if (sessionStorage.step7 != null) {
    var step7 = JSON.parse(sessionStorage.step7);
    name.forEach(element => putInto(step7, element));
  }

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
    if ($("#select_khang_sinh_truoc_phau_thuat").val() != null || $("#ngaybd_khang_sinh_truoc_phau_thuat").val() != "" || $("#ngaykt_khang_sinh_truoc_phau_thuat").val() != "" || $("#lieu_khang_sinh_truoc_phau_thuat").val() != "") {
      table[0].row.add([
        $("#select_khang_sinh_truoc_phau_thuat").val(),
        $("#select_khang_sinh_truoc_phau_thuat option:selected").text(),
        $("#ngaybd_khang_sinh_truoc_phau_thuat").val(),
        $("#ngaykt_khang_sinh_truoc_phau_thuat").val(),
        $("#lieu_khang_sinh_truoc_phau_thuat").val(),
      ]).draw(false);
    }
  });

  $("#submit_khang_sinh_du_phong").on("click", function () {
    if ($("#select_khang_sinh_du_phong").val() != null || $("#lieu1_khang_sinh_du_phong").val() != "" || $("#lieu2_khang_sinh_du_phong").val() != "" || $("#lieu_khang_sinh_du_phong").val() != "") {
      table[1].row.add([
        $("#select_khang_sinh_du_phong").val(),
        $("#select_khang_sinh_du_phong option:selected").text(),
        $("#lieu1_khang_sinh_du_phong").val(),
        $("#lieu2_khang_sinh_du_phong").val(),
        $("#lieu_khang_sinh_du_phong").val(),
      ]).draw(false);
    }
  });

  $("#submit_khang_sinh_sau_phau_thuat").on("click", function () {
    if ($("#select_khang_sinh_sau_phau_thuat").val() != null || $("#ngaybd_khang_sinh_sau_phau_thuat").val() != "" || $("#ngaykt_khang_sinh_sau_phau_thuat").val() != "" || $("#lieu_khang_sinh_sau_phau_thuat").val() != "") {
      table[2].row.add([
        $("#select_khang_sinh_sau_phau_thuat").val(),
        $("#select_khang_sinh_sau_phau_thuat option:selected").text(),
        $("#ngaybd_khang_sinh_sau_phau_thuat").val(),
        $("#ngaykt_khang_sinh_sau_phau_thuat").val(),
        $("#lieu_khang_sinh_sau_phau_thuat").val(),
      ]).draw(false);
    }
  });

  $(".modal-footer button").on("click", function () {
    $(".modal-body input").val(null);
    $(".modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    tableName.forEach(element => { stringJson += getTable(element) });
    sessionStorage.step7 = "{" + stringJson.slice(0, -1) + "}"
  });
});