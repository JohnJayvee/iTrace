<?php include "admin_header.php"; ?>

<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">

				<br>

				<h1 style="margin-left: 10px">Document Status Edit</h1>

				<?php
					//get user ID from URL
					$id = $_GET['id'];

					$form_location = base_url()."docu_status_proc.php?id=".$id; 
					$table_name = "documents";

					//select user record where ID (column from table) = user ID from URL 
					$get_userData = get_where($table_name, $id);

					//fetch result and pass it  to an array()ray
					foreach ($get_userData as $key => $row) {
					$id =  $row['id'];
					$tracking_id =  $row['tracking_id'];
					$doc_details =  $row['doc_details'];
					$doc_title = $row['doc_title'];
					$doc_send_date = $row['doc_send_date'];
					$doc_type = $row['docu_type'];
					$status = $row['status'];
					}
				?>

					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						<div class="row-fluid sortable">
							<div class="box span12">

									<div class="form-group">
										<label  class="control-label col-sm-2">Tracking Id:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $tracking_id ?>" name="tracking_id" autocomplete="off" readonly style="pointer:disable">
											</div>
										</div>

										<div class="form-group">
										<label  class="control-label col-sm-2">Document Title:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $doc_title ?>" name="doc_title" autocomplete="off" readonly style="pointer:disable">
											</div>
										</div>

										<div class="form-group">
										<label  class="control-label col-sm-2">Document Detail:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $doc_details ?>" name="doc_details" autocomplete="off" readonly style="pointer:disable">
											</div>
										</div>

										<div class="form-group">
										<label  class="control-label col-sm-2">Send Date:</label>
												 <div class="col-sm-10"> 
												<input class="form-control" type="text" required="" value="<?= $doc_send_date ?>" name="doc_send_date" autocomplete="off" readonly style="pointer:disable">
											</div>
										</div>

										<div class="form-group">
											<label  class="control-label col-sm-2">Document Type:</label>
											<div class="col-sm-10">
											 <select class="form-control" name="docu_type" required="" autocomplete="off" readonly style="pointer:disable">
								<option value="<?= $doc_type ?>">
							<?php
							if($doc_type==1) {
							?>
							<span class="label label-info">Reports</span>
							<?php
							} elseif ($doc_type == 2){
							?>
							<span class="label label-warning">Letter</span>
							<?php
							} elseif ($doc_type == 3) {
							?>
							<span class="label label-warning">Endorsement</span>
							<?php
							} elseif ($doc_type == 4) {
							?>
							<span class="label label-warning">Travel Order</span>
							<?php
							} elseif ($doc_type == 5) {
							?>
							<span class="label label-warning">Program of Work</span>
							<?php
							} elseif ($doc_type == 6) {
							?>
							<span class="label label-warning">Contract of Service</span>
							<?php
							} elseif ($doc_type == 7) {
							?>
							<span class="label label-warning">Memorandum of Agreement</span>
							<?php
							} elseif ($doc_type == 8) {
							?>
							<span class="label label-warning">Form-6 Travel Permit</span>
							<?php
							} elseif ($doc_type == 9) {
							?>
							<span class="label label-warning">Form-7 Payroll</span>
							<?php
							} elseif ($doc_type == 10) {
							?>
							<span class="label label-warning">SARO</span>
							<?php
							} elseif ($doc_type == 11) {
							?>
							<span class="label label-warning">NOSCA</span>
							<?php
							} elseif ($doc_type == 12) {
							?>
							<span class="label label-warning">Loan of Application</span>

							<?php
							}
							?>
								</option>


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

								<div class="form-group">
									<label  class="control-label col-sm-2">Document Status:</label>
									<div class="col-sm-10">
									<select class="form-control" name="status" required value="<?= $status ?>">
								<option value="">
							<?php
							if($status==1) {
							?>
							<span class="label label-info">On Progress</span>
							<?php
							} elseif ($status == 2){
							?>
							<span class="label label-warning">Received</span>
							<?php
							} elseif ($status == 3) {
							?>
							<span class="label label-warning">On Review</span>
							<?php
							} elseif ($status == 4) {
							?>
							<span class="label label-warning">Complete</span>
							<?php
							}
							?>
								</option>


									<?php

   									 $tablename = "status";
   									 $result = get($tablename);

									 foreach ($result as $key => $row) {
									?>
      								  <option value="<?= $row['id'] ?>"><?= $row['status'] ?></option>
   								    <?php
   									}

  									  ?>
											
							</select>

									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-10">
									By:<label> &nbsp;<?= _get_fullname_from_id($_SESSION['user_id']) ?></label>
										
											<input class="form-control" type="text"  name="user_id" value=" <?= $_SESSION['user_id'] ?>" style="visibility:hidden" > 
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