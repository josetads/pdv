<main>
    <div class="container-fluid px-4">

        <h1 class="mt-4">Editar Entrada</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="form-group col-md-2">
              
            </div>
            <div class="form-group col-md-8">

                <div class="card card-primary">
                         <div class="card-header">
                            <h3 class="card-title">Entrada</h3>
                        </div>
                    
                        <form method="POST" action="<?php echo BASE_URL?>entrada/editardados">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Data Entrada</label>
                                    <input type="text" class="form-control" value="<?php echo date('d/m/Y') ;?>" data-mask="00/00/0000" id="exampleInputEmail1" name="data" placeholder="Digite data">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo @$registroeditar['id_entrada'];?>" name="id_entrada">
                                    <label for="fornecedor">Produto</label>
                                    <select class="form-control" id="idproduto">
                                        <option><?php echo @$registroeditar['produto'];?></option>
                                        <?php foreach($lista as $dados):?>
                                                <option value="<?=$dados['id_produto'];?>"><?=$dados['produto'];?></option>
                                         <?php endforeach; ?>
                                    </select>
                                       
                                                                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor</label>
                                    <input type="text" class="form-control" id="valorprod" value="<?php echo @$registroeditar['valor'];?>" name="valor" placeholder="Digite valor">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cod. Produto</label>
                                    <input type="text" class="form-control" id="codprod" value="<?php echo @$registroeditar['codproduto'];?>" name="codproduto" placeholder="Digite cod produto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Decrição</label>
                                    <input type="text" class="form-control" id="descricaoprod" value="<?php echo @$registroeditar['descricao'];?>" name="descricao" placeholder="Digite descricao">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantidade</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo @$registroeditar['qtd'];?>" name="quantidade" placeholder="Digite quantidade">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Minimo</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo @$registroeditar['minimo'];?>" name="minimo" placeholder="Digite minimo">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Maximo</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo @$registroeditar['maximo'];?>" name="maximo" placeholder="Digite maximo">
                                </div>
                                
                            </div>
                           

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </form>
                </div>
               
            </div>
            <div class="form-group col-md-2">
          

            </div>
           
          
        </div>
        

    </div>   
       
 </main>