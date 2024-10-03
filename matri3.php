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
    <main>
<section class="centrelized">
    <h1 class></h1>
<form id="health">
    <div>
    <h2 class="">Dificuldades</h2>
    <label for="opcoes">
    <select id="meuSelect" name="opcoes" onchange="this.classList.remove('placeholder')">
        <option value="" class="placeholder" selected>Dificuldades</option>
        <option value="facil">Fácil</option>
        <option value="medio">Médio</option>
        <option value="dificil">Difícil</option>
    </select>
    </label>
    <label for="">
        <input type="text" placeholder="No caso de outros, quais?">
    </label>
    </div>
    <div>
        <h2 class="">Doenças</h2>
<label for="">
    <input type="text" placeholder="Doenças mais frequentes">
</label>
<label for="">
    <input type="text" placeholder="Doenças Permanents">
</label>
<label for="">
    <input type="text" placeholder="Doenças graves nas familias">
</label>
    </div>
    <div>
        
    </div>
    </form>
</section>
</main>  
<script src="scripts/script.js"></script>  
</body>
</html>