<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  const updateApi = "<?php echo base_url('ajax/form/update')?>";
</script>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url($role)?>">
    <i class="fas fa-home"></i>
    <span>Trang chủ</span>
  </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
  Quản trị
</div>
<div class="sidebar-heading d-none d-md-bock">
  Nhiễm khuẩn bệnh viện
</div>
<div class="sidebar-heading d-md-none">
  NKBV
</div>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
    <i class="fas fa-file"></i>
    <span>Biểu mẫu</span>
  </a>
  <div id="collapseForm" class="collapse" aria-labelledby="headingTwo" data-parent="#sidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header text-gray-700">Nhiễm khuẩn bệnh viện</h6>
      <a id="list-form" class="collapse-item text-dark" href="<?php echo base_url($role.'/list-form')?>"><i class="fas fa-clipboard-list mr-2"></i>Danh sách</a>
    </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnalysis" aria-expanded="true" aria-controls="collapseAnalysis">
    <i class="far fa-chart-bar"></i>
    <span>Thống kê</span>
  </a>
  <div id="collapseAnalysis" class="collapse" aria-labelledby="headingTwo" data-parent="#sidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header text-gray-700">Nhiễm khuẩn bệnh viện</h6>
      <a id="list-form" class="collapse-item text-dark" href="<?php echo base_url($role.'/list-nkbv')?>"><i class="fas fa-clipboard-list mr-2"></i>Danh sách</a>
    </div>
  </div>
</li>
<script defer src="<?php echo base_url('public/js/admin/sidebar.js') ?>"></script>