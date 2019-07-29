function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
}

$(document).ready(function () {

  getRadio("ket_qua_dieu_tri");
  getRadio("nam_vien");

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

  $("#buttonSubmit").click(function (event) {
    event.preventDefault();

    setRadio("ket_qua_dieu_tri");
    setRadio("nam_vien");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 7) sessionStorage.setItem("completed", 8);

      function toStringPartJson(name) {
        var value = sessionStorage.getItem(name);
        if (value != null) return "\"" + name + "\":\"" + value + "\",";
        else return "";
      }

      var stringJson = "\"form_id\":null,";
      for (var i = 0; i < sessionStorage.length; i++) stringJson += toStringPartJson(sessionStorage.key(i));
      stringJson = "{" + stringJson.slice(0, -1) + "}"

      // TODO gửi file json form này cho server
      var form = JSON.parse(stringJson);
    }
  });

  $("#buttonStepBack").click(function () {
    setRadio("ket_qua_dieu_tri");
    setRadio("nam_vien");
  });

});