/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:27:17
 * @modify date 2019-08-09 18:28:24
 */

function getPair(name) {
  switch ($("[name='" + name + "']").attr("type")) {
    case "radio":
      var value = $("[name='" + name + "']:checked").val();
      if (value != undefined) return '"' + name + '":"' + value + '",';
      break;

    default:
      var value = $("[name='" + name + "']").val();
      if (value != "") return '"' + name + '":"' + value + '",';
      break;
  }
  return '';
}

function putInto(step, name) {
  if (step.hasOwnProperty(name))
    switch ($("[name='" + name + "']").attr("type")) {
      case "radio":
        $("[name='" + name + "'][value='" + step[name] + "']").prop("checked", true);
        break;

      default:
        $("[name='" + name + "']").val(step[name]);
        break;
    }
}

$(document).ready(function () {

  const name = [
    "ngay_vao_khoa",
    "ngay_vao_vien",
    "msba",
    "ngay_dieu_tra",
    "ho_ten_bn",
    "nam_sinh",
    "gioi_tinh",
    "noi_chuyen_toi",
    "chan_doan_luc_vao",
    "ngay_ra_vien",
    "chan_doan_xac_dinh",
    "nhiem_khuan_luc_vao"];

  if (sessionStorage.step1 != null) {
    var step1 = JSON.parse(sessionStorage.step1);
    name.forEach(element => putInto(step1, element));
  }

  if ($("#ngay_dieu_tra").val() == "") {
    var now = new Date();
    $("#ngay_dieu_tra").val(now.getFullYear() + "-" + (("0" + (now.getMonth() + 1)).slice(-2)) + "-" + (("0" + now.getDate()).slice(-2)));
  }

  $("#buttonStepNext").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step1 = "{" + stringJson.slice(0, -1) + "}"
  });
});