/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:10
 */

$(document).ready(() => {

  $("#main input").prop("disabled", true);
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

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  let name = [
    "vi_tri_phau_thuat",
    "ngay_phau_thuat",
    "loai_phau_thuat",
    "implant",
    "phau_thuat_noi_soi",
    "thoi_gian",
    "diem_asa",
    "loai_vet_mo",
    "gay_me",
    "gay_te",
    "dan_luu",
    "nkvm",
    "dan_luu_tai_vm",
    "dan_luu_ngoai_vm",
    "dan_luu_kin",
    "so_ngay_dat_dan_luu",
    "loai_nhiem_khuan_vm",
    "bieu_hien_sot",
    "bieu_hien_do",
    "bieu_hien_sung",
    "bieu_hien_dau",
    "phau_thuat_lai",
    "dich_vet_mo",
    "toac_vet_mo_tu_nhien",
    "chu_dong_mo_vm",
    "chay_mu",
    "trieu_chung_chi_diem"
  ];

  let tableName = [
    "khang_sinh_truoc_phau_thuat",
    "khang_sinh_du_phong",
    "khang_sinh_sau_phau_thuat"
  ];

  let config = {
    "language": {
      "decimal": "",
      "emptyTable": "Không có dữ liệu",
      "info": "Hiển thị từ _START_ đến _END_ trong _TOTAL_ dòng",
      "infoEmpty": "",
      "infoFiltered": "(được lọc ra từ _MAX_ dòng)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Số dòng hiển thị _MENU_",
      "loadingRecords": "Đang tải...",
      "processing": "Đang xử lý...",
      "search": "Tìm kiếm",
      "zeroRecords": "Không tìm thấy",
      "paginate": {
        "first": "Đầu tiên",
        "last": "Cuối cùng",
        "next": "Kế tiếp",
        "previous": "Trở về"
      },
      "aria": {
        "sortAscending": ": sắp xếp tăng dần",
        "sortDescending": ": sắp xếp giảm dần"
      }
    }
  };

  let table = [
    $("#khang_sinh_truoc_phau_thuat").DataTable(config),
    $("#khang_sinh_du_phong").DataTable(config),
    $("#khang_sinh_sau_phau_thuat").DataTable(config)
  ];

  if (form[tableName[0]] != null)
    form[tableName[0]].forEach(element => table[0].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (form[tableName[1]] != null)
    form[tableName[1]].forEach(element => table[1].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.lieu1 == null ? "" : element.lieu1,
      element.lieu2 == null ? "" : element.lieu2,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));
  if (form[tableName[2]] != null)
    form[tableName[2]].forEach(element => table[2].row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));

  name.forEach(element => putInto(element));

  $(".step-option [type='radio'][value='1']:checked").each(function () {
    $("." + $(this).attr("name")).fadeIn(200);
    $("." + $(this).attr("name") + " input").removeAttr("readonly");
    $("." + $(this).attr("name") + " textarea").removeAttr("readonly");
  });

  tableName.forEach(element => {
    $("#modal_" + element).remove();
    $("#them_" + element).remove();
    $("#xoa_" + element).remove();
  });
});