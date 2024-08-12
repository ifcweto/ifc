<?php require_once('inc/topo.php');?>
      <div class="main_content">
         <div class="login_register_wrap section">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-md-10">
                     <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                           <div class="heading_s1">
                              <h3>Login</h3>
                           </div>
                           <form action="" method="post" name="form" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>E-mail</label>
                                 <input type="text" required="" class="form-control" name="email_cliente">
                              </div>
                              <div class="form-group">
                                 <label>Senha</label>
                                 <input class="form-control" required="" type="password" name="cliente_senha">
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-fill-out btn-block" name="login">Acessar</button>
                              </div>
                           </form>
                           <div class="form-note text-center">Não tem conta? <a href="http://localhost/ifc/trabalho/cadastro.php">Cadastre-se</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>
    </body>
</html>