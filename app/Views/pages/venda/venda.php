<div class="container">

        <h1 class="mt-4">Venda</h1>
        <div class="card">
<div class="card-body">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="form-group col-md-6">
               <a  href="<?php echo BASE_URL;?>venda/cadastro" class="btn btn-secondary"><i class="fa-solid fa-plus mx-1"></i>Adicionar</a>
            </div>
            <div class="form-group col-md-4">
               
            </div>
            <div class="form-group col-md-2">
               
                <div class="card-tools">

                  <form method="POST" action="<?php echo BASE_URL;?>venda/filtrardados">
                       <div class="input-group input-group-sm" style="width:200px">
                        
                            <input type="text" class="form-control" data-mask="###.###.###-##" maxlength="14" data-mask-reverse="true" name="cpf" placeholder="Pesquisar por cpf">

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
                            <h3 class="card-title">Lista de Vendas</h3>
                        </div>

                        <div class="card-body p-0">
                             <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Data</th>
                                        <th>Cliente</th>
                                        <th>Valor Total Venda</th>
                                        
                                        <th style="width: 40px">Ações</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($lista as $dados): ?>
                                      
                                     <tr>
                                        <td style="width: 10px"><?php echo $dados['id_venda'];?></td>    
                                        <td><?php echo Date("d/m/Y",strtotime($dados['data_venda']));?></td>     
                                        <td><?php echo $dados['nome'];?></td>
                                        <td><?php echo $dados['total_venda'];?></td>
                                        <td>
                                             <a href="<?php echo BASE_URL;?>venda/visualizarvenda/?id_venda=<?php echo $dados['id_venda'];?>"><i class="fa-solid text-success fa-eye mx-1"></i></a>
                                           
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