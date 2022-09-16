<html>

<head>
<link rel="stylesheet" href="./hba.css" type="text/css">
<title>Browse</title>
</head>

<body> 

<?php include './head.html';?>
<div class = "feature">
<h3>HBA from 208 different animals</h3>
</div>

<?php
$dbhost = 'localhost';
$dbuser = 'SBP';
$dbpass = 'password_SBP1';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if ( ! $conn ) {
die('Can not connect MySQL：' . mysqli_error());
}

mysqli_select_db( $conn, 'SBP' );

$sql = 'select * from hba';
$retval = mysqli_query($conn, $sql);
if ( ! $retval ) 
{
die('Can not get data: ' . mysqli_error() );
}

echo "<pre>";
echo "<table border=1>
     <tr>
     <td>Accession</td>
     <td>Entry Name</td>
     <td>Taxonomy ID</td>
     <td>Latin Name</td>
     <td>English Name</td>
     <td>Chinese</td>
     <td>Length</td>
     </tr>";
while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC) )
{
  $AC = $row['AC'];
  $ID = $row['ID'];
  $TI = $row['TI'];
  $LN = $row['LN'];
  $EN = $row['EN'];
  $CN = $row['CN'];
  $SL = $row['SL'];
  echo  
  "<tr>
  <td><a href=https://www.uniprot.org/uniprot/$AC>$AC</a></td>
  <td>$ID</td>
  <td><a href=https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&amp;id=$TI>$TI</td>
  <td><a href=https://www.uniprot.org/taxonomy/$TI>$LN</td>
  <td>$EN</td>
  <td>$CN</td>
  <td>$SL</td>
  </tr>";
}
echo "</table>";
echo "</pre>";

mysqli_close($conn);
?>

<?php include './foot.html';?>

</body>
</html>
