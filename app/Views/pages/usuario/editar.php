<main>
    <div class="container-fluid px-4">

        <h1 class="mt-4">Editar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="form-group col-md-2">
              
            </div>
            <div class="form-group col-md-8">

                <div class="card card-primary">
                         <div class="card-header">
                            <h3 class="card-title">Usuário</h3>
                        </div>
                    
                        <form method="POST" action="<?php echo BASE_URL?>usuario/editardados">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="hidden" class="form-control" value="<?php echo @$registroeditar['id_usuario'];?>" name="id_usuario">
                                    <input type="email" class="form-control" value="<?php echo @$registroeditar['email'];?>" id="exampleInputEmail1" name="email" placeholder="Digite seu e-mail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo @$registroeditar['senha'];?>" name="senha" placeholder="Digite sua senha">
                                </div>
                               
                                <div class="form-group">
                                        <label>Nivel</label>
                                        <select class="form-control" name="nivel">
                                        <option><?php echo @$registroeditar['nivel'];?></option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Usuario">Usuario</option>
                                        </select>
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