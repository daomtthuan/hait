function setText(name) { sessionStorage.setItem(name, $("#" + name).val()) }
function setRadio(name) { sessionStorage.setItem(name, $("[name='" + name + "']:checked").val()) }
function getText(name) { $("#" + name).val(sessionStorage.getItem(name)) }
function getRadio(name) { $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true) }

$(document).ready(function () {

  getRadio("thuoc_ucmd");
  getRadio("thuoc_steroid");
  getRadio("thuoc_loet_da_day");
  getRadio("dieu_tri_hoa_hoc");
  getRadio("dieu_tri_tia_xa");
  getRadio("truyen_mau");
  getText("khac_step3");

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setRadio("thuoc_ucmd");
    setRadio("thuoc_steroid");
    setRadio("thuoc_loet_da_day");
    setRadio("dieu_tri_hoa_hoc");
    setRadio("dieu_tri_tia_xa");
    setRadio("truyen_mau");
    setText("khac_step3");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 2) sessionStorage.setItem("completed", 3);
      window.location = this.href;
    }
  });

  $("#buttonStepBack").click(function () {
    setRadio("thuoc_ucmd");
    setRadio("thuoc_steroid");
    setRadio("thuoc_loet_da_day");
    setRadio("dieu_tri_hoa_hoc");
    setRadio("dieu_tri_tia_xa");
    setRadio("truyen_mau");
    setText("khac_step3");
  });

});