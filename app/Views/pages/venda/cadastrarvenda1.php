

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
                </div>
        </div>








<br>

</div>

