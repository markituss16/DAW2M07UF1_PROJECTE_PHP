<?php
    session_start();
    $fitxerProductes = "../fitxers/productes.txt";
    $fitxer = fopen($fitxerProductes,"a") or die ("No s'ha pogut obrir el fitxer.");

	if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
		$nomProd = $_REQUEST["q"];
        $file = file_get_contents($fitxerProductes);
        $prods = explode(":",$file);

        foreach($prods as $i => $key){
            $verificar = $prods[$i];
            $lastProd = explode(":",$verificar);
            $infoProds = $lastProd[0].":".$lastProd[1].":".$lastProd[2].":".$lastProd[3].":".$lastProd[4].":"."\n";
            
            if($lastUser[1] != $nomProd){
                fwrite($fitxer,$infoProds);
            }
        }
    } 
    fclose($fitxer);
?>