<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 was-validated">
  <div class="card shadow mb-4 border-primary">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">7. Kháng sinh sử dụng ở người bệnh không phẫu thuật</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <div class="text-dark cursor-default">Kháng sinh sử dụng ở người bệnh không phẫu thuật</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_khang_sinh" name="khang_sinh" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_khang_sinh">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_khang_sinh" name="khang_sinh" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_khang_sinh">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Người bệnh không phẫu thuật có sử dụng kháng sinh không?</div>
            </div>
          </div>
        </div>
        <div class="col-12 khang_sinh" style="display: none">
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
        <div class="col-12 khang_sinh" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Mục đích sử dụng kháng sinh</div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_1" name="muc_dich_su_dung" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="muc_dich_su_dung_1">Điều trị nhiễm khuẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_2" name="muc_dich_su_dung" class="custom-control-input" value="2" required>
              <label class="custom-control-label" for="muc_dich_su_dung_2">Phòng ngừa nhiễm khuẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_3" name="muc_dich_su_dung" class="custom-control-input" value="3" required>
              <label class="custom-control-label" for="muc_dich_su_dung_3">Không xác định</label>
              <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn mục đích sử dụng kháng sinh</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="row mt-3">
  <a id="buttonStepBack" class="btn btn-secondary ml-2" href="<?php echo base_url($role.'/new-form/6') ?>">Trở về</a>
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/new-form/8') ?>">Kế tiếp</a>
</div>