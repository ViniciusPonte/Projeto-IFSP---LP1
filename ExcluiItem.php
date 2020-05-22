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
            
        
        <div class="restrito-pagina row col-md-10">
        <?php
            
            $cod = $_GET['cod'];	
            
		    $argumentos = " WHERE COD_PROD = '$cod'";
		      
            if ( funDelete("tb_produto", $argumentos))
			     echo "<script>location.replace('Restrito.php');</script>";
        ?>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>