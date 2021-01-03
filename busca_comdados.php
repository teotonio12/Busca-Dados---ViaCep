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

            //verifica se UF é valida
            if( ValidUF ($uf)){

                $resultado = BuscaDadosViaCep ($uf,$cidade,$logradouro);

                return $resultado;
            } else {
                $resultado = ZeraResultado();

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