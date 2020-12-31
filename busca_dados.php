<?php 

    $cep = "78217081";

    $url = 'https://viacep.com.br/ws/78217081/json/';

    $resultado = json_decode(file_get_contents($url));

    var_dump($resultado);

?>
