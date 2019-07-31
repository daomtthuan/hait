function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
}

$(document).ready(function () {

  getRadio("thuoc_ucmd");
  getRadio("thuoc_steroid");
  getRadio("thuoc_loet_da_day");
  getRadio("dieu_tri_hoa_hoc");
  getRadio("dieu_tri_tia_xa");
  getRadio("truyen_mau");
  getText("khac_step3");

  $("#buttonStepNext").click(function (event) {
    setRadio("thuoc_ucmd");
    setRadio("thuoc_steroid");
    setRadio("thuoc_loet_da_day");
    setRadio("dieu_tri_hoa_hoc");
    setRadio("dieu_tri_tia_xa");
    setRadio("truyen_mau");
    setText("khac_step3");
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