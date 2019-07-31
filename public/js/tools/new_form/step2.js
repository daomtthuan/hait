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



  $("#buttonStepNext").click(function (event) {

  });

  $("#buttonStepBack").click(function () {

  });

});