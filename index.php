<?php include('src/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPA Pathcare : Home</title>
    <?php include('src/head.php') ?>
</head>
<body>

<?php include('src/preload.php') ?>
<!--=========== BEGIN HEADER SECTION ================-->
<?php include('src/header.php') ?>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN SLIDER SECTION ================-->
<?php include('src/slider.php') ?>
<!--=========== END SLIDER SECTION ================-->

<!--=========== BEGIN Top Feature SECTION ================-->
<?php if(isset($_SESSION['log'])=="" or $_SESSION['log1']=="client"){
    include('src/topfeature.php');
} ?>
<!--=========== END Top Feature SECTION ================-->

<!--=========== BEGIN Service SECTION ================-->
<?php include('src/services.php') ?>
<!--=========== End Service SECTION ================-->

<!--=========== BEGAIN Why Choose Us SECTION ================-->
<?php include('src/whychoose.php') ?>
<!--=========== END Why Choose Us SECTION ================-->

<!--=========== BEGAIN Counter SECTION ================-->
<?php include('src/counter.php') ?>
<!--=========== End Counter SECTION ================-->

<!--=========== BEGAIN Doctors SECTION ================-->
<?php include('src/meet_our_doc.php') ?>
<!--=========== End Doctors SECTION ================-->

<!--=========== BEGAIN Testimonial SECTION ================-->
<?php include('src/testimony.php') ?>
<!--=========== End Testimonial SECTION ================-->

<!--=========== Start Footer SECTION ================-->
<?php include('src/footer.php') ?>
<!--=========== End Footer SECTION ================-->

<?php include('src/incfooter.php') ?>
</body>
</html>