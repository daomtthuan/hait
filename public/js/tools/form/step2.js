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

$(document).ready(function () {

  $.getJSON(antibioticUrl, function (data) {
    data.forEach(element => $(".select_khang_sinh").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>"));
  });

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  const name = [
  ];

  const tableName = ["vp_khang_sinh", "nktn_khang_sinh", "nkh_khang_sinh", "nkvm_khang_sinh"];

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
    $("#vp_khang_sinh").DataTable(config),
    $("#nktn_khang_sinh").DataTable(config),
    $("#nkh_khang_sinh").DataTable(config),
    $("#nkvm_khang_sinh").DataTable(config)
  ];

  if (JSON.parse(sessionStorage.step2)[tableName[0]] != null)
    JSON.parse(sessionStorage.step2)[tableName[0]].forEach(element => table[0].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ket_qua == null ? "" : element.ket_qua
    ]).draw(false));

  if (sessionStorage.step2 != null) {
    var step2 = JSON.parse(sessionStorage.step2);
    name.forEach(element => putInto(step2, element));
  }

  $("#nkbv tbody tr td [type='checkbox']").on("click", function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
  });

  $("#nkbv tbody tr td [type='checkbox']").each(function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
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

  $("#submit_khang_sinh").on("click", function () {
    if ($("#select_khang_sinh").val() != null || $("[name='ket_qua']:checked").length != 0) {
      var
        ma_khang_sinh = $("#select_khang_sinh").val(),
        ten_khang_sinh = $("#select_khang_sinh option:selected").text(),
        ket_qua = $("[name='ket_qua']:checked").length == 0 ? "" : $("[name='ket_qua']:checked").val();
      if ($("#modal_viem_phoi").hasClass("show"))
        table[0].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
      else if ($("#modal_nhiem_khuan_tiet_nieu").hasClass("show"))
        table[1].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
      else if ($("#modal_nhiem_khuan_huyet").hasClass("show"))
        table[2].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
      else if ($("#modal_nhiem_khuan_vet_mo").hasClass("show"))
        table[3].row.add([ma_khang_sinh, ten_khang_sinh, ket_qua]).draw(false);
    }
  });

  $("#modal_khang_sinh .modal-footer button").on("click", function () {
    $(".modal-body input").prop("checked", false);
    $(".modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step3 = "{" + stringJson.slice(0, -1) + "}"
  });
});