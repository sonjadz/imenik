<?php
if (!$dbKonekcija=@mysql_connect("localhost", "root", ""))
{
die ("<b>Spajanje na mysql server je bilo neuspešno</b>");
}
if (!mysql_select_db("imenik", $dbKonekcija))
{
die ("<b>Greška pri odabiru baze</b>");
}
?>