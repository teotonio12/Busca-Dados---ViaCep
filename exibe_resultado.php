<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 

if(isset($_POST['cep'])){
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
        echo $erro_buscacomcep;
    }
}


if(isset($_POST['uf'])){
    if($erro_buscacomdados == ''){
        foreach($resultado_dados as $obj)
        {
            echo "CEP = ".$obj->cep."<br>";
            echo "Logradouro = ".$obj->logradouro."<br>";
            echo "Bairro = ".$obj->bairro."<br>";
            echo "Cidade = ".$obj->localidade."<br>";
            echo "Estado = ".$obj->uf."<br>";
            echo "<hr>";
        }
    } else {
        echo $erro_buscacomdados;
    }
}

?>

