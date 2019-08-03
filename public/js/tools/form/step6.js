function getPair(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) return '"' + name + '":"' + value + '",';
  else return '';
}

function putInto(step, name) {
  if (step.hasOwnProperty(name))
    $("[name='" + name + "'][value='" + step[name] + "']").prop("checked", true);
}

$(document).ready(function () {

  var href = $("#buttonStepNext").attr("href").slice(0, -1) + "7-";
  const name = ["phau_thuat"];

  if (sessionStorage.step6 != null) {
    var step6 = JSON.parse(sessionStorage.step6);
    name.forEach(element => putInto(step6, element));
  }

  if ($("#co_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "1");
  else if ($("#khong_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "2");

  $("[name='phau_thuat']").on("click", function () {
    if ($(this).val() == "1") $("#buttonStepNext").attr("href", href + "1");
    else $("#buttonStepNext").attr("href", href + "2");
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    if (sessionStorage.step6 != "{" + stringJson.slice(0, -1) + "}") {
      sessionStorage.step6 = "{" + stringJson.slice(0, -1) + "}";
      sessionStorage.step7 = "{}";
    }
  });
});