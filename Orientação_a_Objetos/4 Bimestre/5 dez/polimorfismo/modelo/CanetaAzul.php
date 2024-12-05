<?php 

require_once("Caneta.php");

class CanetaAzul extends Caneta {

    //método sobreescrevendo o método da classe pai!
    public function escrever() { //se mudar o nome aqui vai puxar a função da outra classe
        print "Caneta escrevendo em azul.\n";
    }
}