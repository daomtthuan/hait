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
<div class="row mt-3">
  <a id="buttonStepBack" class="btn btn-secondary ml-2" href="<?php echo base_url($role.'/form/5') ?>">Trở về</a>
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/form/8') ?>">Kế tiếp</a>
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
<script defer src="<?php echo base_url('public/js/tools/form/step6.js') ?>"></script>