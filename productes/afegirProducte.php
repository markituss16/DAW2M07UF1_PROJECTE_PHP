<?php

require_once("../classes/productes.php");

$seccio = $_POST["seccio"];
$nom = $_POST["nom"];
$codi = $_POST["codi"];
$preu = $_POST["preu"];
$imatge = $_POST["imatge"];

$producte = new Producte($seccio,$nom,$codi,$preu,$imatge);
$producte -> afegirProducte();
echo("S'ha creat un nou article.");
?>
<html>
    <a href=../index_client.php class="btn btn-link m1-1">Tornar al catàleg</a>
<html>
