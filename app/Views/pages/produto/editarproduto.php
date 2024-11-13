
<div class="container">

<h2 class="mt-3">Editar Produto</h2>
<div class="card">
<div class="card-body">
<form action="<?php echo BASE_URL?>produto/editardados" id="name_form" method="POST">
    <div class="row">
    <div class="alert" id="alert" role="alert"></div>
    <div class="form-floating col-md-6">
  <input type="text" class="form-control" id="produto" name="produto" placeholder="Nome" value="<?php echo @$registroeditar['produto'];?>">
  <input type="hidden" class="form-control" value="<?php echo @$registroeditar['id_produto'];?>" name="id_produto">
  <label for="floatingInput">Produto</label>
</div>
<div class="form-floating col-md-6">
  <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" value="<?php echo @$registroeditar['valor'];?>">
  <label for="floatingPassword">Valor</label>
</div>
    </div><br>
<div class="row">
<div class="form-floating col-md-4">
  <input type="text" class="form-control" id="codproduto" name="codproduto" placeholder="Código do Produto" value="<?php echo @$registroeditar['codproduto'];?>">
  <label for="floatingPassword">Cod. Produto</label>
</div>

<div class="form-floating col-md-8">
  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Telefone" value="<?php echo @$registroeditar['descricao'];?>">
  <label for="floatingPassword">Descrição</label>
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


