$(document).ready(function () {

  $("#buttonStepNext").click(function () {
    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop:$(this).closest(".form-group").offset().top }, "slow")
        return;
      }
    });

    if (isValid) {
      window.location.href = urlNext;
    }
  });

  $("#buttonStepBack").click(function () {
      window.location.href = urlBack;
  });

});