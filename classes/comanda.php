<?php

class Comanda{
    private $codi;
    private $nom;
    private $numProductes;
    private $productes;

    public function __construct($codi,$nom,$numProductes,$productes){
        $this->codi = $codi;
        $this->nom = $nom;
        $this->numProductes = $numProductes;
        $this->productes = $productes;
    }

    public function __get($valor){
        return $this->$valor;
    }

    public function __set($valor, $n_valor){
        if (property_exists($this, $valor)) {
            $this->$valor = $n_valor;
        }
    }

    public function afegirComanda(){
        $fitxer_productes = "fitxers/comandes.txt";
        
    }
}