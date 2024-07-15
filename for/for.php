<div class='titulo'>Laço For</div>

<form action="#" method ="post">
     Tabuada do: <input typoe="text" name="tab" /><br>
     <input type = "submit" name="submit" value= "Teste"/> <br>
</form>

<?php 

$n1 = $_POST['A'];
$n2 = $_POST['B'];
$n3 = $_POST['C'];


 $array = ['A', 'B', 'C'];
 
 for ($i = 0; $i < count($array); $i++) {
    echo " {$array[$i]} <br>";
 }

//Alguma coisa
/*$triste = '';
for ($count = 1; $count <=5; $count++) {
    $triste .= "#";
    echo "$trite <br>";
}*/

//Tabuado com while
/*if(isset($_POST['submit'])){
$tabuada = $_POST['tab'];
    $count = 1;

    while ($count <= 10) {
        echo $tabuada . " X " . $count . " = " . ($tabuada * $count) . "<br>";
        $count++;
    }
}*/
//Tabuada com do While
/*
    $tabuada = $_POST['tab'];
    $count = 1;

    while ($count <= 10) {
        echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br/>";
        $count++;
    }
}*/

//tabuada com for
 /*$tabuada = $_POST ['tab'];

 for ($count =1; $count <= 10; $count++) {
    echo $tabuada. "X" .$count. "=" .($tabuada * $count). "<br>";
 }
*/
/*
for ($count = 1; $count <= 5; $count++) {
    echo "$count <br>";
}

echo "<hr>";
for (; $count<=10 ; $count++) {
    echo "$count <br>";
}

echo "<hr>";
 $array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 
 'Quinta', 'Sexta', 'Sábado'];
 
 for ($i = 0; $i < count($array); $i++) {
    echo " {$array[$i]} <br>";
 }
*/


?>