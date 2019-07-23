<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện</title>
  <meta name="author" content="Nguyen Phuc Duy, Dao Minh Trung Thuan">
  <meta name="keywords" content="hait, bệnh viện, nhiễm khuẩn, hệ thống quản lý, giám sát, hệ thống quản lý giám sát nhiễm khuẩn,hệ thống quản lý giám sát nhiễm khuẩn bệnh viện, daomtthuan, dualeola, dao minh trung thuan, nguyen phuc duy">
  <meta name="description" content="HAIT - Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link type="image/x-icon" rel="shortcut icon" href="<?php echo base_url('./public/img/logoicon.ico') ?>">
  <link href="<?php echo base_url('public/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/css/theme.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/css/login.css') ?>" rel="stylesheet">
</head>

<body>
  <div class="bg container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6">
      </div>
      <div class="col-md-8 col-lg-6 bg-light">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <div class="text-center mb-5">
                  <h4 class="text-primary font-weight-bold mb-0">HAIT</h4>
                  <img src="<?php echo base_url('public/img/logo.png') ?>" alt="">
                  <h4>
                    <small>HỆ THỐNG QUẢN LÝ</small><br>
                    <span class="text-primary mb-0">GIÁM SÁT NHIỄM KHUẨN BỆNH VIỆN</span>
                  </h4>
                </div>
                <h4 class="login-heading mb-4">Đăng nhập</h4>
                <form action="" id="FormLogin" name="FormLogin">
                  <div class="form-label-group">
                    <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Tên đăng nhập" required autofocus>
                    <label for="inputUsername">Tên đăng nhập</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                    <label for="inputPassword">Mật khẩu</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="inputRemember" name="inputRemember">
                    <label class="custom-control-label" for="inputRemember">Ghi nhớ mật khẩu</label>
                  </div>
                  <button id="buttonSubmit" name="buttonSubmit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" onclick="window.location='<?php echo base_url('/user') ?>'">Đăng nhập</button>
                  <div class="text-right">
                    <a href="#" class="small">Quên mật khẩu?</a><br>
                    <a href="#" class="h5 mr-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="h5 mr-1"><i class="fab fa-github"></i></a>
                    <a href="#" class="h5 mr-1"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="h5"><i class="fas fa-globe"></i></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-6 offset-md-4 offset-lg-6 fixed-bottom text-center">
        <h6><small>Phiên bản 1.0</small></h6>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('public/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('public/js/theme.min.js') ?>"></script>
</body>

</html>