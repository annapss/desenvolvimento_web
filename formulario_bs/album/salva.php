<!--Código que faz com que os dados submetidos sejam enviados para dados.csv-->
<?php

    $numero = $_POST["numero"];
    $data = $_POST["data"];
    $firma = $_POST["firma"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $uf = $_POST["uf"];
    $cep = $_POST["cep"];
    $cnpj = $_POST["cnpj"];
    $inscricao = $_POST["inscricao"];
    $telefones = $_POST["telefones"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $observacoes = $_POST["observacoes"];
    $termos = $_POST["termos"];

    echo "<h1>Dados Salvos!</h1><p>Os dados correspondentes a <b>$numero</b> e <b>$firma</b> foram salvos</p>";
    
    file_put_contents("dados.csv", "$numero, $data, $firma, $endereco, $complemento, $bairro, $uf, $cep, $cnpj, $inscricao, $telefones, $celular, $email, $observacoes, $termos\n", FILE_APPEND);


?>