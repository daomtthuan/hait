<script>
  if (sessionStorage.form == null) location = "<?php echo base_url($role) ?>";
</script>
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg was-validated">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">8. Kết quả điều trị</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <div class="text-dark cursor-default">Kết quả điều trị</div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="ket_qua_dieu_tri_1" name="ket_qua_dieu_tri" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="ket_qua_dieu_tri_1">Ra viện</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="ket_qua_dieu_tri_2" name="ket_qua_dieu_tri" class="custom-control-input" value="2" required>
              <label class="custom-control-label" for="ket_qua_dieu_tri_2">Chuyển viện/khoa</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="ket_qua_dieu_tri_3" name="ket_qua_dieu_tri" class="custom-control-input" value="3" required>
              <label class="custom-control-label" for="ket_qua_dieu_tri_3">Xin về</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="ket_qua_dieu_tri_4" name="ket_qua_dieu_tri" class="custom-control-input" value="4" required>
              <label class="custom-control-label" for="ket_qua_dieu_tri_4">Tử vong</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="ket_qua_dieu_tri_5" name="ket_qua_dieu_tri" class="custom-control-input" value="5" required>
              <label class="custom-control-label" for="ket_qua_dieu_tri_5">Đang nằm viện</label>
              <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Kết quả điều trị</div>
            </div>
          </div>
        </div>
        <div class="col-12 ket_qua_dieu_tri" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Nằm viện</div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="nam_vien_1" name="nam_vien" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="nam_vien_1">Người bệnh nằm viện nội trú hoàn toàn</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="nam_vien_2" name="nam_vien" class="custom-control-input" value="2" readonly required>
              <label class="custom-control-label" for="nam_vien_2">Người bệnh về nhà trong thời gian nằm viện</label>
              <div class="invalid-feedback" style="margin-left: -24px">Người bệnh nằm viện nội trú hoàn toàn hay về nhà trong thời gian nằm viện</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="mt-3 text-center">
  <a id="buttonStepBack" class="btn btn-dark mr-2" href="<?php echo base_url($role.'/form'.'/'.$type) ?>"><i class="fas fa-angle-left"></i></a>
  <a id="buttonSubmit" class="d-none btn btn-primary mr-2" href="#">Lưu</a>
  <button class="btn btn-secondary" disabled><i class="fas fa-angle-right"></i></button>
</div>
<script defer src="<?php echo base_url('public/js/tool/form/'.$type.'/step8.js') ?>"></script>
