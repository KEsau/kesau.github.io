<html>

<head>
<link rel="stylesheet" href="./sbp.css" type="text/css">
<title>Browse</title>
</head>

<body>

<?php include './head.html';?>

<div class = "feature">
<h3>Search</h3>

<?php include 'connect_sbp.php';?>

<?php
mysqli_select_db( $conn, 'SBP' );
// echo '<h3>Database SBP selected.</h3>';

$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
$id1 = isset($_GET['id1'])? htmlspecialchars($_GET['id1']) : '';
if($q) {
$sql = "select * from sbp where $q = '$id1'";
$retval = mysqli_query($conn, $sql);
if ( ! $retval )
{
die('Can not get data: ' . mysqli_error() );
}
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
  $No = $row['No'];
  $AC = $row['AC'];
  $Entry = $row['Entry'];
  $GeneID = $row['GeneID'];
  $KEGG = $row['KEGG'];
  $Length = $row['Length'];
echo "<pre>";  
echo "<table>
  <tr>
  <td>No</td>
  <td>UniProt Accession</td>
  <td>UniProt Entry Name</td>
  <td>Gene ID</td>
  <td>KEGG ID</td>
  <td>Length</td>
  </tr>";
echo "
  <tr align=center>
  <td>$No</td>
  <td><a href=https://www.uniprot.org/uniprot/$AC>$AC</a></td>
  <td>$Entry</td>
  <td><a href=https://www.ncbi.nlm.nih.gov/gene/$GeneID>$GeneID</a></td>
  <td><a href=https://www.genome.jp/dbget-bin/www_bget?ath:$KEGG>$KEGG</a></td>
  <td>$Length</td>
  </tr>
  </table>";
echo "</pre>";  
} else {
?>
<form action="" method="get"> 
  <select name="q">
    <option value="">Search by</option>
    <option value="No">No</option>
    <option value="AC">AC</option>
    <option value="Entry">Entry</option>
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

