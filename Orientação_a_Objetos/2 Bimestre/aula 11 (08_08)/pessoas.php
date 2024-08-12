<?php 

class Pessoa {

    //atributo
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    //metodos

    public function getApresentacao ($eu) {
        $eu = print "Olá mundo, sou $this->nome, resido no endereço $this->endereco, $this->cidade - $this->UF e possuo uma altura de $this->altura!\n";

        return $eu;
    }

    public function __construct($nome, $endereco, $cidade, $UF, $altura) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->UF = $UF;
        $this->altura = $altura;
    }


    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

   
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}

for ($i=0; $i < 2; $i++) { 
    $nome = readline ("Informe o nome: \n");
    $endereco = readline ("Informe o endereço: \n");
    $cidade = readline ("Informe a cidade: \n");
    $UF = readline ("Informe o UF: \n");
    $altura = readline ("Informe a altura: \n");

    $pessoa = new Pessoa($nome, $endereco, $cidade, $UF, $altura);
    $pessoa -> getApresentacao($pessoa);
}

