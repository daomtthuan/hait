function setText(name) { sessionStorage.setItem(name, $("#" + name).val()) }
function setRadio(name) { sessionStorage.setItem(name, $("[name='" + name + "']:checked").val()) }
function getText(name) { $("#" + name).val(sessionStorage.getItem(name)) }
function getRadio(name) { $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true) }

$(document).ready(function () {

  getRadio("ho_hap_man_tinh");
  getRadio("gan_man_tinh");
  getRadio("tim_mach");
  getRadio("hiv_aids");
  getRadio("ung_thu");
  getRadio("tieu_duong");
  getRadio("than_man_tinh");
  getRadio("da_chan_thuong");
  getRadio("bong");
  getRadio("cao_huyet_ap");
  getText("khac_step4");

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setRadio("ho_hap_man_tinh");
    setRadio("gan_man_tinh");
    setRadio("tim_mach");
    setRadio("hiv_aids");
    setRadio("ung_thu");
    setRadio("tieu_duong");
    setRadio("than_man_tinh");
    setRadio("da_chan_thuong");
    setRadio("bong");
    setRadio("cao_huyet_ap");
    setText("khac_step4");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 3) sessionStorage.setItem("completed", 4);
      window.location = this.href;
    }
  });

  $("#buttonStepBack").click(function () {
    setRadio("ho_hap_man_tinh");
    setRadio("gan_man_tinh");
    setRadio("tim_mach");
    setRadio("hiv_aids");
    setRadio("ung_thu");
    setRadio("tieu_duong");
    setRadio("than_man_tinh");
    setRadio("da_chan_thuong");
    setRadio("bong");
    setRadio("cao_huyet_ap");
    setText("khac_step4");
  });

});