<?php include "admin_header.php"; ?>

<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">

					<br>

					<h1>Welcome <?= _get_firstname_from_id($_SESSION['user_id']) ?>,</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "admin_footer.php"; ?>