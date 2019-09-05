/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-04 00:04:44
 */

$(document).ready(function () {

  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  let list = $('#list').DataTable({
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

  function show(type) {

    if (list.data().count()) list.clear().draw(true);

    $.getJSON(listApi + type, data => {
      data.forEach(element => {
        let tool = "";
        switch (element.status) {
          case "unfinished":
            tool =
              `<div class="text-center">
                <button id-form="` + element.form_id + `" class="btn-view btn btn-secondary btn-sm my-1" href=""><i class="fas fa-eye"></i></button>
              </div>`;
            break;

          case "verifying":
            tool =
              `<div class="text-center">
                <button id-form="`+ element.form_id + `" class="btn-view btn btn-primary btn-sm my-1""><i class="fas fa-check"></i></button>
              </div>`;
            break;
          case "verified":
            tool =
              `<div class="text-center">
                <button id-form="` + element.form_id + `" class="btn-view btn btn-secondary btn-sm my-1" href=""><i class="fas fa-eye"></i></button>
              </div>`;
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
    }).done(() => {

      $(".btn-verify").click(function () {
        let element = $(this);
        $.get(statusApi + element.attr("id-form") + "/verified", () => {
          list.row(element.closest("tr")).remove().draw(true);
          alert("Duyệt thành công");
        }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
      });

      $(".btn-view").click(function () {
        $("#main").html('<div class="d-flex justify-content-center mt-5"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"><h3>Đang tải...</span></div></h3></div>');
        $.getJSON(formApi + $(this).attr("id-form"), form => sessionStorage.form = form).done(() => {
          location = viewUrl;
          $("#modalNewForm").modal("hide");
        }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
      });

    }).fail(() => alert("Đã có lỗi xảy ra. Vui lòng liên hệ Bộ phận hỗ trợ để khắc phục"));
  }

  $(".btn-show").click(function () {
    $(".btn-show").removeClass("btn-primary").addClass("btn-secondary");
    $(this).addClass("btn-primary").removeClass("btn-secondary");
    show($(this).attr("id"));
  });

  $("#verifying").click();
});