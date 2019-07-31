function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
}

$(document).ready(function () {

  getRadio("phau_thuat");

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setRadio("phau_thuat");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 5) sessionStorage.setItem("completed", 6);

      var part = sessionStorage.getItem("phau_thuat");
      if (part == 1) {
        sessionStorage.removeItem("khang_sinh");
        sessionStorage.removeItem("muc_dich_su_dung");
      }
      else {
        sessionStorage.removeItem("vi_tri_phau_thuat");
        sessionStorage.removeItem("ngay_phau_thuat");
        sessionStorage.removeItem("loai_phau_thuat");
        sessionStorage.removeItem("implant");
        sessionStorage.removeItem("phau_thuat_noi_soi");
        sessionStorage.removeItem("thoi_gian");
        sessionStorage.removeItem("diem_asa");
        sessionStorage.removeItem("loai_vet_mo");
        sessionStorage.removeItem("gay_me");
        sessionStorage.removeItem("gay_te");

        if (sessionStorage.getItem("dan_luu") == 1) {
          sessionStorage.removeItem("dan_luu_tai_vm");
          sessionStorage.removeItem("dan_luu_ngoai_vm");
          sessionStorage.removeItem("dan_luu_kin");
          sessionStorage.removeItem("so_ngay_dat_dan_luu");
        }
        sessionStorage.removeItem("dan_luu");

        if (sessionStorage.getItem("nkvm") == 1) {
          sessionStorage.removeItem("loai_nhiem_khuan_vm");
          sessionStorage.removeItem("bieu_hien_sot");
          sessionStorage.removeItem("bieu_hien_do");
          sessionStorage.removeItem("bieu_hien_sung");
          sessionStorage.removeItem("bieu_hien_dau");
          sessionStorage.removeItem("phau_thuat_lai");
          sessionStorage.removeItem("dich_vet_mo");
          sessionStorage.removeItem("toac_vet_mo_tu_nhien");
          sessionStorage.removeItem("chu_dong_mo_vm");
          sessionStorage.removeItem("chay_mu");
          sessionStorage.removeItem("trieu_chung_chi_diem");
        }
        sessionStorage.removeItem("nkvm");
      }
      window.location = this.href + "-" + part;
    }
  });

  $("#buttonStepBack").click(function () {
    setRadio("phau_thuat");
    if (sessionStorage.getItem("phau_thuat") == 1) {
      sessionStorage.removeItem("khang_sinh");
      sessionStorage.removeItem("muc_dich_su_dung");
    }
    else {
      sessionStorage.removeItem("vi_tri_phau_thuat");
      sessionStorage.removeItem("ngay_phau_thuat");
      sessionStorage.removeItem("loai_phau_thuat");
      sessionStorage.removeItem("implant");
      sessionStorage.removeItem("phau_thuat_noi_soi");
      sessionStorage.removeItem("thoi_gian");
      sessionStorage.removeItem("diem_asa");
      sessionStorage.removeItem("loai_vet_mo");
      sessionStorage.removeItem("gay_me");
      sessionStorage.removeItem("gay_te");

      if (sessionStorage.getItem("dan_luu") == 1) {
        sessionStorage.removeItem("dan_luu_tai_vm");
        sessionStorage.removeItem("dan_luu_ngoai_vm");
        sessionStorage.removeItem("dan_luu_kin");
        sessionStorage.removeItem("so_ngay_dat_dan_luu");
      }
      sessionStorage.removeItem("dan_luu");

      if (sessionStorage.getItem("nkvm") == 1) {
        sessionStorage.removeItem("loai_nhiem_khuan_vm");
        sessionStorage.removeItem("bieu_hien_sot");
        sessionStorage.removeItem("bieu_hien_do");
        sessionStorage.removeItem("bieu_hien_sung");
        sessionStorage.removeItem("bieu_hien_dau");
        sessionStorage.removeItem("phau_thuat_lai");
        sessionStorage.removeItem("dich_vet_mo");
        sessionStorage.removeItem("toac_vet_mo_tu_nhien");
        sessionStorage.removeItem("chu_dong_mo_vm");
        sessionStorage.removeItem("chay_mu");
        sessionStorage.removeItem("trieu_chung_chi_diem");
      }
      sessionStorage.removeItem("nkvm");
    }
  });

});