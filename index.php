<?php 
    include_once('busca_comcep.php');
    include_once('busca_comdados.php');
    $resultado_cep = BuscaComCep();
    $resultado_dados = BuscaComDados();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
</head>
<style>
    <?php
        require('css/style.css');
    ?>
</style>
<body>
    <h2>Busca de Dados com ViaCep </h2>
    <!-- Conteudos dividos por abas -->
    <div class="tab">
        <button class="tablinks" onclick="openBusca(event, 'Introducao')" id="inicio">Início</button>
        <button class="tablinks" onclick="openBusca(event, 'BuscaComCep')" id="buscacep">Busca Por CEP</button>
        <button class="tablinks" onclick="openBusca(event, 'BuscaComDados')" id="buscadados">Busca Por UF-CIDADE-LOGRADOURO</button>
    </div>

    <div id="Introducao" class="tabcontent">
        <?php require('introducao.php'); ?>
    </div>

    <div id="BuscaComCep" class="tabcontent">
        <?php require('form_buscacomcep.php'); ?>
    </div>

    <div id="BuscaComDados" class="tabcontent">
        <?php require('form_buscacomdados.php'); ?>
    </div>

    <?php require('exibe_resultado.php'); ?>

    
    <script src="js/script.js"></script>
    
</body>
</html>