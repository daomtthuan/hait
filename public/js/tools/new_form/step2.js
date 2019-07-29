function setText(name) { sessionStorage.setItem(name, $("#" + name).val()) }
function setRadio(name) { sessionStorage.setItem(name, $("[name='" + name + "']:checked").val()) }
function getText(name) { $("#" + name).val(sessionStorage.getItem(name)) }
function getRadio(name) { $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true) }

$(document).ready(function () {

  

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();



    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == 1) sessionStorage.setItem("completed", 2);
      window.location = this.href;
    }
  });

  $("#buttonStepBack").click(function () {
  });

});