<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider d-none d-md-block">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<div class="d-none d-sm-block">
  <div class="row mb-3 progress-form">
    <div id="dotstep1" class="col-1 offset-1 progress-form-step active">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep2" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep3" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep4" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep5" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep6" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep7" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep8" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep9" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
    <div id="dotstep10" class="col-1 progress-form-step disabled">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="progress-form-dot"></a>
    </div>
  </div>
</div>
<form action="" class="was-validated mb-3">

  <div id="step1" class="card shadow mb-4 border-primary">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">1. Thông tin chung</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="text-dark" for="ngay_vao_khoa">Ngày vào khoa</label>
            <input id="ngay_vao_khoa" name="ngay_vao_khoa" type="date" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Ngày vào khoa</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="text-dark" for="ngay_vao_vien">Ngày vào viện</label>
            <input id="ngay_vao_vien" name="ngay_vao_vien" type="date" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Ngày vào viện</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="text-dark" for="msba">Mã bệnh án</label>
            <input id="msba" name="msba" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Mã bệnh án</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="text-dark" for="company_name">Bệnh viện</label>
            <input id="company_name" name="company_name" type="text" class="form-control ellipsis" readonly>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="text-dark" for="room_name">Khoa</label>
            <input id="room_name" name="room_name" type="text" class="form-control ellipsis" readonly>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-dark" for="ngay_dieu_tra">Ngày điều tra</label>
        <input id="ngay_dieu_tra" name="ngay_dieu_tra" type="date" class="form-control ellipsis" required>
        <div class="invalid-feedback">Vui lòng nhập Ngày điều tra</div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="form-group">
            <label class="text-dark" for="ho_ten_bn">Họ tên người bệnh</label>
            <input id="ho_ten_bn" name="ho_ten_bn" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Họ tên người bệnh</div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="form-group">
            <label class="text-dark" for="nam_sinh">Năm sinh</label>
            <input id="nam_sinh" name="nam_sinh" type="number" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Năm sinh người bệnh</div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="form-group">
            <div class="text-dark cursor-default">Giới tính</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="gioi_tinh_nam" name="gioi_tinh" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="gioi_tinh_nam">Nam</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="gioi_tinh_nu" name="gioi_tinh" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="gioi_tinh_nu">Nữ</label>
              <div class="invalid-feedback" style="margin-left: -24px">Chọn giới tính người bệnh</div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-dark" for="noi_chuyen_toi">Nơi chuyển tới</label>
        <input id="noi_chuyen_toi" name="noi_chuyen_toi" type="text" class="form-control ellipsis" required>
        <div class="invalid-feedback">Vui lòng nhập Nơi chuyển tới</div>
      </div>
      <div class="form-group">
        <label class="text-dark" for="chuan_doan_luc_vao">Chuẩn đoán lúc vào</label>
        <input id="chuan_doan_luc_vao" name="chuan_doan_luc_vao" type="text" class="form-control ellipsis" required>
        <div class="invalid-feedback">Vui lòng nhập Chuẩn đoán lúc vào</div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-dark" for="ngay_ra_vien">Ngày ra viện</label>
            <input id="ngay_ra_vien" name="ngay_ra_vien" type="date" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập ngày ra viện</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-dark" for="chuan_doan_xac_dinh">Chuẩn đoán xác định</label>
            <input id="chuan_doan_xac_dinh" name="chuan_doan_xac_dinh" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Chuẩn đoán xác định</div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="text-dark cursor-default">Nhiễm khuẩn lúc vào</div>
        <div class="custom-control custom-radio">
          <input type="radio" id="co_nhiem_khuan_luc_vao" name="nhiem_khuan_luc_vao" class="custom-control-input" value="1" required>
          <label class="custom-control-label" for="co_nhiem_khuan_luc_vao">Có</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="khong_nhiem_khuan_luc_vao" name="nhiem_khuan_luc_vao" class="custom-control-input" value="0" required>
          <label class="custom-control-label" for="khong_nhiem_khuan_luc_vao">Không</label>
          <div class="invalid-feedback" style="margin-left: -24px">Người bệnh có nhiễm khuẩn lúc vào hay không?</div>
        </div>
      </div>
    </div>
  </div>

  <div id="step2" class="card shadow mb-4 border-primary">
  </div>

  <div id="step3">
    <div class="card shadow mb-4 border-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">3. Các thuốc/sinh phẩm sử dụng trong quá trình điều trị tại khoa</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 order-md-1">
            <div class="form-group">
              <div class="text-dark cursor-default">Thuốc ƯCMD non-steroid</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_thuoc_ucmd" name="thuoc_ucmd" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_thuoc_ucmd">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_thuoc_ucmd" name="thuoc_ucmd" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_thuoc_ucmd">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có sử dụng Thuốc ƯCMD non-steroid hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-3">
            <div class="form-group">
              <div class="text-dark cursor-default">Thuốc Steroid</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_thuoc_steroid" name="thuoc_steroid" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_thuoc_steroid">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_thuoc_steroid" name="thuoc_steroid" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_thuoc_steroid">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có sử dụng Thuốc Steroid hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-5">
            <div class="form-group">
              <div class="text-dark cursor-default">Thuốc điều trị loét dạ dầy</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_thuoc_loet_da_day" name="thuoc_loet_da_day" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_thuoc_loet_da_day">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_thuoc_loet_da_day" name="thuoc_loet_da_day" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_thuoc_loet_da_day">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có sử dụng Thuốc điều trị loét dạ dầy hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-2">
            <div class="form-group">
              <div class="text-dark cursor-default">Điều trị hóa học</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dieu_tri_hoa_hoc" name="dieu_tri_hoa_hoc" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dieu_tri_hoa_hoc">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dieu_tri_hoa_hoc" name="dieu_tri_hoa_hoc" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dieu_tri_hoa_hoc">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Điều trị hóa học hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Điều trị tia xạ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dieu_tri_tia_xa" name="dieu_tri_tia_xa" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dieu_tri_tia_xa">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dieu_tri_tia_xa" name="dieu_tri_tia_xa" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dieu_tri_tia_xa">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Điều trị tia xạ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Truyền máu</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_truyen_mau" name="truyen_mau" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_truyen_mau">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_truyen_mau" name="truyen_mau" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_truyen_mau">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Truyền máu hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-12 order-last">
            <div class="form-group">
              <label class="text-dark" for="khac1">Khác</label>
              <textarea id="khac1" name="khac1" type="text" class="form-control ellipsis"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="step4">

  </div>
  <div id="step5">

  </div>
  <div id="step6">

  </div>
  <div id="step7">

  </div>
  <div id="step8">

  </div>
  <div id="step9">

  </div>
  <div id="step10">

  </div>
</form>

<div class="row mb-3">
  <button id="buttonStepBack" class="btn btn-secondary ml-2" style="display: none">Trở về</button>
  <button id="buttonStepNext" class="btn btn-primary ml-auto mr-2">Kế tiếp</button>
  <button id="buttonSubmit" name="buttonSubmit" type="submit" class="btn btn-primary ml-auto mr-2" style="display: none">Hoàn thành</button>
</div>