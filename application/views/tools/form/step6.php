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
  <a id="buttonStepBack" class="btn btn-secondary ml-2" href="<?php echo base_url($role.'/new-form/5') ?>">Trở về</a>
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/new-form/7') ?>">Kế tiếp</a>
</div>
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<script defer src="<?php echo base_url('public/js/general/theme.min.js') ?>"></script>
<script defer src="<?php echo base_url('public/js/tools/new_form/step6.js') ?>"></script>