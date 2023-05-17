<?php
    include("conecta.php");

    $nome       = $_POST["nome"];
    $email      = $_POST["email"];
    $senha  = $_POST["senha"];
    $cep = $_POST["cep"];

    if(isset($_POST["inserir"]))
    {
    $comando = $pdo->prepare("INSERT INTO cadastro (nome, email, senha, CEP)VALUES('$nome','$email','$senha','$cep')" );
    $resultado = $comando->execute();
    header("Location: loginadm.php");
    }
    if(isset($_POST["excluir"]))
    {
    $comando = $pdo->prepare("DELETE from cadastro WHERE email='$email'" );
    $resultado = $comando->execute();
    header("Location: loginadm.php");
    }
    if(isset($_POST["alterar"]))
    {
    $comando = $pdo->prepare("UPDATE cadastro SET nome='$nome', senha='$senha', cep='$cep' WHERE email='$email'" );
    $resultado = $comando->execute();
    header("Location: loginadm.php");
    }
?>