$(document).ready(function () {
  var now = new Date();

  $("#ngay_dieu_tra").val(now.getFullYear() + "-" + (("0" + (now.getMonth() + 1)).slice(-2)) + "-" + (("0" + now.getDate()).slice(-2)));

  $("#buttonStepNext").click(function () {
    var step = ($(".progress-form-step.active").attr("id")).slice(7);
    var isValid = true;
    $("#step" + step + " .invalid-feedback").each(function () {
      if ($(this).css("display") == "block") { isValid = false; return; }
    });
    if (isValid) {
      if (step == "1") $("#buttonStepBack").fadeIn(200);
      else if (step == "10") $(this).fadeOut(200, function () { $("#buttonSubmit").fadeIn(200) });
      $("#step" + eval(step) + "").fadeOut(200);
      $("#step" + eval(step + 1) + "").fadeIn(200);
      $(".progress-form-step:eq(" + eval(step - 1) + ")").removeClass("active").addClass("complete");
      $(".progress-form-step:eq(" + eval(step) + ")").removeClass("disabled").addClass("active");
    }
  });

  $("#buttonStepBack").click(function () {
    var step = ($(".progress-form-step.active").attr("id")).slice(7);
    if (step == "1") return;
    else if (step == "2") $(this).fadeIn(200);
    else if (step == "10") $("#buttonSubmit").fadeOut(200, function () { $("#buttonStepNext").fadeIn(200) });
    $("#step" + eval(step) + "").fadeOut(200);
    $("#step" + eval(step - 1) + "").fadeIn(200);
    $(".progress-form-step:eq(" + eval(step - 2) + ")").addClass("active").removeClass("complete");
    $(".progress-form-step:eq(" + eval(step - 1) + ")").addClass("disabled").removeClass("active");
  });

});