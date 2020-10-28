<?php 
require "admin/conexao.php";
require "admin/funcao-usuarios.php"; 
require "toposite.php";
$condutores   = listaCondutores($conexao);
?>
 
            <h2>Consulta de Condutor</h2>
                                   
            <table>
                <thead>
                    <tr>
                        <th>nome</th>
                        <th>rg</th>
                        <th>cpf</th>
                        <th>habilitação</th>
                        <th>endereço</th>
                        <th>validade cnh</th>
                        <th>Admissão</th>
                        <th colspan="6" ></th>
                    </tr>
                </thead>

                <tbody>
<?php foreach($condutores as $condutor) { ?>
                    <tr>
                    <td> <?=$condutor['nome']?> </td>
                        <td> <?=$condutor['rg']?> </td>
                        <td> <?=$condutor['cpf']?> </td>
                        <td> <?=$condutor['habilitacao']?> </td>
                        <td> <?=$condutor['endereco']?> </td>
                        <td> <?=$condutor['validade_habilitacao']?> </td>
                        <td><?=$condutor['data_adm']?></td>
                        <td>
                        <a href="altera-condutor.php?id=<?=$condutor['id']?>">Editar</a>
                        <a href="exclui-condutor.php?id=<?=$condutor['id']?>">Deletar</a>
                        </td>      
                                

                    </tr>
<?php } ?>    
                </tbody>                
            </table>
            <p><a href="home-login.php">Voltar ao início</a></p>
        </section>
        
        
        </article>
        <?php 
 

?>




 
