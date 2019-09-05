<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  if (sessionStorage.form == null) location = "<?php echo base_url($role) ?>";
</script>
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">4. Bệnh kèm theo</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
          <div class="form-group">
            <div class="text-dark cursor-default">Thận mạn tính</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_than_man_tinh" name="than_man_tinh" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_than_man_tinh">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_than_man_tinh" name="than_man_tinh" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_than_man_tinh">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có bệnh Thận mạn tính hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
            <label class="text-dark" for="khac_step4">Khác</label>
            <textarea id="khac_step4" name="khac_step4" type="text" class="form-control ellipsis"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="mt-3 text-center">
  <a id="buttonStepBack" class="btn btn-dark mr-2" href="<?php echo base_url($role.'/form'.'/'.$type.'/3') ?>"><i class="fas fa-angle-left"></i></a>
  <a id="buttonSubmit" class="d-none btn btn-primary mr-2" href="#">Lưu</a>
  <a id="buttonStepNext" class="btn btn-dark" href="<?php echo base_url($role.'/form'.'/'.$type.'/5') ?>"><i class="fas fa-angle-right"></i></a>
</div>
<script defer src="<?php echo base_url('public/js/tool/form/'.$type.'/step4.js') ?>"></script>