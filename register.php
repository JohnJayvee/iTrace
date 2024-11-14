<?php include "perfect_function.php"; ?>

<!DOCTYPE html><html lang="en">
<!-- Mirrored from themesdesign.in/drixo/horizontal/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 14:36:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Drixo - Responsive Booststrap 4 Admin & Dashboard</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="ThemeDesign" name="author">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<link href="<?= base_url() ?>adminfiles/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="pb-0">

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
										</a>
									</h3>
									<h4 class="text-muted text-center font-18">
										<b>Register</b>
									</h4>

									<div class="p-3">
										<form class="form-horizontal m-t-20" action="<?= base_url() ?>register_proc.php" method="post">
											<div class="form-group row">
												<div class="col-12">
													<input class="form-control" type="text" required="" name="username" placeholder="Username" autocomplete="off">
												</div>
											</div>

											<div class="form-group row">
												<div class="col-12">
													<input class="form-control" type="password" required="" name="password" placeholder="Password" autocomplete="off">
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

											<div class="form-group text-center row m-t-20">
												<div class="col-12">
													<button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
												</div>
											</div>

											<div class="form-group m-t-10 mb-0 row">
												<div class="col-12 m-t-20 text-center">
													<a href="login.php" class="text-muted">Already have account?</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div><!-- end row -->
				</div>
			</div>
		</div>
	</div><!-- jQuery  -->

	<script src="<?= base_url() ?>adminfiles/assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>adminfiles/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>adminfiles/assets/js/modernizr.min.js"></script>
	<script src="<?= base_url() ?>adminfiles/assets/js/detect.js"></script>
	<script src="<?= base_url() ?> adminfiles/assets/js/fastclick.js"></script>
	<script src="<?= base_url() ?> adminfiles/assets/js/jquery.slimscroll.js"></script>
	<script src="<?= base_url() ?> adminfiles/assets/js/jquery.blockUI.js"></script>
	<script src="<?= base_url() ?> adminfiles/assets/js/waves.js"></script><!-- App js -->
	<script src="<?= base_url() ?> adminfiles/assets/js/app.js"></script>

</body>
<!-- Mirrored from themesdesign.in/drixo/horizontal/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 14:36:30 GMT -->
</html>