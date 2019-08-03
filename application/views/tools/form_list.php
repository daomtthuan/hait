<script>
  var edit = "<?php echo base_url('user/form-edit') ?>", json = "<?php echo base_url('ajax/form-list') ?>";
</script>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Mã số bệnh án</th>
      <th scope="col">Họ tên bệnh nhân</th>
      <th scope="col">Năm sinh</th>
      <th scope="col">Chuẩn đoán xác định</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<script defer src="<?php echo base_url('public/js/tools/form_list.js') ?>"></script>