<?php

class Aluno {

    //atributos
    private $nome;
    private $nota1;
    private $nota2;

    //metodos & gets e sets

    public function media () {

        return ($this->nota1 + $this->nota2) / 2;
    }

    public function setNome($nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function setNota1($nota1): self {
        $this->nota1 = $nota1;

        return $this;
    }

    public function setNota2($nota2): self {
        $this->nota2 = $nota2;

        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }
}

//ler dados
for ($i=1; $i < 3 ; $i++) { 
   $aluno =  new Aluno();
   $aluno->setNome(readline("Informe o seu nome: \n"));
   $aluno->setNota1(readline("Informe a NOTA 1: \n"));
   $aluno->setNota2(readline("Informe a NOTA 2: \n"));
   print "O aluno " . $aluno->getNome() . " e a média é " . $aluno->media();

   




 
}