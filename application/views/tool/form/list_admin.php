<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
  const
    formApi = "<?php echo base_url('ajax/form/get/form') ?>/",
    viewUrl = "<?php echo base_url('admin/form/view/1') ?>",
    listApi = "<?php echo base_url('ajax/form/get/list') ?>/";
</script>
<div class="col-12 border border-primary p-4 bg-white">
  <div class="row">
    <div class="col-lg-4"><button id="unfinished" class="btn-show btn btn-secondary btn-block my-2">Chưa hoàn thành</button></div>
    <div class="col-lg-4 col-sm-6"><button id="verifying" class="btn-show btn btn-secondary btn-block my-2">Chờ kiểm duyệt</button></div>
    <div class="col-lg-4 col-sm-6"><button id="verified" class="btn-show btn btn-secondary btn-block my-2">Đã kiểm duyệt</button></div>
  </div>
  <hr>
  <div class="table-responsive-lg my-2">
    <table id="list" class="table table-sm table-bordered table-hover" style="width:100%">
      <thead class="thead-light">
        <tr>
          <th scope="col">Ngày tạo</th>
          <th scope="col">Mã số bệnh án</th>
          <th scope="col">Họ tên bệnh nhân</th>
          <th scope="col">Năm sinh</th>
          <th scope="col">Thao tác</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" integrity="sha256-t5ZQTZsbQi8NxszC10CseKjJ5QeMw5NINtOXQrESGSU=" crossorigin="anonymous" defer></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js" integrity="sha256-hJ44ymhBmRPJKIaKRf3DSX5uiFEZ9xB/qx8cNbJvIMU=" crossorigin="anonymous" defer></script>
<script defer src="<?php echo base_url('public/js/tool/form/list_'.$role.'.js') ?>"></script>