<?php include "admin_header.php"; ?>


<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">

<h1 class="page-header">Delete Document</h1>

<!-- main content -->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Confirm Delete</h2>
		</div>
		<div class="box-content">
			<p>
				Are you sure you want to delete the Document?
			</p>

			<?php
				//get user ID from URL
				$id = $_GET['id']; 
				$form_location = base_url()."docu_delete_proc.php?id=".$id; 
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
			  <fieldset>
				<div class="control-group" style="height:200px;">
					<button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-danger">Yes - Delete Document</button>
					<a href="docu_manage.php" type="submit" class="btn btn-primary" style="border: 0" name="submit" value="Cancel" class="btn">Cancel</a>
				</div>
			  </fieldset>
			</form> 
		</div>
	</div><!--/span-->
</div><!--/row-->


</div>
</div>
</div>
</div>
</div>
<!-- close main content -->
<?php include "admin_footer.php"; ?>	