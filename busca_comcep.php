<?php 
//definição da variavel de erro Global
$erro_buscacomcep = '';

    function BuscaComCep () {
       
        //verifica se foi informado o cep
        if(isset ($_POST['cep'])){

            //pega o valor informado
            $cep = $_POST['cep'];

            //filtra os numeros do valor informado
            $cep = FilterCep($cep);

            //verifica se é valido
            if( ValidCep ($cep)){

                //recebe os dados
                $resultado = BuscaCepViaCep($cep);

                //verifica se existe o cep
                if(property_exists($resultado,'erro')){

                    //informa que o cep não foi encontrado
                    $GLOBALS['erro_buscacomcep'] = 'CEP Não Encontrado';
                }

            } else {//se não for um cep valido não realiza a consulta e os objetos continuam vazio
            

                //informa que o cep é inválido
                $GLOBALS['erro_buscacomcep'] = 'CEP inválido';
            } 
        } 
        
        return $resultado;
    }



    function FilterCep (String $cep):String {
        //filtra por apenas numeros
        return preg_replace('/[^0-9]/','',$cep);
    }

    function ValidCep (String $cep) :bool{
        //verifica se contem 8 numeros separados ou nao por - , após a quinto caracter
        return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }

    function BuscaCepViaCep (String $cep){
        //busca o endereço com a API ViaCep
        $viacep = 'https://viacep.com.br/ws/'.$cep.'/json/';

        //retorna os dados como um objeto
        return json_decode(file_get_contents($viacep));
    }


?>
