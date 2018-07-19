<?php
if(isset($_SESSION['log'])=="")
{
	?>
	<div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="Register.php">Register</a></li>
                <li><a href="Sign in.php">Sign in</a></li>                                                 
                <li><a href="contact.php">Contact</a></li>
              </ul>           
            </div>
<?php
}
else if($_SESSION['log1']=="client")
{
	?>
	<div id="navbar" class="navbar-collapse collapse">
               <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="view profile.php">Veiw Profile </a></li>
                    <li><a href="edit profile.php">Edit Profile</a></li>
                    <li><a href="appointments.php">My Appointments</a></li>                
                  </ul>
                </li>
                <li><a href="logout.php">Log out</a></li>                                             
                <li><a href="contact.php">Contact</a></li>
              </ul>           
            </div>
<?php
}
else if($_SESSION['log1']=="admin")
{
	?>
	<div id="navbar" class="navbar-collapse collapse">
               <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="upload.php">Upload</a></li>
                <li><a href="stat.php">Test Stats</a></li>
                <li><a href="edit profile.php">Edit Profile</a></li>
                <li><a href="logout.php">Log out</a></li>     
              </ul>           
            </div>
<?php
}
else if($_SESSION['log1']=="doctor")
{
	?>
	<div id="navbar" class="navbar-collapse collapse">
               <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="appointments.php">My Appointments</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="view profile.php">Veiw Profile </a></li>
                    <li><a href="edit profile.php">Edit Profile</a></li>                
                  </ul>
                </li>
                <li><a href="logout.php">Log out</a></li>     
              </ul>           
            </div>
<?php
}
	?>
