<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio {
    
    //Atributos
    private $corTela;

    //Métodos

    public function ligarRadio()
    {
        print "Radio relógio ligado!\n";
    }

    public function desligarRadio()
    {
        print "Radio relógio desligado! \n";
    }

    public function mostrarHoras(){
        print date("H:m:s") . "\n";
    }

    public function getCorTela() {
        return $this->corTela;
    }

    public function setCorTela($corTela): self {
        $this->corTela = $corTela;

        return $this;
    }
}
