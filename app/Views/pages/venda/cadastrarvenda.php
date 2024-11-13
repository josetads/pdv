<div class="container">

        <h1 class="mt-4">Cadastrar Venda</h1>
        <div class="card">
<div class="card-body">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <form method="POST"  action="<?php echo BASE_URL?>venda/salvarvenda">
        <div class="row">
            <div class="form-group col-md-2">
              
            </div>
            <div class="form-group col-md-8">

                <div class="card card-primary">
                         <div class="card-header">
                            <h3 class="card-title">Dados</h3>
                        </div>
                    



                        

<div class="card-body">
                        <div class="row">

                            <div class="form-floating col-md-2">
                                <input type="text" class="form-control" id="data" name="data" placeholder="Digite a data">
                                <label for="floatingInput">Data</label>
                            </div>
                            <div class="form-floating col-md-3">
                                <input type="text" class="form-control" id="cpf" data-mask="###.###.###-##" maxlength="14" data-mask-reverse="true" id="cpf" name="cpf" placeholder="Digite o cpf">
                                <label for="floatingPassword">CPF</label>
                            </div>


                            <div class="form-floating col-md-7">
                                <input type="text" class="form-control" id="nomecliente" name="nome" placeholder="Digite o nome do cliente">
                                <input type="hidden" id="idcliente" class="form-control" name="idcliente" placeholder="Nome Cliente">
                                <label for="floatingPassword">Cliente</label>
                            </div>
                        </div><br>
                        <div class="row">

                            <div class="form-floating col-md-8">

                                <select class="form-control" id="idproduto" name="id_produto">
                                    <option></option>
                                    <?php foreach ($lista as $dados): ?>
                                        <option value="<?= $dados['id_produto'] . '/' . $dados['produto']; ?>"><?= $dados['produto']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floatingPassword">Produto</label>

                            </div>


                            <div class="form-floating col-md-2">
                                <input type="text" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" id="valorprod" name="valor_produto" placeholder="Valor">
                                <label for="floatingPassword">Valor</label>
                            </div>


                            <div class="form-floating col-md-2">
                                <input type="text" class="form-control" id="saldoprod" name="saldo" placeholder="Saldo">
                                <label for="floatingPassword">Saldo</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-floating col-md-6">
                                <input type="text" class="form-control" id="qtd" name="quantidade" placeholder="Quantidade">
                                <label for="floatingPassword">Quantidade</label>
                                <div>
                                </div>

                            </div>

                            <div class="form-floating col-md-3">
                                <input type="text" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" id="valor_total" name="valor_total" placeholder="Valor Total">
                                <label for="floatingPassword">Valor Total</label>
                            </div>
                          
                                             

                                <div class="form-group col-md-3">
                                    <button type="submit" id="addItemVenda" class="btn btn-primary">Incluir Produto</button>
                                </div>


                            </div><br>
                    
                            <div class="row">

                            

                            <div class="form-floating col-md-4 ">
                                <input type="text" class="form-control" id="valorvendatotal" name="totalvaloritens" placeholder="Saldo" data-mask="#.##0,00" data-mask-reverse="true" id="valorvendatotal" name="totalvaloritens">
                                <label for="floatingPassword">Valor Total da Venda</label>
                            </div>
                        
                        
                            <div class="form-floating col-md-4">
                                <input type="text" class="form-control" id="desconto" name="desconto"  placeholder="Desconto" data-mask="#.##0,00" data-mask-reverse="true">
                                <label for="floatingPassword">Valor Desconto</label>
                                    </div>
                            

                            

                            <div class="form-floating col-md-4">
                                <input type="text" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" id="totaldesconto" placeholder="Valor Total" name="valor_total_desconto">
                                <label for="floatingPassword">Total Venda com Desconto</label>
                            </div>

                        
                            </div>
</div>
            
    











                           

                            <div class="card-footer">
                            <button type="submit" id="gravarProduto" class="btn btn-primary">Salvar</button>
                            </div>
                       
                </div>

                 <div class="row">

                    <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Itens Vendas</h3>
                            </div>

                            <div class="card-body p-0">
                                 <table class="table table-striped" id="tabelaItemVenda">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 40%">Produto</th>
                                            <th>Valor</th>
                                            <th>Qtd</th>
                                            <th>Valor Total</th>
                                            <th style="width: 0px"></th>
                                            <th style="width=10%">Ações</th>
                                        </tr>
                                    </thead>
                                     

                                </table>
                        </div>

                    </div>


            </div>
               
            </div>
            <div class="form-group col-md-2">
          

            </div>
           
          
        </div>
         </form>

    </div>   
    
 </main>