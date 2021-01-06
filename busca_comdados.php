<?php

//definição da variavel de erro Global
$erro_buscacomdados = '';

//inicia a variavel
$resultado = '';

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

                //verifica se possui mais q 3 caracetes
                if( ValidCidade ($cidade)){
                    
                    //verifica se possui mais q 3 caracteres
                    if( ValidLogradouro ($logradouro)){

                        //busca os dados ViaCep
                        $resultado = BuscaDadosViaCep ($uf,$cidade,$logradouro);

                        

                            //verifica se existe o resultado foi encontrado
                            if(count($resultado) == 0){
                                //informa que o cep não foi encontrado
                                $GLOBALS['erro_buscacomdados'] = 'Nenhum CEP Não Encontrado';
                            }  else {
                                return $resultado;
                            }

                    } else {
                        $GLOBALS['erro_buscacomdados'] = "Consulta de Logradouro com Mínimo de 3 Caracteres";
                    }

                } else {
                    $GLOBALS['erro_buscacomdados'] = "Consulta de Cidade com Mínimo de 3 Caracteres";
                }

            } else {

                $GLOBALS['erro_buscacomdados'] = "UF Inválida";
            }

        }
        

    }

    function BuscaDadosViaCep (String $uf, $cidade, $logradouro){

        //busca o endereço com a API ViaCep
        $viacep = 'https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$logradouro.'/json/';
 
        //retorna os dados como um objeto
        return json_decode(file_get_contents($viacep));
    }

    function ValidCidade (String $cidade):bool {
        
        //retira os caracteres especiais para a conta
        $cidade =  preg_replace('/[^aA-zZ]/','',$cidade);

        //verifica se tem mais de 3 caracteres       
        $contCaracter = strlen($cidade);

        if ($contCaracter >= 3) {
            return true;
        } else {
            return false;
        }
    }
    
    function ValidLogradouro (String $logradouro):bool {

        //retira os caracteres especiais para a conta
        $logradouro =  preg_replace('/[^aA-zZ]/','',$logradouro);

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