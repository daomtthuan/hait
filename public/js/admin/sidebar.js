/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:33
 */

$(document).ready(() => {
  $("#new-form").click(function (e) {
    e.preventDefault();
    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');

    let href = this.href;
    let form = {};
    $.get(updateApi, data => form.form_id = data).done(() => {
      sessionStorage.form = JSON.stringify(form);
      location = href;
    }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
  });
});