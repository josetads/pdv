

<div class="container">

    <h2 class="mt-3">Cadastrar Produto</h2><br>
    <div class="card">
  <div class="card-body">
    <div class="row">
        <div class="form-group col-md-6">
            <a href="<?php echo BASE_URL; ?>produto/cadastro" class="btn btn-secondary"><i class="fa-solid fa-plus mx-1"></i>Adicionar</a>
        </div>
        <div class="form-group col-md-4">

        </div>
        <div class="form-group col-md-2">

            <div class="card-tools">

                <form method="POST" action="<?php echo BASE_URL; ?>produto/filtrardados">
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
                <h3 class="card-title">Lista de Produtos</h3>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Descrição</th>

                            <th style="width: 40px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $dados) : ?>

                            <tr>
                                <td style="width: 10px"><?php echo $dados['id_produto']; ?></td>
                                <td><?php echo $dados['codproduto']; ?></td>
                                <td><?php echo $dados['produto']; ?></td>
                                <td><?php echo $dados['valor']; ?></td>
                                <td><?php echo $dados['descricao']; ?></td>
                                <td>
                                    <a href="<?php echo BASE_URL; ?>produto/carregardadoseditar/<?php echo $dados['id_produto']; ?>"><i class="fa-solid fa-square-pen text-success mx-1"></i></a>
                                    <a href="<?php echo BASE_URL; ?>produto/excluirdados/<?php echo $dados['id_produto']; ?>"><i class="fa-solid fa-trash text-danger"></i></a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
  </div>

        <!-- Fim da linha da tabela -->