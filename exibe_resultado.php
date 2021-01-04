<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 

//verifica se houve consulta com Cep
if(isset($_POST['cep'])){

    //verifica se na consulta não houve erros
    if($erro_buscacomcep == ''){
    
        echo "
            <body>
                <div class='w3-container'>
                    <table class='w3-table w3-striped'>
                        <tr>
                            <th>CEP</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Localidade</th>
                            <th>UF</th>
                        </tr>
                        <tr>
                            <th>".$resultado_cep->cep."</th>
                            <th>".$resultado_cep->logradouro."</th>
                            <th>".$resultado_cep->bairro."</th>
                            <th>".$resultado_cep->localidade."</th>
                            <th>".$resultado_cep->uf."</th>
                        </tr>
                    </table>
                </div>
            </body>
        ";

    } else {
        //exibe o erro da consulta
        echo $erro_buscacomcep;
    }
}

if(isset($_POST['uf'])){
    if($erro_buscacomdados == ''){
        echo "
            <body>
                <div class='w3-container'>
                    <table class='w3-table w3-striped'>
                        <tr>
                            <th>CEP</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Localidade</th>
                            <th>UF</th>
                        </tr>    
        ";
        foreach($resultado_dados as $obj)
        {
                    echo "
                        <tr>
                            <th>".$obj->cep."</th>
                            <th>".$obj->logradouro."</th>
                            <th>".$obj->bairro."</th>
                            <th>".$obj->localidade."</th>
                            <th>".$obj->uf."</th>
                        </tr>
                     ";
        }
        echo "
                    </table>
                </div>
            </body>
        ";
    } else {
        echo $erro_buscacomdados;
    }
}

?>

