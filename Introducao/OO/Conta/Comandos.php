<?php 

require_once("corrente.php");
require_once("poupanca.php");

echo date("h:i:s");
echo "----------------------------------------------------------------------------";
echo "\n";
// Contas:

// Conta marcelo:
$conta_1 = new poupanca("Gabriel");
$conta_1->Deposito(500);
echo $conta_1->Extrato();



// Conta Gabe
$conta_2 = new corrente("Marcos");
$conta_2->Deposito(1000);
echo $conta_2->Extrato();
echo "\n";


// Transferência correta:
echo "Transferência";
echo $conta_2->Transfer($conta_1, 25);
echo "\n";

// Transferência incorreta:
echo "Transferência incorreta";
echo "\n";
echo $conta_2->Transfer($conta_1, 40000);
echo "\n";

// Sacar:
echo "Saque";
echo "\n";
echo $conta_1->Sacar(150);
echo "\n";

echo "Saque Incorreto";
echo "\n";
echo $conta_2->Sacar(100000000);
echo "\n";

echo "Extrato";
echo "\n";
echo $conta_2->Extrato();
echo "\n";


?>
