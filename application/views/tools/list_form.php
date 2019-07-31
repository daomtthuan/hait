<script>
  var edit = "<?php echo base_url('user/edit-form') ?>", json = "<?php echo base_url('ajax/formList') ?>"
</script>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã Form</th>
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

<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<script defer src="<?php echo base_url('public/js/general/theme.min.js') ?>"></script>
<script defer src="<?php echo base_url('public/js/tools/list_form.js') ?>"></script>