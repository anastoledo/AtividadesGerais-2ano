<?php

class Receita {
    //atributos

    private string $descricao;
    private float $valor;

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setValor(float $valor): self {
        $this->valor = $valor;

        return $this;
    }

    public function __toString()
    {
        $r = "Descrição: " . $this->getDescricao() . " | Valor: " . $this->getValor() . "\n";
        return $r;
    }

}

class Despesa {
    //atributos

    private string $descricao;
    private float $valor;

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;

        return $this;
    }


    public function getValor(): float {
        return $this->valor;
    }

    public function setValor(float $valor): self {
        $this->valor = $valor;

        return $this;
    }

    public function __toString()
    {
        $d = "Descrição: " . $this->getDescricao() . " | Valor: " . $this->getValor() . "\n";
        return $d;
    }

   
}

//programa principal

$escolha = 0;
$receitasArray = array();
$despesasArray = array();

do {
    print "\n *------- MENU ---------------------* \n";
    print " 1 -------- ADICIONAR RECEITA -------- \n";
    print " 2 -------- ADICIONAR DESPESA --------\n";
    print " 3 -------- LISTAR RECEITAS ----------\n";
    print " 4 -------- LISTAR DESPESAS ---------- \n";
    print " 5 -------- SUMARIZAR ---------------- \n";
    print " 0 -------- SAIR --------------------- \n";

    $escolha = (int)readline("De qual serviço você precisa? \n");

    switch ($escolha) {
        case 0: 

            print "SAINDO DO PROGRAMA...\n";
            break;

        case 1 :
            $receitas = new Receita();

            $receitas->setDescricao(readline("Informe a descrição da receita: "));
            $receitas->setValor(readline("Informe o valor dessa receita: "));

            array_push($receitasArray, $receitas);

            break;

        case 2 :
            $despesas = new Despesa();

            $despesas->setDescricao(readline("Informe a descrição da despesa: "));
            $despesas->setValor(readline("Informe o valor dessa despesa: "));

            array_push($despesasArray, $despesas);
            break;

        case 3: 
            foreach ($receitasArray as $r) {
                print $r;
            }
            break;

        case 4:
            foreach ($despesasArray as $d) {
                print $d;
            }
            break;

        case 5: 
            $totalReceitas = 0;

            foreach ($receitasArray as $r) {
                $totalReceitas = $totalReceitas + $r->getValor();
            }

            $totalDespesas = 0;

            foreach ($despesasArray as $d) {
                $totalDespesas = $totalDespesas + $d->getValor();
            }

            $saldo = $totalReceitas - $totalDespesas;

            print "Saldo: R$ " . $saldo . "\n";
            print "Total de receitas: R$ " . $totalReceitas . "\n";
            print "Total de despesas: R$ " . $totalDespesas . "\n";

            break;

        
        default:
            print  "OPÇÃO INVÁLIDA! ";
            break;
    }


} while ($escolha != 0);
   
