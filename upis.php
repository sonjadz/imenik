<?php
if($_POST){
	$ime        = addslashes($_POST['ime']);
	$prezime    = addslashes($_POST['prezime']);
	$adresa     = addslashes($_POST['adresa']);
	$grad       = addslashes($_POST['grad']);
	$telefon    = addslashes($_POST['telefon']);
	$datum      = date('Y-m-d');
	$kategorija = addslashes($_POST['kategorija']);
	
	$query = "INSERT INTO imenik (ime,prezime,adresa,grad,telefon,datum,kategorija) VALUES ('$ime','$prezime','$adresa','$grad','$telefon','$datum','$kategorija')";
		mysql_query($query) or
		die (mysql_error());
		if ($query) echo "Upis je uspesno obavljen ! :)";	
}

$sql = "SELECT * FROM kategorija";
$ticket = mysql_query($sql);
while($red = mysql_fetch_assoc($ticket)){
	$nizKategorija[] = $red;
}
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <p>Unesite podatke osobe koju zelite da unesete u imenik...</p>
  <form id="form1" name="form1" method="post" action="index.php?strana=upis">
  <table width="400" border="2"align="center">
    <tr>
      <td width="193">Ime:</td>
      <td width="197">
        <label>
          <input type="text" name="ime" id="ime" />
          </label>       </td>
    </tr>
    <tr>
      <td>Prezime:</td>
      <td><input type="text" name="prezime" id="prezime" /></td>
    </tr>
    <tr>
      <td>Adresa:</td>
      <td><input type="text" name="adresa" id="adresa" /></td>
    </tr>
    <tr>
      <td>Grad:</td>
      <td><input type="text" name="grad" id="grad" /></td>
    </tr>
    <tr>
      <td>Telefon:</td>
      <td><input type="text" name="telefon" id="telefon" /></td>
    </tr>
    <tr>
      <td>Kategorija</td>
      <td>
        <select name="kategorija" id="kategorija">
        	<?php for($i=0;$i<sizeof($nizKategorija);$i++){ ?>
            <option value="<?php echo $nizKategorija[$i]['sifra']; ?>"><?php echo $nizKategorija[$i]['delatnost']; ?></option>
           	<?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Upiši se" />
      </label></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;  </p>
</div>
</body>
</html>
