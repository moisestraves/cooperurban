<?php
require 'toposite.php';
?>
        <article>
        <h2>Painel Administrativo</h2>
           <fieldset>
               <legend>Escolha uma Opção</legend>
                <ul>
                    <li><a href="cadastro-condutor.php"><button name="button">Condutor</button></a></li>
                    <li><a href="cadastro-fiscal.php"><button name="button">Fiscal</button></a></li>
                    <li><a href="cadastro-linha.php"><button name="button">Linha</button></a></li>
                    <li><a href="cadastro-veiculo.php"><button name="button">Ônibus</button></a></li>
                    <li><a href="cadastro-usuarios.php"><button name="button">Usuário</button></a></li>
                </ul>
            
            </fieldset>

            <p><a href="home-login.php">Voltar ao início</a></p>
        </article>
        
   <?php
   require 'rodape.php';