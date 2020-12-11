<?php

class Producte{
    private $seccio;
    private $nom;
    private $codi;
    private $preu;
    private $imatge;
    /*private $cookie;
    private $nocookie;*/

    public function __construct($seccio,$nom,$codi,$preu,$imatge){
        $this->seccio = $seccio;
        $this->nom = $nom;
        $this->codi = $codi;
        $this->preu = $preu;
        $this->imatge = $imatge;
        /*$this->cookie = $cookie;
        $this->nocookie = $nocookie;*/
    }

    public function __get($value){
        return $this->$value;
    }

    public function __set($value,$n_value){
        if(property_exists($this,$value)){
            $this->$value = $n_value;
        }
    }

    public function afegirProducte(){
        $producte=$_POST["seccio"].":".$_POST["nom"].":".$_POST["codi"].":".$_POST["preu"].":".$_POST["imatge"].":"."\n";
        $fitxer_productes = "../fitxers/productes.txt";
        $fitxer_p = fopen($fitxer_productes,"a") or die ("No s'ha pogut afegir un nou article a la llista.");
        fwrite($fitxer_p,$producte);
        fclose($fitxer_p);
    }
}
?>