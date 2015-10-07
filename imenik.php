<?php

if($_GET['id']){
	if(is_numeric($_GET['id']) && $_GET['id'] > 0){
		$sql = "SELECT count(*) AS broj FROM imenik WHERE id = ".$_GET['id'];
		$ticket = mysql_query($sql);
		$row = mysql_fetch_assoc($ticket);
		if($row['broj'] == 1){
			$sql = "DELETE FROM imenik WHERE id = ".$_GET['id'];
			mysql_query($sql);
		}else{
			echo 'Ne postoji takav ID u bazi';
		}
	}
	else{
		echo "parametar ID nije validan";	
	}
}

if($_GET['sortby']){
	if(in_array($_GET['sortby'],array('ASC','DESC'))){
		$sort = $_GET['sortby'];
	}else{
		die('Nije validan parametar');
	}
}else{
	$sort = "ASC";
}

if($sort == "ASC"){
	$oposite_sort = "DESC";
}else{
	$oposite_sort = "ASC";
}

$query = "SELECT i.*,k.delatnost as delatnost FROM imenik i JOIN kategorija k ON i.kategorija = k.sifra ORDER BY i.ime ".$sort;

$unosi=mysql_query($query) or  die (mysql_error());

while ($row = mysql_fetch_array($unosi)) {
	$nizImenika[] = $row;
}

?>
<div style="padding:50px 0px 0px 200px">
<table width="711" border="1" cellpadding="1" cellspacing="0">
  <tr>
    <td width="82" bgcolor="#00FFFF"><a href="index.php?strana=imenik&sortby=<?php echo $oposite_sort; ?>">Ime</a></td>
    <td width="99" bgcolor="#00FFFF">Prezime</td>
    <td width="105" bgcolor="#00FFFF">Adresa</td>
    <td width="91" bgcolor="#00FFFF">Grad</td>
    <td width="89" bgcolor="#00FFFF">Telefon</td>
    <td width="107" bgcolor="#00FFFF">Vreme</td>
    <td width="108" bgcolor="#00FFFF">Kategorija</td>
    <td width="108" bgcolor="#00FFFF">Brisi</td>
  </tr>
  <?php for($i=0;$i<sizeof($nizImenika);$i++){ ?>
  <tr>
    <td><?php echo ucfirst($nizImenika[$i]["ime"]); ?></td>
    <td><?php echo ucfirst($nizImenika[$i]["prezime"]); ?></td>
    <td><?php echo $nizImenika[$i]["adresa"]; ?></td>
    <td><?php echo $nizImenika[$i]["grad"]; ?></td>
    <td><?php echo $nizImenika[$i]["telefon"]; ?></td>
    <td><?php echo date('d.m.Y',strtotime($nizImenika[$i]["datum"])); ?></td>
    <td><?php echo $nizImenika[$i]["delatnost"]; ?></td>
    <td><a href="index.php?strana=imenik&id=<?php echo $nizImenika[$i]["ID"]; ?>">brisi</a></td>
  </tr>
  <?php } ?>
</table>
</div>

