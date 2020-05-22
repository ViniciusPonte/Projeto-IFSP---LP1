
<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'Template/Header.php';
        ?>
    </head>
    <body>
            
            <?php
                include 'Template/Titulo_buscador.php';
                include 'Template/Login.php';
                include 'Template/Carrinho_Restrito.php';
            ?>
            
        
        <div class="fazerloginPagina border-0 row col-md-4">
            <div class="modal-content border-0 form-elegant">
                
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Login</strong></h3>
                </div>
            
                <div class="modal-body mx-4">
                    <form action="RealizaLogin.php" method="POST">
                        <div class="md-form mb-5">
                            <input type="text" id="Form-user1" name="login" class="form-control">
                            <label data-error="wrong" data-success="right" for="Form-user1">Usuário</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass1" name="senha" class="form-control">
                            <label data-error="wrong" data-success="right" for="Form-pass1">Senha</label>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="botao-entrar btn blue-gradient btn-block btn-rounded z-depth-1a"><p class='botaoLogar'>Entrar</p></button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Não possui cadastro? <a href="Registro.php" class="blue-text ml-1">Cadastre-se</a></p>
                </div>

            </div>
        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>