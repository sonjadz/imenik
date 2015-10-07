<html>
<head>
<script src="pronadji.js"></script>
</head>
<body>
<?php
include("konekcija.php");
$sql="SELECT * FROM `imenik`";
$result = mysql_query($sql);
?>

<form> 
<b>Izberi osobu:</b>
<select onChange="PrikaziOsobu(this.value)">
<?php
while($row = mysql_fetch_array($result))
 {
?>
<option value="<?php echo $row['ID'];?>"><?php echo $row['ime'];?></option>
<?php
}
?>
</select>
</form><p>
<div id="popuni"><b>Podaci o selektovanoj osobi ce biti prikazani ovde.</b></div>
</p></body>
</html>

