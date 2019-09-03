/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-02 21:31:17
 * @modify date 2019-09-02 23:12:32
 */

$(document).ready(() => {
  $("#buttonLogin").click(function (e) {
    e.preventDefault();
    let account = {
      mail: $("#inputUsername").val(),
      password: $("#inputPassword").val(),
      remember: true
    };
    $.ajax({
      url: loginUrl,
      type: "post",
      data: account,
      success: role => {
        if (role == "admin") {
          role = "user";
          account.role = role;
          sessionStorage.account = JSON.stringify(account);
          location = baseUrl + account.role;
        }
      },
      error: () => alert("Đăng nhập không thành công")
    });
  });
});
