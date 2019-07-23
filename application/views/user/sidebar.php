<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('user')?>">
    <i class="fas fa-home"></i>
    <span>Trang chủ</span>
  </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
  Quản lý giám sát
</div>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-file"></i>
    <span>Biểu mẫu</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#sidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Nhiễm khuẩn bệnh viện</h6>
      <a class="collapse-item" href="<?php echo base_url('/user/new-form')?>"><i class="fas fa-file-medical mr-2"></i>Tạo mới</a>
      <a class="collapse-item" href="<?php echo base_url('/user/list-form')?>"><i class="fas fa-clipboard-list mr-2"></i>Danh sách</a>
    </div>
  </div>
</li>