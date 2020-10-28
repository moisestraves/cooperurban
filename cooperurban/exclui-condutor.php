
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
        
        
     