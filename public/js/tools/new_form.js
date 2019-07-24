$(document).ready(function () {
  var now = new Date();
  $("#ngay_dieu_tra").val(now.getFullYear() + "-" + (("0" + (now.getMonth() + 1)).slice(-2)) + "-" + (("0" + now.getDate()).slice(-2)));

  $("#buttonStepNext").click(function () {
    var step = ($(".progress-form-step.active").attr("id")).slice(7);
    var isValid = true;
    switch (step) {
      case "1":

        $('#step1 input.form-control').blur(function () {
          if (!$(this).val()) {
            alert();
          }
        });

        if (isValid)
          $("#buttonStepBack").fadeIn(200);
        break;
      case "2":
        break;
      case "3":
        if (isValid)
          $(this).fadeOut(200, function () { $("#buttonSubmit").fadeIn(200) });
        break;
      default:
        return;
    }
    if (isValid) {
      $("#step" + eval(step) + "").fadeOut(200);
      $("#step" + eval(step + 1) + "").fadeIn(200);
      $(".progress-form-step:eq(" + eval(step - 1) + ")").removeClass("active").addClass("complete");
      $(".progress-form-step:eq(" + eval(step) + ")").removeClass("disabled").addClass("active");
    }
  });

  $("#buttonStepBack").click(function () {
    var step = ($(".progress-form-step.active").attr("id")).slice(7);
    var isValid = false;
    switch (step) {
      case "1":
        return;
      case "2":
        $(this).fadeOut(200);
        break;
      case "3":
        break;
      case "4":
        $("#buttonSubmit").fadeOut(200, function () { $("#buttonStepNext").fadeIn(200) });
        break;
    }
    if (isValid) {
      $("#step" + eval(step) + "").fadeOut(200);
      $("#step" + eval(step - 1) + "").fadeIn(200);
      $(".progress-form-step:eq(" + eval(step - 2) + ")").addClass("active").removeClass("complete");
      $(".progress-form-step:eq(" + eval(step - 1) + ")").addClass("disabled").removeClass("active");
    }
  });

});