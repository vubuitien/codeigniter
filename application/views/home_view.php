<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/gallery/header');?> 
		<div class="container">
			<h1 align="center">Danh sách người dùng</h1>
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
<?php $this->load->view('admin/gallery/footer');?>
