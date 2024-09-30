<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula 2</title>
    <link rel="stylesheet" href="css's/style.css">
</head>
<body>
    <?php
   include('layouts/header.php');
    ?>
    <main>
<section class="centrelized">
<form id="photoForm">
        <div class="container">
            <div class="photo-button" id="photoButton">
                <a href="https://www.seulink.com" target="_blank">'Clique Aqui'</a>
            </div>
            <video id="video" autoplay playsinline></video>
            <div class="photo-button" id="galleryButton">Procurar na Galeria</div>
            <input type="file" id="fileInput" accept="image/*" style="display: none;">
            <canvas id="canvas" style="display: none;"></canvas>
        </div>
        <div class="lobutone">
                <button class="newpage" type="button"><a href="matri_2.php" target="_self">PRÓXIMA PÁGINA</a></button>
                <button class="voltar" type="button"><a href="categ.php" target="_self">VOLTAR</a></button>
            </div>
    </form>
</section>
</main>
<script src="scripts/scripts.js"></script>
</body>
</html>