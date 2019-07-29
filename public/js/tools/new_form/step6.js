function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
  if (name == "dan_luu") {
    setRadio("dan_luu_tai_vm");
    setRadio("dan_luu_ngoai_vm");
    setRadio("dan_luu_kin");
    setText("so_ngay_dat_dan_luu");
  }
  else if (name == "nkvm") {
    setRadio("loai_nhiem_khuan_vm");
    setRadio("bieu_hien_sot");
    setRadio("bieu_hien_do");
    setRadio("bieu_hien_sung");
    setRadio("bieu_hien_dau");
    setRadio("phau_thuat_lai");
    setRadio("dich_vet_mo");
    setRadio("toac_vet_mo_tu_nhien");
    setRadio("chu_dong_mo_vm");
    setRadio("chay_mu");
    setText("trieu_chung_chi_diem");
  }
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
  if (name == "dan_luu" || name == "nkvm") {
    if ($(".step-option [name='" + name + "'][type='radio'][value='1']").is(":checked")) {
      $("." + name).fadeIn(200);
      $("." + name + " input").removeAttr("readonly");
      $("." + name + " textarea").removeAttr("readonly");
      if (name == "dan_luu") {
        getRadio("dan_luu_tai_vm");
        getRadio("dan_luu_ngoai_vm");
        getRadio("dan_luu_kin");
        getText("so_ngay_dat_dan_luu");
      }
      else {
        getRadio("loai_nhiem_khuan_vm");
        getRadio("bieu_hien_sot");
        getRadio("bieu_hien_do");
        getRadio("bieu_hien_sung");
        getRadio("bieu_hien_dau");
        getRadio("phau_thuat_lai");
        getRadio("dich_vet_mo");
        getRadio("toac_vet_mo_tu_nhien");
        getRadio("chu_dong_mo_vm");
        getRadio("chay_mu");
        getText("trieu_chung_chi_diem");
      }
    }
  }
}

$(document).ready(function () {

  getText("vi_tri_phau_thuat");
  getText("ngay_phau_thuat");
  getRadio("loai_phau_thuat");
  getRadio("implant");
  getRadio("phau_thuat_noi_soi");
  getText("thoi_gian");
  getRadio("diem_asa");
  getRadio("loai_vet_mo");
  getRadio("gay_me");
  getRadio("gay_te");
  getRadio("dan_luu");
  getRadio("nkvm");

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

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setText("vi_tri_phau_thuat");
    setText("ngay_phau_thuat");
    setRadio("loai_phau_thuat");
    setRadio("implant");
    setRadio("phau_thuat_noi_soi");
    setText("thoi_gian");
    setRadio("diem_asa");
    setRadio("loai_vet_mo");
    setRadio("gay_me");
    setRadio("gay_te");
    setRadio("dan_luu");
    setRadio("nkvm");

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
      window.location = this.href;
    }
  });

  $("#buttonStepBack").click(function () {
    setText("vi_tri_phau_thuat");
    setText("ngay_phau_thuat");
    setRadio("loai_phau_thuat");
    setRadio("implant");
    setRadio("phau_thuat_noi_soi");
    setText("thoi_gian");
    setRadio("diem_asa");
    setRadio("loai_vet_mo");
    setRadio("gay_me");
    setRadio("gay_te");
    setRadio("dan_luu");
    setRadio("nkvm");
  });

});