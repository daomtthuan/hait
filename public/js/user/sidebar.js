/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-12 10:32:20
 */

$(document).ready(function () {
  $("#new_form").click(function (e) {
    e.preventDefault();
    var href = this.href;
    $.get(new_form, data => sessionStorage.form_id = data).done(function () {
      sessionStorage.step1 = "{}";
      sessionStorage.step2 = "{}";
      sessionStorage.step3 = "{}";
      sessionStorage.step4 = "{}";
      sessionStorage.step5 = "{}";
      sessionStorage.step6 = "{}";
      sessionStorage.step7 = "{}";
      sessionStorage.step8 = "{}";
      window.location = href;
    }).fail(function () { al });
  });
});