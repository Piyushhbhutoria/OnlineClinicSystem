<?php
include('src/config.php');
include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>SPA Pathcare : Update</title>
		<?php include('src/head.php') ?>
	</head>

	<body>

		<?php include('src/preload.php') ?>
		<!--=========== BEGIN HEADER SECTION ================-->
		<?php include('src/header.php') ?>
		<!--=========== END HEADER SECTION ================-->

		<?php
		include('src/session_check.php');
		echo youAreHere("Statistics");
		?>

		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service-area">
							<!-- Start Service Title -->
							<div class="section-heading">
								<h2>Test</h2>
								<div class="line"></div>
							</div>
							<div class="service-content">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Test</th>
													<th>Count</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql = mysqli_query($con, "SELECT t.id, t.test_name, count(ta.id) AS counts FROM test t 
												LEFT JOIN test_appointment ta ON t.id = ta.test_id 
												GROUP BY t.id, t.test_name");
												while ($row = mysqli_fetch_array($sql)) {
													?>
													<tr>
														<th scope="row">
															<?= $row['test_name']; ?>
														</th>
														<td>
															<?= $row['counts'] ?>
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

		<!--=========== Start Footer SECTION ================-->
		<?php include('src/footer.php') ?>
		<!--=========== End Footer SECTION ================-->

		<?php include('src/incfooter.php') ?>
	</body>

</html>
