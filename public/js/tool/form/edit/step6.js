/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:05
 */

$(document).ready(() => {

  let form = JSON.parse(sessionStorage.form);
  let href = $("#buttonStepNext").attr("href").slice(0, -1) + "7-";

  if (form.hasOwnProperty("phau_thuat")) {
    $("[name='phau_thuat'][value='" + form.phau_thuat + "']").prop("checked", true);
    if ($("#co_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "1");
    else if ($("#khong_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "2");
  }

  $("[name='phau_thuat']").on("click", function () {
    if ($(this).val() == "1") $("#buttonStepNext").attr("href", href + "1");
    else $("#buttonStepNext").attr("href", href + "2");
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    form.phau_thuat = $("[name='phau_thuat']:checked").val();
    if (form.phau_thuat == undefined) delete form.phau_thuat;

    if (form.phau_thuat == 1)
      [
        "khang_sinh",
        "khang_sinh_khong_phau_thuat",
        "muc_dich_su_dung"
      ].forEach(element => delete form[element]);
    else if (form.phau_thuat == 2)
      [
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
        "trieu_chung_chi_diem",
        "khang_sinh_truoc_phau_thuat",
        "khang_sinh_du_phong",
        "khang_sinh_sau_phau_thuat"
      ].forEach(element => delete form[element]);

    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });

  $("#buttonSubmit").removeClass("d-none").click(() => {
    form.phau_thuat = $("[name='phau_thuat']:checked").val();
    if (form.phau_thuat == undefined) delete form.phau_thuat;

    if (form.phau_thuat == 1)
      [
        "khang_sinh",
        "khang_sinh_khong_phau_thuat",
        "muc_dich_su_dung"
      ].forEach(element => delete form[element]);
    else if (form.phau_thuat == 2)
      [
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
        "trieu_chung_chi_diem",
        "khang_sinh_truoc_phau_thuat",
        "khang_sinh_du_phong",
        "khang_sinh_sau_phau_thuat"
      ].forEach(element => delete [element]);

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