/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:16
 */

$(document).ready(() => {

  $("input").prop("disabled", true);
  $("#buttonSubmit").remove();

	let form = JSON.parse(sessionStorage.form);
	let part = form.phau_thuat;

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
});
