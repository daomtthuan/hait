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
    setRadio("ket_qua_dieu_tri");
    setRadio("nam_vien");

    function toStringPartJson(name) {
      var value = sessionStorage.getItem(name);
      return '"' + name + '":"' + value + '\",';
    }

    var stringJson = '';
    for (var i = 0; i < sessionStorage.length; i++) stringJson += toStringPartJson(sessionStorage.key(i));
    stringJson = '{' + stringJson.slice(0, -1) + '}';
    $.ajax({
      url: urlUpdate,
      type: "post",
      data: stringJson,
      contentType: "application/json;charset=UTF-8",
      success: function (data) { console.log("ss" + data) },
      error: function (data) { console.log("fail" + data) }
    });
  });

});