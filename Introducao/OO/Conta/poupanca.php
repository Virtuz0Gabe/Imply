<?php 


require_once("conta.php");
require_once("corrente.php");

class poupanca extends conta{

    public function __construct($nome=''){
        $this->nome = $nome;
        $this->tipo = 'Poupança';
    }

    
    public function Deposito($valor){
        $this->getSaldo($this->getSaldo() + $valor);
        return $this->getSaldo() . PHP_EOL;
    }
    
}

?>