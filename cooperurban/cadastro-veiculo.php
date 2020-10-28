<?php
require 'toposite.php';


?>

<div class="container">
        <article>
        <h2>Cadastro de Veiculo</h2>

            <div class="container">
            <form action="#" class="form-contact" method="post" tabindex="1"> 

                <p>
                        <input type="text" class="form-contact-input" id="mod-onibus" name="mod-onibus" placeholder="Modelo Veiculo" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="placa-onibus" name="placa-onibus" placeholder="Placa" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="ano-fabricacao" name="ano-fabricacao" placeholder="Ano Fabricação" required />
                </p>
                <p>
                        <input type="text" class="form-contact-input" id="ope-onibus" name="ope-onibus" placeholder="Ano de Operação" required />
                </p>

                <p>
                    <button type="submit" class="form-contact-button" name="enviar"> enviar</button>
                </p>
                </form>
                </div>
                <p><a href="home-login.php">Voltar ao início</a></p>
        </article>
</div>

            <?php

            if(isset($_POST['enviar'])){

                $modeloOnibus = $_POST['mod-onibus'];
                $placaOnibus = $_POST ['placa-onibus'];
                $anoFabricacao = $_POST ['ano-fabricacao'];
                $dataOperacao = $_POST ['ope-onibus'];
                                     

                require "admin/conexao.php";

                $sql = "INSERT INTO veiculo(modelo , placa ,ano_fabricacao , inicio_operacao) VALUES ('$modeloOnibus' ,'$placaOnibus','$anoFabricacao' , '$dataOperacao')";

                //Executar o  query como comando sql  (OR DIE Faz o teste da conexao e em caso de erro ele retorna com erro)

                mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
                
                require "admin/desconecta.php";
            }
            
            ?>
            
           
    </section>
    <?php
   require 'rodape.php';