/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-01 17:36:51
 */

$(document).ready(() => {

  let form = JSON.parse(sessionStorage.form);

  function getPair(name) {
    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        form[name] = $("[name='" + name + "']:checked").val();
        break;

      default:
        form[name] = $("[name='" + name + "']").val();
        break;
    }

    if (form[name] == "" || form[name] == undefined) delete form[name];
  }

  function putInto(name) {
    if (form.hasOwnProperty(name))
      switch ($("[name='" + name + "']").attr("type")) {
        case "radio":
          $("[name='" + name + "'][value='" + form[name] + "']").prop("checked", true);
          break;

        default:
          $("[name='" + name + "']").val(form[name]);
          break;
      }
  }

  let name = [
    "thuoc_ucmd",
    "thuoc_steroid",
    "thuoc_loet_da_day",
    "dieu_tri_hoa_hoc",
    "dieu_tri_tia_xa",
    "truyen_mau",
    "khac_step3"
  ];

  name.forEach(element => putInto(element));

  $("#buttonStepNext, #buttonStepBack").click(function () {
    name.forEach(element => getPair(element));
    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });
});