<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/gallery/header');?> 
		<div class="container">
			<h1 align="center">Đăng ký</h1>
			<form method="post" action="<?php echo base_url()?>home/form_validation" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
					<span class="text-danger"><?php echo form_error("name") ?></span>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control">
					<span class="text-danger"><?php echo form_error("pass") ?></span>
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" maxlength="11" name="phone" class="form-control">
					<span class="text-danger"><?php echo form_error("phone") ?></span>
				</div>
				<div class="form-group">
					<label>Adddress</label>
					<input type="text" name="address" class="form-control">
					<span class="text-danger"><?php echo form_error("address") ?></span>
				</div>
				<div class="form-group">
					<label>Avata</label>
					<input type="file" name="avata" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="insert" value="INSERT" class="btn btn-success">
				</div>
			</form>
		</div>
<?php $this->load->view('admin/gallery/footer');?>