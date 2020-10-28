
<?php
require "admin/conexao.php";
require "admin/funcao-usuarios.php";
require "toposite.php";
$consultafiscal = ($conexao);

?>
<div class="container">
           <section>
       
        <article>
     
        <hr>
            
            <h2>Cosulta fiscal</h2>
                                   
            <table>
                <thead>
                    <tr>
                        <th>nome</th>
                        <th>rg</th>
                        <th>cpf</th>
                        <th>habilitação</th>
                        <th>endereço</th>
                        <th>Admissão</th>
                        <th colspan="6" ></th>
                    </tr>
                </thead>

                <tbody>
<?php foreach($consultafiscal as $fiscal) { ?>
                    <tr>
                    <td> <?=$fiscal['nome']?> </td>
                        <td> <?=$fiscal['rg']?> </td>
                        <td> <?=$fiscal['cpf']?> </td>
                        <td> <?=$fiscal['habilitacao']?> </td>
                        <td> <?=$fiscal['endereco']?> </td>
                         <td><?=$fiscal['data_adm']?></td>
                        
                        
                        
<td>

                    </tr>

<?php } ?>    
                </tbody>                
            </table>
            
        </section>

        </article>
</div>
        <?php 
 

?>

       
       
       
       
       
       
       
        </article>
   


