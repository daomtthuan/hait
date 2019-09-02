/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-01 18:14:27
 */

$(document).ready(() => {

	let form = JSON.parse(sessionStorage.form);
	let part = form.phau_thuat;

	if (part != null)
		$("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/7-" + part);
	else $("#buttonStepBack").attr("href", $("#buttonStepBack").attr("href") + "/6");

	function getPair(name) {
		form[name] = $("[name='" + name + "']:checked").val();
		if (form[name] == undefined) delete form[name];
	}

	function putInto(name) {
		if (form.hasOwnProperty(name))
			$("[name='" + name + "'][value='" + form[name] + "']").prop("checked", true);
	}

	let name = [
		"ket_qua_dieu_tri",
		"nam_vien"
	];

	$("[name='ket_qua_dieu_tri']").on("click", function () {
		if ($(this).val() == "5") {
			$(".ket_qua_dieu_tri").fadeIn(200);
			$(".ket_qua_dieu_tri input").removeAttr("readonly");
		}
		else {
			$(".ket_qua_dieu_tri").fadeOut(200);
			$(".ket_qua_dieu_tri input").attr("readonly", "readonly").prop("checked", false);
		}
	});

	name.forEach(element => putInto(element));
	if ($("[name='ket_qua_dieu_tri']:checked").val() == "5") {
		$(".ket_qua_dieu_tri").fadeIn(200);
		$(".ket_qua_dieu_tri input").removeAttr("readonly");
	}

	$("#buttonStepBack").click(() => {
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
				$("#success").modal("toggle");
				//sessionStorage.clear();
			},
			error: function () {
				$("#error").modal("toggle");
			}
		});

		$("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
	});

});
