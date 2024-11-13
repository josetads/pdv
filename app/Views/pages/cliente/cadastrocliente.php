

 
<div class="container">

<h2 class="mt-3">Cadastrar Cliente</h2>
<div class="card">
<div class="card-body">
<form action="<?php echo BASE_URL?>cliente/salvardados" id="name_form" method="POST">
    <div class="row">
    <div class="alert" id="alert" role="alert"></div>
    <div class="form-floating col-md-6">
  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
  <label for="floatingInput">Nome</label>
</div>
<div class="form-floating col-md-6">
  <input type="email" class="form-control" id="email" name="email" placeholder="Password">
  <label for="floatingPassword">Email</label>
</div>
    </div><br>
<div class="row">
<div class="form-floating col-md-4">
  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
  <label for="floatingPassword">CPF</label>
</div>

<div class="form-floating col-md-4">
  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
  <label for="floatingPassword">Telefone</label>
</div>

<div class="form-floating col-md-4">
  <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
  <label for="floatingPassword">CEP</label>
</div>
</div><br>
<div class="row">
<div class="form-floating col-md-6">
  <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
  <label for="floatingPassword">Rua</label>
</div>

<div class="form-floating col-md-6">
  <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
  <label for="floatingPassword">Bairro</label>
<div>
</div>
</div>
</div>
<br>
<div class="row">
<div class="form-floating col-md-2">
  <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
  <label for="floatingPassword">Número</label>
</div>
<div class="form-floating col-md-8">
  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
  <label for="floatingPassword">Cidade</label>
</div>
<div class="form-floating col-md-2">
  <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
  <label for="floatingPassword">Estado</label>
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

<script>

    document.getElementById('cep').addEventListener('change', function (){

        const cep = this.value;
if(cep.length === 9){
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(response => response.json())
    .then(data => {
document.getElementById('rua').value = data.logradouro ?? '';
document.getElementById('bairro').value = data.bairro ?? '';
document.getElementById('cidade').value = data.localidade ?? '';
document.getElementById('estado').value = data.uf ?? '';
    })
    .catch(error =>{
        console.log(`Erro ao consultar o CEP: ${erro}`);
    });

}
    });
</script>
