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
      <h6 class="collapse-header text-gray-700">Biểu mẫu khảo sát</h6>
      <a class="collapse-item text-dark" href="<?php echo base_url($role.'/new-form/1')?>"><i class="fas fa-file-medical mr-2"></i>Tạo mới</a>
      <a class="collapse-item text-dark" href="<?php echo base_url($role.'/list-form')?>"><i class="fas fa-clipboard-list mr-2"></i>Danh sách</a>
    </div>
  </div>
</li>

