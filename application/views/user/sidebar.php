<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  const
    formUrl = "<?php echo base_url($role.'/form/1') ?>",
    newApi = "<?php echo base_url('ajax/form/create')?>",
    updateApi = "<?php echo base_url('ajax/form/update')?>";
</script>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url($role)?>">
    <i class="fas fa-home"></i>
    <span>Trang chủ</span>
  </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading d-none d-md-bock">
  Nhiễm khuẩn bệnh viện
</div>
<div class="sidebar-heading d-md-none">
  NKBV
</div>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-file"></i>
    <span>Biểu mẫu</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#sidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header text-gray-700">Nhiễm khuẩn bệnh viện</h6>
      <a id="new-form" class="collapse-item text-dark" href="#" data-toggle="modal" data-target="#modalNewForm"><i class="fas fa-file-medical mr-2"></i>Tạo mới</a>
      <a id="list-form" class="collapse-item text-dark" href="<?php echo base_url($role.'/list-form/unfinished')?>"><i class="fas fa-clipboard-list mr-2"></i>Danh sách</a>
    </div>
  </div>
</li>
<div class="modal fade" id="modalNewForm" tabindex="-1" role="dialog" aria-labelledby="modalNewFormLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalNewFormLabel">Tạo mới biểu mẫu</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="form-group">
          <label class="text-dark" for="new_msba">Mã bệnh án</label>
          <input id="new_msba" name="new_msba" type="text" class="form-control ellipsis" required>
          <div class="invalid-feedback">Vui lòng nhập Mã bệnh án</div>
        </div>
        <div class="form-group">
          <label class="text-dark" for="new_ho_ten_bn">Họ tên người bệnh</label>
          <input id="new_ho_ten_bn" name="new_ho_ten_bn" type="text" class="form-control ellipsis" required>
          <div class="invalid-feedback">Vui lòng nhập Họ tên người bệnh</div>
        </div>
        <div class="form-group">
          <label class="text-dark" for="new_nam_sinh">Năm sinh</label>
          <input id="new_nam_sinh" name="new_nam_sinh" type="number" class="form-control ellipsis" required>
          <div class="invalid-feedback">Vui lòng nhập Năm sinh người bệnh</div>
        </div>
        <div class="form-group">
          <div class="text-dark cursor-default">Giới tính</div>
          <div class="custom-control custom-radio">
            <input type="radio" id="new_gioi_tinh_nam" name="new_gioi_tinh" class="custom-control-input" value="1" required>
            <label class="custom-control-label" for="new_gioi_tinh_nam">Nam</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="new_gioi_tinh_nu" name="new_gioi_tinh" class="custom-control-input" value="0" required>
            <label class="custom-control-label" for="new_gioi_tinh_nu">Nữ</label>
            <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn giới tính người bệnh</div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" id="resetNewForm" class="btn btn-secondary">Đóng</button>
        <button type="submit" id="submitNewForm" class="btn btn-primary">Tạo mới</button>
      </div>
    </form>
  </div>
</div>
<script defer src="<?php echo base_url('public/js/user/sidebar.js') ?>"></script>