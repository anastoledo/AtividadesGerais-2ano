<?php

require_once("Midia.php");

class DVD extends Midia {

    public function getTipo(){
        $tipo = "DVD ";

        return $tipo;
    }
}