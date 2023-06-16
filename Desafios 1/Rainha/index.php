<?php 

$n = 8;

$board = Array_fill(0, 8, Array_fill(0, $n, "x"));

$board[3][3] = "O";

// primeiro colchets é linha
// segundo colchetes é coluna


//function novaRainha ($Array)
//{
//    do {
//        $posX = (rand(0,7));
//        $posY = (rand(0,7));
//        
//    }
//}


// código do array padrão 8x8
// esse código vai printar o nosso array nesta posição ele está vazio
for($i = 0; $i < $n; $i++){ 
    for($j = 0; $j < $n; $j++){
        echo $board[$i][$j] . " ";
    }
    echo "\n";
}

// Função que verifica se a posição da rainha na diagona e veritcal

function TemRainha ($posX, $posY, $board)
{
    // Aqui irá verificar se há uma rainha na mesma linha - Horizontal
    for ($i =0; $i < 8; $i++){
        if ($board[$i][$posY] == "O")
        {
            return "tem rainha na coluna $posY" ;
        }
    }

    // Aqui irá verificar se há uma rainha na mesma coluna - Vertical
    for ($i =0; $i < 8; $i++){
        if ($board[$posX][$i] == "-")
        {
            return "tem rainha na linha $posX";
        }
    }
    

    // Verifica a diagonal da rainha
    for ($x = $posX; $i < 8; $i++)
    {
        echo "oi";
        $y = $posY;
        $y ++;

        echo "oi";
        echo $y . $x . "\n";
        $board[$x][$y] = "-";
        if ($board[$x][$y] == "O");
        {
            return "tem rainha na diagona";
        }
    }
}


echo "\n";
echo TemRainha(3, 2, $board);



echo "Novo Board \n";

for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n; $j++){
        echo $board[$i][$j] . " ";
    }
    echo "\n";
}
?>