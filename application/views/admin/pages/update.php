<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/gallery/header');?> 
		<div class="container">
			<h1 align="center">Update</h1>
			<form method="post" action="<?php echo base_url(); ?>home/form_validation" enctype="multipart/form-data">
				<?php foreach ($user_data->result() as $row){ ?>
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" type="text" name="name" value="<?php echo $row->name;?>" >
						<span class="text-danger"><?php echo form_error("name"); ?></span>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" maxlength="11" name="phone" value="<?php echo $row->phone; ?>" class="form-control">
						<span class="text-danger"><?php echo form_error("phone"); ?></span>
					</div>
					<div class="form-group">
						<label>Adddress</label>
						<input type="text" name="address" value="<?php echo $row->address; ?>" class="form-control">
						<span class="text-danger"><?php echo form_error("address"); ?></span>
					</div>
					<div class="form-group">
						<label>Avata</label>
						<input type="file" name="avata" class="form-control">
					</div>
					<div class="form-group">
						<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>">
						<input type="submit" name="update" value="UPDATE" class="btn btn-success">
					</div>
				<?php } ?>
			</form>
		</div>
<?php $this->load->view('admin/gallery/footer');?>