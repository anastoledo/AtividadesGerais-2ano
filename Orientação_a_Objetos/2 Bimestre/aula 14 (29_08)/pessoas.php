<?php

class Pessoa {
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function getNome(): string {
        return $this->nome;
    }

    
    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self{
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;

        return $this;
    }

    public function __toString() {
        $dados = $this->getNome() . " " . $this->getSobrenome() . ", " . $this->getIdade() . " anos \n";
        return $dados;
    }
}

// programa principal
$escolha = 0;

$cadastro = array();

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- CADASTRAR ------- \n";
    print " 2 -------- LISTAR ----------\n";
    print " 3 -------- REMOVER ----------\n";
    print " 0 -------- SAIR ------------ \n";

    $escolha = readline("De qual serviço você precisa? ");

    switch ($escolha) {

        case 0: 
            print "SERVIÇO ENCERRADO...";
            break;

        case 1:

            $novoCadastro = new Pessoa();
            $novoCadastro->setNome(readline("Informe o nome para o cadastro: "));
            $novoCadastro->setSobrenome(readline("Informe o sobrenome para o cadastro: "));
            $novoCadastro->setIdade(readline("Informe a idade para o cadastro: "));
            
            array_push($cadastro , $novoCadastro);

            print "O cadastro foi feito com sucesso!";

            break;

        case 2:
            
            foreach ($cadastro as $i => $c) {
                print ($i + 1) . " | " . $c;
            }

        break;

        case 3:

            foreach ($cadastro as $i => $c) {
                print ($i + 1) . " | " . $c;
            }

            $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO) :");

            array_splice($cadastro, $indiceRemover, 1);

        break;
        
        default:
            print "SERVIÇO INVÁLIDO!!";
            break;
    }
    
} while ($escolha != 0); 
