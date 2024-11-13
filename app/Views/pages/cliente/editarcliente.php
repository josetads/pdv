<!-- Collect the nav links, forms, and other content for toggling -->

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="container">

  <h2 class="mt-3">Editar Cliente</h2>
  <form action="<?php echo BASE_URL ?>cliente/editardados" id="name_form" method="POST">
    <div class="row">
      <div class="alert" id="alert" role="alert"></div>
      <div class="form-floating col-md-6">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo @$registroeditar['nome']; ?>">
        <label for="floatingInput">Nome</label>
        <input type="hidden" class="form-control" value="<?php echo @$registroeditar['id_cliente']; ?>" name="id_cliente">
      </div>
      <div class="form-floating col-md-6">
        <input type="email" class="form-control" id="email" name="email" placeholder="Password" value="<?php echo @$registroeditar['email']; ?>">
        <label for="floatingPassword">Email</label>
      </div>
    </div><br>
    <div class="row">
      <div class="form-floating col-md-4">
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="<?php echo @$registroeditar['cpf']; ?>">
        <label for="floatingPassword">CPF</label>
      </div>

      <div class="form-floating col-md-4">
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php echo @$registroeditar['telefone']; ?>">
        <label for="floatingPassword">Telefone</label>
      </div>

      <div class="form-floating col-md-4">
        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?php echo @$registroeditar['cep']; ?>">
        <label for="floatingPassword">CEP</label>
      </div>
    </div><br>
    <div class="row">
      <div class="form-floating col-md-6">
        <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?php echo @$registroeditar['rua']; ?>">
        <label for="floatingPassword">Rua</label>
      </div>

      <div class="form-floating col-md-6">
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?php echo @$registroeditar['bairro']; ?>">
        <label for="floatingPassword">Bairro</label>
        <div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="form-floating col-md-2">
        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo @$registroeditar['numero']; ?>">
        <label for="floatingPassword">Número</label>
      </div>
      <div class="form-floating col-md-6">
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo @$registroeditar['cidade']; ?>">
        <label for="floatingPassword">Cidade</label>
      </div>
      <div class="form-floating col-md-2">
        <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" value="<?php echo @$registroeditar['estado']; ?>">
        <label for="floatingPassword">Estado</label>
      </div>

      <div class="form-floating col-md-2">
        
        <input type="text" class="form-control" value="<?php echo @$registroeditar['ativo']; ?>" id="ativo" name="ativo" placeholder="Digite 1 ou 0">
        <label for="floatingPassword">Ativo 1 | 0 - Inativo</label>
      </div>





    </div><br>
    <div class="row">
      <div class="col-md-4">
        <input type="submit" class="btn btn-secondary text-white" name="submit" id="submit" value="Salvar Dados">
      </div>
    </div>
  </form>






</div>








</div>


</div>