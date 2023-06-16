<?php

//use corrente as GlobalCorrente;




abstract class conta {
    private $saldo = 1500;
    protected $nome = '';
    protected $tipo = '';


    public function Extrato(){
        return "O extrato da conta $this->tipo de $this->nome é de R$$this->saldo" . PHP_EOL;
    }

    public function Deposito($valor){
        $this->saldo = $this->saldo + $valor;
        
    }

    public function Sacar ($valor){
        if($this->saldo < $valor){
            return "O saque de " . $valor . " foi encerrado!. Pois a conta de " . $this->nome . " não possui saldo suficiente!" . PHP_EOL;
        }else{
            $this->saldo = $this->saldo - $valor;
        return "O saque de " . $valor . ". Foi efetuado com sucesso\n" . "O saldo atual da conta " . $this->tipo . " é de: " . $this->saldo . PHP_EOL;
        }
    }
    

    public function setSaldo(int $valor)
    {
        return $this->saldo = $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    
}


?>


