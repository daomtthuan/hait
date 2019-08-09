/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-09 18:29:14
 */

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

  const name = [
    "thuoc_ucmd",
    "thuoc_steroid",
    "thuoc_loet_da_day",
    "dieu_tri_hoa_hoc",
    "dieu_tri_tia_xa",
    "truyen_mau",
    "khac_step3"
  ];

  if (sessionStorage.step3 != null) {
    var step3 = JSON.parse(sessionStorage.step3);
    name.forEach(element => putInto(step3, element));
  }

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step3 = "{" + stringJson.slice(0, -1) + "}"
  });
});