<?php

require_once("Midia.php");

class CD extends Midia {

    public function getTipo(){
        $tipo = "CD ";

        return $tipo;
    }
}