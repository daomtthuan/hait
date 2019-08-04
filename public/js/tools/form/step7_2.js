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
    "khang_sinh",
    "muc_dich_su_dung"
  ];

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

  khang_sinh_khong_phau_thuat = $("#khang_sinh_khong_phau_thuat").DataTable(config);

  if (JSON.parse(sessionStorage.step7)["khang_sinh_khong_phau_thuat"] != null)
    JSON.parse(sessionStorage.step7)["khang_sinh_khong_phau_thuat"].forEach(element => khang_sinh_khong_phau_thuat.row.add([
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

  $("[name='khang_sinh'][value='1']:checked").each(function () {
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

  $("#xoa_khang_sinh_khong_phau_thuat").click(function () {
    khang_sinh_khong_phau_thuat.row(".table-primary").remove().draw(false);
  });

  $("#submit_khang_sinh_khong_phau_thuat").on("click", function () {
    khang_sinh_khong_phau_thuat.row.add([
      $("#select_khang_sinh_khong_phau_thuat").val(),
      $("#select_khang_sinh_khong_phau_thuat option:selected").text(),
      $("#ngaybd_khang_sinh_khong_phau_thuat").val(),
      $("#ngaykt_khang_sinh_khong_phau_thuat").val(),
      $("#lieu_khang_sinh_khong_phau_thuat").val(),
    ]).draw(false);
  });

  $(".modal-footer button").on("click", function () {
    $(".modal-body input").val(null);
    $(".modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    if ($("[name='khang_sinh'][value='1']").is(":checked"))
      stringJson += getTable("khang_sinh_khong_phau_thuat");
    sessionStorage.step7 = "{" + stringJson.slice(0, -1) + "}"
  });
});