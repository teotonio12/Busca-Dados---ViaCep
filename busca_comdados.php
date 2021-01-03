<?php

//definição da variavel de erro Global
$erro_buscacomdados = '';

    function BuscaComDados (){
        //verifica se foi informado o uf, como os tres dados são obrigatorio, consequentemente informou os tres
        if(isset ($_POST['uf'])){  

            //recebe os dados do formulario
            $uf = $_POST['uf'];
            $cidade = $_POST['cidade'];
            $logradouro = $_POST['logradouro'];

            //filta as caracteres

            //verifica se é valida
            if( ValidUF ($uf)){

                if( ValidCidade ($cidade)){
                    
                    if( ValidLogradouro ($logradouro)){

                        $resultado = BuscaDadosViaCep ($uf,$cidade,$logradouro);

                            //verifica se existe o resultado foi encontrado
                            if(count($resultado) == 0){
                                //informa que o cep não foi encontrado
                                $GLOBALS['erro_buscacomdados'] = 'Nenhum CEP Não Encontrado';
                            } 

                    } else {
                        $GLOBALS['erro_buscacomdados'] = "Consulta de Logradouro com Minimo de 3 caracteres";
                    }

                } else {
                    $GLOBALS['erro_buscacomdados'] = "Consulta de Cidade com Minimo de 3 caracteres";
                }

            } else {

                $GLOBALS['erro_buscacomdados'] = "UF Inválida";
            }

        }
        return $resultado;

    }

    function BuscaDadosViaCep (String $uf, $cidade, $logradouro){

        //busca o endereço com a API ViaCep
        $viacep = 'https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$logradouro.'/json/';
 
        //retorna os dados como um objeto
        return json_decode(file_get_contents($viacep));
    }

    function ValidCidade (String $cidade):bool {
        //verifica se tem mais de 3 caracteres       
        $contCaracter = strlen($cidade);

        if ($contCaracter >= 3) {
            return true;
        } else {
            return false;
        }
    }
    
    function ValidLogradouro (String $logradouro):bool {
        //verifica se tem mais de 3 caracteres       
        $contCaracter = strlen($logradouro);

        if ($contCaracter >= 3) {
            return true;
        } else {
            return false;
        }
    }
 
    function ValidUF (String $uf) :bool{
        $estadosBrasileiros = array(
            '1'=>'AC',
            '2'=>'AL',
            '3'=>'AP',
            '4'=>'AM',
            '5'=>'BA',
            '6'=>'CE',
            '7'=>'DF',
            '8'=>'ES',
            '9'=>'GO',
            '10'=>'MA',
            '11'=>'MT',
            '12'=>'MS',
            '13'=>'MG',
            '14'=>'PA',
            '15'=>'PB',
            '16'=>'PR',
            '17'=>'PE',
            '18'=>'PI',
            '19'=>'RJ',
            '20'=>'RN',
            '21'=>'RS',
            '22'=>'RO',
            '23'=>'RR',
            '24'=>'SC',
            '25'=>'SP',
            '26'=>'SE',
            '27'=>'TO'
        );
         
            foreach($estadosBrasileiros as $key)
            {
                if($uf == $key){
                    return true;
                } 
            }
            return false;
    }
?>