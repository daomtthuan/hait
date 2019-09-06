/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:04:57
 */

$(document).ready(() => {

	$("#main input").prop("disabled", true);
  $("#main textarea").prop("disabled", true);
  $("#buttonSubmit").remove();

  let form = JSON.parse(sessionStorage.form);

  function putInto(name) {
    if (form.hasOwnProperty(name))
      switch ($("[name='" + name + "']").attr("type")) {
        case "radio":
          $("[name='" + name + "'][value='" + form[name] + "']").prop("checked", true);
          break;

        default:
          $("[name='" + name + "']").val(form[name]);
          break;
      }
  }

  let name = [
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

  name.forEach(element => putInto(element));
});