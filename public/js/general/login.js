/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-02 21:31:17
 * @modify date 2019-09-02 21:31:35
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
      data: JSON.stringify(account),
      contentType: "application/json;charset=UTF-8",
      success: function (data) {
        alert(data);
      },
      error: function () {
        alert("Fail");
      }
    });
  });
});