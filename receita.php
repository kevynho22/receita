<?php

class Receita
{
    private $descricao;
    private $valor;

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
class Despesa
{
    private $descricao;
    private $valor;


    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


$receitas = array();
$despesas = array();

do {
    echo "\n---------- MENU ----------\n";
    echo "1- Adicionar receita\n";
    echo "2- Adicionar despesa\n";
    echo "3- Listar receitas\n";
    echo "4- Listar despesas\n";
    echo "5- Sumarizar\n";
    echo "0- Sair\n";
    echo "------------------\n";
    $opcao = readline("Escolha a opção: ");
    if ($opcao == 1) {
        $receita = new Receita();
        $receita->setDescricao(readline("Informe a descrição: "));
        $receita->setValor(readline("informe o valor: "));
        array_push($receitas, $receita);
    } elseif ($opcao == 2) {
        $despesa = new  Despesa();
        $despesa->setDescricao(readline("Informe a descrição da sua despesa: "));
        $despesa->setValor(readline("Informe  o valor da sua despesa: "));
        array_push($despesas, $despesa);
    } elseif ($opcao == 3) {
        foreach ($receitas as $r) {

            echo "descriçao: "  . $r->getDescricao() . "\n";
            echo " valor: "  . $r->getValor() . "\n";
        }
    } else if ($opcao == 4) {
        foreach ($despesas as $d) {
            echo "descriçao: " . $d->getDescricao() . "\n";
            echo " valor: " . $d->getvalor() .  "\n";
        }
    } else if ($opcao == 5) {
        $receitaT = 0;
        $despesaT = 0;

        foreach ($despesas as $r) {
            $receitaT += $r->getvalor();
        }
        foreach ($despesas as $d) {
            $despesaT += $d->getvalor();
        }
        echo ("Total de despesas: " . $despesaT . "\n");
        echo ("Total de receitas: " . $receitaT . "\n");
        echo ("saldo: " . $receitaT - $despesaT . "\n");
    }
} while ($opcao != 0);
