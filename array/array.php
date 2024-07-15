<div class="titulo"> ARRAY </div>

<?php 

$lista = array(1, 2, 3.4, "texto");

var_dump($lista);//imprime o tipo, indice e conteúdo da lista
echo '<br>';
print_r($lista);//imprime só o conteúdo do array
echo '<br>';
print_r($lista[2]);//IM conteudo do indice 2

//print_r($lista[100]); erro pois o indice não existe

$lista[0] = 1234;
echo '<br>';
print_r($lista);

$dados = array (
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
echo '<br>';
print_r($dados);
echo '<br>';
echo $dados["idade"];
?>
