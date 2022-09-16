<?php
echo '<h4>Connect SBP</h4>';
$dbhost = 'localhost';		// MySQL server
$dbuser = 'SBP';		// MySQL user
$dbpass = 'password_SBP1';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
echo '<h4>MySQL</h4>';	 
if ( ! $conn ) {
  die('Can not connect database SBP: ' . mysqli_error());
}
echo 'Connected to database SBP.';
?>
