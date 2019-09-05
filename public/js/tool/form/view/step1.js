/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:27:17
 * @modify date 2019-09-04 03:09:58
 */

$(document).ready(() => {

  $("input").prop("disabled", true);
  $("#buttonSubmit").remove();

  let form = JSON.parse(sessionStorage.form);

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

  let account = JSON.parse(localStorage.account);
  $("#company_name").val(account.company_name);
  $("#room_name").val(account.room_name);
  $("#company_name").val(account.company_name);

  let name = [
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

  name.forEach(element => putInto(element));
});