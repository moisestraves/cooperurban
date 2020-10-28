<?php 
require "admin/conexao.php";
require "admin/funcao-usuarios.php"; 
$id = $_GET['id'];
$condutores   = listaCondutores($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cooper Urban Sistemas Integrados Me.</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <header>    
        <div class="cabeca">
            <h1>
                <a href="index.html" >
                    <img src="img/logo-empresa.png" alt="" >
                </a>
            </h1>
            <nav>
            <ul>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                     <li><a>SISTEMA DE CONTROLE DE FROTA</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
            <article>
            <h2>Cadastro de Condutor</h2>

            <div class="container">
            <form action="" class="form-contact" method="post" tabindex="1"> 

                <p>
                        <input type="text" class="form-contact-input" id="nomecondutor" name="nomecondutor" placeholder="Nome Condutor" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="rgcondutor" name="rgcondutor" placeholder="RG" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="cpfcondutor" name="cpfcondutor" placeholder="CPF" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="habcondutor" name="habcondutor" placeholder="Habilitação" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="valcondutor" name="valcondutor" placeholder="Validade" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="endcondutor" name="endcondutor" placeholder="Endereço" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="admissaocondutor" name="admissaocondutor" placeholder="Admissão" required />
                </p>
                <p>
                    <button type="submit" class="form-contact-button" name="enviar"> Enviar</button>
                </p>
                </form>
                </div>
                <p><a href="home-login.php">Voltar ao início</a></p>
        </article>
            <!-- Inicio do código php  para pegar as informações do formulário -->
            <?php 
            
            if(isset($_POST['enviar'])){
                $nome = $_POST['nomecondutor'];
                $rg = $_POST ['rgcondutor'];
                $cpf = $_POST ['cpfcondutor'];
                $cnh = $_POST ['habcondutor']; 
                $venHabilitacao = $_POST ['valcondutor']; 
                $endCondutor = $_POST ['endcondutor'];
                
                $dataAdmiss = $_POST ['admissaocondutor'];

                //conexao banco 

                require "admin/conexao.php";

                //  query insert  banco 
                 $sql = "INSERT INTO motorista(nome , rg , cpf , habilitacao , endereco , data_adm) VALUES ('$nome' ,'$rg' , '$cpf' ,'$cnh' ,'$endCondutor' , '$dataAdmiss')";
                //$sql = "INSERT INTO motorista(nome , rg , cpf , habilitacao , endereco ,data_adm ) VALUES ('$nome' ,'$rg' , '$cpf' ,'$cnh' ,'$endCondutor' , '$dataAdmiss')";

                // 3) Executar o  query como comando sql  (OR DIE Faz o teste da conexao e em caso de erro ele retorna com erro)

                mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
                
                //4) Desconectar do banco 
	            require "admin/desconecta.php";

	           


            }
            
            ?> 
        
        
            
        
    </main>
   
    <footer>
        <h2>Cooper Urban Sistemas Integrados Me.</h2>
        <p>Endereço: Rua da Sorte, 1250 Cep: 08250-500 Bairro Vila da Sorte - SP</p>
        <p>© 2019 Todos Direitos Reservados Cooper Urban.</p>
    </footer>


</body>
</html>