<?php
include('src/functions.php');
include('src/config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>SPA Pathcare : Appointments</title>
		<?php include('src/head.php') ?>
	</head>

	<body>

		<?php include('src/preload.php') ?>
		<!--=========== BEGIN HEADER SECTION ================-->
		<?php include('src/header.php') ?>
		<!--=========== END HEADER SECTION ================-->

		<?php
		include('src/session_check.php');
		echo youAreHere("Appointments");

		$id = $_SESSION['user_data']['id'];
		if ($_SESSION['user_type'] == "client") {
			?>
			<section id="service">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="service-area">
								<!-- Start Service Title -->
								<div class="section-heading">
									<h2>Test Appointment</h2>
									<div class="line"></div>
								</div>
								<div class="service-content">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Test</th>
														<th>Date</th>
														<th>Time</th>
														<th>Download</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$sql = mysqli_query($con, "SELECT * FROM test_appointment WHERE users_id='$id' ");
													while ($row = mysqli_fetch_array($sql)) {
														$test = $row['test_id'];
														$sql2 = mysqli_query($con, "SELECT * FROM test WHERE id='$test' ");
														$row2 = mysqli_fetch_array($sql2);
														?>
														<tr>
															<th scope="row">
																<?= $row2['test_name'] ?>
															</th>
															<td>
																<?= $row['test_date'] ?>
															</td>
															<td>
																<?= $row['test_time'] ?>
															</td>
															<td><a href="<?= $row['report'] ?>" target="_blank">Download</a>
															</td>
															<td><a href="deleteapp.php?data=test&action=delete&id=<?= $row['id']; ?>">Delete
																	Appointment</a></td>
														</tr>
														<?php
													}
													?>
												</tbody>
											</table>
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
									<h2>Doctor Appointment</h2>
									<div class="line"></div>
								</div>
								<div class="service-content">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Doctor</th>
														<th>Date</th>
														<th>Time</th>
														<th>Download</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE users_id='$id' ");
													while ($row = mysqli_fetch_array($sql)) {
														$doc = $row['doctor_id'];
														$sql2 = mysqli_query($con, "SELECT * FROM doctor WHERE id='$doc' ");
														$row2 = mysqli_fetch_array($sql2);
														$sts = $row['status'];
														?>
														<tr>
															<th scope="row">
																<?= $row2['name'] ?>
															</th>
															<td>
																<?= $row['app_date'] ?>
															</td>
															<td>
																<?= $row['app_time'] ?>
															</td>
															<?php
															if ($sts == "Rejected") {
																?>
																<td>Rejected by Doctor</td>
																<td>
																	<a href="deleteapp.php?data=doctor&action=delete&id=<?= $row['id']; ?>">Delete
																		Appointment</a>
																</td>
																<?php
															} else {
																?>
																<td><a href="<?= $row['report'] ?>" target="_blank">Download</a>
																</td>
																<td>
																	<a href="deleteapp.php?data=doctor&action=delete&id=<?= $row['id']; ?>">Delete
																		Appointment</a>
																</td>
																<?php
															}
															?>
														</tr>
														<?php
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		} else if ($_SESSION['user_type'] == "doctor") {
			$id = $_SESSION['user_data']['id'];
			$status = "Rejected";
			?>
				<section id="service">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="service-area">
									<!-- Start Service Title -->
									<div class="section-heading">
										<h2>Appointments</h2>
										<div class="line"></div>
									</div>
									<div class="service-content">
										<div class="row">
											<div class="col-lg-12 col-md-12">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Patient</th>
															<th>Date</th>
															<th>Time</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$sql = mysqli_query($con, "SELECT * FROM doctor_app WHERE doctor_id='$id' and Status!='$status' ");
														while ($row = mysqli_fetch_array($sql)) {
															$sts = $row['status'];
															$user = $row['users_id'];
															$sql2 = mysqli_query($con, "SELECT * FROM client WHERE id='$user' ");
															$row2 = mysqli_fetch_array($sql2);
															?>
															<tr>
																<th scope="row">
																<?= $row2['name'] ?>
																</th>
																<td>
																<?= $row['app_date'] ?>
																</td>
																<td>
																<?= $row['app_time'] ?>
																</td>
																<td><a href="deleteapp.php?data=doctor&action=reject&id=<?= $row['id']; ?>">Decline</a>
																</td>
															</tr>
														<?php
														}
														?>
													</tbody>
												</table>
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

		<!--=========== Start Footer SECTION ================-->
		<?php include('src/footer.php') ?>
		<!--=========== End Footer SECTION ================-->

		<?php include('src/incfooter.php') ?>
	</body>

</html>
