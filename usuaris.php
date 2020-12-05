<?php

class Usuari{
    private $nom_usuari;
    private $ctsnya;

    public function __construct($nom_usuari, $ctsnya){
        $this->nom_usuari = $nom_usuari;
        $this->ctsnya = $ctsnya;
    }

    public function afegirUsuari(){
        $usuari=$_POST["nom_usuari"].":".$_POST["ctsnya"].":"."\r\n";
        $fitxer_usuaris = "usuaris.txt";
        $fitxer = fopen($fitxer_usuaris,"a") or die ("No s'ha pogut afegir un nou usuari a la llista d'usuaris de web");
        fwrite($fitxer,$usuari);
        fclose($fitxer);
    }
}
?>