function setText(name) {
  var value = $("#" + name).val();
  if (value != "") sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
}

function setRadio(name) {
  var value = $("[name='" + name + "']:checked").val();
  if (value != undefined) sessionStorage.setItem(name, value);
  else sessionStorage.removeItem(name);
  if (name == "dan_luu") {
    setRadio("dan_luu_tai_vm");
    setRadio("dan_luu_ngoai_vm");
    setRadio("dan_luu_kin");
    setText("so_ngay_dat_dan_luu");
  }
  else if (name == "nkvm") {
    setRadio("loai_nhiem_khuan_vm");
    setRadio("bieu_hien_sot");
    setRadio("bieu_hien_do");
    setRadio("bieu_hien_sung");
    setRadio("bieu_hien_dau");
    setRadio("phau_thuat_lai");
    setRadio("dich_vet_mo");
    setRadio("toac_vet_mo_tu_nhien");
    setRadio("chu_dong_mo_vm");
    setRadio("chay_mu");
    setText("trieu_chung_chi_diem");
  }
}

function getText(name) {
  $("#" + name).val(sessionStorage.getItem(name));
}

function getRadio(name) {
  $("[name='" + name + "'][value='" + sessionStorage.getItem(name) + "']").prop("checked", true);
  if (name == "dan_luu" || name == "nkvm") {
    if ($(".step-option [name='" + name + "'][type='radio'][value='1']").is(":checked")) {
      $("." + name).fadeIn(200);
      $("." + name + " input").removeAttr("readonly");
      $("." + name + " textarea").removeAttr("readonly");
      if (name == "dan_luu") {
        getRadio("dan_luu_tai_vm");
        getRadio("dan_luu_ngoai_vm");
        getRadio("dan_luu_kin");
        getText("so_ngay_dat_dan_luu");
      }
      else {
        getRadio("loai_nhiem_khuan_vm");
        getRadio("bieu_hien_sot");
        getRadio("bieu_hien_do");
        getRadio("bieu_hien_sung");
        getRadio("bieu_hien_dau");
        getRadio("phau_thuat_lai");
        getRadio("dich_vet_mo");
        getRadio("toac_vet_mo_tu_nhien");
        getRadio("chu_dong_mo_vm");
        getRadio("chay_mu");
        getText("trieu_chung_chi_diem");
      }
    }
  }
}

$(document).ready(function () {

  $.getJSON(json, function (data) {
    data.forEach(function (element, index) {
      $("#select_khang_sinh_truoc_phau_thuat").append("<option value='" + element.ma_khang_sinh + "'>" + element.ten_khang_sinh + "</option>");
    });
  });

  getText("vi_tri_phau_thuat");
  getText("ngay_phau_thuat");
  getRadio("loai_phau_thuat");
  getRadio("implant");
  getRadio("phau_thuat_noi_soi");
  getText("thoi_gian");
  getRadio("diem_asa");
  getRadio("loai_vet_mo");
  getRadio("gay_me");
  getRadio("gay_te");
  getRadio("dan_luu");
  getRadio("nkvm");

  $(".step-option [type='radio']").on("click", function () {
    if ($(this).val() == "1") {
      $("." + $(this).attr("name")).fadeIn(200);
      $("." + $(this).attr("name") + " input").removeAttr("readonly");
      $("." + $(this).attr("name") + " textarea").removeAttr("readonly");
    }
    else {
      $("." + $(this).attr("name")).fadeOut(200);
      $("." + $(this).attr("name") + " input[type='radio']").attr("readonly", "readonly").prop("checked", false);
      $("." + $(this).attr("name") + " input[type!='radio']").attr("readonly", "readonly").val(null);
      $("." + $(this).attr("name") + " textarea").attr("readonly", "readonly").val(null);
    }
  });

  var khang_sinh_truoc_phau_thuat = $("#khang_sinh_truoc_phau_thuat").DataTable({
    "language": {
      "decimal": "",
      "emptyTable": "Không có dữ liệu",
      "info": "Hiển thị từ _START_ đến _END_ trong _TOTAL_ dòng",
      "infoEmpty": "",
      "infoFiltered": "(được lọc ra từ _MAX_ dòng)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Số dòng hiển thị _MENU_",
      "loadingRecords": "Đang tải...",
      "processing": "Đang xử lý...",
      "search": "Tìm kiếm",
      "zeroRecords": "Không tìm thấy",
      "paginate": {
        "first": "Đầu tiên",
        "last": "Cuối cùng",
        "next": "Kế tiếp",
        "previous": "Trở về"
      },
      "aria": {
        "sortAscending": ": sắp xếp tăng dần",
        "sortDescending": ": sắp xếp giảm dần"
      }
    }
  });

  $("#submit_khang_sinh_truoc_phau_thuat").on("click", function () {
    khang_sinh_truoc_phau_thuat.row.add([
      "<button type='button' class='btn btn-sm btn-danger buttonDelete'><i class='fas fa-trash-alt'></i></button>",
      $("#select_khang_sinh_truoc_phau_thuat").val(),
      $("#ngaybd_khang_sinh_truoc_phau_thuat").val(),
      $("#ngaykt_khang_sinh_truoc_phau_thuat").val(),
      $("#lieu_khang_sinh_truoc_phau_thuat").val(),
    ]).draw(true);

    $(".buttonDelete").on("click", function () {
      $(this).closest("tr").remove();
    });
  });


  $(".dataTables_wrapper>:first-child>div").attr("class", "col-sm-12 col-lg-6");
  $(".dataTables_length label select").addClass("ml-1");
  $(".dataTables_filter label input").addClass("ml-2");

  $("#buttonStepNext").click(function (event) {
    setText("vi_tri_phau_thuat");
    setText("ngay_phau_thuat");
    setRadio("loai_phau_thuat");
    setRadio("implant");
    setRadio("phau_thuat_noi_soi");
    setText("thoi_gian");
    setRadio("diem_asa");
    setRadio("loai_vet_mo");
    setRadio("gay_me");
    setRadio("gay_te");
    setRadio("dan_luu");
    setRadio("nkvm");
  });

  $("#buttonStepBack").click(function () {
    setText("vi_tri_phau_thuat");
    setText("ngay_phau_thuat");
    setRadio("loai_phau_thuat");
    setRadio("implant");
    setRadio("phau_thuat_noi_soi");
    setText("thoi_gian");
    setRadio("diem_asa");
    setRadio("loai_vet_mo");
    setRadio("gay_me");
    setRadio("gay_te");
    setRadio("dan_luu");
    setRadio("nkvm");
  });

});