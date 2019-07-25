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
  <div id="step1">
    <div class="card shadow mb-4 border-primary">
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
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn giới tính người bệnh</div>
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
  </div>

  <div id="step2">
    <div class="card shadow mb-4 border-primary">
    </div>
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
              <div class="text-dark cursor-default">Thuốc Ức chế miễn dịch non-steroid</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_thuoc_ucmd" name="thuoc_ucmd" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_thuoc_ucmd">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_thuoc_ucmd" name="thuoc_ucmd" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_thuoc_ucmd">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có sử dụng Thuốc Ức chế miễn dịch non-steroid hay không?</div>
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
    <div class="card shadow mb-4 border-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">4. Bệnh kèm theo</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Hô hấp mạn tính</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_ho_hap_man_tinh" name="ho_hap_man_tinh" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_ho_hap_man_tinh">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_ho_hap_man_tinh" name="ho_hap_man_tinh" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_ho_hap_man_tinh">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Hô hấp mạn tính hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Gan mạn tính</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_gan_man_tinh" name="gan_man_tinh" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_gan_man_tinh">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_gan_man_tinh" name="gan_man_tinh" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_gan_man_tinh">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Gan mạn tính hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Tim mạch</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_tim_mach" name="tim_mach" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_tim_mach">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_tim_mach" name="tim_mach" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_tim_mach">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Tim mạch hay không?</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">HIV/AIDS</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_hiv_aids" name="hiv_aids" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_hiv_aids">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_hiv_aids" name="hiv_aids" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_hiv_aids">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh HIV/AIDS hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Ung thư</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_ung_thu" name="ung_thu" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_ung_thu">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_ung_thu" name="ung_thu" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_ung_thu">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Ung thư hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Tiểu đường</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_tieu_duong" name="tieu_duong" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_tieu_duong">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_tieu_duong" name="tieu_duong" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_tieu_duong">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Tiểu đường hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Thận mãn tính</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_than_man_tinh" name="than_man_tinh" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_than_man_tinh">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_than_man_tinh" name="than_man_tinh" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_than_man_tinh">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Thận mãn tính hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Đa chấn thương</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_da_chan_thuong" name="da_chan_thuong" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_da_chan_thuong">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_da_chan_thuong" name="da_chan_thuong" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_da_chan_thuong">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bị Đa chấn thương hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Bỏng</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_bong" name="bong" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_bong">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_bong" name="bong" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_bong">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bị Bỏng hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Cao huyết áp</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_cao_huyet_ap" name="cao_huyet_ap" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_cao_huyet_ap">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_cao_huyet_ap" name="cao_huyet_ap" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_cao_huyet_ap">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Cao huyết áp hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="text-dark" for="khac2">Khác</label>
              <textarea id="khac2" name="khac2" type="text" class="form-control ellipsis"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="step5">
    <div class="card shadow mb-4 border-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">5. Thủ thuật can thiệp</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Thở máy xâm nhập</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_tho_may_xam_nhap" name="tho_may_xam_nhap" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_tho_may_xam_nhap">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_tho_may_xam_nhap" name="tho_may_xam_nhap" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_tho_may_xam_nhap">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Thở máy xâm nhập hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 tho_may_xam_nhap" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_tho_may_xam_nhap">Ngày bắt đầu</label>
              <input id="ngaybd_tho_may_xam_nhap" name="ngaybd_tho_may_xam_nhap" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Thở máy xâm nhập</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 tho_may_xam_nhap" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_tho_may_xam_nhap">Ngày kết thúc</label>
              <input id="ngaykt_tho_may_xam_nhap" name="ngaykt_tho_may_xam_nhap" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Thở máy xâm nhập</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Đặt nội khí quản</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dat_noi_khi_quan" name="dat_noi_khi_quan" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dat_noi_khi_quan">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dat_noi_khi_quan" name="dat_noi_khi_quan" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dat_noi_khi_quan">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Đặt nội khí quản hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_noi_khi_quan" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_dat_noi_khi_quan">Ngày bắt đầu</label>
              <input id="ngaybd_dat_noi_khi_quan" name="ngaybd_dat_noi_khi_quan" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Đặt nội khí quản</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_noi_khi_quan" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_dat_noi_khi_quan">Ngày kết thúc</label>
              <input id="ngaykt_dat_noi_khi_quan" name="ngaykt_dat_noi_khi_quan" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Đặt nội khí quản</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Mở khí quản</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_mo_khi_quan" name="mo_khi_quan" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_mo_khi_quan">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_mo_khi_quan" name="mo_khi_quan" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_mo_khi_quan">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Mở khí quản hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 mo_khi_quan" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_mo_khi_quan">Ngày bắt đầu</label>
              <input id="ngaybd_mo_khi_quan" name="ngaybd_mo_khi_quan" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Mở khí quản</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 mo_khi_quan" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_mo_khi_quan">Ngày kết thúc</label>
              <input id="ngaykt_mo_khi_quan" name="ngaykt_mo_khi_quan" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Mở khí quản</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Đặt ống thông tiểu</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dat_ong_thong_tieu" name="dat_ong_thong_tieu" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dat_ong_thong_tieu">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dat_ong_thong_tieu" name="dat_ong_thong_tieu" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dat_ong_thong_tieu">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Đặt ống thông tiểu hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_tieu" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_dat_ong_thong_tieu">Ngày bắt đầu</label>
              <input id="ngaybd_dat_ong_thong_tieu" name="ngaybd_dat_ong_thong_tieu" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Đặt ống thông tiểu</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_tieu" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_dat_ong_thong_tieu">Ngày kết thúc</label>
              <input id="ngaykt_dat_ong_thong_tieu" name="ngaykt_dat_ong_thong_tieu" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Đặt ống thông tiểu</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Đặt ống thông TMTT</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dat_ong_thong_tmtt" name="dat_ong_thong_tmtt" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dat_ong_thong_tmtt">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dat_ong_thong_tmtt" name="dat_ong_thong_tmtt" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dat_ong_thong_tmtt">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Đặt ống thông TMTT hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_tmtt" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_dat_ong_thong_tmtt">Ngày bắt đầu</label>
              <input id="ngaybd_dat_ong_thong_tmtt" name="ngaybd_dat_ong_thong_tmtt" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Đặt ống thông TMTT</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_tmtt" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_dat_ong_thong_tmtt">Ngày kết thúc</label>
              <input id="ngaykt_dat_ong_thong_tmtt" name="ngaykt_dat_ong_thong_tmtt" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Đặt ống thông TMTT</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Đường truyền TMNV</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_duong_truyen_tmnv" name="duong_truyen_tmnv" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_duong_truyen_tmnv">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_duong_truyen_tmnv" name="duong_truyen_tmnv" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_duong_truyen_tmnv">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Đường truyền TMNV hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 duong_truyen_tmnv" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_duong_truyen_tmnv">Ngày bắt đầu</label>
              <input id="ngaybd_duong_truyen_tmnv" name="ngaybd_duong_truyen_tmnv" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Đường truyền TMNV</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 duong_truyen_tmnv" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_duong_truyen_tmnv">Ngày kết thúc</label>
              <input id="ngaykt_duong_truyen_tmnv" name="ngaykt_duong_truyen_tmnv" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Đường truyền TMNV</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Đặt ống thông dạ dày</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dat_ong_thong_da_day" name="dat_ong_thong_da_day" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dat_ong_thong_da_day">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dat_ong_thong_da_day" name="dat_ong_thong_da_day" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dat_ong_thong_da_day">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Đặt ống thông dạ dày hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_da_day" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaybd_dat_ong_thong_da_day">Ngày bắt đầu</label>
              <input id="ngaybd_dat_ong_thong_da_day" name="ngaybd_dat_ong_thong_da_day" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày bắt đầu Đặt ống thông dạ dày</div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 dat_ong_thong_da_day" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="ngaykt_dat_ong_thong_da_day">Ngày kết thúc</label>
              <input id="ngaykt_dat_ong_thong_da_day" name="ngaykt_dat_ong_thong_da_day" type="date" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập ngày kết thúc Đặt ống thông dạ dày</div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="text-dark" for="khac3">Khác</label>
          <textarea id="khac3" name="khac3" type="text" class="form-control ellipsis"></textarea>
        </div>
      </div>
    </div>
  </div>

  <div id="step6">
    <div class="card shadow mb-4 border-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">6. Phẫu thuật</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="text-dark" for="vi_tr_phau_thuat">Vị trí phẫu thuật</label>
              <input id="vi_tr_phau_thuat" name="vi_tr_phau_thuat" type="text" class="form-control ellipsis" required>
              <div class="invalid-feedback">Vui lòng nhập Vị trí phẫu thuật</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="text-dark" for="ngay_phau_thuat">Ngày phẫu thuật</label>
              <input id="ngay_phau_thuat" name="ngay_phau_thuat" type="date" class="form-control ellipsis" required>
              <div class="invalid-feedback">Vui lòng nhập Ngày phẫu thuật</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Loại phẫu thuật</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="cap_cuu" name="loai_phau_thuat" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="cap_cuu">Cấp cứu</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_chuan_bi" name="loai_phau_thuat" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_chuan_bi">Có chuẩn bị</label>
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Loại phẫu thuật</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Cấy ghép/Implant</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_implant" name="implant" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_implant">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_implant" name="implant" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_implant">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Cấy ghép/Implant hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Phẫu thuật nội soi</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_phau_thuat_noi_soi" name="phau_thuat_noi_soi" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_phau_thuat_noi_soi">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_phau_thuat_noi_soi" name="phau_thuat_noi_soi" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_phau_thuat_noi_soi">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Phẫu thuật nội soi hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="text-dark" for="thoi_gian">Thời gian phẫu thuật (phút)</label>
              <input id="thoi_gian" name="thoi_gian" type="number" class="form-control ellipsis" required>
              <div class="invalid-feedback">Vui lòng nhập Thời gian phẫu thuật</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Điểm ASA</div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="diem_asa_1" name="diem_asa" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="diem_asa_1">1</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="diem_asa_2" name="diem_asa" class="custom-control-input" value="2" required>
                <label class="custom-control-label" for="diem_asa_2">2</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="diem_asa_3" name="diem_asa" class="custom-control-input" value="3" required>
                <label class="custom-control-label" for="diem_asa_3">3</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="diem_asa_4" name="diem_asa" class="custom-control-input" value="4" required>
                <label class="custom-control-label" for="diem_asa_4">4</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="diem_asa_5" name="diem_asa" class="custom-control-input" value="5" required>
                <label class="custom-control-label" for="diem_asa_5">5</label>
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Điểm ASA</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Loại vết mổ</div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="loai_vet_mo_1" name="loai_vet_mo" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="loai_vet_mo_1">Sạch</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="loai_vet_mo_2" name="loai_vet_mo" class="custom-control-input" value="2" required>
                <label class="custom-control-label" for="loai_vet_mo_2">Sạch nhiễm</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="loai_vet_mo_3" name="loai_vet_mo" class="custom-control-input" value="3" required>
                <label class="custom-control-label" for="loai_vet_mo_3">Nhiễm</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="loai_vet_mo_4" name="loai_vet_mo" class="custom-control-input" value="4" required>
                <label class="custom-control-label" for="loai_vet_mo_4">Bẩn</label>
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Loại vết mổ</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Gây mê</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_gay_me" name="gay_me" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="co_gay_me">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_gay_me" name="gay_me" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="khong_gay_me">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Gây mê hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="text-dark cursor-default">Gây tê</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_gay_te" name="gay_te" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="co_gay_te">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_gay_te" name="gay_te" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="khong_gay_te">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Gây tê hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="text-dark cursor-default">Kháng sinh trước phẫu thuật</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tên kháng sinh</th>
                  <th scope="col">Ngày bắt đầu</th>
                  <th scope="col">Ngày kết thúc</th>
                  <th scope="col">Liều/đơn dùng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <div class="text-dark cursor-default">Kháng sinh dự phòng<br>
              <small>* Nếu có, ghi rõ thông tin kháng sinh đã sử dụng</small>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tên kháng sinh</th>
                  <th scope="col">Liều 1 bắt đầu</th>
                  <th scope="col">Liều 2 <small>(Nếu có)</small></th>
                  <th scope="col">Liều/đơn dùng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <div class="text-dark cursor-default">Kháng sinh sau phẫu thuật<br>
              <small>* Ngày bắt đầu tính từ liều kháng sinh sau phẫu thuật, ngày kết thúc là ngày điều tra</small>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tên kháng sinh</th>
                  <th scope="col">Ngày bắt đầu</th>
                  <th scope="col">Ngày kết thúc</th>
                  <th scope="col">Liều/đơn dùng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
                <tr>
                  <td>ABC</th>
                  <td>1/7/2019</td>
                  <td>3/7/2019</td>
                  <td>1 viên</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row step-option">
          <div class="col-12">
            <div class="form-group">
              <div class="text-dark cursor-default">Dẫn lưu</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dan_luu" name="dan_luu" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dan_luu">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dan_luu" name="dan_luu" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dan_luu">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Dẫn lưu hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 dan_luu" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Dẫn lưu tại vết mổ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dan_luu_tai_vm" name="dan_luu_tai_vm" class="custom-control-input" value="1" readonly required>
                <label class="custom-control-label" for="co_dan_luu_tai_vm">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dan_luu_tai_vm" name="dan_luu_tai_vm" class="custom-control-input" value="0" readonly required>
                <label class="custom-control-label" for="khong_dan_luu_tai_vm">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Dẫn lưu tại vết mổ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 dan_luu" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Dẫn lưu ngoài vết mổ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dan_luu_ngoai_vm" name="dan_luu_ngoai_vm" class="custom-control-input" value="1" readonly required>
                <label class="custom-control-label" for="co_dan_luu_ngoai_vm">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dan_luu_ngoai_vm" name="dan_luu_ngoai_vm" class="custom-control-input" value="0" readonly required>
                <label class="custom-control-label" for="khong_dan_luu_ngoai_vm">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Dẫn lưu ngoài vết mổ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 dan_luu" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Dẫn lưu kín</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dan_luu_kin" name="dan_luu_kin" class="custom-control-input" value="1" readonly required>
                <label class="custom-control-label" for="co_dan_luu_kin">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dan_luu_kin" name="dan_luu_kin" class="custom-control-input" value="0" readonly required>
                <label class="custom-control-label" for="khong_dan_luu_kin">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Dẫn lưu kín hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 dan_luu" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="so_ngay_dat_dan_luu">Số ngày đặt dẫn lưu</label>
              <input id="so_ngay_dat_dan_luu" name="so_ngay_dat_dan_luu" type="number" class="form-control ellipsis" readonly required>
              <div class="invalid-feedback">Vui lòng nhập Số ngày đặt dẫn lưu</div>
            </div>
          </div>
        </div>
        <div class="row step-option">
          <div class="col-12">
            <div class="form-group">
              <div class="text-dark cursor-default">Nhiễm khuẩn vết mổ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_nkvm" name="nkvm" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_nkvm">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_nkvm" name="nkvm" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_nkvm">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Nhiễm khuẩn vết mổ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-12 nkvm" style="display: none">
            <div class="text-dark cursor-default">Loại nhiễm khuẩn vết mổ</div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="loai_nhiem_khuan_vm_1" name="loai_nhiem_khuan_vm" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="loai_nhiem_khuan_vm_1">Nông</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="loai_nhiem_khuan_vm_2" name="loai_nhiem_khuan_vm" class="custom-control-input" value="2" required>
              <label class="custom-control-label" for="loai_nhiem_khuan_vm_2">Sâu</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="loai_nhiem_khuan_vm_3" name="loai_nhiem_khuan_vm" class="custom-control-input" value="3" required>
              <label class="custom-control-label" for="loai_nhiem_khuan_vm_3">Khoang cơ thể</label>
              <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Loại nhiễm khuẩn vết mổ</div>
            </div>
          </div>
          <div class="col-md-12 nkvm text-dark cursor-default" style="display: none">Biểu hiện tại vết mổ</div>
          <div class="col-md-6 order-md-1 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Biểu hiện sốt &gt; 38&deg;C</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_bieu_hien_sot">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_bieu_hien_sot">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sốt hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-3 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Biểu hiện đỏ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_bieu_hien_do">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_bieu_hien_do">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đỏ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-2 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Biểu hiện sưng</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_bieu_hien_sung">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_bieu_hien_sung">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sưng hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-4 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Biểu hiện đau</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_bieu_hien_dau">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_bieu_hien_dau">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đau hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-5 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Phẫu thuật lại</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_phau_thuat_lai">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_phau_thuat_lai">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Phẫu thuật lại hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-7 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Dịch vết mổ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_dich_vet_mo">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_dich_vet_mo">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Dịch vết mổ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-8 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Toác vết mổ tự nhiên</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_toac_vet_mo_tu_nhien">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_toac_vet_mo_tu_nhien">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Toác vết mổ tự nhiên hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-9 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Chủ động mở vết mổ</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_chu_dong_mo_vm">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_chu_dong_mo_vm">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Chủ động mở vết mổ hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-10 nkvm" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Chảy mủ tại vết mổ/qua dẫn lưu</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_chay_mu" name="chay_mu" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_chay_mu">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_chay_mu" name="chay_mu" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_chay_mu">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Chảy mủ tại vết mổ/qua dẫn lưu hay không?</div>
              </div>
            </div>
          </div>
          <div class="col-12 order-md-11 nkvm" style="display: none">
            <div class="form-group">
              <label class="text-dark" for="trieu_chung_chi_diem">Triệu chứng chỉ điểm và ngày xuất hiện đầu tiên</label>
              <textarea id="khatrieu_chung_chi_diemc" name="trieu_chung_chi_diem" type="text" class="form-control ellipsis"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="step7">

  </div>
  <div id="step8">

  </div>
  <div id="step9">

  </div>
  <div id="step10">

  </div>
  <div class="row mt-3">
    <button id="buttonStepBack" class="btn btn-secondary ml-2" style="display: none">Trở về</button>
    <button id="buttonStepNext" class="btn btn-primary ml-auto mr-2">Kế tiếp</button>
    <button id="buttonSubmit" name="buttonSubmit" type="submit" class="btn btn-primary ml-auto mr-2" style="display: none">Hoàn thành</button>
  </div>
</form>