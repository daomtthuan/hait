/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:22:44
 */

$(document).ready(() => {
  $("#resetNewForm").click(() => $("#modalNewForm").modal("hide"));

  $("#submitNewForm").click(function (e) {
    e.preventDefault();

    let form = {};
    form.msba = $("[name='new_msba']").val();
    form.ho_ten_bn = $("[name='new_ho_ten_bn']").val();
    form.nam_sinh = $("[name='new_nam_sinh']").val();
    form.gioi_tinh = $("[name='new_gioi_tinh']:checked").val();

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');

    $.get(newApi, id => form.form_id = id).done(() => {

      form.stringJSON = JSON.stringify(form);

      $.ajax({
        url: updateApi,
        type: "post",
        data: JSON.stringify(form),
        contentType: "application/json;charset=UTF-8",
        success: () => {
          delete form.stringJSON;
          sessionStorage.form = JSON.stringify(form);
          location = formUrl;
        },
        error: function () {
          alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục");
        }
      });
    }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
  });
});