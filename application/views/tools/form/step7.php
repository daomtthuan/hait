<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 was-validated">
  <div class="card shadow mb-4 border-primary">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">6. Phẫu thuật</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-dark" for="vi_tri_phau_thuat">Vị trí phẫu thuật</label>
            <input id="vi_tri_phau_thuat" name="vi_tri_phau_thuat" type="text" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Vị trí phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-dark" for="ngay_phau_thuat">Ngày phẫu thuật</label>
            <input id="ngay_phau_thuat" name="ngay_phau_thuat" type="date" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Ngày phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-dark" for="thoi_gian">Thời gian phẫu thuật (phút)</label>
            <input id="thoi_gian" name="thoi_gian" type="number" class="form-control ellipsis" required>
            <div class="invalid-feedback">Vui lòng nhập Thời gian phẫu thuật</div>
          </div>
        </div>
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-12">
          <div class="text-dark cursor-default">Kháng sinh trước phẫu thuật</div>
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
        <div class="col-12">
          <div class="text-dark cursor-default">Kháng sinh dự phòng<br>
            <small>* Nếu có, ghi rõ thông tin kháng sinh đã sử dụng</small>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Tên kháng sinh</th>
                <th scope="col">Liều 1 bắt đầu</th>
                <th scope="col">Liều 2 <small>(Nếu có)</small></th>
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
        <div class="col-12">
          <div class="text-dark cursor-default">Kháng sinh sau phẫu thuật<br>
            <small>* Ngày bắt đầu tính từ liều kháng sinh sau phẫu thuật, ngày kết thúc là ngày điều tra</small>
          </div>
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
      </div>
      <div class="row step-option">
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
      </div>
      <div class="row step-option">
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
            <input type="radio" id="loai_nhiem_khuan_vm_1" name="loai_nhiem_khuan_vm" class="custom-control-input" value="1" required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_1">Nông</label>
          </div>
          <div class="custom-control custom-radio custom-control">
            <input type="radio" id="loai_nhiem_khuan_vm_2" name="loai_nhiem_khuan_vm" class="custom-control-input" value="2" required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_2">Sâu</label>
          </div>
          <div class="custom-control custom-radio custom-control">
            <input type="radio" id="loai_nhiem_khuan_vm_3" name="loai_nhiem_khuan_vm" class="custom-control-input" value="3" required>
            <label class="custom-control-label" for="loai_nhiem_khuan_vm_3">Khoang cơ thể</label>
            <div class="invalid-feedback" style="margin-left: -24px">Vui lòng chọn Loại nhiễm khuẩn vết mổ</div>
          </div>
        </div>
        <div class="col-md-12 nkvm text-dark cursor-default" style="display: none">Biểu hiện tại vết mổ</div>
        <div class="col-md-6 order-md-1 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Biểu hiện sốt &gt; 38&deg;C</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_bieu_hien_sot">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_sot" name="bieu_hien_sot" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_bieu_hien_sot">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sốt hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-3 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Biểu hiện đỏ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_bieu_hien_do">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_do" name="bieu_hien_do" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_bieu_hien_do">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đỏ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-2 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Biểu hiện sưng</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="1" required >
              <label class="custom-control-label" for="co_bieu_hien_sung">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_sung" name="bieu_hien_sung" class="custom-control-input" value="0" required >
              <label class="custom-control-label" for="khong_bieu_hien_sung">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện sưng hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-4 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Biểu hiện đau</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_bieu_hien_dau">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_bieu_hien_dau" name="bieu_hien_dau" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_bieu_hien_dau">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Biểu hiện đau hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-5 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Phẫu thuật lại</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_phau_thuat_lai">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_phau_thuat_lai" name="phau_thuat_lai" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_phau_thuat_lai">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Phẫu thuật lại hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-7 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Dịch vết mổ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_dich_vet_mo">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_dich_vet_mo" name="dich_vet_mo" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_dich_vet_mo">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Dịch vết mổ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-8 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Toác vết mổ tự nhiên</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_toac_vet_mo_tu_nhien">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_toac_vet_mo_tu_nhien" name="toac_vet_mo_tu_nhien" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_toac_vet_mo_tu_nhien">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Toác vết mổ tự nhiên hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-9 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Chủ động mở vết mổ</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_chu_dong_mo_vm">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_chu_dong_mo_vm" name="chu_dong_mo_vm" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_chu_dong_mo_vm">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Chủ động mở vết mổ hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-10 nkvm" style="display: none">
          <div class="form-group">
            <div class="text-dark cursor-default">Chảy mủ tại vết mổ/qua dẫn lưu</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="co_chay_mu" name="chay_mu" class="custom-control-input" value="1" required>
              <label class="custom-control-label" for="co_chay_mu">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="khong_chay_mu" name="chay_mu" class="custom-control-input" value="0" required>
              <label class="custom-control-label" for="khong_chay_mu">Không</label>
              <div class="invalid-feedback" style="margin-left: -24px">Có Chảy mủ tại vết mổ/qua dẫn lưu hay không?</div>
            </div>
          </div>
        </div>
        <div class="col-12 order-md-11 nkvm" style="display: none">
          <div class="form-group">
            <label class="text-dark" for="trieu_chung_chi_diem">Triệu chứng chỉ điểm và ngày xuất hiện đầu tiên</label>
            <textarea id="trieu_chung_chi_diem" name="trieu_chung_chi_diem" type="text" class="form-control ellipsis" required></textarea>
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