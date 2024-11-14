<?php include "perfect_function.php"; 
session_start(); ?>


<!DOCTYPE html><html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>iTrace - Document Tracking System</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="ThemeDesign" name="author">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="<?= base_url() ?>aadminfiles/assets/images/favicon.ico">
	<link href="<?= base_url() ?>adminfiles/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="pb-0">

	<!-- Begin page -->
	<div class="accountbg">
		<div class="content-center">
			<div class="content-desc-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-8">
							<div class="card">
								<div class="card-body">
									<h3 class="text-center mt-0 m-b-15">
										<a href="index.html" class="logo logo-admin">
											<img src="adminfiles/assets/images/tracker.png" height="60" alt="logo"></a>
										</h3>
										<h4 class="text-muted text-center font-18">
											<b>Sign In</b>
										</h4>
										<div class="p-2">
											<form class="form-horizontal m-t-20" action="<?= base_url() ?>login_proc.php" method="post">
												<div class="form-group row">
													<?php
														if (isset($_SESSION['error_msg'])) {
													?>
													<div class="alert alert-warning" style="margin: 24px;">
														<?= $_SESSION['error_msg'] ?>
													</div>
													<?php
														}
														unset($_SESSION['error_msg']);
													?>
													<div class="col-12">
														<input class="form-control" type="text" required="" name="username" autocomplete="off" placeholder="Username"></div>
													</div>
													<div class="form-group row">
														<div class="col-12"><input class="form-control" type="password" name="password" autocomplete="off" required="" placeholder="Password">
													</div>
													</div>
													<div class="form-group text-center row m-t-20">
														<div class="col-12">
															<button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
														</div>
													</div>
													<div class="form-group m-t-10 mb-0 row">
														<div class="col-sm-7 m-t-20">
					
															</div>
															<div class="col-sm-5 m-t-20">
																<a href="register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end row -->
							</div>
						</div>
					</div>
				</div>
				<!-- jQuery  -->
				<script src="<?= base_url() ?>adminfiles/assets/js/jquery.min.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/bootstrap.bundle.min.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/modernizr.min.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/detect.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/fastclick.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/jquery.slimscroll.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/jquery.blockUI.js"></script>
				<script src="<?= base_url() ?>adminfiles/assets/js/waves.js"></script>
				<!-- App js -->
				<script src="<?= base_url() ?>adminfiles/assets/js/app.js"></script>
			</body>

</html>