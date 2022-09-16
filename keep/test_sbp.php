<html>

<head>
<title>Test</title>
</head>

<body> 

<?php
$dbhost = 'localhost';
$dbuser = 'SBP';
$dbpass = 'password_SBP1';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if ( ! $conn ) {
die('Can not connect MySQL：' . mysqli_error());
}
echo '<h3>MySQL user SBP Connected.</h3>';

mysqli_select_db( $conn, 'SBP' );
echo '<h3>Database SBP selected.</h3>';

$sql = 'select * from test';
$retval = mysqli_query($conn, $sql);
if ( ! $retval ) 
{
die('Can not get data: ' . mysqli_error() );
}
echo '<h3>Getting data from table test...</h3>'; 

echo '<table border="1">
     <tr> <td>ID</td> <td>SL</td> </tr>';

while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC) )
{
echo "<tr>
      <td>{$row['ID']}</td>
      <td>{$row['SL']}</td>
      </tr>";
}
echo '</table>';
mysqli_close($conn);
?>

</body>
</html>
