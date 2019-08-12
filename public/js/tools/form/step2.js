/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-09 18:28:32
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

  $.getJSON(antibiotic_list, function (data) {
    data.forEach(element => $(".select_khang_sinh").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>"));
  });

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  const vp_name = [
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

  const nktn_name = [
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

  const nkh_name = [
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

  const nkvm_name = [
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
  if (JSON.parse(sessionStorage.step2)[tableName[1]] != null)
    JSON.parse(sessionStorage.step2)[tableName[1]].forEach(element => table[1].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ket_qua == null ? "" : element.ket_qua
    ]).draw(false));
  if (JSON.parse(sessionStorage.step2)[tableName[2]] != null)
    JSON.parse(sessionStorage.step2)[tableName[2]].forEach(element => table[2].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ket_qua == null ? "" : element.ket_qua
    ]).draw(false));
  if (JSON.parse(sessionStorage.step2)[tableName[3]] != null)
    JSON.parse(sessionStorage.step2)[tableName[3]].forEach(element => table[3].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ket_qua == null ? "" : element.ket_qua
    ]).draw(false));

  if (sessionStorage.step2 != null) {
    var step2 = JSON.parse(sessionStorage.step2);
    if (step2.hasOwnProperty("nkbv")) {
      step2.nkbv.forEach(element => {
        $("[name='nkbv'][value='" + element + "']").prop("checked", true);
        switch (element) {
          case "1":
            vp_name.forEach(element => putInto(step2.vp, element));
            break;
          case "2":
            nktn_name.forEach(element => putInto(step2.nktn, element));
            break;
          case "3":
            nkh_name.forEach(element => putInto(step2.nkh, element));
            break;
          case "4":
            nkvm_name.forEach(element => putInto(step2.nkvm, element));
            break;
        }
      });
    }
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

  var modal = "";

  $(".btn_modal").click(function () {
    modal = $(this).attr("data-target");
  });

  $("[data-target='#modal_khang_sinh']").click(function () {
    $(modal).modal("hide");
  });

  $('#modal_khang_sinh').on("hidden.bs.modal", function () {
    $(modal).modal("show");
  })

  $("#submit_khang_sinh").on("click", function () {
    if ($("#select_khang_sinh").val() != null || $("[name='ket_qua']:checked").length != 0) {
      var
        ma_khang_sinh = $("#select_khang_sinh").val(),
        ten_khang_sinh = $("#select_khang_sinh option:selected").text(),
        ket_qua = $("[name='ket_qua']:checked").length == 0 ? "" : $("[name='ket_qua']:checked").val();

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

  $("#modal_khang_sinh .modal-footer button").on("click", function () {
    $("#modal_khang_sinh .modal-body input").prop("checked", false);
    $("#modal_khang_sinh .modal-body select").val($(".modal-body select option:first").val());;
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    var nkbv = [];
    $("[name='nkbv']:checked").each(function () { nkbv.push($(this).val()); });
    stringJson += '"nkbv":' + JSON.stringify(nkbv) + ',';

    if ($("[name='nkbv'][value='1']").is(":checked")) {
      stringJson += ('"vp":{');
      vp_name.forEach(element => { stringJson += getPair(element) });
      stringJson = stringJson.slice(0, -1) + "},";
    }

    if ($("[name='nkbv'][value='2']").is(":checked")) {
      stringJson += ('"nktn":{');
      nktn_name.forEach(element => { stringJson += getPair(element) });
      stringJson = stringJson.slice(0, -1) + "},";
    }

    if ($("[name='nkbv'][value='3']").is(":checked")) {
      stringJson += ('"nkh":{');
      nkh_name.forEach(element => { stringJson += getPair(element) });
      stringJson = stringJson.slice(0, -1) + "},";
    }

    if ($("[name='nkbv'][value='4']").is(":checked")) {
      stringJson += ('"nkvm":{');
      nkvm_name.forEach(element => { stringJson += getPair(element) });
      stringJson = stringJson.slice(0, -1) + "},";
    }

    tableName.forEach(element => { stringJson += getTable(element) });
    sessionStorage.step2 = "{" + stringJson.slice(0, -1) + "}";
  });
});