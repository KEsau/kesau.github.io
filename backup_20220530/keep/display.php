<?php
echo "<pre>";
echo "<table>
     <tr>
     <td>No</td>
     <td>Accession</td>
     <td>Entry Name</td>
     <td>Gene ID</td>
     <td>KEGG ID</td>
     <td>Length</td>
     </tr>";
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
echo "</table>";
echo "</pre>";
?>

