<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
</head>
<body>


<!-- Nofication goes here  -->
<?php 

$msg = $this->session->flashdata('msg'); 
if(isset($msg)){
	print_r($msg);
}?>
<!-- Nofication ends  -->




<!-- Form started here  -->
<fieldset>
	<legend>Task</legend>
	<form action="<?php echo base_url();?>index.php/welcome/action" method="post">
	<table>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="<?php if(isset($edit_data->name)){ echo $edit_data ->name; } ?>" > <br> <br></td>
		</tr>
		<tr>
			<td>Description :</td>
			<td><textarea name="description"><?php if(isset($edit_data->description)){ echo $edit_data ->description; } ?></textarea> <br></td>
		</tr>

		<!-- Hidden id for update  -->
		<input type="hidden" name="hidden_id" value="<?php if(isset($edit_data->id)){ echo $edit_data->id; } ?>">
		<tr>
			<td><input type="submit" value="Submit"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>

	</table>      
</form>
</fieldset>

<!-- List the details here  -->
<fieldset>
	<legend>Task Details</legend>
	<table border="1" style="border-collapse:collapse" cellpadding="10">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			
			<?php 
				$i = 1;
				foreach($data as $d): 
				echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$d->name.'</td>
				<td>'.$d->description.'</td>
				<td><a href="'.base_url().'index.php/welcome/task/'.$d->id.'">Edit</a></td>
				<td><a href="'.base_url().'index.php/welcome/delete/'.$d->id.'">Delete</a></td>
				</tr>';
			 endforeach; ?> 
			
		</tbody>
	</table>
</fieldset>
<div align="right">
<h5>Developed By <br> E.Boominathan</h5>
</div>
</body>
</html>