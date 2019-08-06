function getPair(name) {
  switch ($("[name='" + name + "']").attr("type")) {
    case "radio":
      var value = $("[name='" + name + "']:checked").val();
      if (value != undefined) return '"' + name + '":"' + value + '",';
      break;

    default:
      var value = $("[name='" + name + "']").val();
      if (value != "") return '"' + name + '":"' + value + '",';
      break;
  }
  return '';
}

function putInto(step, name) {
  if (step.hasOwnProperty(name))
    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        $("[name='" + name + "'][value='" + step[name] + "']").prop("checked", true);
        break;

      default:
        $("[name='" + name + "']").val(step[name]);
        break;
    }
}

$(document).ready(function () {

  // const name = [
  // ];
  $("#nkbv tbody tr td [type='checkbox']").on("click", function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
  });

  $("#nkbv tbody tr td [type='checkbox']").each(function () {
    if ($(this).is(":checked"))
      $("." + $(this).attr("id")).prop("disabled", false);
    else
      $("." + $(this).attr("id")).prop("disabled", true);
  });

  // if (sessionStorage.step3 != null) {
  //   var step3 = JSON.parse(sessionStorage.step3);
  //   name.forEach(element => putInto(step3, element));
  // }

  // $("#buttonStepNext, #buttonStepBack").click(function () {
  //   var stringJson = '';
  //   name.forEach(element => { stringJson += getPair(element) });
  //   sessionStorage.step3 = "{" + stringJson.slice(0, -1) + "}"
  // });
});