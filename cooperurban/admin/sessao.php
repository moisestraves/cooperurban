<?php
if(!isset($_SESSION)){

    session_start();
    
    function login($id, $nome, $email){
        //Criando variaveis de sessão

        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;



    }

    // Faz a verificação de id para liberar acesso ao sistema
    function verificaAcesso(){

        if(!isset($_SESSION['id']) ){
            session_destroy();
            header("location:../login.php?acesso_proibido");
            exit;
        }
    }

    function logout(){

        session_start();
        session_destroy();
        header("location:../login.php?logout");
        exit;
    }
}
