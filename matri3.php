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
    <input type="text" placeholder="Doenças mais frequentes" class="doenca">
</label>
<label for="" class="great_label">
    <input type="text" placeholder="Doenças Permanents" class="doenca">
</label>
<label for="" class="great_label">
    <input type="text" placeholder="Doenças graves nas familias" class="doenca">
</label>
</div>
    <div class="header_pain">
        <h2 class="subtopico">Dor de Cabeça</h2>
        <label for="">
            <input type="text" placeholder="Costume ter dor de cabeça?" name="costume" class="doenca">
        </label>
        <label for="">
            <input type="text" placeholder="Qual medicamento costuma tomar?" class="doenca">
        </label>
    </div>
    <div class="header_two_pain">
        <h2 class="subtopico">Dor de Cabeça</h2>
        <label for="uso">
            <input type="text" name="uso" class="doenca" placeholder="Faz uso de algum medicamento?">
        </label>
<label for="tomar">
      <input type="text" name="tomar" placeholder="Qual medicamento costuma tomar" class="doenca">
</label>
<label for="horario">
   <input type="text" name="horario" placeholder="Em quais horários?" class="doenca">
</label>
    </div>
    <div class="alergias">
        <h2 class="subtopico">Alergias</h2>
        <label for="medicamento">
            <input type="text" class="doenca" placeholder="Tem alergia a algum medicamento?" class="doenca">
        </label>
        <label for="qual">
            <input type="text" class="doenca" placeholder="Qual?">
        </label>
        <label for="">
            <input type="text" class="doenca" placeholder="Tem alergia a algum alimento?">
        </label>
        <label for="qual">
            <input type="text" class="doenca" placeholder="Qual?">
        </label>
    </div>
    <div class="alimento">
        <h2 class="subtopico">Alimentação</h2>
        <label for="">
            <input type="text" class="doenca" placeholder="Alimenta-se ao sair de casa?">
        </label>
        <label for="">
            <input type="text" class="doenca" placeholder="O que?">
        </label>
    </div>
    <div class="sleep">
        <h2 class="subtopico">Sono</h2>
        <label for="">
            <input type="text" class="doenca" placeholder="A que horas costume dormir?">
        </label>
        <label for="">
            <input type="text" class="doenca" placeholder="Números de horas por noite?">
        </label>
    </div>
    <div class="blood">
        <h2 class="subtopico">Tipo sanguíneo</h2>
        <label for="">
            <input type="text" class="doenca" placeholder="Qual o tipo sanguíneo?">
        </label>
        <label for="">
            <input type="submit" class="doenca" placeholder="RH">
        </label>
    </div>
    <div class="lobutone">
    <button type="button" class="curso" onclick="location.href='categ.php';">FINALIZAR</button><br>
    <button type="button" class="curso" onclick="location.href='matri_2.php';">VOLTAR</button><br>
            </div> 
    </form>
</section>
</main>  
<script src="scripts/script.js"></script>  
</body>
</html>