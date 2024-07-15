<div class="titulo">Função</div>

<form action="#" method= "post">
    Coeficiente a:<input type = "number" name = "a" /> <br>
    Coeficiente b:<input type = "number" name = "b" /> <br>
    Coeficiente c:<input type = "number" name = "c" /> <br>
<input type = "submit" name ="submit" value= "Calcular" />
</form>

<?php 
$a = $_POST['a'];
$a = $_POST['b'];
$a = $_POST['c'];

echo "A equação resultado em: " .equacao ($a, $b, $c);

function equacao ($a, $b, $c) {
$delta = delta($a, $b, $c);
if ($a == 0)
  return "não existe";
elseif ($delta == 0)
  return "Duas raizes reais iguas";
elseif ($delta > 0)
  return "Duas raizes reais distintas";
else
  return "duas raizes imaginárias";
}

function delta ($a, $b, $c) {
    return ($b** - 4 * $a * $c);
}

/*
//definição de função

function imprimirMensagens() {
    echo "Olá <br>";
}

//invocar a função
imprimirMensagens();

$variavel =1;

function trocaValor(){
    $variavel =2;
    echo "Durante a função $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade () {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois:$variavel <br>";
echo "O França quer mais um echo mano $variavel";

echo "<hr>";// é pra fazer uma linha:------

function obterMensagem () {
    return 'Seja Bem Vindo!';
}

echo obterMensagem();
$m = obterMensagem();

echo $m;

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}

echo '<br>' .obterMensagemComNome('Adão');

function soma($num, $num2) {
    return $num + $num2;
}

echo "A soma é: " soma(10,20);
*/
?>