<?php 
require "admin/conexao.php";
require "admin/funcao-usuarios.php"; 
require    'toposite.php' ;
$veiculos = listaVeiculos($conexao);
?>
 

        <section class="conteudo">
            
            <hr>
            
            <h2>Veiculos</h2>
            <p> Lista de Veiculos Cadastradros</p>
                       
            <table >
                <thead>
                    <tr>
                        <th>modelo</th>
                        <th>Placa</th>
                        <th>Ano Fabricação</th>
                        <th>Ano Aperação</th>
                        <th colspan="4"></th>
                    </tr>
                </thead>

                <tbody>
<?php foreach($veiculos as $veiculo) { ?>
                    <tr>
                    <td> <?=$veiculo['modelo']?> </td>
                        <td> <?=$veiculo['placa']?> </td>
                        <td> <?=$veiculo['ano_fabricacao']?> </td>
                        <td> <?=$veiculo['inicio_operacao']?> </td>
                        
<td>

                    </tr>
<?php } ?>    
                </tbody>                
            </table>
            <p><a href="home-login.php">Voltar ao início</a></p>
        </section>


       
        </article>
   
        


  
    
</main>

<footer>
   <h2>Cooper Urban Sistemas Integrados Me.</h2>
   <p>Endereço: Rua da Sorte, 1250 Cep: 08250-500 Bairro Vila da Sorte - SP</p>
   <p>© 2019 Todos Direitos Reservados Cooper Urban.</p>
</footer>
