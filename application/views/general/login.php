<!DOCTYPE html>
<html lang="vi">

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
  <link href="<?php echo base_url('public/css/login.min.css') ?>" rel="stylesheet">
</head>

<body>
  <div class="bg container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6">
      </div>
      <div class="col-md-8 col-lg-6 bg-light shadow-lg">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <div class="text-center mb-5">
                  <h6>Copyright &copy; Daomtthuan 2019</h6>
                  <h4 class="text-primary font-weight-bold mb-0">HAIT</h4>
                  <img src="<?php echo base_url('public/img/logo_color.png') ?>" alt="">
                  <h4>
                    <small>HỆ THỐNG QUẢN LÝ</small><br>
                    <span class="text-primary mb-0">GIÁM SÁT NHIỄM KHUẨN BỆNH VIỆN</span>
                  </h4>
                  <h6><small>Phiên bản 1.0.0</small></h6>
                </div>
                <h4 class="login-heading mb-4">Đăng nhập</h4>
                <form>
                  <div class="form-label-group">
                    <input type="text" id="inputUsername" class="form-control" placeholder="Tên đăng nhập" value="admin@admin.com" required autofocus>
                    <label for="inputUsername">Tên đăng nhập</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" value="password" required>
                    <label for="inputPassword">Mật khẩu</label>
                  </div>
                  <button id="buttonLogin" value="Đăng nhập" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Đăng nhập</button>
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
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
  <script>
    const
      loginUrl = "<?php echo base_url('ajax/auth/login') ?>",
      baseUrl = "<?php echo base_url() ?>";
  </script>
  <script src="<?php echo base_url('public/js/general/login.js') ?>"></script>
</body>

</html>