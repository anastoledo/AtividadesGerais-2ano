<?php

class Trapezio {
    private $baseMaior;
    private $baseMenor;
    private $altura;


    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    
    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    
    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

   
    public function getAltura()
    {
        return $this->altura;
    }

  
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function __toString() {
        return "Base maior | " . $this->baseMaior . "| Base menor | " . $this->baseMenor . " | Altura |" . $this->altura;
    }

    public function getArea () {
        return (($this->baseMaior + $this->baseMenor) * $this->altura)/2;
    }
}

$trapezios = array();

for ($i=0; $i < 4 ; $i++) { 
    $trapezio = new Trapezio();
    $trapezio->setBaseMaior(readline("Informe a base maior do trapézio " . ($i + 1) . ": " ));
    $trapezio->setBaseMenor(readline("Informe a base menor do trapézio " . ($i + 1) . ": " ));
    $trapezio->setAltura(readline("Informe a altura do trapézio " . ($i + 1) . ": " ));

    array_push($trapezios, $trapezio);
}

//verificar maior area

$maiorArea = $trapezios[0];

foreach ($trapezios as $t) {
    if ($t->getArea() > $maiorArea->getArea()) {
        $maiorArea = $t;
    }
}

print "O trapézio com maior área é o: " . $maiorArea;
