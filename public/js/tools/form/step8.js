/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-09 18:29:47
 */

function getPair(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) return '"' + name + '":"' + value + '",';
  else return '';
}

function putInto(step, name) {
  if (step.hasOwnProperty(name))
    $("[name='" + name + "'][value='" + step[name] + "']").prop("checked", true);
}

$(document).ready(function () {

  var part = JSON.parse(sessionStorage.step6).phau_thuat;
  if (part != null)
    $("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/7-" + part);
  else $("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/6");

  const name = [
    "ket_qua_dieu_tri",
    "nam_vien"
  ];

  $("[name='ket_qua_dieu_tri']").on("click", function () {
    if ($(this).val() == "5") {
      $(".ket_qua_dieu_tri").fadeIn(200);
      $(".ket_qua_dieu_tri input").removeAttr("readonly");
    }
    else {
      $(".ket_qua_dieu_tri").fadeOut(200);
      $(".ket_qua_dieu_tri input").attr("readonly", "readonly").prop("checked", false);
    }
  });

  if (sessionStorage.step8 != null) {
    var step8 = JSON.parse(sessionStorage.step8);
    name.forEach(element => putInto(step8, element));
  }

  $("#buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step8 = "{" + stringJson.slice(0, -1) + "}"
  });

  $("#buttonSubmit").click(function (event) {
    event.preventDefault();

    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step8 = "{" + stringJson.slice(0, -1) + "}"

    var stringJson = '{"form_id":"' + sessionStorage.form_id + '",';
    for (var i = 1; i <= 8; i++) {
      stringJson += ('"step' + i + '":' + sessionStorage.getItem("step" + i) + ',');
    }
    stringJson = stringJson.slice(0, -1) + "}";

    $.ajax({
      url: urlUpdate,
      type: "post",
      data: stringJson,
      contentType: "application/json;charset=UTF-8",
      success: function () {
      	alert('ok');
        //$("#success").modal('toggle');
        //sessionStorage.clear();
      },
      error: function () {
        $("#error").modal('toggle');
      }
    });
  });

});
