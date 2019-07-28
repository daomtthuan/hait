$(document).ready(function () {

  getText("form_id");
  getText("ngay_vao_khoa");
  getText("ngay_vao_vien");
  getText("msba");
  if (sessionStorage.getItem("ngay_dieu_tra") == null) {
    var now = new Date();
    $("#ngay_dieu_tra").val(now.getFullYear() + "-" + (("0" + (now.getMonth() + 1)).slice(-2)) + "-" + (("0" + now.getDate()).slice(-2)));
  } else getText("ngay_dieu_tra");
  getText("ho_ten_bn");
  getText("nam_sinh");
  getRadio("gioi_tinh");
  getText("noi_chuyen_toi");
  getText("chan_doan_luc_vao");
  getText("ngay_ra_vien");
  getText("chan_doan_xac_dinh");
  getRadio("nhiem_khuan_luc_vao");

  $("#buttonStepNext").click(function () {
    var isValid = true;
    $(".invalid-feedback").each(function () {
      if ($(this).css("display") == "block") {
        isValid = false;
        $("html, body").animate({ scrollTop: $(this).parent().offset().top }, "slow")
        return;
      }
    });

    if (isValid) {
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
    }
  });

});