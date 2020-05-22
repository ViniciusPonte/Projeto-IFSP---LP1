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
            
            $i = $_GET['i'];
            $quant = $_POST['quant'];

            $carrinho = $_COOKIE['ck_carr'];
            $carrinho = unserialize($carrinho);

            $carrinho[$i][1] = $quant; //Atualiza item			
            //Recarrega cookie
			$carrinho = serialize($carrinho);
            setcookie('ck_carr', $carrinho);
			
			echo "<script>location.replace('Carrinho.php');</script>";	
            ?>
        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>