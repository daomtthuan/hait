<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  if (sessionStorage.form == null) location = "<?php echo base_url($role) ?>";
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css" integrity="sha256-F+DaKAClQut87heMIC6oThARMuWne8+WzxIDT7jXuPA=" crossorigin="anonymous">
<style>
  .dataTables_length,
  .dataTables_filter {
    text-align: center !important;
  }

  thead {
    text-align: center
  }
</style>
<script>
  let part = JSON.parse(sessionStorage.form).phau_thuat;
  if (part == null) location = "<?php echo base_url($role.'/form'.'/'.$type.'/6')?>";
  else if (part == 2) location = "<?php echo base_url($role.'/form'.'/'.$type.'/7-2')?>";
  const antibioticApi = "<?php echo base_url('ajax/Antibiotic') ?>";
</script>
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">7. Phẫu thuật</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-md-6 was-validated">
          <div class="form-group">
            <label class="text-dark" for="vi_tri_phau_thuat">Vị trí phẫu thuật</label>
            <input id="vi_tri_phau_thuat" name="vi_tri_phau_thuat" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Vị trí phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6 was-validated">
          <div class="form-group">
            <label class="text-dark" for="ngay_phau_thuat">Ngày phẫu thuật</label>
            <input id="ngay_phau_thuat" name="ngay_phau_thuat" type="date" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Ngày phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
          <div class="form-group">
            <label class="text-dark" for="thoi_gian">Thời gian phẫu thuật (phút)</label>
            <input id="thoi_gian" name="thoi_gian" type="number" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Thời gian phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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
        <div class="col-md-6 was-validated">
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

        <div class="col-12 mb-3">
          <div class="text-dark cursor-default mb-2">
            Kháng sinh trước phẫu thuật
            <button id="them_khang_sinh_truoc_phau_thuat" class="btn btn-primary btn-sm ml-auto" type="button" data-toggle="modal" data-target="#modal_khang_sinh_truoc_phau_thuat"><i class="fas fa-plus"></i></button>
            <button id="xoa_khang_sinh_truoc_phau_thuat" class="btn btn-danger btn-sm ml-1" type="button"><i class='fas fa-trash-alt'></i></button>
          </div>
          <div class="col-12 border">
            <div class="table-responsive-lg my-2">
              <table id="khang_sinh_truoc_phau_thuat" class="table table-sm table-bordered table-hover" style="width:100%">
                <thead class="thead-light">
                  <tr>
                    <th name="ma_khang_sinh" scope="col">Mã kháng sinh</th>
                    <th name="ten_khang_sinh" scope="col">Tên kháng sinh</th>
                    <th name="ngaybd" scope="col">Ngày bắt đầu</th>
                    <th name="ngaykt" scope="col">Ngày kết thúc</th>
                    <th name="lieu" scope="col">Liều/đơn dùng</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div class="text-dark cursor-default mb-2">
            Kháng sinh dự phòng
            <button id="them_khang_sinh_du_phong" class="btn btn-primary btn-sm ml-auto" type="button" data-toggle="modal" data-target="#modal_khang_sinh_du_phong"><i class="fas fa-plus"></i></button>
            <button id="xoa_khang_sinh_du_phong" class="btn btn-danger btn-sm ml-1" type="button"><i class='fas fa-trash-alt'></i></button>
          </div>
          <div class="col-12 border">
            <div class="table-responsive-lg my-2">
              <table id="khang_sinh_du_phong" class="table table-sm table-bordered table-hover" style="width:100%">
                <thead class="thead-light">
                  <tr>
                    <th name="ma_khang_sinh" scope="col">Mã kháng sinh</th>
                    <th name="ten_khang_sinh" scope="col">Tên kháng sinh</th>
                    <th name="lieu1" scope="col">Liều 1 bắt đầu</th>
                    <th name="lieu2" scope="col">Liều 2 <small>(Nếu có)</small></th>
                    <th name="lieu" scope="col">Liều/đơn dùng</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div class="text-dark cursor-default mb-2">
            Kháng sinh sau phẫu thuật
            <button id="them_khang_sinh_sau_phau_thuat" class="btn btn-primary btn-sm ml-auto" type="button" data-toggle="modal" data-target="#modal_khang_sinh_sau_phau_thuat"><i class="fas fa-plus"></i></button>
            <button id="xoa_khang_sinh_sau_phau_thuat" class="btn btn-danger btn-sm ml-1" type="button"><i class='fas fa-trash-alt'></i></button>
          </div>
          <div class="col-12 border">
            <div class="table-responsive-lg my-2">
              <table id="khang_sinh_sau_phau_thuat" class="table table-sm table-bordered table-hover" style="width:100%">
                <thead class="thead-light">
                  <tr>
                    <th name="ma_khang_sinh" scope="col">Mã kháng sinh</th>
                    <th name="ten_khang_sinh" scope="col">Tên kháng sinh</th>
                    <th name="ngaybd" scope="col">Ngày bắt đầu</th>
                    <th name="ngaykt" scope="col">Ngày kết thúc</th>
                    <th name="lieu" scope="col">Liều/đơn dùng</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row step-option was-validated">
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
        <hr class="col-12 dan_luu mt-0" style="display: none">
      </div>

      <div class="row step-option was-validated">
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
            <input type="radio" id="loai_nhiem_khuan_vm_1" name="loai_nhiem_khuan_vm" class="custom-control-input" value="1" readonly required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_1">Nông</label>
          </div>
          <div class="custom-control custom-radio custom-control">
            <input type="radio" id="loai_nhiem_khuan_vm_2" name="loai_nhiem_khuan_vm" class="custom-control-input" value="2" readonly required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_2">Sâu</label>
          </div>
          <div class="custom-control custom-radio custom-control">
            <input type="radio" id="loai_nhiem_khuan_vm_3" name="loai_nhiem_khuan_vm" class="custom-control-input" value="3" readonly required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_3">Khoang cơ thể</label>
            <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Loại nhiễm khuẩn vết mổ</div>
          </div>
        </div>
        <div class="col-md-12 nkvm text-dark cursor-default" style="display: none">Biểu hiện tại vết mổ</div>
        <div class="col-md-6 order-md-1 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Biểu hiện sốt &gt; 38&deg;C</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_bieu_hien_sot">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_bieu_hien_sot">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sốt hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-3 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Biểu hiện đỏ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_bieu_hien_do">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_bieu_hien_do">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đỏ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-2 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Biểu hiện sưng</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_bieu_hien_sung">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_bieu_hien_sung">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sưng hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-4 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Biểu hiện đau</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_bieu_hien_dau">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_bieu_hien_dau">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đau hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-5 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Phẫu thuật lại</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_phau_thuat_lai">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_phau_thuat_lai">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Phẫu thuật lại hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-7 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Dịch vết mổ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_dich_vet_mo">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_dich_vet_mo">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Dịch vết mổ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-8 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Toác vết mổ tự nhiên</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_toac_vet_mo_tu_nhien">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_toac_vet_mo_tu_nhien">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Toác vết mổ tự nhiên hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-9 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Chủ động mở vết mổ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_chu_dong_mo_vm">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_chu_dong_mo_vm">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Chủ động mở vết mổ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-10 nkvm" style="display: none">
          <div class="form-group col-12">
            <div class="text-dark cursor-default">Chảy mủ tại vết mổ/qua dẫn lưu</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_chay_mu" name="chay_mu" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="co_chay_mu">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_chay_mu" name="chay_mu" class="custom-control-input" value="0" readonly required>
              <label class="custom-control-label" for="khong_chay_mu">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Chảy mủ tại vết mổ/qua dẫn lưu hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-12 order-md-11 nkvm" style="display: none">
          <div class="form-group col-12">
            <label class="text-dark" for="trieu_chung_chi_diem">Triệu chứng chỉ điểm và ngày xuất hiện đầu tiên</label>
            <textarea id="trieu_chung_chi_diem" name="trieu_chung_chi_diem" type="text" class="form-control ellipsis" readonly required></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="mt-3 text-center">
  <a id="buttonStepBack" class="btn btn-dark mr-2" href="<?php echo base_url($role.'/form'.'/'.$type.'/6') ?>"><i class="fas fa-angle-left"></i></a>
  <a id="buttonSubmit" class="d-none btn btn-primary mr-2" href="#">Lưu</a>
  <a id="buttonStepNext" class="btn btn-dark" href="<?php echo base_url($role.'/form'.'/'.$type.'/8') ?>"><i class="fas fa-angle-right"></i></a>
</div>

<div class="modal fade" id="modal_khang_sinh_truoc_phau_thuat" tabindex="-1" role="dialog" aria-labelledby="title_khang_sinh_truoc_phau_thuat" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_khang_sinh_truoc_phau_thuat">Thêm kháng sinh trước phẫu thuật</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="form-group">
          <label for="select_khang_sinh_truoc_phau_thuat">Tên kháng sinh</label>
          <select id="select_khang_sinh_truoc_phau_thuat" class="select_khang_sinh custom-select" required>
            <option disabled selected value style="display: none"> </option>
          </select>
          <div class="invalid-feedback">Vui lòng chọn loại Kháng sinh trước phẫu thuật</div>
        </div>
        <div class="form-group">
          <label for="ngaybd_khang_sinh_truoc_phau_thuat">Ngày bắt đầu</label>
          <input type="date" class="form-control" id="ngaybd_khang_sinh_truoc_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày bắt đầu sử dụng</div>
        </div>
        <div class="form-group">
          <label for="ngaykt_khang_sinh_truoc_phau_thuat">Ngày kết thúc</label>
          <input type="date" class="form-control" id="ngaykt_khang_sinh_truoc_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày kết thúc sử dụng</div>
        </div>
        <div class="form-group">
          <label for="lieu_khang_sinh_truoc_phau_thuat">Liều/đơn dùng</label>
          <input type="text" class="form-control" id="lieu_khang_sinh_truoc_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Liều/đơn dùng</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
        <button id="submit_khang_sinh_truoc_phau_thuat" type="button" class="btn btn-primary">Thêm vào</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_khang_sinh_du_phong" tabindex="-1" role="dialog" aria-labelledby="title_khang_sinh_du_phong" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_khang_sinh_du_phong">Thêm kháng sinh dự phòng</h5>
      </div>
      <div class="modal-body">
        <div class="form-group was-validated">
          <label for="select_khang_sinh_du_phong">Tên kháng sinh</label>
          <select id="select_khang_sinh_du_phong" class="select_khang_sinh custom-select" required>
            <option disabled selected value style="display: none"> </option>
          </select>
          <div class="invalid-feedback">Vui lòng chọn loại Kháng sinh trước phẫu thuật</div>
        </div>
        <div class="form-group was-validated">
          <label for="lieu1_khang_sinh_du_phong">Liều 1 bắt đầu</label>
          <input type="date" class="form-control" id="lieu1_khang_sinh_du_phong" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày liều 1 bắt đầu</div>
        </div>
        <div class="form-group">
          <label for="lieu2_khang_sinh_du_phong">Liều 2 bắt đầu<small>(Nếu có)</small></label>
          <input type="date" class="form-control" id="lieu2_khang_sinh_du_phong" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày liều 2 bắt đầu<small>(Nếu có)</small></div>
        </div>
        <div class="form-group was-validated">
          <label for="lieu_khang_sinh_du_phong">Liều/đơn dùng</label>
          <input type="text" class="form-control" id="lieu_khang_sinh_du_phong" required>
          <div class="invalid-feedback">Vui lòng nhập Liều/đơn dùng</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
        <button id="submit_khang_sinh_du_phong" type="button" class="btn btn-primary">Thêm vào</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_khang_sinh_sau_phau_thuat" tabindex="-1" role="dialog" aria-labelledby="title_khang_sinh_sau_phau_thuat" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_khang_sinh_sau_phau_thuat">Thêm kháng sinh sau phẫu thuật</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="form-group">
          <label for="select_khang_sinh_sau_phau_thuat">Tên kháng sinh</label>
          <select id="select_khang_sinh_sau_phau_thuat" class="select_khang_sinh custom-select" required>
            <option disabled selected value style="display: none"></option>
          </select>
          <div class="invalid-feedback">Vui lòng chọn loại Kháng sinh trước phẫu thuật</div>
        </div>
        <div class="form-group">
          <label for="ngaybd_khang_sinh_sau_phau_thuat">Ngày bắt đầu</label>
          <input type="date" class="form-control" id="ngaybd_khang_sinh_sau_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày bắt đầu sử dụng</div>
        </div>
        <div class="form-group">
          <label for="ngaykt_khang_sinh_sau_phau_thuat">Ngày kết thúc</label>
          <input type="date" class="form-control" id="ngaykt_khang_sinh_sau_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày kết thúc sử dụng</div>
        </div>
        <div class="form-group">
          <label for="lieu_khang_sinh_sau_phau_thuat">Liều/đơn dùng</label>
          <input type="text" class="form-control" id="lieu_khang_sinh_sau_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Liều/đơn dùng</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
        <button id="submit_khang_sinh_sau_phau_thuat" type="button" class="btn btn-primary">Thêm vào</button>
      </div>
    </div>
  </div>
</div>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" integrity="sha256-t5ZQTZsbQi8NxszC10CseKjJ5QeMw5NINtOXQrESGSU=" crossorigin="anonymous" defer></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js" integrity="sha256-hJ44ymhBmRPJKIaKRf3DSX5uiFEZ9xB/qx8cNbJvIMU=" crossorigin="anonymous" defer></script>
<script defer src="<?php echo base_url('public/js/tool/form/'.$type.'/Step7_1.js') ?>"></script>