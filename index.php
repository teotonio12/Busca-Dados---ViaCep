<?php 
    include_once('busca_dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="." method="post">
        <p>Informe o CEP.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $resultado->cep;?>">
        <input type="submit">
        <input type="text" placeholder="rua"    name="rua"    value="<?php echo $resultado->logradouro;?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $resultado->bairro;?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $resultado->localidade;?>">
        <input type="text" placeholder="estado" name="estado" value="<?php echo $resultado->uf;?>">
    </form>
</body>
</html>