<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula</title>
    <link rel="stylesheet" href="css's/style.css">
    <script src="consol.js"></script>
    <link rel="icon" href="imagens/favicon.svg" type="image/svg+xml">
<link rel="icon" href="imagens/favicon.png" type="image/png">
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
    include('layouts/header.php');
    ?>
    <form action="#" method="post">
        <section>
            <h1>DADOS PESSOAIS DO(A) ALUNO(A)</h1>
        </section>
        <section>
            <div class="infor-container">
                <label for="">Nome do Aluno: <br><input type="text"></label><br>
                <label for="">Pai: <br><input type="text"></label><br>
                <label for="">Mãe: <br><input type="text"></label><br>
                <label for="">Nacionalidade: <br><input type="text"></label><br>
                <label for="">Cidade: <br><input type="text"></label><br>
                <label for="">Estado: <br><input type="text"></label><br>
                <label for="">Data de Nascimento: <br><input type="date" id="dataInput" placeholder="dd/mm/aaaa" maxlength="10"></label><br>
                <label for="">Endereço (Rua, Avenida, Travessa): <br><input type="text"></label><br>
                <div class="numcomp-container">
                    <div class="numcomp-item">
                        <label for="">Número:</label><br>
                        <input type="text" class="numerus-container">
                    </div>
                    <div class="numcomp-item">
                        <label for="">Complemento:</label><br>
                        <input type="text">
                    </div>
                </div><br>
                <label for="">Bairro: <br><input type="text"></label><br>
                <label for="">CEP: <br><input type="text"></label><br>
                <label for="">Contato: <br><input type="text"></label><br>
                <label for="">Contato(Opcional): <br><input type="text"></label><br>
                <label for="">Email do Aluno: <br><input type="text"></label><br>
            </div>
            <div class="lobutone">
            <button type="button" class="curso" onclick="location.href='matri2.php';">PRÓXIMA PÁGINA</button><br>
            <button type="button" class="curso" onclick="location.href='categ.php';">VOLTAR</button><br>
            </div>
        </section>
    </form>
</body>
</html>