<!-- Collect the nav links, forms, and other content for toggling -->

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="container">

    <h2 class="mt-3">Saída de Produtos</h2>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo BASE_URL ?>saida/salvardados" method="POST">
                <div class="row">
                    <div class="alert" id="alert" role="alert"></div>
                    <div class="form-floating col-md-3">
                        <input type="text" class="form-control" id="data" name="data" placeholder="Data entrada" value="<?php echo date('d/m/Y') ;?>" data-mask="00/00/0000">
                        <label for="floatingInput">Data da Saída</label>
                    </div>

                    <div class="form-floating col-md-4">
                     
                        <select class="form-control" id="idprodutosaida" name="id_produto">
                            <option></option>
                            <?php foreach ($lista as $dados) : ?>
                                <option value="<?= $dados['id_produto']; ?>"><?= $dados['produto']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingPassword">Produto</label>

                    </div>

                    <div class="form-floating col-md-2">
                        <input type="text" class="form-control" id="valorprod" name="valor" placeholder="Password">
                        <label for="floatingPassword">Valor</label>
                    </div>
                
               
                    <div class="form-floating col-md-3">
                        <input type="text" class="form-control" id="codprod" name="codproduto" placeholder="CPF">
                        <label for="floatingPassword">Cod. Produto</label>
                    </div>

                </div><br>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="descricaoprod" name="descricao" placeholder="Descrição">
                        <label for="floatingPassword">Descrição</label>

                    </div>
                    <div class="form-floating col-md-3">
                        <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Digite a quantidade">
                        <label for="floatingPassword">Saldo</label>
                    </div>
                
               
                    <div class="form-floating col-md-3">
                        <input type="text" class="form-control" id="cep" name="quantidade" placeholder="Digite a quantidade">
                        <label for="floatingPassword">Quantidade</label>
                    </div>
                </div><br>
                   <div class="row">
                
                <div class="row">
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-secondary text-white" name="submit" id="submit" value="Salvar Dados">
                    </div>
                </div>
            </form>



        </div>


    </div>

</div>