/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:08
 */

$(document).ready(() => {

  $("input").prop("disabled", true);
  $("textarea").prop("disabled", true);
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

  let name = [
    "tho_may_xam_nhap",
    "dat_noi_khi_quan",
    "mo_khi_quan",
    "dat_ong_thong_tieu",
    "dat_ong_thong_tmtt",
    "duong_truyen_tmnv",
    "dat_ong_thong_da_day",
    "ngaybd_tho_may_xam_nhap",
    "ngaybd_dat_noi_khi_quan",
    "ngaybd_mo_khi_quan",
    "ngaybd_dat_ong_thong_tieu",
    "ngaybd_dat_ong_thong_tmtt",
    "ngaybd_duong_truyen_tmnv",
    "ngaybd_dat_ong_thong_da_day",
    "ngaykt_tho_may_xam_nhap",
    "ngaykt_dat_noi_khi_quan",
    "ngaykt_mo_khi_quan",
    "ngaykt_dat_ong_thong_tieu",
    "ngaykt_dat_ong_thong_tmtt",
    "ngaykt_duong_truyen_tmnv",
    "ngaykt_dat_ong_thong_da_day",
    "khac_step5"
  ];

  name.forEach(element => putInto(element));

  $("[type='radio'][value='1']:checked").each(function () {
    $("." + $(this).attr("name")).fadeIn(200);
    $("." + $(this).attr("name") + " input").removeAttr("readonly");
  });
});