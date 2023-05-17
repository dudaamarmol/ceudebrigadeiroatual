<?php
include("conecta.php");
$email = "";
if( isset($_GET["email"])){
    $email = $_GET["email"];
    $comando = $pdo->prepare("SELECT * FROM cadastro where email='$email'");
}else{
    $comando = $pdo->prepare("SELECT * FROM cadastro");
}

    

$resultado = $comando->execute();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administrador - Céu de Brigadeiro</title>
    <link href="css/entregas.css" rel="stylesheet"> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }

        .cadastro{
            width: 80%;
        }

        fieldset input{
            width: 18%
        }

        .pesquisa input{
            width: 40%
        }

        .usuario{
            width: 100%
        }

        .usuariot{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        thead{
            background-color: #D51C52;
            color: #fff
        }

        td img{
            margin-top: 5px;
            cursor: pointer
        }
    </style>

</head>
<body>
    
    <div class="cadastro">
        <h2>Página de Administrador - Céu de Brigadeiro</h2>
        <form action="loginadm.php" method="get">

            <fieldset class="pesquisa">
                <legend> Pesquisar Usuário </legend>
                
                        <input type="text" name="email" placeholder="Email do Usuário">
                        <input type="submit" class="botaoen" value="Pesquisar" style="width: 10%;">
                 
               </fieldset>
            </form>

            <br>

            <fieldset>
             <legend> Adicionar/Alterar Usuário </legend>
             <form action="crud.php" method="post">
                    <input type="text" id="email" name="email" placeholder="Email">       
                    <input type="text" id="nome" name="nome" placeholder="Nome do Usuário" >
                    <input type="text" id="senha" name="senha" placeholder="Senha">
                <input type="text" name="cep" size="5" maxlength="8" placeholder="CEP" id="cep">
              
            </fieldset>
          
            <div class="botoesen">
            
            <input type="submit" class="botaoen" name="alterar" value="Alterar">
            <input type="submit" class="botaoen" name="inserir" value="Inserir">
            <input type="reset" value="Limpar" class="botaoen">
            <input type="submit" value="Excluir" name="excluir" class="botaoen">
        </div>
            </form>

            <div class="usuario">
                <table border="1" class="usuariot">
                    <thead>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>CEP</th>
                        <th>--</th>
                    </thead>
                    <?php
                        while ($linhas = $comando->fetch()){
                            $nome = $linhas["nome"];
                            $email = $linhas["email"];
                            $senha = $linhas["senha"];
                            $cep = $linhas["CEP"];
                            echo("
                                <tr>
                                    <td>$nome</td>
                                    <td>$email</td>
                                    <td>$senha</td>
                                    <td>$cep</td>
                                    <td>
                                    <img src='img/lapis.png' width='25px' onclick=\"Editar('$nome','$email','$senha','$cep');\" >
                                    </td>
                                </tr>
                            ");
                        }
                    ?>
                </table>
            </div>
    </div>
<script>
    function Editar(txtnome, txtemail, txtsenha, txtcep){
        nome.value = txtnome;
        email.value = txtemail;
        senha.value = txtsenha;
        cep.value = txtcep;
    }

</script>
</body>
</html>