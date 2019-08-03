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

  if (sessionStorage.step5 != null) {
    var step5 = JSON.parse(sessionStorage.step5);
    name.forEach(element => putInto(step5, element));
  }

  $("[type='radio'][value='1']:checked").each(function () {
    $("." + $(this).attr("name")).fadeIn(200);
    $("." + $(this).attr("name") + " input").removeAttr("readonly");
  });

  $("[type='radio']").on("click", function () {
    if ($(this).val() == "1") {
      $("." + $(this).attr("name")).fadeIn(200);
      $("." + $(this).attr("name") + " input").removeAttr("readonly");
    }
    else {
      $("." + $(this).attr("name")).fadeOut(200);
      $("." + $(this).attr("name") + " input").attr("readonly", "readonly").val(null);
    }
  });

  $("#buttonStepNext, #buttonStepBack").click(function () {
    var stringJson = '';
    name.forEach(element => { stringJson += getPair(element) });
    sessionStorage.step5 = "{" + stringJson.slice(0, -1) + "}"
  });
});