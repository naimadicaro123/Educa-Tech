<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1</title>
    <link rel="stylesheet" href="css's/style.css">
</head>
<body>
    <?php
    include('layouts/header.php');
    ?>
    <main class="main_content">
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
        <br><h1 class="sela">SELECIONE SEU CURSO</h1><br>
        <button type="submit" class="curso"><a href="infor.php" target="_self" class="links">INFORMÁTICA</a></button><br>
        <button type="submit" class="curso"><a href="enfer.php" target="_self" class="links">ENFERMAGEM</a></button><br>
        <button type="submit" class="curso"><a href="estet.php" target="_self" class="links">ESTÉTICA</a></button><br>
        <button type="submit" class="curso"><a href="finan.php" target="_self" class="links">FINANÇAS</a></button>
    </div>
</form>
</main>
</body>
</html>