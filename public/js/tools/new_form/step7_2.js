function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
  if (name == "khang_sinh") setRadio("muc_dich_su_dung");
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
  if (name == "khang_sinh") {
    if ($(".step-option [name='khang_sinh'][value='1']").is(":checked")) {
      getRadio("muc_dich_su_dung");
    }
  }
}

$(document).ready(function () {

  getRadio("khang_sinh");

  $("[name='khang_sinh'][type='radio']").on("click", function () {
    if ($(this).val() == "1") $(".khang_sinh").fadeIn(200);
    else $(".khang_sinh").fadeOut(200);
  });

  $("#buttonStepNext").click(function (event) {
    setRadio("khang_sinh");
  });

  $("#buttonStepBack").click(function () {
    setRadio("khang_sinh");
  });

});