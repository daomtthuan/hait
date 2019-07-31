<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">5. Thủ thuật can thiệp</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row was-validated">
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
      <div class="row was-validated">
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
      <div class="row was-validated">
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
      <div class="row was-validated">
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
      <div class="row was-validated">
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
      <div class="row was-validated">
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
      <div class="row was-validated">
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
        <label class="text-dark" for="khac_step5">Khác</label>
        <textarea id="khac_step5" name="khac_step5" type="text" class="form-control ellipsis"></textarea>
      </div>
    </div>
  </div>
</form>
<div class="row mt-3">
  <a id="buttonStepBack" class="btn btn-secondary ml-2" href="<?php echo base_url($role.'/new-form/4') ?>">Trở về</a>
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/new-form/6') ?>">Kế tiếp</a>
</div>
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<script defer src="<?php echo base_url('public/js/general/theme.min.js') ?>"></script>
<script defer src="<?php echo base_url('public/js/tools/new_form/step5.js') ?>"></script>