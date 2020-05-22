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
            
        
        <div class="carrinho-pagina row col-md-8">
            <h3>Meu Carrinho</h3>
            <?php
                setcookie('ck_carr', '', time()-1);
                echo "<script>location.replace('Carrinho.php');</script>";			
            ?>
        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>