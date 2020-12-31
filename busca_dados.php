<?php 
    //seta todas as variaveis zeradas para não dar erro, caso não tenha sido informada
    $resultado = (object) [
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''
    ];

    //verifica se foi informado o cep
    if(isset ($_POST['cep'])){

        //pega o valor informado
        $cep = $_POST['cep'];

        //substitui tudo que não é numero  por vazio
        $cep = preg_replace('/[^0-9]/','',$cep);

        //verifica se contem 8 numeros separados ou nao por - , após a quinto caracter
        if(preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep)){

            //busca o endereço com a API ViaCep
            $viacep = 'https://viacep.com.br/ws/'.$cep.'/json/';

            //retorna os dados como um objeto
            $resultado = json_decode(file_get_contents($viacep));

        } else {//se não for um cep valido não realiza a consulta e os objetos continuam vazio
            
            //informa cep invalido
            $resultado->cep = 'CEP inválido';
        }
        

        
    }

?>
