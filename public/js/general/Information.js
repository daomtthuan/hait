/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-04 07:28:31
 * @modify date 2019-09-04 07:28:31
 */

$(document).ready(() => {
  if (localStorage.account == undefined) {
    $.get(accountApi, account => {
      localStorage.account = JSON.stringify(account);
      Object.keys(account).forEach(element => $("[name='" + element + "']").val(account[element]));
    }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
  }
  else {
    let account = JSON.parse(localStorage.account);
    Object.keys(account).forEach(element => $("[name='" + element + "']").val(account[element]));
  }
});