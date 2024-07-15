<div class="titulo"> Post - Exercícios </div>

<form action="#" method="post">
    incira uma nota: <input type = "number" name ="neves"/> <br/>
    <input type="submit" name ="submit" value="Inserir" />
</form>

<?php 

$nota = $_GET['neves'];

    if ($nota < 0 || $nota >10)
echo "Incira uma nota válida entre 0 e 10";
    else
echo "Nota inserido com sucesso";
?>
