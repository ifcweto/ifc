<?php require_once('inc/topo.php');?>
      <div class="main_content">
         <!-- START SECTION SHOP -->
         <div class="section">
            <div class="container">
               <form action="?a=1" method="post" name="form" enctype="multipart/form-data">
                 <div class="row">
                     <div class="col-md-6">
                        <div class="heading_s1">
                           <h4>Detalhes de faturamento / Entrega</h4>
                        </div>
                        <div class="form-group">
                           <input type="text" required="" class="form-control" name="nome_cliente" placeholder="Nome *" value="">
                        </div>
                        <div class="form-group">
                           <input type="text" required="" class="form-control" name="sobrenome_cliente" placeholder="Sobrenome *" value="">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="cpf_cliente" placeholder="CPF" value="">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control cep" name="cep_cliente_endereco" required="" placeholder="CEP *" value="" maxlength="9">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="endereco_cliente_endereco" required="" placeholder="Endereço " value="">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="numero_cliente_endereco" placeholder="Número *">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="complemento_cliente_endereco" placeholder="Complemento (opcional) *">
                        </div>
                        <div class="form-group">
                           <input class="form-control bairro" required="" type="text" name="bairro_cliente_endereco" placeholder="Bairro *" value="">
                        </div>
                        <div class="form-group">
                           <label>Estado</label>
                           <select class="form-control cod_uf first_null not_chosen" required="" name="cod_uf" id="cod_uf">
                              <option value="">Selecione..</option>
                              <option value="AC">Acre</option>
                              <option value="AL">Alagoas</option>
                              <option value="AM">Amazonas</option>
                              <option value="AP">Amapá</option>
                              <option value="BA">Bahia</option>
                              <option value="CE">Ceará</option>
                              <option value="DF">Distrito Federal</option>
                              <option value="ES">Espírito Santo</option>
                              <option value="GO">Goiás</option>
                              <option value="MA">Maranhão</option>
                              <option value="MG">Minas Gerais</option>
                              <option value="MS">Mato Grosso do Sul</option>
                              <option value="MT">Mato Grosso</option>
                              <option value="PA">Pará</option>
                              <option value="PB">Paraíba</option>
                              <option value="PE">Pernambuco</option>
                              <option value="PI">Piauí</option>
                              <option value="PR">Paraná</option>
                              <option value="RJ">Rio de Janeiro</option>
                              <option value="RN">Rio Grande do Norte</option>
                              <option value="RO">Rondônia</option>
                              <option value="RR">Roraima</option>
                              <option value="RS">Rio Grande do Sul</option>
                              <option value="SC">Santa Catarina</option>
                              <option value="SE">Sergipe</option>
                              <option value="SP">São Paulo</option>
                              <option value="TO">Tocantins</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Cidade</label>
                           <input class="form-control" required="" type="text" name="namo_cidade" placeholder="Cidade">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="fone_cliente" placeholder="Telefone *" value="">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="whats_cliente" placeholder="WhatsApp *" value="">
                        </div>
                        <div class="form-group">
                           <input class="form-control" required="" type="text" name="email_cliente" placeholder="E-mail *" value="">
                        </div>
                        <div class="heading_s1">
                           <h4>Observação</h4>
                        </div>
                        <div class="form-group mb-0">
                           <textarea rows="5" class="form-control" name="obs_pedido" placeholder="Observações sobre seu pedido"></textarea>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="order_review">
                           <div class="heading_s1">
                              <h4>Seu pedido</h4>
                           </div>
                           <div class="table-responsive order_table">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Produto</th>
                                       <th>Subtotal</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="product-name" data-title="Product"><a href="">Placa de Vídeo Asus Dual NVIDIA GeForce RTX 2070 EVO V2 OC Edition, 8GB, GDDR6 <strong> x 1</strong></a></td>
                                       <td class="product-subtotal" data-title="Total">2.949,90</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="payment_method">
                              <div class="heading_s1">
                                 <h4>Pagamento</h4>
                              </div>
                              <div class="payment_option">
                                 <div class="custome-radio">
                                    <p data-method="option3" class="payment-text">
                                       <button type="submit" class="btn btn-fill-out btn-block">Finalizar</button>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
    </body>
</html>