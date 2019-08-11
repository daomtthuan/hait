/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-09 18:29:19
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
    "ho_hap_man_tinh",
    "gan_man_tinh",
    "tim_mach",
    "hiv_aids",
    "ung_thu",
    "tieu_duong",
    "than_man_tinh",
    "da_chan_thuong",
    "bong",
    "cao_huyet_ap",
    "khac_step4"
  ];

  if (sessionStorage.step4 != null) {
    var step4 = JSON.parse(sessionStorage.step4);
    name.forEach(element => putInto(step4, element));
  }

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step4 = "{" + stringJson.slice(0, -1) + "}"
  });
});