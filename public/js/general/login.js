/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-09-02 21:31:17
 * @modify date 2019-09-02 21:31:35
 */

$(document).ready(() => {
  $("#buttonLogin").click(function (e) {
    e.preventDefault();
    $.ajax({
      url: loginUrl,
      type: "post",
      data: {
        "mail": $("#inputUsername").val(),
        "password": $("#inputPassword").val(),
        "remember": "true"
      },
      success: function (data, textStatus, jQxhr) {
        //alert(xhr.getResponseHeader("Content-Type"));
        //alert(xhr.getAllResponseHeaders());
		  alert(data);
      },
      error: function () {
        alert("Fail");
      }
    });
  });
});
