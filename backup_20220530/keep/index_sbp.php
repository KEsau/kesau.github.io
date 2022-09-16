<html>

<head>
<link rel="stylesheet" href="./sbp.css" type="text/css">
<title>SBP</title>
</head>

<body> 

<h3>Database of Arabidopsis SBP transcription factors</h3>

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

$sql = 'select * from sbp';
$retval = mysqli_query($conn, $sql);
if ( ! $retval ) 
{
die('Can not get data: ' . mysqli_error() );
}
// echo '<h3>Getting data from table test...</h3>'; 

echo '<table>
     <tr><td>No</td><td>UniProt</td><td>Entry Name</td><td>Gene</td><td>KEGG ID</td><td>Length</td></tr>';

while ( $row = mysqli_fetch_array($retval, MYSQLI_ASSOC) )
{
  $No = $row['No'];
  $AC = $row['AC'];
  $Entry = $row['Entry'];
  $GeneID = $row['GeneID'];
  $KEGG = $row['KEGG'];
  $Length = $row['Length'];
  echo  
  "<tr align=center>
  <td>$No</td>
  <td><a href=https://www.uniprot.org/uniprot/$AC>$AC</a></td>
  <td>$Entry</td>
  <td><a href=https://www.ncbi.nlm.nih.gov/gene/$GeneID>$GeneID</a></td>
  <td><a href=https://www.genome.jp/dbget-bin/www_bget?ath:$KEGG>$KEGG</a></td>
  <td>$Length</td>
  </tr>";
}
echo '</table>';
mysqli_close($conn);
?>

</body>
</html>
