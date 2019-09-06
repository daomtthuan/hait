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
  else if (part == 1) location = "<?php echo base_url($role.'/form'.'/'.$type.'/7-1')?>";
  const antibiotic_list = "<?php echo base_url('ajax/Antibiotic-List') ?>";
</script>
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">7. Kháng sinh sử dụng ở người bệnh không phẫu thuật</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-12">
          <div class="form-group was-validated">
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
        <div class="col-12 khang_sinh mb-3" style="display: none">
          <div class="text-dark cursor-default mb-2">
            Kháng sinh sử dụng
            <button id="them_khang_sinh_khong_phau_thuat" class="btn btn-primary btn-sm ml-auto" type="button" data-toggle="modal" data-target="#modal_khang_sinh_khong_phau_thuat"><i class="fas fa-plus"></i></button>
            <button id="xoa_khang_sinh_khong_phau_thuat" class="btn btn-danger btn-sm ml-1" type="button"><i class='fas fa-trash-alt'></i></button>
          </div>
          <div class="col-12 border">
            <div class="table-responsive-lg my-2">
              <table id="khang_sinh_khong_phau_thuat" class="table table-sm table-bordered table-hover" style="width:100%">
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
        <div class="col-12 khang_sinh" style="display: none">
          <div class="form-group was-validated">
            <div class="text-dark cursor-default">Mục đích sử dụng kháng sinh</div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_1" name="muc_dich_su_dung" class="custom-control-input" value="1" readonly required>
              <label class="custom-control-label" for="muc_dich_su_dung_1">Điều trị nhiễm khuẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_2" name="muc_dich_su_dung" class="custom-control-input" value="2" readonly required>
              <label class="custom-control-label" for="muc_dich_su_dung_2">Phòng ngừa nhiễm khuẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control">
              <input type="radio" id="muc_dich_su_dung_3" name="muc_dich_su_dung" class="custom-control-input" value="3" readonly required>
              <label class="custom-control-label" for="muc_dich_su_dung_3">Không xác định</label>
              <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn mục đích sử dụng kháng sinh</div>
            </div>
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
<div class="modal fade" id="modal_khang_sinh_khong_phau_thuat" tabindex="-1" role="dialog" aria-labelledby="title_khang_sinh_khong_phau_thuat" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_khang_sinh_khong_phau_thuat">Thêm kháng sinh sử dụng ở người bệnh không phẫu thuật</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="form-group">
          <label for="select_khang_sinh_khong_phau_thuat">Tên kháng sinh</label>
          <select id="select_khang_sinh_khong_phau_thuat" class="select_khang_sinh custom-select" required>
            <option disabled selected value style="display: none"></option>
          </select>
          <div class="invalid-feedback">Vui lòng chọn loại Kháng sinh sử dụng ở người bệnh không phẫu thuật</div>
        </div>
        <div class="form-group">
          <label for="ngaybd_khang_sinh_khong_phau_thuat">Ngày bắt đầu</label>
          <input type="date" class="form-control" id="ngaybd_khang_sinh_khong_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày bắt đầu sử dụng</div>
        </div>
        <div class="form-group">
          <label for="ngaykt_khang_sinh_khong_phau_thuat">Ngày kết thúc</label>
          <input type="date" class="form-control" id="ngaykt_khang_sinh_khong_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Ngày kết thúc sử dụng</div>
        </div>
        <div class="form-group">
          <label for="lieu_khang_sinh_khong_phau_thuat">Liều/đơn dùng</label>
          <input type="text" class="form-control" id="lieu_khang_sinh_khong_phau_thuat" required>
          <div class="invalid-feedback">Vui lòng nhập Liều/đơn dùng</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
        <button id="submit_khang_sinh_khong_phau_thuat" type="button" class="btn btn-primary">Thêm vào</button>
      </div>
    </div>
  </div>
</div>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" integrity="sha256-t5ZQTZsbQi8NxszC10CseKjJ5QeMw5NINtOXQrESGSU=" crossorigin="anonymous" defer></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js" integrity="sha256-hJ44ymhBmRPJKIaKRf3DSX5uiFEZ9xB/qx8cNbJvIMU=" crossorigin="anonymous" defer></script>
<script defer src="<?php echo base_url('public/js/tool/form/'.$type.'/Step7_2.js') ?>"></script>