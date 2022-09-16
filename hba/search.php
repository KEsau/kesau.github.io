<html>

<head>
<link rel="stylesheet" href="./hba.css" type="text/css">
<title>Browse</title>
</head>

<body>

<?php include './head.html';?>

<div class = "feature">
<h3>Search</h3>

<?php
$dbhost = 'localhost';
$dbuser = 'SBP';
$dbpass = 'password_SBP1';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if ( ! $conn ) {
die('Can not connect MySQL：' . mysqli_error());
}

// echo '<h3>MySQL user SBP Connected.</h3>';

mysqli_select_db( $conn, 'SBP' );
// echo '<h3>Database SBP selected.</h3>';

$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
$id1 = isset($_GET['id1'])? htmlspecialchars($_GET['id1']) : '';
if($q) {
$sql = "select * from hba where $q = '$id1'";
$retval = mysqli_query($conn, $sql);
if ( ! $retval )
{
die('Can not get data: ' . mysqli_error() );
}
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
  $AC = $row['AC'];
  $ID = $row['ID'];
  $TI = $row['TI'];
  $LN = $row['LN'];
  $EN = $row['EN'];
  $CN = $row['CN'];
  $SL = $row['SL'];
echo "<pre>";  
echo "<table>
  <tr>
  <td>Accession</td>
  <td>Entry Name</td>
  <td>Taxonomy</td>
  <td>Latin Name</td>
  <td>English</td>
  <td>Chinese</td>
  <td>Length</td>
  </tr>";
echo "
  <tr>
  <td><a href=https://www.uniprot.org/uniprot/$AC>$AC</a></td>
  <td>$ID</td>
  <td><a href=https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&id=$TI>$TI</a></td>
  <td>$LN</td>
  <td>$EN</td>
  <td>$CN</td>
  <td>$SL</td>
  </tr>
  </table>";
echo "</pre>";  
} else {
?>
<form action="" method="get"> 
  <select name="q">
    <option value="">Search by</option>
    <option value="AC">Accsession</option>
    <option value="ID">Entry Name</option>
    <option value="EN">English Name</option>
    <option value="CN">Chinese Name</option>
  </select>
  <input id="id1" name="id1">
  <input type="submit" value="Search">
</form>
<?php
}
?>

<?php include './foot.html';?>
</body>
</html>

