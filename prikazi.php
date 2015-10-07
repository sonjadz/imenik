<?php
$pomocna=$_GET["ID"];
include("konekcija.php");
//citanje podataka o osobi
$sql="SELECT i.*,k.delatnost AS delatnost FROM imenik i JOIN kategorija k ON i.kategorija = k.sifra WHERE i.ID='".$pomocna."'";

$result = mysql_query($sql);
//ispis naziva kolona u tabeli
echo "<table border='1'>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Grad</th>
<th>Telefon</th>
<th>Datum unosa</th>
<th>Delatnost</th>
</tr>";
//ispis podataka o osobi
while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['ime'] . "</td>";
 echo "<td>" . $row['prezime'] . "</td>";
 echo "<td>" . $row['grad'] . "</td>";
 echo "<td>" . $row['telefon'] . "</td>";
 echo "<td>" . $row['datum'] . "</td>";
 echo "<td>" . $row['delatnost'] . "</td>";

 echo "</tr>";
 }
echo "</table>";

mysql_close($dbKonekcija);
?>
