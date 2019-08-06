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
<h1 class="h3 mb-4 text-gray-800">PHIẾU GIÁM SÁT NGANG NHIỄM KHUẨN BỆNH VIỆN</h1>
<hr class="sidebar-divider">
<div class="mb-2"><small>* Vui lòng điền đầy đủ thông tin bên dưới</small></div>
<form class="mb-3 rounded-lg">
  <div class="card shadow mb-4 border-primary rounded-lg">
    <div class="card-header bg-light py-3">
      <h6 class="m-0 font-weight-bold text-primary">2. Nhiễm khuẩn bệnh viện</h6>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-12">
          <div class="table-responsive-lg">
            <table id="nkbv" class="table table-sm table-bordered" style="width:100%">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Loại nhiễm khuẩn</th>
                  <th scope="col">Biểu mẫu</th>
                  <th scope="col">Ngày xuất hiện</th>
                  <th scope="col">Triệu chứng chỉ điểm đầu tiên</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" id="viem_phoi" name="nkbv" class="custom-control-input" value="1" required checked>
                      <label class="custom-control-label" for="viem_phoi">Viêm phổi</label>
                    </div>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary mt-1 viem_phoi" data-toggle="modal" data-target="#modal_viem_phoi" disabled><i class="fas fa-edit"></i></button>
                  </td>
                  <td>
                    <input type="date" class="form-control ellipsis viem_phoi" disabled>
                  </td>
                  <td>
                    <input type="text" class="form-control ellipsis viem_phoi" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" id="nhiem_khuan_tiet_nieu" name="nkbv" class="custom-control-input" value="2" required>
                      <label class="custom-control-label" for="nhiem_khuan_tiet_nieu">Nhiễm khuẩn tiết niệu</label>
                    </div>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary mt-1 nhiem_khuan_tiet_nieu" data-toggle="modal" data-target="#modal_nhiem_khuan_tiet_nieu" disabled><i class="fas fa-edit"></i></button>
                  </td>
                  <td>
                    <input type="date" class="form-control ellipsis nhiem_khuan_tiet_nieu" disabled>
                  </td>
                  <td>
                    <input type="text" class="form-control ellipsis nhiem_khuan_tiet_nieu" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" id="nhiem_khuan_huyet" name="nkbv" class="custom-control-input" value="3" required>
                      <label class="custom-control-label" for="nhiem_khuan_huyet">Nhiễm khuẩn huyết</label>
                    </div>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary mt-1 nhiem_khuan_huyet" data-toggle="modal" data-target="#modal_nhiem_khuan_huyet" disabled><i class="fas fa-edit"></i></button>
                  </td>
                  <td>
                    <input type="date" class="form-control ellipsis nhiem_khuan_huyet" disabled>
                  </td>
                  <td>
                    <input type="text" class="form-control ellipsis nhiem_khuan_huyet" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" id="nhiem_khuan_vet_mo" name="nkbv" class="custom-control-input" value="4" required>
                      <label class="custom-control-label" for="nhiem_khuan_vet_mo">Nhiễm khuẩn vết mổ</label>
                    </div>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary mt-1 nhiem_khuan_vet_mo" data-toggle="modal" data-target="#modal_nhiem_khuan_vet_mo" disabled><i class="fas fa-edit"></i></button>
                  </td>
                  <td>
                    <input type="date" class="form-control ellipsis nhiem_khuan_vet_mo" disabled>
                  </td>
                  <td>
                    <input type="text" class="form-control ellipsis nhiem_khuan_vet_mo" disabled>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="row mt-3">
  <a id="buttonStepBack" class="btn btn-secondary ml-2" href="<?php echo base_url($role.'/form/1') ?>">Trở về</a>
  <a id="buttonStepNext" class="btn btn-primary ml-auto mr-2" href="<?php echo base_url($role.'/form/3') ?>">Kế tiếp</a>
</div>
<div id="modal_viem_phoi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="title_viem_phoi" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_viem_phoi">Viêm phổi</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="row">
          <div class="col-12 font-weight-bold">
            Triệu chứng lâm sàng
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Sốt (&gt; 38&deg;C)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_sot" name="vp_sot" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_sot">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_sot" name="vp_sot" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_sot">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Bạch cầu giảm (&lt; 4.000 BC/mm<sup>3</sup>) hoặc Bạch cầu tăng (&ge; 12.000 BC/mm<sup>3</sup>)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_bach_cau" name="vp_bach_cau" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_bach_cau">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_bach_cau" name="vp_bach_cau" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_bach_cau">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Người bệnh &ge; 70 tuổi, thay đổi trang thái tâm thần không rõ nguyên nhân</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_tam_than" name="vp_tam_than" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_tam_than">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_tam_than" name="vp_tam_than" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_tam_than">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Xuất hiện đờm mủ hoặc thay đổi tính chất đờm hoặc tăng dịch tiết hô hấp, hoặc tăng yêu cầu hút đờm</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_dom_mu" name="vp_dom_mu" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_dom_mu">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_dom_mu" name="vp_dom_mu" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_dom_mu">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Xuất hiện ho hoặc tiếng ho nặng hơn, hoặc khó thở, hoặc thở nhanh</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_ho" name="vp_ho" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_ho">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_ho" name="vp_ho" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_ho">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Rale phổi hoặc tiếng thổi thanh phế quản</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_rale" name="vp_rale" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_rale">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_rale" name="vp_rale" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_rale">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Thông khí xấu đi (VD: độ bão hòa O<sub>2</sub> (PaO<sub>2</sub>/FiO<sub>2</sub> &le; 240), tăng nhu cầu O<sub>2</sub> hoặc tăng nhu cầu thở máy)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_ho" name="vp_ho" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_ho">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_ho" name="vp_ho" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_ho">Không</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 font-weight-bold">
            Kết quả xét nghiệm thăm dò
          </div>
          <div class="col-12">
            Xét nghiệm X-quang
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Hình ảnh hang phổi</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_hang_phoi" name="vp_hang_phoi" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_hang_phoi">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_hang_phoi" name="vp_hang_phoi" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_hang_phoi">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Hình ảnh đông đặc phổi</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_dong_dac_phoi" name="vp_dong_dac_phoi" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_dong_dac_phoi">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_dong_dac_phoi" name="vp_dong_dac_phoi" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_dong_dac_phoi">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Hình ảnh thâm nhiễm mới hoặc thâm nhiễm cũ tiến triển</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_tham_nhiem" name="vp_tham_nhiem" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_tham_nhiem">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_tham_nhiem" name="vp_tham_nhiem" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_tham_nhiem">Không</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Tràn khí phổi, với trẻ em &le; 1 tuổi</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_tran_khi" name="vp_tran_khi" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_tran_khi">Có</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_tran_khi" name="vp_tran_khi" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_tran_khi">Không</label>
              </div>
            </div>
          </div>
          <div class="col-12">
            Xét nghiệm khác
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Cấy dịch tiết đường hô hấp vi rút, hoặc vi khuẩn Chlamydia</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_cay_dich" name="vp_cay_dich" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_cay_dich">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_cay_dich" name="vp_cay_dich" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_cay_dich">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Phát hiện dịch tiết đường hô hấp với kháng nguyên hoặc kháng thể vi rút (ví dụ: ELISA, FAMA, PCR)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_phat_hien" name="vp_phat_hien" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_phat_hien">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_phat_hien" name="vp_phat_hien" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_phat_hien">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Tăng 4 lần từng cặp huyết thanh (IgG) với tác nhân gây bệnh (ví dụ: vi rút cúm, vi khuẩn Chlamydia)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_tang4" name="vp_tang4" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_tang4">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_tang4" name="vp_tang4" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_tang4">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">PCR với vi khuẩn Chlamydia hoặc Mycoplasma)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_pcr" name="vp_pcr" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_pcr">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_pcr" name="vp_pcr" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_pcr">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Micro-IF với vi khuẩn Chlamydia</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_micro" name="vp_micro" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_micro">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_micro" name="vp_micro" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_micro">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Cấy dịch tiết hoặc mô đường hô hấp hoặc nhìn thấy được vi khuẩn Legionella spp bằng micro-IF</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_cay_dich_tiet" name="vp_cay_dich_tiet" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_cay_dich_tiet">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_cay_dich_tiet" name="vp_cay_dich_tiet" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_cay_dich_tiet">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4">
            <div class="form-group">
              <div class="text-dark cursor-default">Phát hiện vi khuẩn Legionella pneumophila nhóm huyết thanh 1 kháng nguyên trong nước tiểu bằng RIA hoặc ELISA</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_phat_hien_vi_khuan" name="vp_phat_hien_vi_khuan" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_phat_hien_vi_khuan">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_phat_hien_vi_khuan" name="vp_phat_hien_vi_khuan" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_phat_hien_vi_khuan">Âm tính</label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-4 pl-lg-0">
            <div class="form-group">
              <div class="text-dark cursor-default">Tăng gấp 4 lần trong L.pneumophila nhóm huyết thanh 1 giá kháng thể đến ≥1: 128 trong cặp huyết thanh cấp tính và huyết thanh hồi phục bằng IFA gián tiếp</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="co_vp_tang_gap_4" name="vp_tang_gap_4" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="co_vp_tang_gap_4">Dương tính</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="khong_vp_tang_gap_4" name="vp_tang_gap_4" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="khong_vp_tang_gap_4">Âm tính</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 font-weight-bold">
            Kết quả cấy vi sinh
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="text-dark" for="vp_ten_vi_khuan">Tên vi khuẩn</label>
              <input id="vp_ten_vi_khuan" name="vp_ten_vi_khuan" type="text" class="form-control ellipsis" required>
              <div class="invalid-feedback">Vui lòng nhập Tên vi khuẩn</div>
            </div>
          </div>
          <div class="col-12">
            <div class="text-dark cursor-default mb-2">
              Kháng sinh
              <button id="vp_them_khang_sinh" class="btn btn-primary btn-sm ml-auto" type="button" data-toggle="modal" data-target="#modal_khang_sinh"><i class="fas fa-plus"></i></button>
              <button id="vp_xoa_khang_sinh" class="btn btn-danger btn-sm ml-1" type="button"><i class='fas fa-trash-alt'></i></button>
            </div>
            <div class="col-12 border">
              <div class="table-responsive-lg my-2">
                <table id="vp_khang_sinh" class="table table-sm table-bordered table-hover" style="width:100%">
                  <thead class="thead-light">
                    <tr>
                      <th name="ma_khang_sinh" scope="col">Mã kháng sinh</th>
                      <th name="ten_khang_sinh" scope="col">Tên kháng sinh</th>
                      <th name="ngaybd" scope="col">Kết quả</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal_nhiem_khuan_tiet_nieu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="title_nhiem_khuan_tiet_nieu" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_nhiem_khuan_tiet_nieu">Nhiễm khuẩn tiết niệu</h5>
      </div>
      <div class="modal-body was-validated">

      </div>
    </div>
  </div>
</div>
<div id="modal_nhiem_khuan_huyet" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="title_nhiem_khuan_huyet" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_nhiem_khuan_huyet">Nhiễm khuẩn huyết</h5>
      </div>
      <div class="modal-body was-validated">

      </div>
    </div>
  </div>
</div>
<div id="modal_nhiem_khuan_vet_mo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="title_nhiem_khuan_vet_mo" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_nhiem_khuan_vet_mo">Nhiễm khuẩn vết mổ</h5>
      </div>
      <div class="modal-body was-validated">

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_khang_sinh" tabindex="-1" role="dialog" aria-labelledby="title_khang_sinh" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="title_khang_sinh">Thêm kháng sinh</h5>
      </div>
      <div class="modal-body was-validated">
        <div class="form-group">
          <label for="select_khang_sinh">Tên kháng sinh</label>
          <select id="select_khang_sinh" class="select_khang_sinh custom-select" required>
            <option disabled selected value style="display: none"></option>
          </select>
          <div class="invalid-feedback">Vui lòng chọn loại Kháng sinh trước phẫu thuật</div>
        </div>
        <div class="form-group">
          <label for="lieu_khang_sinh">Kết quả</label>
          <input type="text" class="form-control" id="lieu_khang_sinh" required>
          <div class="invalid-feedback">Vui lòng nhập Liều/đơn dùng</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
        <button id="submit_khang_sinh" type="button" class="btn btn-primary">Thêm vào</button>
      </div>
    </div>
  </div>
</div>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" integrity="sha256-t5ZQTZsbQi8NxszC10CseKjJ5QeMw5NINtOXQrESGSU=" crossorigin="anonymous" defer></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js" integrity="sha256-hJ44ymhBmRPJKIaKRf3DSX5uiFEZ9xB/qx8cNbJvIMU=" crossorigin="anonymous" defer></script>
<script defer src="<?php echo base_url('public/js/tools/form/step2.js') ?>"></script>