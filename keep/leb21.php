<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<title>Test</title>
<link rel="stylesheet" href="./sbp.css" type="text/css">
</head>

<body> 

<div id="content"> 

<div class="feature"> 
<h3>Test MySQL</h3>
</div>

<div class="story">
<h3>LEB21 List</h3>
</div>

<?php
$dbhost = 'localhost';
$dbuser = 'leb0';
$dbpass = '1q2w3e4r';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if ( ! $conn ) {
die('Can not connect MySQL：' . mysqli_error());
}
echo '<h3>MySQL user LEB0 Connected.</h3>';

mysqli_select_db( $conn, 'leb0' );
echo '<h3>Database leb0 selected.</h3>';

$sql = 'select * from LEB21';
$retval = mysqli_query($conn, $sql);
if ( ! $retval ) 
{
die('Can not get data: ' . mysqli_error($conn) );
}
echo '<h3>Getting data from table LEB21...</h3>'; 

echo '<table border="1">
     <tr>
     <td>GN</td>
     <td>SN</td>
     <td>Name</td>
     <td>Email</td>
     <td>Tel</td>
     <td>School</td>
     <td>Advisor</td>
     </tr>';

while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC) )
{
echo "<tr>
      <td>{$row['GN']}</td>
      <td>{$row['SN']}</td>
      <td>{$row['Name']}</td>
      <td>{$row['Email']}</td>
      <td>{$row['Tel']}</td>
      <td>{$row['School']}</td>
      <td>{$row['Advisor']}</td>
      </tr>";
}
echo '</table>';
mysqli_close($conn);
?>

</body>
</html>
