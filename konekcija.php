<?php
if (!$dbKonekcija=@mysql_connect("localhost", "root", ""))
{
die ("<b>Spajanje na mysql server je bilo neuspe�no</b>");
}
if (!mysql_select_db("imenik", $dbKonekcija))
{
die ("<b>Gre�ka pri odabiru baze</b>");
}
?>