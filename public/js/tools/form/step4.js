/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-01 17:37:01
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
    "ho_hap_man_tinh",
    "gan_man_tinh",
    "tim_mach",
    "hiv_aids",
    "ung_thu",
    "tieu_duong",
    "than_man_tinh",
    "da_chan_thuong",
    "bong",
    "cao_huyet_ap",
    "khac_step4"
  ];

  name.forEach(element => putInto(element));

  $("#buttonStepNext, #buttonStepBack").click(function () {
    name.forEach(element => getPair(element));
    sessionStorage.form = JSON.stringify(form);

    $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  });

  $("#buttonSubmit").click(() => {

		name.forEach(element => getPair(element));
		sessionStorage.form = JSON.stringify(form);

		let data = form;
		data.danh_sach_khang_sinh = [];
		data.stringJSON = JSON.stringify(form);
		[
			"vp_khang_sinh",
			"nktn_khang_sinh",
			"nkh_khang_sinh",
			"nkvm_khang_sinh",
			"khang_sinh_truoc_phau_thuat",
			"khang_sinh_du_phong",
			"khang_sinh_sau_phau_thuat",
			"khang_sinh_khong_phau_thuat"
		].forEach(list => {
			if (data.hasOwnProperty(list)) {
				data[list].forEach(element => data.danh_sach_khang_sinh.push(element));
				delete data[list];
			}
		});

		$.ajax({
			url: updateUrl,
			type: "post",
			data: JSON.stringify(data),
			contentType: "application/json;charset=UTF-8",
			success: function () {
				alert("Lưu thành công");
			},
			error: function () {
				alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục");
			}
		});
	});
});