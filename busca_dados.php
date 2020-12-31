<?php 

    $resultado = (object) [
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''
    ];


    if(isset ($_POST['cep'])){
        $cep = $_POST['cep'];

        $viacep = 'https://viacep.com.br/ws/'.$cep.'/json/';

        $resultado = json_decode(file_get_contents($viacep));
    }

?>
