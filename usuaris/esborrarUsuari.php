<?php
    session_start();
    $fitxerUsuaris = "../fitxers/usuaris.txt";
    $fitxer = fopen($fitxerUsuaris,"a") or die ("No s'ha pogut obrir el fitxer.");

	if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
		$nomUsuari = $_REQUEST["q"];
        $file = file_get_contents($fitxerUsuaris);
        $users = explode(":",$file);

        foreach($users as $i => $key){
            $verificar = $users[$i];
            $lastUser = explode(":",$verificar);
            $infoUser = $lastUser[0].":".$lastUser[1].":".$lastUser[2].":".$lastUser[3].":".$lastUser[4].":".$lastUser[5].":".$lastUser[6].":".$lastUser[7].":"."\n";
            
            if($lastUser[0] != $nomUsuari){
                fwrite($fitxer,$infoUser);
            }
        }
    } 
    fclose($fitxer);
?>