/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:00
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
    "thuoc_ucmd",
    "thuoc_steroid",
    "thuoc_loet_da_day",
    "dieu_tri_hoa_hoc",
    "dieu_tri_tia_xa",
    "truyen_mau",
    "khac_step3"
  ];

  name.forEach(element => putInto(element));
});