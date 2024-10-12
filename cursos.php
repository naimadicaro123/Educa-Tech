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
            <div class="selecione-container">
                <br><h1 class="sela">SELECIONE SEU CURSO</h1><br>
                <button type="button" class="curso" onclick="location.href='infor.php';">INFORMÁTICA</button><br>
                <button type="button" class="curso" onclick="location.href='enfer.php';">ENFERMAGEM</button><br>
                <button type="button" class="curso" onclick="location.href='estet.php';">ESTÉTICA</button><br>
                <button type="button" class="curso" onclick="location.href='finan.php';">FINANÇAS</button>
            </div>
        </form>
    </main>
</body>
</html>
