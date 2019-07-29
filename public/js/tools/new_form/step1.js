function setText(name) { sessionStorage.setItem(name, $("#" + name).val()) }
function setRadio(name) { sessionStorage.setItem(name, $("[name='" + name + "']:checked").val()) }
function getText(name) { $("#" + name).val(sessionStorage.getItem(name)) }
function getRadio(name) { $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true) }

$(document).ready(function () {

  getText("form_id");
  getText("ngay_vao_khoa");
  getText("ngay_vao_vien");
  getText("msba");
  getText("ngay_dieu_tra");
  getText("ho_ten_bn");
  getText("nam_sinh");
  getRadio("gioi_tinh");
  getText("noi_chuyen_toi");
  getText("chan_doan_luc_vao");
  getText("ngay_ra_vien");
  getText("chan_doan_xac_dinh");
  getRadio("nhiem_khuan_luc_vao");

  if ($("#ngay_dieu_tra").val() == null) {
    var now = new Date();
    $("#ngay_dieu_tra").val(now.getFullYear() + "-" + (("0" + (now.getMonth() + 1)).slice(-2)) + "-" + (("0" + now.getDate()).slice(-2)));
  }

  $("#buttonStepNext").click(function (event) {
    event.preventDefault();

    setText("form_id");
    setText("ngay_vao_khoa");
    setText("ngay_vao_vien");
    setText("msba");
    setText("ngay_dieu_tra");
    setText("ho_ten_bn");
    setText("nam_sinh");
    setRadio("gioi_tinh");
    setText("noi_chuyen_toi");
    setText("chan_doan_luc_vao");
    setText("ngay_ra_vien");
    setText("chan_doan_xac_dinh");
    setRadio("nhiem_khuan_luc_vao");

    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).closest(".form-group").offset().top }, "slow");
        return false;
      }
    });

    if (isValid) {
      if (sessionStorage.getItem("completed") == null) sessionStorage.setItem("completed", 1);
      window.location = this.href;
    }
  });

});