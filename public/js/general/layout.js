/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-04 14:22:14
 * @modify date 2019-09-04 14:22:14
 */

$(document).ready(() => {
  if (localStorage.account == undefined) {
    $.get(accountApi, account => {
      localStorage.account = JSON.stringify(account);
    }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
  }

  $("#btn-logout").click(() => localStorage.removeItem("account"));
});
