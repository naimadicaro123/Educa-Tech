<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de Saúde</title>
    <link rel="stylesheet" href="css's/style.css">
    <link rel="icon" href="imagens/favicon.svg" type="image/svg+xml">
<link rel="icon" href="imagens/favicon.png" type="image/png">
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
   include('layouts/header.php');
    ?>
    <main class="main-content">
<section class="centrelized">
    <h1 class>SAÚDE E ALIMENTAÇÃO</h1>
<form id="health">
        <h2 class="to_left">Dificuldades</h2>
        <label for="frutas">Escolha uma fruta:</label>
    <select id="frutas" name="frutas">
        <option value="maçã">Maçã</option>
        <option value="banana">Banana</option>
        <option value="laranja">Laranja</option>
        <option value="uva">Uva</option>
    </select>
    <input type="submit" value="Enviar">
    </form>
</section>
</main>    
</body>
</html>