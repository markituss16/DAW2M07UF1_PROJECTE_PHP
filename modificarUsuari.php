<?php

$fitxerUsuaris = "fitxers/usuaris.txt";
$fitxer = fopen($fitxerUsuaris,"r") or die("No s'ha pogut obrir el fitxer");

$f = file_get_contents($fitxerUsuaris);
$usuari = explode("\n",$f);

$nom = $_POST["nom_usuari"];
$ctsnya = $_POST["ctsnya"];

foreach ($usuari as $i => $key){
    $comprovar = $usuari[$i];
    $nom_usuari = explode(":",$comprovar);
    if($nom_usuari[0] == $nom){
        $dades = $nom.":".$ctsnya;
        $usuari[$i] = $dades;
        $modificat = TRUE;
    }
}

$modificacions = implode("\n",$usuari);

if($modificat = TRUE){
    $fitxer_write = fopen($fitxerUsuaris,"w") or die ("No s'ha pogut llegir el fitxer");
    fwrite($fitxer_write,$modificacions."\n");
    fclose($fitxer_write);
    echo("Usuari modificat.");
    header('Location: /projecte_php_UF1/index_admin.php');
}
?>