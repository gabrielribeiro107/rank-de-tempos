<div class = "titulo"> Post exercicio2 </div>

<form action = "#" method = "post">
    Digite 5 números:</br>
    1-número: <input type = "number" name = "n1" /> <br>
    2-número: <input type = "number" name = "n2" /> <br>
    3-número: <input type = "number" name = "n3" /> <br>
    4-número: <input type = "number" name = "n4" /> <br>
    5-número: <input type = "number" name = "n5" /> <br>

    <input type = "Submit" name = "Submit" value = "Validar" />
</form>

<?php

$login = $_POST["n1"];
$login2 = $_POST["n2"];
$login3 = $_POST["n3"];
$login4 = $_POST["n4"];
$login5 = $_POST["n5"];


if($login != $password || $password == $repassword)
    echo "Login feito com sucesso";
else
    echo "Houve algum erro com o seu cadastro <br>Senha igual ao login ou senha não batem";


