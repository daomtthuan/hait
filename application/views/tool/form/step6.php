<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  if (sessionStorage.form == null) location = "<?php echo base_url($role) ?>";
</script>
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg was-validated">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">6. Phẫu thuật hay không phẫu thuật</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="text-dark cursor-default">Phẫu thuật hay không phẫu thuật</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_phau_thuat" name="phau_thuat" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_phau_thuat">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_phau_thuat" name="phau_thuat" class="custom-control-input" value="2" required>
              <label class="custom-control-label" for="khong_phau_thuat">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Người bệnh có phẫu thuật hay không?</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="mt-3 text-center">
  <a id="buttonStepBack" class="btn btn-dark mr-2" href="<?php echo base_url($role.'/form'.'/'.$type.'/5') ?>"><i class="fas fa-angle-left"></i></a>
  <a id="buttonSubmit" class="d-none btn btn-primary mr-2" href="#">Lưu</a>
  <a id="buttonStepNext" class="btn btn-dark" href="<?php echo base_url($role.'/form'.'/'.$type.'/8') ?>"><i class="fas fa-angle-right"></i></a>
</div>
<script defer src="<?php echo base_url('public/js/tool/form/'.$type.'/Step6.js') ?>"></script>