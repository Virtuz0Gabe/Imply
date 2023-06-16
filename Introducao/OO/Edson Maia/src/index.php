<?php 

require_once "Pessoa.php";


$pessoa1 = new Pessoa("Gabe", 18); // acabamos Instanciar ou criar um objeto do tipo pessoa
$pessoa2 = new Pessoa("Néo", 89);

// Como setar valores para os atributos de um objeto
// Se, eu setar valores com o construct e passa-los, mas depois fazer os códigos abaixo
// estes vão substituir os valores anteriores, pq estaremos setando novos valores nesses objetos
// afinal o espaço da memória n pode ser dividido, caso uma novo valor seja setado, este substituirá
// o antigo.

/*
$pessoa1->nome = "Edson Maia";
$pessoa1->idade = 25;

$pessoa2->nome = "Carlos";
$pessoa2->idade = 8;
// Estes valores podem ser alterados pois eles são considerados public, o que significa que qualquer 
// um na web também poderá alterá-los e pior, acessa-los. Problema gigante para contas de bancos.



// a setinha "->" significa setar, estamos setando uma valor para uma variável

// Escrevendo o conteúdo de um atributo 
echo "<p>Nome: $pessoa1->nome </p>";
echo "<p>Idade: $pessoa1->idade </p>";

echo "<hr>";

$p2= $pessoa2->nome;
echo "<p>Nome: $p2 </p>"; // Podemos atribuir uma variável para que ela pego o valordiretamente, economizando código porém isso gasta espaço na memória
echo "<p>Idade: $pessoa2->idade </p>";
*/


// ----- Métodos acessores, diferente dos meios usados acima, os acessores são mais seguros porém 
// só podem ser acessados que métodos especiais, ou seja me´todos que possuem acesso aquela informação

$pessoa1->setNome("Gabe da Silves Joniors");
$pessoa1->setIdade(18);


$pessoa2->setNome("Cartas niberos");
$pessoa2->setIdade(958);

echo "<p>Nome: {$pessoa1->getNome()} </p>";
echo "<p>Idade: {$pessoa1->getIdade()} </p>"; 

echo "<p>Nome: {$pessoa2->getNome()} </p>";
echo "<p>Idade: {$pessoa2->getIdade()} </p>"; 

// Mostrando os atributos dos métodos, mas de forma seca
echo "<pre>";
var_dump($pessoa1);
var_dump($pessoa1);
echo "<pre>";

?>