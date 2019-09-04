/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-04 07:28:31
 * @modify date 2019-09-04 07:28:31
 */

$(document).ready(() => {
  $.get(
    accountApi,
    account => Object.keys(account).forEach(element => $("[name='" + element + "']").val(account[element]))).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
});