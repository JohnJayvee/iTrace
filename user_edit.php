<?php include "admin_header.php"; ?>

<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">

				<br>

				<h1 style="margin-left: 10px">User Edit</h1>

				<?php
					//get user ID from URL
					$id = $_GET['id'];

					$form_location = base_url()."user_edit_proc.php?id=".$id; 
					$table_name = "users";

					//select user record where ID (column from table) = user ID from URL 
					$get_userData = get_where($table_name, $id);

					//fetch result and pass it  to an array
					foreach ($get_userData as $key => $row) {
					$id =  $row['id'];
					$username =  $row['username'];
					$firstname =  $row['firstname'];
					$lastname = $row['lastname'];
					}
				?>

					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						<div class="row-fluid sortable">
							<div class="box span12">

									<div class="form-group">
										<label  class="control-label col-sm-2">Username:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $username ?>" name="username" autocomplete="off" readonly style="pointer:disable">
											</div>
										</div>

										<div class="form-group">
										<label  class="control-label col-sm-2">Firstname:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $firstname ?>" name="firstname" autocomplete="off">
											</div>
										</div>

										<div class="form-group">
										<label  class="control-label col-sm-2">Lastname:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $lastname ?>" name="lastname" autocomplete="off">
											</div>
										</div>


						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left: 15px">Update changes</button>
							<a class="btn" href="user_manage.php">Cancel</a>
						</div>
						
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include "admin_footer.php"; ?>