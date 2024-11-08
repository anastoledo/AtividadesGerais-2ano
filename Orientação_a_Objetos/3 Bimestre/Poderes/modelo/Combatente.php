<?php 

require_once("Mago.php");

class Combatente extends Mago {

    private int $forcaDeAtaque;
    

    public function lancarPoder(){

       $imprimir = "O mago, " . $this->getNome() . " do tipo Combatente" . " possui força de " . $this->getForcaDeAtaque(). " e lançou o poder " . $this->getPoder()->getDescricao() . " com força total de " .$this->getPoder()->getForcaTotal($this->forcaDeAtaque) . "\n\n";

        return $imprimir;
    }

    
    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}