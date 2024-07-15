<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class = "conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                     <h3>Módulo 1</h3>
                        <ul>
                               <li><a href="exercicio.php?dir=teste&file=teste">Op. Aritmética</a></li>
                               <li><a href="exercicio.php?dir=DesafioEQ&file=equcoes">Desafio de Equações</a></li>
                               <li><a href="exercicio.php?dir=incremento&file=incremento">Incremento</a></li>
                               <li><a href="exercicio.php?dir=incremento2&file=incremento2">Incremento 2</a></li>
                        </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 2</h3>
                       <ul>
                              <li><a href="exercicio.php?dir=operadores&file=operadores">Operadores</a></li>
                              <li><a href="exercicio.php?dir=operado2&file=operadores2"> Operadores 2</a></li>
                              <li><a href="exercicio.php?dir=swich&file=swich">Swich</a></li>
                       </ul>
               </div>
               <div class="modulo azul">
                <h3>Módulo 3</h3>
                   <ul>
                          <li><a href="exercicio.php?dir=array&file=array"> Array </a></li>
                           <li><a href="exercicio.php?dir=arrayex1&file=arrayex1">Array 2</a></li>
                           <li><a href="exercicio.php?dir=get&file=get"> GET </a></li>
                   </ul>
           </div>
           <div class="modulo roxo">
            <h3>Módulo 4</h3>
               <ul>
                
                       <li><a href="exercicio.php?dir=post&file=post"> POST-1 </a></li>
                       <li><a href="exercicio.php?dir=postt2&file=post"> POST-2</a></li>
                       <li><a href="exercicio.php?dir=posteste&file=testesP"> POST-3</a></li>
               </ul>
       </div>
       <div class="modulo laranja">
        <h3>Módulo 5</h3>
           <ul>
                  <li><a href="exercicio.php?dir=for&file=for"> Laço For </a></li>
                   <li><a href="exercicio.php?dir=funcao&file=funcao">Função massa</a></li>
                   <li><a href="exercicio.php?dir=exercicio&file=exee">Exercício C</a></li>
           </ul>
   </div>
   <div class="modulo verde-escuro">
    <h3>Módulo 6</h3>
       <ul>
              <li><a href="#">Exercício A</a></li>
               <li><a href="#">Exercício B</a></li>
               <li><a href="#">Exercício C</a></li>
       </ul>
</div>
<div class="modulo vermelho-escuro">
    <h3>Módulo 7</h3>
       <ul>
              <li><a href="#">Exercício A</a></li>
               <li><a href="#">Exercício B</a></li>
               <li><a href="#">Exercício C</a></li>
       </ul>
</div>
<div class="modulo azul-escuro">
    <h3>Módulo 8</h3>
       <ul>
              <li><a href"#">Exercício A</a></li>
               <li><a href"#">Exercício B</a></li>
               <li><a href"#">Exercício C</a></li>
       </ul>
</div>
<div class="modulo roxo-escuro">
    <h3>Módulo 9</h3>
       <ul>
              <li><a href"#">Exercício A</a></li>
               <li><a href"#">Exercício B</a></li>
               <li><a href"#">Exercício C</a></li>
       </ul>
</div>
            </nav>

        </div>
    </main>
    <footer class="rodape">
        DTEC CURSO PHP <?= date('Y');  ?>
    </footer>
</body>
</html>