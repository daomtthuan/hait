<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện</title>
	<meta name="author" content="Dao Minh Trung Thuan">
	<meta name="keywords" content="hait, bệnh viện, nhiễm khuẩn, hệ thống quản lý, giám sát, hệ thống quản lý giám sát nhiễm khuẩn,hệ thống quản lý giám sát nhiễm khuẩn bệnh viện, daomtthuan, dao minh trung thuan">
	<meta name="description" content="HAIT - Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link type="image/x-icon" rel="shortcut icon" href="<?php echo base_url('./public/img/logoicon.ico') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous">
	<link href="<?php echo base_url('public/css/theme.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/custom.css') ?>" rel="stylesheet">
	<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
	<script defer src="<?php echo base_url('public/js/general/theme.min.js') ?>"></script>
</head>

<body id="page-top">
	<div id="wrapper">
		<ul id="sidebar" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion transition">
			<li>
				<div class="sidebar-brand d-flex align-items-center justify-content-center">
					<div class="sidebar-brand-icon">
						<img id="logo" src="<?php echo base_url('public/img/logo.png') ?>" width="33" height="33" alt="">
					</div>
					<div class="sidebar-brand-text mx-3 cursor-default">HAIT</div>
				</div>
			</li>
			<hr class="sidebar-divider my-0">
			<?php $this->load->view($role.'/sidebar') ?>
			<hr class="sidebar-divider d-none d-md-block">
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<div id="content-wrapper" class="d-flex flex-column bg-light">
			<div id="content">
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<button id="sidebarToggleTop" class="btn btn-primary d-md-none mr-3">
						<i class="fas fa-bars"></i>
					</button>

					<div class="nav-item font-weight-bold text-primary ellipsis cursor-default">
						<?php echo $page_title ?>
					</div>

					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!--
									<span class="badge badge-danger badge-counter">3+</span>
								-->
							</a>
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in rounded-0" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Thông báo
								</h6>
								<!--
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-primary">
											<i class="fas fa-file-alt text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 12, 2019</div>
										<span class="font-weight-bold">A new monthly report is ready to download!</span>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-success">
											<i class="fas fa-donate text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 7, 2019</div>
										$290.29 has been deposited into your account!
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-warning">
											<i class="fas fa-exclamation-triangle text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 2, 2019</div>
										Spending Alert: We've noticed unusually high spending for your account.
									</div>
								</a>
								-->
								<a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url($role.'/alert')?>">Xem tất cả</a>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle text-primary" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<h3 class="mb-0"><i class="fas fa-user-circle"></i></h3>
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?php echo base_url($role.'/information')?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-500"></i>
									Thông tin tài khoản
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-500"></i>
									Cài đặt
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-phone fa-sm fa-fw mr-2 text-gray-500"></i>
									Liên hệ hỗ trợ
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-comments fa-sm fa-fw mr-2 text-gray-500"></i>
									Góp ý phản hồi
								</a>
								<div class="dropdown-divider"></div>
								<a id="themeDark" class="dropdown-item cursor-pointer disabled">
									<i id="toggleTheme" class="fas fa-toggle-off mr-2 text-gray-500"></i>
									Giao diện tối <small>(sắp có)</small>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500"></i>
									Đănng xuất
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<main id="main" class="container-fluid bg-light text-gray-700">
					<?php $this->load->view($main) ?>
				</main>
			</div>
			<footer class="sticky-footer bg-white mt-3">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<h6><small>Phiên bản 1.0.0</small><br><span>Copyright &copy; Daomtthuan 2019</span></h6>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-primary" id="modal-label">Thông báo</h5>
				</div>
				<div class="modal-body">Bạn có chắc muốn đăng xuất?</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>
					<a class="btn btn-primary" href="<?php echo base_url('logout') ?>">Đăng xuất</a>
				</div>
			</div>
		</div>
	</div>
	<script>
    const accountApi = "<?php echo base_url('ajax/auth/account') ?>";
  </script>
</body>

</html>