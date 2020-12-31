<?php 

    function BuscaDados () {
       
        //verifica se foi informado o cep
        if(isset ($_POST['cep'])){

            //pega o valor informado
            $cep = $_POST['cep'];

            //filtra os numeros do valor informado
            $cep = FilterCep($cep);

            //verifica se é valido
            if( ValidCep ($cep)){

                //recebe os dados
                $resultado = BuscaDadosViaCep($cep);

                //verifica se existe o cep
                if(property_exists($resultado,'erro')){
                    $resultado = ZeraResultado();

                    //informa que o cep não foi encontrado
                    $resultado->cep = 'CEP Não Encontrado';
                }

            } else {//se não for um cep valido não realiza a consulta e os objetos continuam vazio
                
                $resultado = ZeraResultado();

                //informa que o cep é inválido
                $resultado->cep = 'CEP inválido';
            } 
        } else {
            $resultado = ZeraResultado();
        }
        return $resultado;
            ?>
                <script>
                    document.getElementById("buscacep").click();
                </script>
            <?php
        
    }

    function BuscaCep (){

    }

    function ZeraResultado (){
        //inicia todos os valores vazios
        return (object) [
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => '',
            'uf' => ''
        ];
    }

    function FilterCep (String $cep):String {
        //filtra por apenas numeros
        return preg_replace('/[^0-9]/','',$cep);
    }

    function ValidCep (String $cep) :bool{
        //verifica se contem 8 numeros separados ou nao por - , após a quinto caracter
        return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }

    function BuscaDadosViaCep (String $cep){
        //busca o endereço com a API ViaCep
        $viacep = 'https://viacep.com.br/ws/'.$cep.'/json/';

        //retorna os dados como um objeto
        return json_decode(file_get_contents($viacep));
    }


?>
