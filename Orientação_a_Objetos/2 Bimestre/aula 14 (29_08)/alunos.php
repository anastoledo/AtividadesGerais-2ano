<?php
class Escola {
    private $nome;
    private $endereco;
    private $quantidade_alunos;

    // GETs e SETs
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getQuantidadeAlunos() {
        return $this->quantidade_alunos;
    }

    public function setQuantidadeAlunos ($quantidade_alunos) {
        $this->quantidade_alunos = $quantidade_alunos;
    }

    //passar pra string
    public function __toString() {
        $aaa = "Nome: " . $this->getNome() . " | Endereço: " .$this->getEndereco(). " | Quantidade de Alunos: " . $this->getQuantidadeAlunos()  . "\n";
        return $aaa;
    }
}

// programa principal
$escolas = array();

for ($i = 0; $i < 4; $i++) {
  $escola = new Escola ();
  $escola->setNome(readline("Informe o nome da escola " . $i + 1 . ": " ));
  $escola->setEndereco(readline("Informe o endereço da escola " . $i + 1 . ": " ));
  $escola->setQuantidadeAlunos(readline("Informe a quantidade de alunos da escola " . $i + 1 . ": " ));

  array_push($escolas, $escola);
  
}

//imprimir o array
foreach ($escolas as $escola) {
    print $escola;
}

//verificar mais alunos
$escolaMaisAlunos = $escolas[0];

foreach ($escolas as $escola) {
   if ($escola->getQuantidadeAlunos() > $escolaMaisAlunos->getQuantidadeAlunos()) {
    $escolaMaisAlunos = $escola;
    }
}

print "A escola com mais alunos é: \n";
print $escolaMaisAlunos;