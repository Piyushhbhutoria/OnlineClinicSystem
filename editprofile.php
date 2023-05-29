<?php
include('src/functions.php');
include('src/config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>SPA Pathcare : Edit Profile</title>
		<?php include('src/head.php') ?>
	</head>

	<body>

		<?php include('src/preload.php') ?>
		<!--=========== BEGIN HEADER SECTION ================-->
		<?php include('src/header.php') ?>
		<!--=========== END HEADER SECTION ================-->

		<?php
		include('src/session_check.php');
		if (isset($_POST['update'])) {
			$id = $_SESSION['user_data']['id'];
			$email = $_POST['mail'];
			$phno = $_POST['phno'];
			if ($_SESSION['user_type'] == "client") {
				$name = $_POST['nam'];
				$addr = $_POST['addr'];
				$res = mysqli_query($con, "UPDATE client SET name = '$name',email = '$email',address = '$addr',phone = '$phno' WHERE id = '$id' ");
				$qry1 = mysqli_query($con, "SELECT * FROM client WHERE email='$email'");
				$qry2 = mysqli_num_rows($qry1);
				$row = mysqli_fetch_array($qry1);
				$_SESSION['user_data'] = $row;
			} else if ($_SESSION['user_type'] == "admin") {
				$res = mysqli_query($con, "UPDATE admin SET email = '$email',phone = '$phno' WHERE id = '$id' ");
				$qry3 = mysqli_query($con, "SELECT * FROM admin WHERE email='$email'");
				$qry4 = mysqli_num_rows($qry3);
				$row = mysqli_fetch_array($qry3);
				$_SESSION['user_data'] = $row;
			} else if ($_SESSION['user_type'] == "doctor") {
				$addr = $_POST['addr'];
				$res = mysqli_query($con, "UPDATE doctor SET address = '$addr',email = '$email',phone = '$phno' WHERE id = '$id' ");
				$qry5 = mysqli_query($con, "SELECT * FROM doctor WHERE email='$email'");
				$qry6 = mysqli_num_rows($qry5);
				$row = mysqli_fetch_array($qry5);
				$_SESSION['user_data'] = $row;
			}
			if ($res == 1) {
				alert("Details Updated");
			} else {
				alert("Details not Updated");
			}
		}
		if (isset($_POST['update_pass'])) {
			$pwd = $_POST['pwd'];
			$repwd = $_POST['repwd'];
			if ($pwd == $repwd) {
				if ($_SESSION['user_type'] == "client") {
					$res = mysqli_query($con, "UPDATE client SET password='$pwd' WHERE id='$id' ");
				} else if ($_SESSION['user_type'] == "admin") {
					$res = mysqli_query($con, "UPDATE admin SET password='$pwd' WHERE id='$id' ");
				} else if ($_SESSION['user_type'] == "doctor") {
					$res = mysqli_query($con, "UPDATE doctor SET password='$pwd' WHERE id='$id' ");
				}
				if ($res == 1) {
					alert("password Updated Successfully!");
				} else {
					alert("password not Updated");
				}
			} else {
				alert("Passwords Doesn\'t match.");
			}
		}
		echo youAreHere("Edit Profile");
		?>

		<!--=========== BEGAIN Doctors SECTION ================-->
		<?php if ($_SESSION['user_type'] == "client" || $_SESSION['user_type'] == "doctor") { ?>
			<section id="service">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="service-area">
								<!-- Start Service Title -->
								<div class="section-heading">
									<h2>Update Profile Picture</h2>
									<div class="line"></div>
								</div>
								<div class="service-content">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<form class="appointment-form" method="post" enctype="multipart/form-data" action="uploaddp.php">
												<div class="row">
													<div class="col-lg-12 col-md-12">
														<div class="single-testimonial1">
															<div class="testimonial-img">
																<?php if ($_SESSION['user_data']['dp'] != NULL) { ?>
																	<img src="<?= $_SESSION['user_data']['dp'] ?>">
																<?php } ?>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<input type="file" class="wp-form-control wpcf7-text" name="img">
													</div>
													<div class="col-lg-2 col-md-2"></div>
												</div>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<button class="wpcf7-submit button--itzel" name="dpok" type="submit">
															<i class="button__icon fa fa-share"></i><span>Upload</span>
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
			<?php
		}
		?>
		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service-area">
							<!-- Start Service Title -->
							<div class="section-heading">
								<h2>Update Profile</h2>
								<div class="line"></div>
							</div>
							<div class="service-content">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<form class="appointment-form" method="post">
											<?php if ($_SESSION['user_type'] == "client") { ?>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<label class="control-label">Name <span class="required">*</span></label>
														<input type="text" class="wp-form-control wpcf7-text"
															value="<?= $_SESSION['user_data']['name'] ?>" name="name" required>
													</div>
													<div class="col-lg-2 col-md-2"></div>
												</div>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<label class="control-label">Email <span class="required">*</span>
														</label>
														<input type="email" class="wp-form-control wpcf7-email"
															value="<?= $_SESSION['user_data']['email'] ?>" name="mail" required>
													</div>
													<div class="col-lg-2 col-md-2"></div>
												</div>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<label class="control-label">Address <span class="required">*</span>
														</label>
														<input type="text" class="wp-form-control wpcf7-email"
															value="<?= $_SESSION['user_data']['address'] ?>" name="addr" required>
													</div>
													<div class="col-lg-2 col-md-2"></div>
												</div>
												<div class="row">
													<div class="col-lg-2 col-md-2"></div>
													<div class="col-lg-8 col-md-8 col-sm-6">
														<label class="control-label">Phone <span class="required">*</span>
														</label>
														<input type="number" class="wp-form-control wpcf7-text"
															value="<?= $_SESSION['user_data']['phone'] ?>" name="phno" required>
													</div>
													<div class="col-lg-2 col-md-2"></div>
												</div>
											<?php } else if ($_SESSION['user_type'] == "admin") { ?>
													<div class="row">
														<div class="col-lg-2 col-md-2"></div>
														<div class="col-lg-8 col-md-8 col-sm-6">
															<label class="control-label">Email <span class="required">*</span></label>
															<input type="email" class="wp-form-control wpcf7-email"
																value="<?= $_SESSION['user_data']['email'] ?>" name="mail" required>
														</div>
														<div class="col-lg-2 col-md-2"></div>
													</div>
													<div class="row">
														<div class="col-lg-2 col-md-2"></div>
														<div class="col-lg-8 col-md-8 col-sm-6">
															<label class="control-label">Phone <span class="required">*</span></label>
															<input type="number" class="wp-form-control wpcf7-text"
																value="<?= $_SESSION['user_data']['phone'] ?>" name="phno" required>
														</div>
														<div class="col-lg-2 col-md-2"></div>
													</div>
											<?php } else if ($_SESSION['user_type'] == "doctor") { ?>
														<div class="row">
															<div class="col-lg-2 col-md-2"></div>
															<div class="col-lg-8 col-md-8 col-sm-6">
																<label class="control-label">Email <span class="required">*</span></label>
																<input type="email" class="wp-form-control wpcf7-email"
																	value="<?= $_SESSION['user_data']['email'] ?>" name="mail" required>
															</div>
															<div class="col-lg-2 col-md-2"></div>
														</div>
														<div class="row">
															<div class="col-lg-2 col-md-2"></div>
															<div class="col-lg-8 col-md-8 col-sm-6">
																<label class="control-label">Address <span class="required">*</span></label>
																<input type="text" class="wp-form-control wpcf7-email"
																	value="<?= $_SESSION['user_data']['address'] ?>" name="addr" required>
															</div>
															<div class="col-lg-2 col-md-2"></div>
														</div>
														<div class="row">
															<div class="col-lg-2 col-md-2"></div>
															<div class="col-lg-8 col-md-8 col-sm-6">
																<label class="control-label">Phone <span class="required">*</span>
																</label>
																<input type="number" class="wp-form-control wpcf7-text"
																	value="<?= $_SESSION['user_data']['phone'] ?>" name="phno" required>
															</div>
															<div class="col-lg-2 col-md-2"></div>
														</div>
											<?php } ?>
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<button class="wpcf7-submit button--itzel" name="update" type="submit">
														<i class="button__icon fa fa-share"></i><span>Update</span>
													</button>
												</div>
												<div class="col-lg-2 col-md-2"></div>
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

		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service-area">
							<!-- Start Service Title -->
							<div class="section-heading">
								<h2>Change password</h2>
								<div class="line"></div>
							</div>
							<div class="service-content">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<form class="appointment-form" method="post">
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<label class="control-label">password <span class="required">*</span></label>
													<input type="password" class="wp-form-control wpcf7-text" placeholder="password" name="pwd"
														required>
												</div>
												<div class="col-lg-2 col-md-2"></div>
											</div>
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<label class="control-label">Retype password <span class="required">*</span></label>
													<input type="password" class="wp-form-control wpcf7-text" placeholder="Retype password"
														name="repwd" required>
												</div>
												<div class="col-lg-2 col-md-2"></div>
											</div>
											<div class="row">
												<div class="col-lg-2 col-md-2"></div>
												<div class="col-lg-8 col-md-8 col-sm-6">
													<button class="wpcf7-submit button--itzel" name="update_pass" type="submit">
														<i class="button__icon fa fa-share"></i><span>Update
															password</span>
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

		<!--=========== BEGAIN Counter SECTION ================-->
		<?php include('src/counter.php') ?>
		<!--=========== End Counter SECTION ================-->

		<!--=========== Start Footer SECTION ================-->
		<?php include('src/footer.php') ?>
		<!--=========== End Footer SECTION ================-->

		<?php include('src/incfooter.php') ?>
	</body>

</html>
