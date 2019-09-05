/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:16
 */

$(document).ready(() => {

	$("#main input").prop("disabled", true);

	let form = JSON.parse(sessionStorage.form);
	let part = form.phau_thuat;

	if (!form.hasOwnProperty("nhiem_khuan_benh_vien"))
		$("#buttonSubmit").text("Duyệt").removeClass("d-none");
	else
		$("#buttonSubmit").remove();

	if (part != null)
		$("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/7-" + part);
	else $("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/6");

	function putInto(name) {
		if (form.hasOwnProperty(name))
			$("[name='" + name + "'][value='" + form[name] + "']").prop("checked", true);
	}

	let name = [
		"ket_qua_dieu_tri",
		"nam_vien"
	];

	name.forEach(element => putInto(element));
	if ($("[name='ket_qua_dieu_tri']:checked").val() == "5") {
		$(".ket_qua_dieu_tri").fadeIn(200);
		$(".ket_qua_dieu_tri input").removeAttr("readonly");
	}


	$("#buttonSubmit").removeClass("d-none").click(() => {

		$("#modalNKBV").modal("show");
		// name.forEach(element => getPair(element));
		// sessionStorage.form = JSON.stringify(form);

		// let data = form;
		// data.danh_sach_khang_sinh = [];
		// data.stringJSON = JSON.stringify(form);
		// [
		// 	"vp_khang_sinh",
		// 	"nktn_khang_sinh",
		// 	"nkh_khang_sinh",
		// 	"nkvm_khang_sinh",
		// 	"khang_sinh_truoc_phau_thuat",
		// 	"khang_sinh_du_phong",
		// 	"khang_sinh_sau_phau_thuat",
		// 	"khang_sinh_khong_phau_thuat"
		// ].forEach(list => {
		// 	if (data.hasOwnProperty(list)) {
		// 		data[list].forEach(element => data.danh_sach_khang_sinh.push(element));
		// 		delete data[list];
		// 	}
		// });

		// $.ajax({
		// 	url: updateApi,
		// 	type: "post",
		// 	data: JSON.stringify(data),
		// 	contentType: "application/json;charset=UTF-8",
		// 	success: function () {
		// 		alert("Lưu thành công");
		// 	},
		// 	error: function () {
		// 		alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục");
		// 	}
		// });
	});
});
