<?php
session_start();

$codi = $_POST["codi"];
$eliminar = $_POST["tramet"];

if(isset($_SESSION["carret"])){
    $carret = $_SESSION["carret"];
}else{
    $carret = [];
}

$productes = "fitxers/productes.txt";
$fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
$f = file_get_contents($productes);
$producte = explode("\n",$f);

if($eliminar == "Eliminar"){
    $cmpt = 0;
    foreach($carret as $i){
        $prod = explode(":",$i);
        if($prod[0] == $codi){
            array_splice($carret,$cmpt,1);
            break;
        }
        $cmpt++;
    }
}else{
    foreach($producte as $i){
        $nomProducte = explode(":",$i);
        if($nomProducte[0] == $codi){
            $comanda[] = $i;
        }
    }
}

$_SESSION["comanda"] = $comanda;

echo ("S'ha afegit un nou article");
exit;
?>