/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-15 00:32:15
 */

var edit = function (id) {
  $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
  $.getJSON(formApi + id, form => {
    sessionStorage.form = form;
    location = formUrl;
  });
}

$(document).ready(function () {

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  var list = $('#list').DataTable({
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
  });

  $.getJSON(listApi, data => {
    data.forEach(element => {
      var tool = "";
      switch (element.status) {
        case "unfinished":
          tool = `
          <div class="text-center">
          <a id-form="`+ element.form_id + `" class="btn-finish btn btn-primary btn-sm" href="#"><i class="fas fa-check"></i></a>
          <a id-form="`+ element.form_id + `" class="btn-edit btn btn-secondary btn-sm" href="#" onclick="edit(` + element.form_id + `)"><i class="fas fa-pen"></i></a>
          <a id-form="`+ element.form_id + `" class="btn-delete btn btn-danger btn-sm" href="#"><i class="fas fa-trash-alt"></i></a>
          </div>`;
          break;

        case "verifying":
          tool = `<a id="` + element.form_id + `" class="btn-view btn btn-secondary btn-sm" href=""><i class="fas fa-eye"></i></a>`;
          break;
        case "verified":
          tool = `<a id="` + element.form_id + `" class="btn-view btn btn-secondary btn-sm" href=""><i class="fas fa-eye"></i></a>`;
          break;
      }

      list.row.add([
        element.date_create,
        element.msba,
        element.ho_ten_bn,
        element.nam_sinh,
        tool
      ]).draw(true);
    });
  }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
});