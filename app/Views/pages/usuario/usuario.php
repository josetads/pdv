<main>
    <div class="container-fluid px-4">

        <h1 class="mt-4">Usuario</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="form-group col-md-6">
               <a  href="<?php echo BASE_URL;?>usuario/cadastro" class="btn btn-primary"><i class="fa-solid fa-plus mx-1"></i>Adicionar</a>
            </div>
            <div class="form-group col-md-4">
               
            </div>
            <div class="form-group col-md-2">
               
                <div class="card-tools">

                  <form method="POST" action="<?php echo BASE_URL;?>usuario/filtrardados">
                       <div class="input-group input-group-sm" style="width:250px">
                        
                            <input type="text" class="form-control" name="email" placeholder="Pesquisar por email">

                             <div class="input-group-append">

                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>

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
                            <h3 class="card-title">Lista de Usuario</h3>
                        </div>

                        <div class="card-body p-0">
                             <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>E-mail</th>
                                        <th>Senha</th>
                                        <th>Nivel</th>
                                        <th style="width: 40px">Ações</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($lista as $dados): ?>
                                      
                                     <tr>
                                        <td style="width: 10px"><?php echo $dados['id_usuario'];?></td>    
                                        <td><?php echo $dados['email'];?></td>   
                                        <td><?php echo $dados['senha'];?></td>
                                        <td><?php echo $dados['nivel'];?></td>
                                        <td>
                                            <a href="<?php echo BASE_URL;?>usuario/carregardadoseditar/<?php echo $dados['id_usuario'];?>"><i class="fa-solid fa-square-pen mx-1"></i></a>
                                            <a href="<?php echo BASE_URL;?>usuario/excluirdados/<?php echo $dados['id_usuario'];?>"><i class="fa-solid fa-trash text-danger"></i></a>

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