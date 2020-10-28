<?php
require "admin/conexao.php";
require "admin/funcao-usuarios.php"; 

if(isset($_POST['email']) && strlen($_POST['email']) > 0){

    if(!isset($_SESSION))
        session_start();
    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    $_SESSION['senha'] = md5(md5($_POST["senha"]));

    $sql_code = "SELECT senha, codigo FROM usuario WHERE email = '$_SESSION[email]'";
    $sql_query = mysqli_query($conexao,$sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total =  $sql_query->num_rows;
 
    if ($total == 0){
            $erro[] = "Email não cadastrado.";
    }else{
        if($dado['senha'] == $_SESSION['senha']){
            $_SESSION['usuario'] = $dado['codigo'];

        }else{

            $erro[] = "Senha incorreta.";
      
    }
    }

            if(count($erro) == 0 || !isset($erro)){
                echo "<script>alert('Login efetuado com sucesso'); location.href='home-login.php';</script>";
            }
}


?>
