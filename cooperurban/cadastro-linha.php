<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cooper Urban Sistemas Integrados Me.</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
        footer {
            
            font-size: 14px;
            
            text-align: center;
            padding: 1%;
            /*position: fixed;*/
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            color: black;
            border-bottom: 5px solid white;
            /*background-color:#FFAB58;*/

        }
    
    </style>
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
            <h2>Cadastro de Linha</h2>

        <div class="container">
        <form action="" class="form-contact" method="post" tabindex="1"> 

           
            <p>
                    <input type="text" class="form-contact-input" id="nome-linha" name="nome-linha" placeholder="Linha" required />
            </p>
             
            <p>
                    <input type="text" class="form-contact-input" id="numerolinha" name="numerolinha" placeholder="Número" required />
            </p>

            <p>
                <button type="submit" class="form-contact-button" name="enviar"> Enviar</button>
            </p>
            
            </form>
            </div>
            <p><a href="home-login.php">Voltar ao início</a></p>
    </article>

                <?php
                 if(isset($_POST['enviar'])){

                    $nomeLinha = $_POST['nome-linha'];
                    $numeroLinha = $_POST ['numerolinha'];
                    
    
                    require "admin/conexao.php";
    
                //query do banco de dados  inserir dados na tabela usuários
    
             $sql = "INSERT INTO intinerario(nome ,numero ) VALUES ('$nomeLinha' , '$numeroLinha')";
      
        // 3) Executar o  query como comando sql  (OR DIE Faz o teste da conexao e em caso de erro ele retorna com erro)
    
        mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
        
        //4) Desconectar do banco 
        require "admin/desconecta.php";
                    
    
                }

                 

                ?>
                
            </fieldset>
        </article>
    </main>

    <footer>
        <h2>Cooper Urban Sistemas Integrados Me.</h2>
        <p>Endereço: Rua da Sorte, 1250 Cep: 08250-500 Bairro Vila da Sorte - SP</p>
        <p>© 2019 Todos Direitos Reservados Cooper Urban.</p>
    </footer>


</body>
</html>