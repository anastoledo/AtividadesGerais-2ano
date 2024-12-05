<?php 

require_once("CanetaAzul.php");

class CanetaVermelha extends CanetaAzul {

     //método sobreescrevendo o método da classe pai!
     public function escrever() {
        print "Caneta escrevendo em vermelho.\n";
    }

    //continua chamando a sua sobreescrevendo
    public function escreverEspec (){
        $this->escrever();
    }

    //ta chamando a classe pai (caneta azul)
    public function escreverPai() {
        parent::escrever();
    }
}