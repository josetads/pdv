
<div class="container">

        <h1 class="mt-4">Saida</h1>
        <div class="card">
        <div class="card-body">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="form-group col-md-6">
               <a  href="<?php echo BASE_URL;?>saida/cadastrarSaida" class="btn btn-secondary"><i class="fa-solid fa-plus mx-1"></i>Adicionar</a>
            </div>
            <div class="form-group col-md-4">
               
            </div>
            <div class="form-group col-md-2">
               
                <div class="card-tools">

                      <form method="POST" action="<?php echo BASE_URL;?>saida/filtrardados">
                       <div class="input-group input-group-sm" style="width:200px">
                        
                            <input type="text" class="form-control" name="produto" placeholder="Pesquisar por produto">

                             <div class="input-group-append">

                                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>

                             </div>

                        </div>
                    </form>
                  
                </div>


            </div>
           
          
        </div>
        <!-- Inicio da Linha da tabela -->
        <div class="row">&nbsp</div>
        <div class="row">

                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Saida</h3>
                        </div>

                        <div class="card-body p-0">
                             <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Data</th>
                                        <th>Produto</th>
                                        <th>Valor</th>
                                        <th>Codigo Produto</th>
                                        <th>Descrição</th>
                                        <th>Quantidade</th>
                                      
                                        
                                        <th style="width: 40px">Ações</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($lista as $dados): ?>
                                    
                                     <tr>
                                        <td style="width: 10px"><?php echo $dados['id_saida'];?></td> 
                                        <td><?php echo Date("d/m/Y",strtotime($dados['data_saida']));?></td>    
                                        <td><?php echo $dados['produto'];?></td> 
                                        <td><?php echo $dados['valor'];?></td>
                                        <td><?php echo $dados['codproduto'];?></td>
                                        <td><?php echo $dados['descricao'];?></td>
                                        <td><?php echo $dados['qtd'];?></td> 
                                       
                                        <td>
                                            
                                            <a href="<?php echo BASE_URL;?>saida/excluirdados/<?php echo $dados['id_saida'].'/'.$dados['id_produto'].'/'.$dados['qtd'];?>"><i class="fa-solid fa-trash text-danger"></i></a>

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
        </div>
</div>