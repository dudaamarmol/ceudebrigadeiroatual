<?php
    include("conecta.php");
    // PARA PEGAR O TEXTO DOS INPUTS
    $nome  = $_POST["nome"];
    $email  = $_POST["email"];
    $cep  = $_POST["cep"];
    $senha = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO cadastro (nome, email, CEP, senha) VALUES ('$nome','$email','$cep','$senha')");
    
    $resultado = $comando->execute();

    header("Location: estrutura.html");

?>