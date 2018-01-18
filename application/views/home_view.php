<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to My First CodeIgniter Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
</head>
<body> 
		<div class="container">
			
			<h1 align="center">INSERT DATA</h1>
			<form method="post" action="<?php echo base_url()?>home/form_validation" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
					<span class="text-danger"><?php echo form_error("name") ?></span>
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
		
		    <div class="table-responsive">
		      	<table class="table table-bordered">
		      		<tr>
		      			<th>ID</th>
		      			<th>Name</th>
		      			<th>Phone</th>
		      			<th>Address</th>
		      			<th>Avata</th>
		      			<th></th>
		      			<th></th>
		      		</tr>
		      		<?php if($fetch_data->num_rows() > 0) {
		      			foreach ($fetch_data->result() as $row) { 
		      		?>
		      			<tr>
		      				<td><?php echo $row->id; ?></td>
		      				<td><?php echo $row->name; ?></td>
		      				<td><?php echo $row->phone; ?></td>
		      				<td><?php echo $row->address; ?></td>
		      				<td><img src="<?php echo base_url("uploads/".$row->avata) ?>" width="100" height="100" alt=""></td>
		      				<td><a class="btn btn-warning" href="<?php echo base_url(); ?>home/update_data/<?php echo $row->id; ?>">EDIT</a></td>
		      				<td><a class="btn btn-danger delete_data" id="<?php echo $row->id; ?>" href="#">DELETE</a></td>
		      			</tr>
		      		<?php 
		      			}
		      		}else{
		      		?>
		      			<tr>
		      				<td colspan="5">Không có dữ liệu</td>
		      			</tr>
		      		<?php 
		      		}
		      		?>
		      	</table>
		    </div>
	    </div>
</body>
</html>