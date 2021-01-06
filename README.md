<h2>Instalação do Projeto</h2> 
    <p>Devido, este projeto utilizar o PHP que é uma linguagem ,server-side, ou seja é executada no Back End. Emtão, é necessario executa-la em um servidor, mas, não se preocupe que mostrarei como utilizar seu próprio computador em um servidor para a execução do projeto.</p>
    <h3>Caso estaja utilizando um Servidor Externo:</h3>
       <ul>
            <li>Habilite a função "allow_url_fopen" no arquivo ini.php.</li>
            <li> Faça o download deste projeto, Clicando em "Code -> Download ZIP"</li>
            <li> Extraia os arquivos</li>
            <li> Carregue os arquivos para seu servidor externo, com o Filezilla, ou qualquer programa de sua preferência.</li>
       </ul>
       <p>Esta função permite que haja busca de informações de fora do seu servidor. Isso é necessário devido, a utilizarmos a API ViaCep que nos fornece os dados através de um link externo.</p>
    <h3>Caso queira utilizar o seu computador para executar:</h3>
        <p>Primeiramente precisará de um programa para ser nosso servidor web, eu utilizei o XAMPP ->
            <a href="https://www.apachefriends.org/pt_br/index.html">Link para Download</a></p>
        <p> Baixe de acordo com a versão e seu sistema operacional, caso tenha alguma dúvida na instalação, na página do XAMPP, há videos explicativos e ajudas.</p>
    <p>Após instalar ou caso já tenha instalado, precisa apenas executar o XAMPP Control Panel </p>
    <p> Com o XAMPP Control Panel aberto, start a primeira opção chamada "Apache", ele será o nosso servidor web.</p>
    <p> Quando ficar verde, quer dizer que o nosso servidor esta funcionando, para podermos testar podemos acessar atráves de um navegador o caminho "http://localhost/dashboard/"</p>
    <p>Se tudo estiver ok, receberá um Bem Vindo do XAMPP</p>
    <p>Agora precisamos apenas carregar os arquivos para a pasta do XAMPP</p>
        <ul>
            <li> Faça o download deste projeto, Clicando em "Code -> Download ZIP"</li>
            <li> Extraia os arquivos</li>
            <li> Carregue os arquivos para este caminho em seu computador: "C:\xampp\htdocs".</li>
             <li> o caminho pode variar de acordo com a instalação, consulte as configurações do XAMPP</li>
        </ul>
        <p> E pronto agora pode acessa-lo atráves do caminho "http://localhost/Busca-Dados---ViaCep-main/" </p>
        <p> Não se preocupe com o nome complicado, você pode alterar o nome da pasta para um nome mais facil e acessar com o caminho com o nome novo</p>
       
 <h2> Como Utilizar </h2>
    <p> O projeto é organizado em três abas:</p>
        <ul>
            <li> Início </li>
               <ul> 
                   <li>Nesta aba estão algumas recomendações e instruções de uso. </li>
               </ul>
            <li> Busca Com Cep</li>
                 <ul> 
                   <li> Nesta aba encontra-se o campo para informar o CEP e o botão para buscar. </li>
                   <li> Após informar, apenas aguarde o processamento que o resultado aparecerá abaixo. </li>
               </ul>
            <li> Busca Por UF-CIDADE-LOGRADOURO</li>
                <ul> 
                   <li> Nesta aba encontra-se os campos para informar o UF, CIDADE e LOGRADOURO, abaixo o botão para buscar. </li>
                   <li> Após informar todos os campos, apenas aguarde o processamento que o resultado aparecerá abaixo. </li>
               </ul>
        </ul>
<h2> Tratamentos de Erros</h2>
    <p>Para evitar a quebra do processamento, este projeto possui os seguintes tratamentos de erros:</p>
        <ul> 
            <li> Campo CEP </li>
                <ul> 
                   <li> Considera apenas os numeros informados. </li>
                   <li> Verifica a quantidade de 8 caracteres, aceitando o '-' na após os cinco primeiros numeros. </li>
                   <li> Verifica se o CEP informado é existente</li>
               </ul>
            <li> Campo UF </li>
                <ul> 
                   <li> Verifica se o UF informado é existente</li>
               </ul>
            <li> Campo CIDADE E LOGRADOURO </li>
                <ul> 
                   <li> Verifica se no mínimo foram informados 3 caracteres, para manter os resultados não tão abrangentes, na verificação desconsidera os caracteres especias. </li>
               </ul>
        </ul>
<h2> Considerações Finais </h2>
    <p> Espero que este projeto possa contribuir para a nossa comunidade de desenvolvedores, pois, juntos podemos melhorar cada vez mais</p>
    <p> Todo Feedback é bem vindo.</p>
