<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg was-validated">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">Bước 1. Thông tin chung</h6>
    </div>
    <div class="card-body bg-white">
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
            <input id="company_name" name="company_name" type="text" class="form-control ellipsis" readonly required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="text-dark" for="room_name">Khoa</label>
            <input id="room_name" name="room_name" type="text" class="form-control ellipsis" readonly required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-dark" for="ngay_dieu_tra">Ngày điều tra</label>
        <input id="ngay_dieu_tra" name="ngay_dieu_tra" type="date" class="form-control ellipsis" readonly required>
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
        <label class="text-dark" for="chan_doan_luc_vao">Chẩn đoán lúc vào</label>
        <input id="chan_doan_luc_vao" name="chan_doan_luc_vao" type="text" class="form-control ellipsis" required>
        <div class="invalid-feedback">Vui lòng nhập Chẩn đoán lúc vào</div>
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
            <label class="text-dark" for="chan_doan_xac_dinh">Chẩn đoán xác định</label>
            <input id="chan_doan_xac_dinh" name="chan_doan_xac_dinh" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Chẩn đoán xác định</div>
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
</form>
<div class="row mt-3 mb-3">
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/form/2') ?>">Kế tiếp</a>
</div>
<div id="error" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog shadow-lg" role="document">
    <div class="modal-content">
      <div class="alert alert-danger m-0" role="alert">
        <h4 class="alert-heading">Lỗi!</h4>
        <p>Có lỗi trong quá trình tạo biểu mẫu, vui lòng liên hệ với Bộ phân hỗ trợ để khắc phục</p>
        <a href="<?php echo base_url($role) ?>">Trang chủ</a><br>
      </div>
    </div>
  </div>
</div>
<script defer src="<?php echo base_url('public/js/tools/form/step1.js') ?>"></script>