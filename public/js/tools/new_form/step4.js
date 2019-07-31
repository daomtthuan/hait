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