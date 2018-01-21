<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/gallery/header');?> 
		<div class="container">
			<h1 align="center">Đăng nhập</h1>
			<form method="post" action="<?php echo base_url()?>home/login_validata" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="login" value="LOGIN" class="btn btn-success">
				</div>
			</form>
		</div>
<?php $this->load->view('admin/gallery/footer');?>