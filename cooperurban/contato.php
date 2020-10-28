<?php

require 'toposite.php';

?>
        <article>
            <h2>Formulário de Contato </h2>
            <p><i> Solicite mais informações sobre a <b> Cooper Urban</b>.</i></p>
        </article>

        <article>
            <div class="container">
                <form action="#" class="form-contact" method="post" tabindex="1"> 
                    <p>
                        <input type="text" class="form-contact-input" name="nome" placeholder="Nome" required />
                    </p>
                    <p>
                        <input type="email" class="form-contact-input" name="email" placeholder="Email" required />
                    </p>
                    <p> 
                        <input type="tel" class="form-contact-input" name="tel" placeholder="Telefone" />
                    </p>
                    <p> 
                        <textarea class="form-contact-textarea" name="conteudo" placeholder="Deixe uma mensagem" required></textarea>
                    </p>
                    <p>
                        <button type="submit" class="form-contact-button">Enviar</button>
                    </p>

                </form>
            </div>
        </article>

        <?php
            if(isset($_POST['enviar'])){ // O isset faz a verificação da ação foi executada
            $nome = $_POST ['nome'];
            $email = $_POST ['email'];
            $telefone =$_POST['telefone'];
            $assunto =$_POST ['assunto']; 
            if(empty($nome) || empty ($email)){?>
                <p>Entre com os Dados do Usuário"</p>
               <?php 
            } else{
                ?>
                <h2> Dados Cadastrais </h2>
             <p><b>nome:</b> <?=$nome?></p>
            <p><b>email:</b> <?=$email?> </p>
            <p><b>telefone</b> <?=$telefone?> </p>
            <p><b>Solicitação:</b> <?=$assunto?></p>
        <?php }
        }?>
   
