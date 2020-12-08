<?php

$fitxer_productes = "fitxers/productes.txt";
$fitxer = fopen($fitxer_productes,"r") or die ("No s'ha pogut llegir el fitxer");

$nom = $_POST["nom"];
$codi = $_POST["codi"];
$descripcio = $_POST["descripcio"];
$preu = $_POST["preu"];
$imatge = $_POST["imatge"];

$file = file_get_contents($fitxer_productes);
