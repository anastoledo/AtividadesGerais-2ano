<?php 

require_once("Mago.php");

class Curandeiro extends Mago {

    private int $forcaDeCura;
    

    public function lancarPoder(){
          $imprimir = "O mago, " . $this->getNome() . " do tipo Curandeiro " . " possui força de " . $this->getForcaDeCura(). " e lançou o poder " . $this->getPoder()->getDescricao() . " com força total de " .$this->getPoder()->getForcaTotal($this->forcaDeCura). "\n\n";

        return $imprimir;
    }

    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }


    
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}