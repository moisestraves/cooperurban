<?php
require "admin/conexao.php";
require "admin/funcao-usuarios.php";
require "toposite.php";
$usuarios = listarUsuarios($conexao);
?>
           <section>
       
        <article>
        <h2>Usuários Cadastrados </h2>
     
       <table >
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Rg</th>
                        <th>Cpf</th>
                        <th>Endereço</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Perfil</th>
                        <th>Data Admissão </th>
                        <th colspan="6"></th>
                        
                    </tr>
                </thead>

                <tbody>
                <!--laço para buscar todos usuários listar -->

                <?php foreach($usuarios as $usuario){?>
                    <tr>
                    <td> <?=$usuario['nome']?> 
                    <td> <?=$usuario['rg']?> 
                    <td> <?=$usuario['cpf']?> 
                    <td> <?=$usuario['endereco']?>  
                    <td> <?=$usuario['email']?> 
                    <td> <?=$usuario['telefone']?> 
                    <td> <?=$usuario['perfil']?> 
                   
                    <td> <?=$usuario['data_admissao']?> 
                        
                        </td>
                        
                    </tr>
<?php } ?>   

                </tbody>                
            </table>
            <p><a href="home-login.php">Voltar ao início</a></p>
            </section>
    
       
        </article>
   


