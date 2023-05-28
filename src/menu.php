<?php
session_start();
if (isset($_SESSION['log']) == "") {
?>
    <li><a href="index.php">Home</a></li>
    <li><a href="features.php">Features</a></li>
    <li><a href="aboutUs.php">About Us</a></li>
    <li><a href="service.php">Service</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="signin.php">Sign in</a></li>
    <li><a href="contact.php">Contact</a></li>
<?php
} else if ($_SESSION['log1'] == "client") {
?>
    <li><a href="index.php">Home</a></li>
    <li><a href="features.php">Features</a></li>
    <li><a href="aboutUs.php">About Us</a></li>
    <li><a href="service.php">Service</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile <span class="fa fa-angle-down"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="viewprofile.php">Veiw Profile </a></li>
            <li><a href="editprofile.php">Edit Profile</a></li>
            <li><a href="appointments.php">My Appointments</a></li>
        </ul>
    </li>
    <li><a href="logout.php">Log out</a></li>
    <li><a href="contact.php">Contact</a></li>
<?php
} else if ($_SESSION['log1'] == "admin") {
?>
    <li><a href="index.php">Home</a></li>
    <li><a href="update.php">Update</a></li>
    <li><a href="upload.php">Upload</a></li>
    <li><a href="stat.php">Test Stats</a></li>
    <li><a href="editprofile.php">Edit Profile</a></li>
    <li><a href="logout.php">Log out</a></li>
<?php
} else if ($_SESSION['log1'] == "doctor") {
?>
    <li><a href="index.php">Home</a></li>
    <li><a href="appointments.php">My Appointments</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile <span class="fa fa-angle-down"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="viewprofile.php">Veiw Profile </a></li>
            <li><a href="editprofile.php">Edit Profile</a></li>
        </ul>
    </li>
    <li><a href="logout.php">Log out</a></li>
<?php
}
