/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:05:14
 */

$(document).ready(() => {

  $("input").prop("disabled", true);
  $("#buttonSubmit").remove();
  $("#xoa_khang_sinh_khong_phau_thuat").remove();
  $("#them_khang_sinh_khong_phau_thuat").remove();
  $("#modal_khang_sinh_khong_phau_thuat").remove();

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
    "khang_sinh",
    "muc_dich_su_dung"
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

  let khang_sinh_khong_phau_thuat = $("#khang_sinh_khong_phau_thuat").DataTable(config);

  if (form["khang_sinh_khong_phau_thuat"] != null)
    form["khang_sinh_khong_phau_thuat"].forEach(element => khang_sinh_khong_phau_thuat.row.add([
      element.ma_khang_sinh == null ? "" : element.ma_khang_sinh,
      element.ten_khang_sinh == null ? "" : element.ten_khang_sinh,
      element.ngaybd == null ? "" : element.ngaybd,
      element.ngaykt == null ? "" : element.ngaykt,
      element.lieu == null ? "" : element.lieu
    ]).draw(false));

  name.forEach(element => putInto(element));

  $("[name='khang_sinh'][value='1']:checked").each(() => {
    $(".khang_sinh").fadeIn(200);
    $(".khang_sinh input").removeAttr("readonly");
  });
});