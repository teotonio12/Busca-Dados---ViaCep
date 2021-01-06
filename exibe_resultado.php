<?php 
//verifica se houve consulta com Cep
if(isset($_POST['cep'])){

    //verifica se na consulta não houve erros
    if($erro_buscacomcep == ''){
    
        echo "
        <h2> Resultado </h2>
            <body>
                <div class='w3-container'>
                    <table class='w3-table w3-striped w3-bordered'>
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
        echo "<br><h2 id='erro'>".$erro_buscacomcep."</h2>";
    }
}

//verifica se houve consulta com dados
if(isset($_POST['uf'])){

    //verifica se houve erros na consulta
    if($erro_buscacomdados == ''){
        echo "
        <h2> Resultado </h2>
            <body>
                <div class='w3-container'>
                    <table class='w3-table w3-striped w3-bordered'>
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
        //exibe o erro da consulta
        echo "<br><h2 id='erro'>".$erro_buscacomdados."</h2>";
    }
}


?>

