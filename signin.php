<?php
include('src/functions.php');
include('src/config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>SPA Pathcare : Sign In</title>
		<?php include('src/head.php') ?>
	</head>

	<body>

		<?php include('src/preload.php') ?>
		<!--=========== BEGIN HEADER SECTION ================-->
		<?php include('src/header.php') ?>
		<!--=========== END HEADER SECTION ================-->

		<?php
		$email = $pwd = '';
		if (isset($_POST['login'])) {
			$email = $_POST['mail'];
			$pwd = $_POST['pwd'];
			$stmt = mysqli_prepare($con, "SELECT * FROM client WHERE email=? and password=?");
			mysqli_stmt_bind_param($stmt, "ss", $email, $pwd);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				$_SESSION['user_data'] = $row;
				$_SESSION['user_type'] = "client";
				alert_and_redirect("Signed in Sucessfully", "index.php");
			} else {
				$qry3 = mysqli_query($con, "SELECT * FROM admin WHERE email='$email' and password='$pwd'");
				$qry4 = mysqli_num_rows($qry3);
				if ($qry4) {
					$row = mysqli_fetch_array($qry3);
					$_SESSION['user_data'] = $row;
					$_SESSION['user_type'] = "admin";
					alert_and_redirect("Signed in Sucessfully", "index.php");
				} else {
					$qry5 = mysqli_query($con, "SELECT * FROM doctor WHERE email='$email' and password='$pwd'");
					$qry6 = mysqli_num_rows($qry5);
					if ($qry6) {
						$row = mysqli_fetch_array($qry5);
						$_SESSION['user_data'] = $row;
						$_SESSION['user_type'] = "doctor";
						alert_and_redirect("Signed in Sucessfully", "index.php");
					} else {
						alert("Wrong email ID or password");
					}
				}
			}
		}
		echo youAreHere("Sign In");
		?>
		<!--=========== BEGIN SIGNIN SECTION ================-->
		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service-area">
							<!-- Start Service Title -->
							<div class="section-heading">
								<h2>Sign In</h2>
								<div class="line"></div>
							</div>
							<div class="service-content">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<form class="appointment-form" method="post">
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<label class="control-label">Email
														<span class="required">*</span>
													</label>
													<input type="email" class="wp-form-control wpcf7-text" placeholder="Email address" name="mail"
														value="<?= $email ?>" required>
												</div>
												<div class="col-lg-2 col-md-2"></div>
											</div>
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<label class="control-label">Password <span class="required">*</span></label>
													<input type="password" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd"
														value="<?= $pwd ?>" required>
												</div>
												<div class="col-lg-2 col-md-2"></div>
											</div>
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<button class="wpcf7-submit button--itzel" name="login" type="submit">
														<i class="button__icon fa fa-share"></i><span>Sign In</span>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=========== END SIGNIN SECTION ================-->

		<!--=========== BEGIN Counter SECTION ================-->
		<?php include('src/counter.php') ?>
		<!--=========== End Counter SECTION ================-->

		<!--=========== Start Footer SECTION ================-->
		<?php include('src/footer.php') ?>
		<!--=========== End Footer SECTION ================-->

		<?php include('src/incfooter.php') ?>
	</body>

</html>
