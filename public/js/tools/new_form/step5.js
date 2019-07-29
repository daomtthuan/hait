function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
  setText("ngaybd_" + name);
  setText("ngaykt_" + name);
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
  if ($("[name='" + name + "'][type='radio'][value='1']").is(":checked")) {
    $("." + name).fadeIn(200);
    $("." + name + " input").removeAttr("readonly");
    getText("ngaybd_" + name);
    getText("ngaykt_" + name);
  }
}

$(document).ready(function () {

  getRadio("tho_may_xam_nhap");
  getRadio("dat_noi_khi_quan");
  getRadio("mo_khi_quan");
  getRadio("dat_ong_thong_tieu");
  getRadio("dat_ong_thong_tmtt");
  getRadio("duong_truyen_tmnv");
  getRadio("dat_ong_thong_da_day");
  getText("khac_step5");

  $("[type='radio']").on("click", function () {
    if ($(this).val() == "1") {
      $("." + $(this).attr("name")).fadeIn(200);
      $("." + $(this).attr("name") + " input").removeAttr("readonly");
    }
    else {
      $("." + $(this).attr("name")).fadeOut(200);
      $("." + $(this).attr("name") + " input").attr("readonly", "readonly").val(null);
    }
  });

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setRadio("tho_may_xam_nhap");
    setRadio("dat_noi_khi_quan");
    setRadio("mo_khi_quan");
    setRadio("dat_ong_thong_tieu");
    setRadio("dat_ong_thong_tmtt");
    setRadio("duong_truyen_tmnv");
    setRadio("dat_ong_thong_da_day");
    setText("khac_step5");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 4) sessionStorage.setItem("completed", 5);
      window.location = this.href;
    }
  });

  $("#buttonStepBack").click(function () {
    setRadio("tho_may_xam_nhap");
    setRadio("dat_noi_khi_quan");
    setRadio("mo_khi_quan");
    setRadio("dat_ong_thong_tieu");
    setRadio("dat_ong_thong_tmtt");
    setRadio("duong_truyen_tmnv");
    setRadio("dat_ong_thong_da_day");
    setText("khac_step5");
  });

});