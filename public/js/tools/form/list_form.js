/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-08-15 00:32:15
 */

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

  $.getJSON(listUrl, data => {
    data.forEach(element => {
      var tool = "";
      switch (element.status) {
        case "unfinished":
          tool = `
          <a id="`+ element.form_id +`" class="btn-finish btn btn-primary btn-sm" href=""><i class="fas fa-check"></i></a>
          <a id="`+ element.form_id +`" class="btn-edit btn btn-secondary btn-sm" href="`+ editUrl + `"><i class="fas fa-pen"></i></a>
          <a id="`+ element.form_id +`" class="btn-delete btn btn-danger btn-sm" href=""><i class="fas fa-trash-alt"></i></a>`;
          break;

        case "verifying":
          tool = `<a id="`+ element.form_id +`" class="btn-view btn btn-secondary btn-sm" href=""><i class="fas fa-eye"></i></a>`;
          break;
        case "verified":
          tool = `<a id="`+ element.form_id +`" class="btn-view btn btn-secondary btn-sm" href=""><i class="fas fa-eye"></i></a>`;
          break;
      }

      list.row.add([
        element.date_create,
        element.msba,
        element.ho_ten_bn,
        element.nam_sinh,
        element.chan_doan_xac_dinh,
        tool
      ]).draw(true);
    });
  });
});