<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" link>
    <link rel="stylesheet" href="recursos\estilo.css">
    <link rel="stylesheet" href="recursos\exercicio.css">
    <title>Curso PHP </title>
</head>
<body class ="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2> Visualização dos Exercícios</h2>
    </header>
    <nav class = "navegacao">
        <a href= "index.php" class = "vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
          <?php
          include('teste2/teste2.php')  
          ?>
        </div>
    </main>
    <footer class="rodape">
        DTEC CURSO PHP <?= date("Y"); ?>
    </footer>
</body>

</html>
