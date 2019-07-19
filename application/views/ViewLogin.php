<!doctype html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <title>HAIT - Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện</title>
  <meta name="author" content="Nguyen Phuc Duy, Dao Minh Trung Thuan">
  <meta name="keywords" content="hait, bệnh viện, nhiễm khuẩn, hệ thống quản lý, giám sát, hệ thống quản lý giám sát nhiễm khuẩn,hệ thống quản lý giám sát nhiễm khuẩn bệnh viện, daomtthuan, dualeola, dao minh trung thuan, nguyen phuc duy">
  <meta name="description" content="HAIT - Hệ Thống Quản Lý Giám Sát Nhiễm Khuẩn Bệnh Viện">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link type="image/x-icon" rel="shortcut icon" href="<?php echo base_url('./public/img/logoicon.ico')?>">
  <link rel="stylesheet" href="<?php echo base_url('./public/css/Theme.css')?>">
  <style>
    #divBg {
      background-image: linear-gradient(to bottom right, rgba(47, 135, 222, 0.5), rgba(0, 163, 165, 0.5)),
      url(<?php echo base_url('./public/img/bg.jpg')?>);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }

    #divLogin {
      border-width: medium !important;
      box-shadow: 0 1rem 3rem solid var(--primary) !important;
      margin-top: 100px;
      display: none;
    }
  </style>
  <script src="https://kit.fontawesome.com/d492333a0e.js"></script>
</head>

<body>
  <div id="divBg" class="media p-4">
    <div id="divLogin" class="bg-light rounded shadow-lg border border-primary p-4 align-self-center col-sm-8 col-md-6 col-xl-4 offset-sm-2 offset-md-3 offset-xl-4">
      <div id="divLogo" class="mb-3 text-center text-primary">
        <h1 class="h5 mb-0">HAIT</h1>
        <img src="<?php echo base_url('./public/img/logo.png')?>" alt="" class="my-1">
        <h2 class="h4"><small class="font-weight-normal">HỆ THỐNG QUẢN LÝ GIÁM SÁT</small><br>NHIỄM KHUẨN BỆNH VIỆN</h2>
      </div>
      <form action="" id="formLogin">
        <div class="form-group">
          <label for="InputUsername">Tên đăng nhập</label>
          <input type="text" class="form-control" id="InputUsername" name="InputUsername" placeholder="Tên đăng nhập">
        </div>
        <div class="form-group">
          <label for="InputPassword">Mật khẩu</label>
          <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Mật khẩu">
        </div>
        <div class="mb-2">
          <button type="submit" class="btn btn-primary btn-block" name="ButtonSubmit">Đăng nhập</button>
          <button type="submit" class="btn btn-outline-primary btn-block">Đăng nhập bằng Email đơn vị</button>
        </div>
        <div class="text-right text-primary">
          <a href="#" class="small">Quên mật khẩu?</a><br>
          <a href="#" class="small">Phẩn hồi</a><br>
          <a href="#" class="h4"><i class="fab fa-facebook-square"></i></a>
          <a href="#" class="h4"><i class="fab fa-twitter-square"></i></a>
          <a href="#" class="h4"><i class="fab fa-github"></i></a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(window).on("load", function () {
      $("#divLogin").fadeIn(700);
      $("#divLogin").animate({ "margin-top": "0px" }, 400);
    });
  </script>
</body>

</html>