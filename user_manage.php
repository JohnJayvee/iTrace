<?php include "admin_header.php"; ?>


<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Manage Account</h4>
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#myModal" style="margin-bottom: 10px" >Add User</button>

							<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													
								<form class="form-horizontal m-t-20" action="<?= base_url() ?>user_create_proc.php" method="post">

							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title mt-0" id="myModalLabel">Create Account</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
									</div>

									<div class="modal-body">
										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" type="text" required="" name="username" placeholder="Username" autocomplete="off">
											</div>
										</div>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="password" required="" name="password" placeholder="Password" minlength="5" maxlength="8" autocomplete="off">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="email" name="email" required="" placeholder="Email" autocomplete="off"> 
										</div>
									</div>
											
									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="text" required="" name="firstname" placeholder="Firstname" autocomplete="off">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="text" required="" name="lastname" placeholder="Lastname" autocomplete="off">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12">
											<select class="form-control" name="acct_type" required>
												<option value="">Select Account Type</option>
												<option value="1">Admin</option>
												<option value="2">User</option>
											</select>
										</div>
									</div>
										
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
										<button class="btn btn-primary waves-effect waves-light" type="submit">Save changes</button>
									</div>
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</form>
												</div><!-- /.modal -->

											<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
												<thead>
													<tr>
														<th>Username</th>
														<th>First Name</th>
														<th>Last Name</th>
														<th>Account Type</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													 <?php 
				  										$table_name = "users";

				  										//get all records from users table
														$user_data = get($table_name);

														//fetch result set and pass it to an array (associative)
				  										foreach ($user_data as $key => $row) {
														$fname = $row['firstname'];
														$lname = $row['lastname'];
														$username = $row['username'];
														$acct_type = $row['acct_type'];
														$id = $row['id'];

				  										$edit_user_url = base_url().'user_edit.php?id='.$id;
				  										$delete_user_url = base_url().'user_deleteconf.php?id='.$id;
													  ?>
													<tr>
														<td class="center"><?= $username ?></td>
														<td class="center"><?= $fname ?></td>
														<td class="center"><?= $lname ?></td>
														<td><?php
																if($acct_type==1) {
															?>
																<span class="label label-info">Admin</span>
															<?php
																} else {
															?>
																<span class="label label-warning">User</span>
															<?php
																}
															?>
														</td>
														<td>
															<a class="btn btn-danger" href="<?= $delete_user_url ?>">
																<i class="halflings-icon white edit"></i> Delete
															</a>

															<a class="btn btn-info" href="<?= $edit_user_url ?>">
																<i class="halflings-icon white edit"></i> Edit
															</a>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- end col -->
							</div><!-- end row -->

<?php include "admin_footer.php"; ?>