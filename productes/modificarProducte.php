<?php

$fitxer_productes = "../fitxers/productes.txt";
$fitxer = fopen($fitxer_productes,"r") or die ("No s'ha pogut llegir el fitxer");

$producte = $_POST["producte"];
$seccio = $_POST["seccio"];
$nom = $_POST["nom"];
$preu = $_POST["preu"];
$imatge = $_POST["imatge"];

$file = file_get_contents($fitxer_productes);
$prod = explode("\n",$f);

foreach($prod as $i => $key){
    $verificar = $prod[$i];
    $lastProd = explode(":",$verificar);
    if($lastProd[0] == $producte){
        $nouProd = $producte.":".$seccio.":".$nom.":".$preu.":".$imatge;
        $prod[$i] = $nouProd;
        $validar = TRUE;
    }
}

$modify = implode("\n",$prod);

if($validar = TRUE){
    $fitxer_write = fopen($fitxer_productes,"w") or die ("No s'ha pogut llegir el fitxer");
    fwrite($fitxer_write,$modify."\n");
    fclose($fitxer_write);
    echo("Article modificat.");
}

?>