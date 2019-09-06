/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:04:50
 */

$(document).ready(() => {

  $("#main input").prop("disabled", true);
  $("#main textarea").prop("disabled", true);
  $("#buttonSubmit").remove();
  $("#main [data-target='#modal_khang_sinh']").remove();
  $('#modal_khang_sinh').remove();

  let form = JSON.parse(sessionStorage.form);

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
    $("#xoa_" + element).remove();
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

  $("#loai_nkbv tbody tr td [type='checkbox']").each(function () {
    if ($(this).is(":checked"))
      $("button." + $(this).attr("id")).prop("disabled", false);
    else
      $("button." + $(this).attr("id")).prop("disabled", true);
  });

  if ($("#nkvm_loai_vet_mo_nong").is(":checked")) $(".nkvm_loai_vet_mo_nong").fadeIn(200);
});