/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:05
 */

$(document).ready(() => {

  $("input").prop("disabled", true);
  $("#buttonSubmit").remove();

  let form = JSON.parse(sessionStorage.form);
  let href = $("#buttonStepNext").attr("href").slice(0, -1) + "7-";

  if (form.hasOwnProperty("phau_thuat")) {
    $("[name='phau_thuat'][value='" + form.phau_thuat + "']").prop("checked", true);
    if ($("#co_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "1");
    else if ($("#khong_phau_thuat").is(":checked")) $("#buttonStepNext").attr("href", href + "2");
  }
});