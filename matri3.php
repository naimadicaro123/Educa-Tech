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
    <h2 class="dificuldades">Dificuldades</h2>
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
        <h2 class="subtopico">Doenças</h2>
<label for="" class="great_label">
    <input type="text" placeholder="Doenças mais frequentes" class="frequent">
</label>
<label for="" class="great_label">
    <input type="text" placeholder="Doenças Permanents" class="permanet">
</label>
<label for="" class="great_label">
    <input type="text" placeholder="Doenças graves nas familias" class="grave">
</label>
</div>
    <div class="header_pain">
        <h2 class="subtopico">Dor de Cabeça</h2>
        <label for="">
            <input type="text" placeholder="Costume ter dor de cabeça?" name="costume">
        </label>
        <label for="">
            <input type="text" placeholder="Qual medicamento costuma tomar?">
        </label>
    </div>
    <div class="header_two_pain">
        <label for="">
            
        </label>
    </div>
    <div class="lobutone">
                <button class="newpage" type="button"><a href="matri3.php" target="_self">PRÓXIMA PÁGINA</a></button>
                <button class="voltar" type="button"><a href="categ.php" target="_self">VOLTAR</a></button>
            </div>
    </form>
</section>
</main>  
<script src="scripts/script.js"></script>  
</body>
</html>