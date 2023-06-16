<?php 

require_once("conta.php");
require_once("corrente.php");

class corrente extends conta{

    public function __construct($nome=''){
        $this->nome = $nome;
        $this->tipo = 'Corrente';

    }


    public function Transfer ($Conta_Recebe, $valor_transfer){
        if ($this->getSaldo() < $valor_transfer){
            return "A tranferência de " . $valor_transfer . " foi encerrada!. Pois a conta de " . $this->nome . " não possui saldo suficiente" . PHP_EOL;
        }else{
            $this->setSaldo($this->getSaldo() - $valor_transfer);
            $Conta_Recebe->setSaldo($Conta_Recebe->getSaldo() - $valor_transfer);
            return "o Valor de $valor_transfer foi transferido com sucesso! \n a Conta de $Conta_Recebe->nome ficou com saldo de {$this->getSaldo()} \n a Conta de  $this->nome ficou com saldo de {$Conta_Recebe->getSaldo()} " . PHP_EOL;
            
            
        }
    }
}

?>