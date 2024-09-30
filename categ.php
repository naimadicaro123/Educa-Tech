<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1</title>
    <link rel="stylesheet" href="css's/style.css">
    <link rel="icon" href="imagens/favicon.svg" type="image/svg+xml">
<link rel="icon" href="imagens/favicon.png" type="image/png">
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
    include('layouts/header.php');
    ?>
    <main>
        <form action="php/test.php" method="POST" target="_blank">
    <!--<h2 class="forms">FORMULÁRIO DE MATRÍCULA</h2><br>
     <div class="AnoCurso">
        <h3 class="year">Ano:</h3>
        <select name="" id="" class="select-container">
            <option>1ª ano</option>
            <option>2ª ano</option>
            <option>3ª ano</option>           
        </select>
    </div> -->
        <div class="selecione-container">
        <br><h1 class="sela">SELECIONE A CATEGORIA</h1><br>
        <button type="submit" class="curso"><a href="matri.php" target="_self" class="links">DADOS PESSOAIS <br> DO(A) ALUNO</a></button><br>
        <button type="submit" class="curso"><a href="matri2.php" target="_self" class="links">DOCUMENTAÇÃO DO(A) <BR>ALUNO(A)</a></button><br>
        <button type="submit" class="curso"><a href="#" target="_self" class="links">DADOS DE SAÚDE DO(A)<BR>ALUNO(A)</a></button>
    </div>
    <DIV class="final-content">
        <button class="finalizar"><a href="#">FINALIZAR</a></button>
    </DIV>
    <button class="back-container"><a href="index.php">VOLTAR</a></button>

</form>
</main>
</body>