<div class="container">


        <h1 class="mt-4">Visualizar Produtos Venda</h1>
        <div class="card">
<div class="card-body">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
       
        <!-- Inicio da Linha da tabela -->
        <div class="row">&nbsp</div>
        <div class="row">

                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>

                        <div class="card-body p-0">
                             <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Valor</th>
                                        <th>Qtd</th>
                                      
                                        <th>Valor Total</th>
                                        <th style="width: 40px">Ações</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($lista as $dados): ?>
                                      
                                     <tr> 
                                        <td><?php echo $dados['produto'];?></td>
                                        <td><?php echo $dados['valor'];?></td>
                                        <td><?php echo $dados['qtd'];?></td>
                                      
                                        <td><?php echo $dados['qtd'] * $dados['valor'];?></td>
                                        <td>
                                             <a href="<?php echo BASE_URL;?>venda"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                           
                                        </td>
                                    </tr>
                                    <?php endforeach;?>   
                                </tbody>
                            </table>
                    </div>

                </div>


        </div>
        <!-- Fim da linha da tabela -->

    </div>   
       
 </main>