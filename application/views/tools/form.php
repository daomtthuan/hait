<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider d-none d-md-block">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<div class="row mb-3 progress-form">
  <div id="dotstep1" class="col-3 progress-form-step active">
    <div class="progress">
      <div class="progress-bar"></div>
    </div>
    <a href="#" class="progress-form-dot"></a>
  </div>
  <div id="dotstep2" class="col-3 progress-form-step disabled">
    <div class="progress">
      <div class="progress-bar"></div>
    </div>
    <a href="#" class="progress-form-dot"></a>
  </div>
  <div id="dotstep3" class="col-3 progress-form-step disabled">
    <div class="progress">
      <div class="progress-bar"></div>
    </div>
    <a href="#" class="progress-form-dot"></a>
  </div>
  <div id="dotstep4" class="col-3 progress-form-step disabled">
    <div class="progress">
      <div class="progress-bar"></div>
    </div>
    <a href="#" class="progress-form-dot"></a>
  </div>
</div>
<form action="" class="mb-3">

  <div id="step1" class="card shadow mb-4 border-primary">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">1. Thông tin chung</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">

          <div class="form-group">
            <label class="text-dark" for="ngay_vao_khoa">Ngày vào khoa</label>
            <input id="ngay_vao_khoa" name="ngay_vao_khoa" type="date" class="form-control ellipsis" required autofocus>
            <div class="invalid-tooltip"></div>
          </div>

        </div>

        <div class="col-sm-6">

          <div class="form-group">
            <label class="text-dark" for="ngay_vao_vien">Ngày vào viện</label>
            <input id="ngay_vao_vien" name="ngay_vao_vien" type="date" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
      </div>

      <div class="row">

        <div class="col-md-4">

          <div class="form-group">
            <label class="text-dark" for="msba">Mã bệnh án</label>
            <input id="msba" name="msba" type="text" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>

        <div class="col-md-4">

          <div class="form-group">
            <label class="text-dark" for="company_name">Bệnh viện</label>
            <input id="company_name" name="company_name" type="text" class="form-control ellipsis" readonly>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
        <div class="col-md-4">

          <div class="form-group">
            <label class="text-dark" for="room_name">Khoa</label>
            <input id="room_name" name="room_name" type="text" class="form-control ellipsis" readonly>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label class="text-dark" for="ngay_dieu_tra">Ngày điều tra</label>
        <input id="ngay_dieu_tra" name="ngay_dieu_tra" type="date" class="form-control ellipsis" required>
        <div class="invalid-tooltip"></div>
      </div>

      <div class="row">
        <div class="col-md-12 col-lg-6">

          <div class="form-group">
            <label class="text-dark" for="HoTenNguoiBenh">Họ tên người bệnh</label>
            <input id="HoTenNguoiBenh" name="HoTenNguoiBenh" type="text" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
        <div class="col-md-6 col-lg-3">

          <div class="form-group">
            <label class="text-dark" for="NamSinh">Năm sinh</label>
            <input id="NamSinh" name="NamSinh" type="number" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
        <div class="col-md-6 col-lg-3">

          <div class="form-group">
            <div class="text-dark mb-3 cursor-default">Giới tính</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="Nam" name="GioiTinh" class="custom-control-input">
              <label class="custom-control-label" for="Nam">Nam</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="Nu" name="GioiTinh" class="custom-control-input">
              <label class="custom-control-label" for="Nu">Nữ</label>
            </div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label class="text-dark" for="NoiChuyenToi">Nơi chuyển tới</label>
        <input id="NoiChuyenToi" name="NoiChuyenToi" type="text" class="form-control ellipsis" required>
        <div class="invalid-tooltip"></div>
      </div>

      <div class="form-group">
        <label class="text-dark" for="ChuanDoanLucVao">Chuẩn đoán lúc vào</label>
        <input id="ChuanDoanLucVao" name="ChuanDoanLucVao" type="text" class="form-control ellipsis" required>
        <div class="invalid-tooltip"></div>
      </div>

      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label class="text-dark" for="NgayRaVien">Ngày ra viện</label>
            <input id="NgayRaVien" name="NgayRaVien" type="date" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
        <div class="col-md-6">

          <div class="form-group">
            <label class="text-dark" for="ChuanDoanXacDinh">Chuẩn đoán xác định</label>
            <input id="ChuanDoanXacDinh" name="ChuanDoanXacDinh" type="text" class="form-control ellipsis" required>
            <div class="invalid-tooltip"></div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <div class="text-dark mb-3 cursor-default">Nhiễm khuẩn lúc vào</div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="CoNhiemKhuanLucVao" name="NhiemKhuanLucVao" class="custom-control-input">
          <label class="custom-control-label" for="CoNhiemKhuanLucVao">Có</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="KhongNhiemKhuanLucVao" name="NhiemKhuanLucVao" class="custom-control-input">
          <label class="custom-control-label" for="KhongNhiemKhuanLucVao">Không</label>
        </div>
      </div>

    </div>
  </div>

  <div id="step2">

  </div>
  <div id="step3">

  </div>
  <div id="step4">

  </div>
  <div id="step5">

  </div>
  <div id="step6">

  </div>
</form>

<div class="row mb-3">
  <button id="buttonStepBack" class="btn btn-secondary ml-2" style="display: none">Trở về</button>
  <button id="buttonStepNext" class="btn btn-primary ml-auto mr-2">Kế tiếp</button>
  <button id="buttonSubmit" name="buttonSubmit" type="submit" class="btn btn-primary ml-auto mr-2" style="display: none">Hoàn thành</button>
</div>