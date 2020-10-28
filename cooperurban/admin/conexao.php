<?php 
$servidor ="localhost";
$usuario ="root";
$senha = "";
$banco ="cooper_urban";

/*<?php 
$servidor ="localhost";
$usuario ="id10015427_progweb";
$senha = "progweb123";
$banco ="id10015427_cooperurbansistemas";*/



$conexao = mysqli_connect ($servidor, $usuario , $senha ,$banco);

if($conexao){

   
    mysqli_set_charset ($conexao, "utf8");
    
}else {

    echo "erro cone";
}

