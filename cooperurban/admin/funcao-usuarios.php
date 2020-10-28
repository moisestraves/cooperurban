<?php

function buscarUsuario($conexao, $login){

// Query de Consulta
$sql = "SELECT * FROM usuario senha WHERE email = '$login'";

$resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

return($resultado);

// Criação do Array com as informações localizada no banco do usuário selecionado
return mysqli_fetch_assoc($resultado);
}

// funcao para codificar as senhas
function codificaSenha($senha){

    //Retorna a senha criptografa usando o algo
    return password_hash($senha, PASSWORD_BCRYPT);
}

// função consulta senha

function verificaSenha($senhaForm , $senhaBD){

    if(password_verify($senhaForm, $senhaBD)){

return $senhaBD;

    } else {

    return codificaSenha($senhaForm);
    }
}

// Função que Lista todos o usuários cadastrados no sistema
function listarUsuarios($conexao){

    $sql = "SELECT * FROM  usuario ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    // Criação de um ARRAY
    $usuarios = [];

    // Listar Usuários para Mostrar no Array 
    while ($batatinha = mysqli_fetch_assoc($resultado)){

        //
        array_push($usuarios, $batatinha);


    }
    return $usuarios;
    
}


// Função que Lista veiculos cadastrados no sistema
function listaVeiculos($conexao){

    $sql = "SELECT * FROM  veiculo ORDER BY modelo";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    // Criação de um ARRAY
    $veiculos = [];

    // Listar Usuários para Mostrar no Array 
    while ($batatinha = mysqli_fetch_assoc($resultado)){

        //
        array_push($veiculos, $batatinha);


    }
    return $veiculos;
    
}
function listaCondutores($conexao){

    $sql = "SELECT * FROM  motorista ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    // Criação de um ARRAY
    $condutores = [];

    // Listar Usuários para Mostrar no Array 
    while ($batatinha = mysqli_fetch_assoc($resultado)){

        //
        array_push($condutores, $batatinha);


    }
    return $condutores;
}


function consultaFiscal($conexao){

    $sql = "SELECT * FROM  fiscal ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    // Criação de um ARRAY
    $consultaFiscal = [];

    // Listar Usuários para Mostrar no Array 
    while ($batatinha = mysqli_fetch_assoc($resultado)){

        //
        array_push($consultaFiscal, $batatinha);


    }
    return $consultaFiscal;
}

