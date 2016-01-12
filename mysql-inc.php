<?php
ini_set("display_errors",0);error_reporting(0);

$c = mysql_connect("localhost", "root", "root");

if (!$c)
    die("Problème = ".mysql_error());
else
    //echo"<p>Serveur & base de donnée connectés</p>";

$$c = mysql_select_db("vanwelde");
if (!$c)
    die("Erreur mysql_select_db");
else
    //echo"<p>BDD sélectionnée</p>";

    $c = mysql_set_charset("utf8");
if (!$c)
    die("Problème = mysql_set_charset");
else
    //echo"<p>Charset enclanché</p>";
?>