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

  const data = [
    {
      ten: 'Lê Thị Mỹ Tiên',
      nameSinh: 1960,
      ngayVaoVien: '04.12.2019 5:13',
      ngayVaoKhoa: '04.12.2019 5:13',
      du: 'x',
      koDu: '',
    },
    {
      ten: 'Nguyễn Văn Bởi',
      nameSinh: 1958,
      ngayVaoVien: '04.12.2019 7:02',
      ngayVaoKhoa: '04.12.2019 7:02',
      du: 'x',
      koDu: '',
    },
    {
      ten: 'Nguyễn Thanh Bình',
      nameSinh: 1955,
      ngayVaoVien: '04.12.2019 7:13',
      ngayVaoKhoa: '04.12.2019 7:13',
      du: 'x',
      koDu: '',
    },
  ];

  let list = $('#list').DataTable({
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

  data.forEach((element, index) => {
    list.row.add([index + 1, element.ten, element.nameSinh, element.ngayVaoVien, element.ngayVaoKhoa, element.du, element.koDu]).draw(true);
  });
});
