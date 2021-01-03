<?php 

if(isset($_POST['cep'])){
    if($erro_buscacomcep == ''){
    
        echo "<h2> Resultado  </h2>";

        echo "CEP = ".$resultado_cep->cep."<br>";
        echo "Logradouro = ".$resultado_cep->logradouro."<br>";
        echo "Bairro = ".$resultado_cep->bairro."<br>";
        echo "Cidade = ".$resultado_cep->localidade."<br>";
        echo "Estado = ".$resultado_cep->uf."<br>";
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