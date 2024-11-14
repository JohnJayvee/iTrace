<?php 

include "admin_header.php"; 
include 'perfect_date.php';

?>

<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Manage Document</h4>
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#myModal" style="margin-bottom: 10px" >Add Document</button>

							<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													
								<form class="form-horizontal m-t-20" action="<?= base_url() ?>docu_create_proc.php" method="post">

							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title mt-0" id="myModalLabel">Add Document</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
									</div>

									<div class="modal-body">


									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="text" name="tracking_id" value="<?= generate_random_string(5) ?>-<?= generate_random_string(3) ?>-<?= generate_random_string(3) ?>"  readonly style="pointer:disable"  > 
										</div>
									</div>

										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" type="text" required="" name="doc_title" placeholder="Document Title" autocomplete="off">
											</div>
										</div>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="text" name="doc_details" required="" placeholder="Document Details" autocomplete="off"> 
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12">
											<select class="form-control" name="docu_type" required>
												<option value="">Select Document Type</option>

													<?php

   													 $tablename = "docu_type";
   													 $result = get($tablename);

   													 foreach ($result as $key => $row) {
        											?>
      												  <option value="<?= $row['id'] ?>"><?= $row['docu_type'] ?></option>
    											    <?php
   													 }

  													  ?>
											
											</select>
										</div>
									</div>

									<b>For</b>

									<br>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="date" name="doc_send_date" required>
											<br>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12">
											<input class="form-control" type="file" name="doc" required=""  autocomplete="off">
										</div>
									</div>

									<br>

									<div class="form-group row">
										<div class="col-12">
											By:<label> &nbsp;<?= _get_fullname_from_id($_SESSION['user_id']) ?></label>
											<input class="form-control" type="text"  name="user_id" value=" <?= $_SESSION['user_id'] ?>" style="visibility:hidden" > 
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

											<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;">
												<thead>
													<tr>
														<th>Tracking Id</th>
														<th>Document Title</th>
														<th>Document Details</th>
														<th>Docu Send Date</th>
														<th>Document</th>
														<th>Docu Type</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													 <?php 
				  										$table_name = "documents";

				  										//get all records from users table
														$user_data = get($table_name);

														//fetch result set and pass it to an array (associative)
				  										foreach ($user_data as $key => $row) {
														$doc_title = $row['doc_title'];
														$doc_details = $row['doc_details'];
														$doc_send_date = $row['doc_send_date'];
														$doc = $row['doc'];
														$docu_type = $row['docu_type'];
														$docu_type = get_docuid_from_id("docu_type",$row['docu_type']);
														$status = $row['status'];
														$status_type = get_statid_from_id("status",$row['status']);
														$id = $row['id'];
														$tracking_id = $row['tracking_id'];

				  										$docu_status_url = base_url().'docu_edit_status.php?id='.$id;
													  ?>
													<tr>
														<td class="center"><?= $tracking_id ?></td>
														<td class="center"><?= $doc_title ?></td>
														<td class="center"><?= $doc_details ?></td>
														<td class="center"><?= $doc_send_date ?></td>
														<td class="center"><?= $doc ?></td>
														<td class="center"><?= $docu_type ?></td>
														<td class="center"><?= $status_type ?></td>
														<td>
															<button class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>

															<div class="modal fade" id="delete" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
																			<h4 class="modal-title" id="myModalLabel">Delete</h4>	
																		</div>
																		
																	</div>
																	
																</div>
																
															</div>
															<a class="btn btn-info" href="<?= $docu_status_url ?>">
																<i class="halflings-icon white edit"></i> Edit Status
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