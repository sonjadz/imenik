<?php
include("zaglavlje.html");
include("konekcija.php");


		$page = $_GET['strana'];
		if ($page == "")
		{$page = "imenik";}
		
		include($page . ".php");

?>