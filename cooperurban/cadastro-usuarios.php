<?php
 require "admin/funcao-usuarios.php";
?>
    <section>
          <article>
          <h2>Fomulário de Cadastro de Usuários </h2> 
            <div class="container">
            <form action="" class="form-contact" method="post" tabindex="1"> 

                <p>
                        <input type="text" class="form-contact-input" id="nomeuser" name="nomeuser" placeholder="Nome" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="rguser" name="rguser" placeholder="RG" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="cpfuser" name="cpfuser" placeholder="CPF" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="endereco" name="endereco" placeholder="Endereço" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="email" name="email" placeholder="Email" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="telefone" name="telefone" placeholder="Telefone" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="senhacad" name="senhacad" placeholder="Senha" required />
                </p>

                <p>
                        <input type="text" class="form-contact-input" id="tipouser" name="tipouser" placeholder="Perfil" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="dataadmin" name="dataadmin" placeholder="Admissão" required />
                </p>
                <p>
                    <button type="submit" class="form-contact-button" name="enviar">enviar</button>
                </p>
                </form>
                </div>
                <p><a href="home-login.php">Voltar ao início</a></p>
        </article>
  
            <?php

if(isset($_POST['enviar'])){
    $nome = $_POST['nomeuser'];
    $rg = $_POST ['rguser'];
    $cpfUsuario = $_POST ['cpfuser'];
    $endUsuario = $_POST ['endereco'];
    $emailUsuario = $_POST ['email']; 
    $foneUsuario = $_POST ['telefone']; 
    $senhaUsuario = codificaSenha ($_POST['senhacad']);
    $perfilUsuario = $_POST['tipouser'];
    $admissaoUsuario = $_POST ['dataadmin'];

    

    require "admin/conexao.php";


    //query do banco de dados  inserir dados na tabela usuários
  
   $sql = "INSERT INTO usuario(nome , rg ,cpf , endereco , email ,telefone, senha , perfil , data_admissao ) VALUES ('$nome', '$rg', '$cpfUsuario' ,'$endUsuario' , '$emailUsuario' , '$foneUsuario','$senhaUsuario' , '$perfilUsuario' , '$admissaoUsuario')";
      
    // 3) Executar o  query como comando sql  (OR DIE Faz o teste da conexao e em caso de erro ele retorna com erro)

    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    
    //4) Desconectar do banco 
    require "admin/desconecta.php";

    header("location:index.php");
   


}

            ?>


        

    </section>
    