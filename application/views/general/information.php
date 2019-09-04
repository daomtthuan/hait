<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="col-12 border border-primary p-4 bg-white">
  <form>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="text-dark" for="last_name">Họ</label>
        <input id="last_name" name="last_name" type="text" class="form-control" disabled>
      </div>
      <div class="form-group col-md-6">
        <label class="text-dark" for="first_name">Tên</label>
        <input id="first_name" name="first_name" type="text" class="form-control" disabled>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-12">
        <label class="text-dark" for="company_name">Bệnh viện</label>
        <input id="company_name" name="company_name" type="text" class="form-control" disabled>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="text-dark" for="room_name">Khoa</label>
        <input id="room_name" name="room_name" type="text" class="form-control" disabled>
      </div>
      <div class="form-group col-md-6">
        <label class="text-dark" for="room_address">Địa chỉ Khoa</label>
        <input id="room_address" name="room_address" type="text" class="form-control" disabled>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="text-dark" for="company_phone">Điện thoại</label>
        <input id="company_phone" name="company_phone" type="text" class="form-control" disabled>
      </div>
      <div class="form-group col-md-6">
        <label class="text-dark" for="email">Email</label>
        <input id="email" name="email" type="text" class="form-control" disabled>
      </div>
    </div>
  </form>
</div>
<script defer src="<?php echo base_url('public/js/general/information.js') ?>"></script>