<?php
/*
$num1 = 3;
$num2 = 2;

echo "1. Faça um codigo em php que recebe 3 e 2, respectivamente. <br> 
A partir disso faça a operação aritimédica dentro do comando echo e imprima o resultado das operações conforme abaixo: <br>";

echo "<br> A soma vale:  ". $num1 + $num2;
echo "<br> A subtração vale: ". $num1 - $num2;
echo "<br> A multiplicação vale: ". $num1 * $num2;
echo "<br> A divisão vale: ". $num1 / $num2;
echo "<br> O módulo vale: ". $num1 % $num2;
*/


$notas = [];
for ($i = 1; $i <= 3; $i++) {
    $notas[] = readline("Digite a nota $i: ");
}
$media = number($notas) / 3;


echo "Média Final = $media - " . ($media >= 6 ? "Aprovado" : "Reprovado");
?>
 