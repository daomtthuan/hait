<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  const updateApi = "<?php echo base_url('ajax/update-form')?>";
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalNewFormLabel">Tạo mới biểu mẫu</h5>
      </div>
      <div class="modal-body">
        <form>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button id="submitNewForm" type="button" class="btn btn-primary">Tạo mới</button>
      </div>
    </div>
  </div>
</div>
<script defer src="<?php echo base_url('public/js/user/sidebar.js') ?>"></script>