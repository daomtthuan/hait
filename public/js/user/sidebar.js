$(document).ready(function () {
  $("#form").click(function (e) {
    var form = '{"form_id":"1","step1":{"ngay_vao_khoa":"2019-08-02","ngay_vao_vien":"2019-08-02","msba":"MBA123","ngay_dieu_tra":"2019-08-01","ho_ten_bn":"Nguyễn Thành An","nam_sinh":"1995","gioi_tinh":"1","noi_chuyen_toi":"Cần Thơ","chan_doan_luc_vao":"Bình thường","ngay_ra_vien":"2019-08-08","chan_doan_xac_dinh":"Bình thường","nhiem_khuan_luc_vao":"0"},"step2":{},"step3":{"thuoc_ucmd":"0","thuoc_steroid":"1","thuoc_loet_da_day":"0","dieu_tri_hoa_hoc":"1","dieu_tri_tia_xa":"0","truyen_mau":"1","khac_step3":"Khác bước 3"},"step4":{"ho_hap_man_tinh":"0","gan_man_tinh":"0","tim_mach":"1","hiv_aids":"0","ung_thu":"0","tieu_duong":"0","than_man_tinh":"0","da_chan_thuong":"0","bong":"1","cao_huyet_ap":"0"},"step5":{"tho_may_xam_nhap":"1","dat_noi_khi_quan":"0","mo_khi_quan":"0","dat_ong_thong_tieu":"1","dat_ong_thong_tmtt":"0","duong_truyen_tmnv":"0","dat_ong_thong_da_day":"0","ngaybd_tho_may_xam_nhap":"2019-08-03","ngaybd_dat_ong_thong_tieu":"2019-08-01","ngaykt_tho_may_xam_nhap":"2019-08-22","ngaykt_dat_ong_thong_tieu":"2019-08-15"},"step6":{"phau_thuat":"1"},"step7":{"vi_tri_phau_thuat":"Bụng","ngay_phau_thuat":"0213-03-12","loai_phau_thuat":"0","implant":"1","phau_thuat_noi_soi":"0","thoi_gian":"123","diem_asa":"1","loai_vet_mo":"1","gay_me":"0","gay_te":"1","dan_luu":"0","nkvm":"0","khang_sinh_truoc_phau_thuat":[{"ma_khang_sinh":"LEV","ten_khang_sinh":"Levofloxacin","ngaybd":"0012-03-12","ngaykt":"0123-03-12","lieu":"1"}],"khang_sinh_du_phong":[{"ma_khang_sinh":"CFX","ten_khang_sinh":"Cefixim","lieu1":"0123-03-12","lieu":"1"}]},"step8":{"ket_qua_dieu_tri":"5","nam_vien":"1"}}';

    sessionStorage.form_id = JSON.parse(form).form_id;
    sessionStorage.step1 = JSON.stringify(JSON.parse(form).step1);
    sessionStorage.step2 = JSON.stringify(JSON.parse(form).step2);
    sessionStorage.step3 = JSON.stringify(JSON.parse(form).step3);
    sessionStorage.step4 = JSON.stringify(JSON.parse(form).step4);
    sessionStorage.step5 = JSON.stringify(JSON.parse(form).step5);
    sessionStorage.step6 = JSON.stringify(JSON.parse(form).step6);
    sessionStorage.step7 = JSON.stringify(JSON.parse(form).step7);
    sessionStorage.step8 = JSON.stringify(JSON.parse(form).step8);
  });
});