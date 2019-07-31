<script>
  var completed = sessionStorage.getItem("completed");
  if (completed < 6) window.location = "<?php echo base_url('user/new-form/')?>" + "/" + completed;
  else {
    var part = sessionStorage.getItem("phau_thuat");

    if (part == 1) {
      sessionStorage.removeItem("khang_sinh");
      sessionStorage.removeItem("muc_dich_su_dung");
    }
    else {
      sessionStorage.removeItem("vi_tri_phau_thuat");
      sessionStorage.removeItem("ngay_phau_thuat");
      sessionStorage.removeItem("loai_phau_thuat");
      sessionStorage.removeItem("implant");
      sessionStorage.removeItem("phau_thuat_noi_soi");
      sessionStorage.removeItem("thoi_gian");
      sessionStorage.removeItem("diem_asa");
      sessionStorage.removeItem("loai_vet_mo");
      sessionStorage.removeItem("gay_me");
      sessionStorage.removeItem("gay_te");

      if (sessionStorage.getItem("dan_luu") == 1) {
        sessionStorage.removeItem("dan_luu_tai_vm");
        sessionStorage.removeItem("dan_luu_ngoai_vm");
        sessionStorage.removeItem("dan_luu_kin");
        sessionStorage.removeItem("so_ngay_dat_dan_luu");
      }
      sessionStorage.removeItem("dan_luu");

      if (sessionStorage.getItem("nkvm") == 1) {
        sessionStorage.removeItem("loai_nhiem_khuan_vm");
        sessionStorage.removeItem("bieu_hien_sot");
        sessionStorage.removeItem("bieu_hien_do");
        sessionStorage.removeItem("bieu_hien_sung");
        sessionStorage.removeItem("bieu_hien_dau");
        sessionStorage.removeItem("phau_thuat_lai");
        sessionStorage.removeItem("dich_vet_mo");
        sessionStorage.removeItem("toac_vet_mo_tu_nhien");
        sessionStorage.removeItem("chu_dong_mo_vm");
        sessionStorage.removeItem("chay_mu");
        sessionStorage.removeItem("trieu_chung_chi_diem");
      }
      sessionStorage.removeItem("nkvm");
    }

    window.location = "<?php echo base_url('user/new-form/')?>" + "7-" + part;
  }
</script>