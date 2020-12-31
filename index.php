<?php 
    include_once('busca_dados.php');
    $resultado = BuscaDados();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Cep - ViaCep</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Busca de Dados com ViaCep </h2>
    <div class="tab">
        <button class="tablinks" onclick="openBusca(event, 'Introducao')" id="defaultOpen">Início</button>
        <button class="tablinks" onclick="openBusca(event, 'BuscaDados')" id="buscacep">Busca Por CEP</button>
        <button class="tablinks" onclick="openBusca(event, 'BuscaCep')">Busca Por UF - Cidade</button>
    </div>

    <div id="Introducao" class="tabcontent">
        <h3>Introdução</h3>
        <p>London is the capital city of England.</p>
        </div>

        <div id="BuscaDados" class="tabcontent">
            <?php require('form_buscacep.php'); ?>
        </div>

        <div id="BuscaCep" class="tabcontent">
        <h3>Busca Cep pelo UF - Cidade</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <?php 

        if(isset($_POST['cep'])){
            echo "<h2> Resultado  </h2>";

            echo "CEP = ".$resultado->cep."<br>";
            echo "Logradouro = ".$resultado->logradouro."<br>";
            echo "Bairro = ".$resultado->bairro."<br>";
            echo "Cidade = ".$resultado->localidade."<br>";
            echo "Estado = ".$resultado->uf."<br>";
        }
        
    
    ?>

    
    <script src="js/script.js"></script>
    
</body>
</html>