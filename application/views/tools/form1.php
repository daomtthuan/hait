

  <div id="step6" class="was-validated" style="display: none">
    <div class="card shadow mb-4 border-primary">

    </div>
  </div>

  <div id="step7" class="was-validated" style="display: none">
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
                <input type="radio" id="co_khang_sinh" name="khang_sinh" class="custom-control-input" value="1">
                <label class="custom-control-label" for="co_khang_sinh">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_khang_sinh" name="khang_sinh" class="custom-control-input" value="0">
                <label class="custom-control-label" for="khong_khang_sinh">Không</label>
                <div class="invalid-feedback" style="margin-left: -24px">Có Thở máy xâm nhập hay không?</div>
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
                <input type="radio" id="muc_dich_su_dung_1" name="muc_dich_su_dung" class="custom-control-input" value="1">
                <label class="custom-control-label" for="muc_dich_su_dung_1">Điều trị nhiễm khuẩn</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="muc_dich_su_dung_2" name="muc_dich_su_dung" class="custom-control-input" value="2">
                <label class="custom-control-label" for="muc_dich_su_dung_2">Phòng ngừa nhiễm khuẩn</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="muc_dich_su_dung_3" name="muc_dich_su_dung" class="custom-control-input" value="3">
                <label class="custom-control-label" for="muc_dich_su_dung_3">Không xác định</label>
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn mục đích sử dụng kháng sinh</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="step8" class="was-validated" style="display: none">
    <div class="card shadow mb-4 border-primary">
      <div class="card-header bg-light py-3">
        <h6 class="m-0 font-weight-bold text-primary">8. Kết quả điều trị</h6>
      </div>
      <div class="card-body bg-white">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <div class="text-dark cursor-default">Kết quả điều trị</div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="ket_qua_dieu_tri_1" name="ket_qua_dieu_tri" class="custom-control-input" value="1">
                <label class="custom-control-label" for="ket_qua_dieu_tri_1">Ra viện</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="ket_qua_dieu_tri_2" name="ket_qua_dieu_tri" class="custom-control-input" value="2">
                <label class="custom-control-label" for="ket_qua_dieu_tri_2">Chuyển viện/khoa</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="ket_qua_dieu_tri_3" name="ket_qua_dieu_tri" class="custom-control-input" value="3">
                <label class="custom-control-label" for="ket_qua_dieu_tri_3">Xin về</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="ket_qua_dieu_tri_4" name="ket_qua_dieu_tri" class="custom-control-input" value="4">
                <label class="custom-control-label" for="ket_qua_dieu_tri_4">Tử vong</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="ket_qua_dieu_tri_5" name="ket_qua_dieu_tri" class="custom-control-input" value="5">
                <label class="custom-control-label" for="ket_qua_dieu_tri_5">Đang nằm viện</label>
                <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Kết quả điều trị</div>
              </div>
            </div>
          </div>
          <div class="col-12 ket_qua_dieu_tri" style="display: none">
            <div class="form-group">
              <div class="text-dark cursor-default">Nằm viện</div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="nam_vien_1" name="nam_vien" class="custom-control-input" value="1" readonly>
                <label class="custom-control-label" for="nam_vien_1">Người bệnh nằm viện nội trú hoàn toàn</label>
              </div>
              <div class="custom-control custom-radio custom-control">
                <input type="radio" id="nam_vien_2" name="nam_vien" class="custom-control-input" value="2" readonly>
                <label class="custom-control-label" for="nam_vien_2">Người bệnh về nhà trong thời gian nằm viện</label>
                <div class="invalid-feedback" style="margin-left: -24px">Người bệnh nằm viện nội trú hoàn toàn hay về nhà trong thời gian nằm viện</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <button id="buttonStepBack" type="button" class="btn btn-secondary ml-2" style="display: none">Trở về</button>
    <button id="buttonStepNext" type="button" class="btn btn-primary ml-auto mr-2">Kế tiếp</button>
    <button id="buttonSubmit" name="buttonSubmit" type="submit" class="btn btn-primary ml-auto mr-2" style="display: none">Hoàn thành</button>
  </div>
</form>