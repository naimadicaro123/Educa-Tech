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
        <div class="selecione-container">
            <br><h1 class="sela">SELECIONE A CATEGORIA</h1><br>
            <button type="submit" class="curso" onclick="location.href='matri.php';">DADOS PESSOAIS <br> DO(A) ALUNO</button><br>
            <button type="submit" class="curso" onclick="location.href='matri2.php';">DOCUMENTAÇÃO DO(A) <br> ALUNO(A)</button><br>
            <button type="submit" class="curso" onclick="location.href='matri3.php';">DADOS DE SAÚDE DO(A)<br> ALUNO(A)</button>
        </div>
        <div class="final-content">
            <button type="button" class="curso" onclick="location.href='text_final.php';">FINALIZAR</button>
        </div>
        <button type="button" class="back-container" onclick="location.href='cursos.php';">VOLTAR</button>
    </form>
</main>
</body>
</html>
