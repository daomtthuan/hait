/**
 * @author Daomtthuan
 * @email dao.mt.thuan@gmail.com
 * @create date 2019-08-09 18:28:32
 * @modify date 2019-09-06 00:32:44
 */

$(document).ready(function () {
  $('.dataTables_wrapper>:first-child>div').attr('class', 'col-sm-12 col-lg-6');
  $('.dataTables_length label select').addClass('ml-1');
  $('.dataTables_filter label input').addClass('ml-2');

  const data = {
    total: [
      {
        content: 'Bệnh nhân có mặt tại khoa vào ngày điều tra',
        value: 26,
      },
      {
        content: 'Bệnh nhân đủ tiêu chuẩn điều tra',
        value: 0,
      },
      {
        content: 'Bệnh nhân NKBV',
        value: 0,
      },
    ],
    detail: [
      {
        content: 'Nhiễm khuẩn hô hấp',
        value: 0,
      },
      {
        content: 'Nhiễm khuẩn tiết niệu',
        value: 0,
      },
      {
        content: 'Nhiễm khuẩn vết mổ',
        value: 0,
      },
      {
        content: 'Nhiễm khuẩn tiêu hóa',
        value: 0,
      },
      {
        content: 'Nhiễm khuẩn da, mô mềm',
        value: 0,
      },
      {
        content: 'Nhiễm khuẩn khác (ghi rõ)',
        value: 0,
      },
    ],
  };

  let list1 = $('#list-total').DataTable({
    language: {
      decimal: '',
      emptyTable: 'Không có dữ liệu',
      info: 'Hiển thị từ _START_ đến _END_ trong _TOTAL_ dòng',
      infoEmpty: '',
      infoFiltered: '(được lọc ra từ _MAX_ dòng)',
      infoPostFix: '',
      thousands: ',',
      lengthMenu: 'Số dòng hiển thị _MENU_',
      loadingRecords: 'Đang tải...',
      processing: 'Đang xử lý...',
      search: 'Tìm kiếm',
      zeroRecords: 'Không tìm thấy',
      paginate: {
        first: 'Đầu tiên',
        last: 'Cuối cùng',
        next: 'Kế tiếp',
        previous: 'Trở về',
      },
      aria: {
        sortAscending: ': sắp xếp tăng dần',
        sortDescending: ': sắp xếp giảm dần',
      },
    },
  });

  let list2 = $('#list-detail').DataTable({
    language: {
      decimal: '',
      emptyTable: 'Không có dữ liệu',
      info: 'Hiển thị từ _START_ đến _END_ trong _TOTAL_ dòng',
      infoEmpty: '',
      infoFiltered: '(được lọc ra từ _MAX_ dòng)',
      infoPostFix: '',
      thousands: ',',
      lengthMenu: 'Số dòng hiển thị _MENU_',
      loadingRecords: 'Đang tải...',
      processing: 'Đang xử lý...',
      search: 'Tìm kiếm',
      zeroRecords: 'Không tìm thấy',
      paginate: {
        first: 'Đầu tiên',
        last: 'Cuối cùng',
        next: 'Kế tiếp',
        previous: 'Trở về',
      },
      aria: {
        sortAscending: ': sắp xếp tăng dần',
        sortDescending: ': sắp xếp giảm dần',
      },
    },
  });

  data.total.forEach((element) => {
    list1.row.add([element.content, element.value]).draw(true);
  });

  data.detail.forEach((element) => {
    list2.row.add([element.content, element.value]).draw(true);
  });
});
