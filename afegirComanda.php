<?php
session_start();

$codi = $_POST["codi"];

if(isset($_SESSION["comandes"])){
    $comanda = $_SESSION["comandes"];
}else{
    $comanda = [];
}

$productes = "fitxers/productes.txt";
$fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
$f = file_get_contents($productes);
$producte = explode("\n",$f);

foreach($producte as $i){
    $nomProducte = explode(":",$i);
    if($nomProducte[0] == $codi){
        $comanda[] = $i;
    }
}

var_dump($comanda);
echo "\n--------------------------------\n";
var_dump($_SESSION["comanda"]);
$_SESSION["comanda"] = $comanda;

echo "S'ha afegit un nou article";

?>