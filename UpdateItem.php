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
            
			    $nome = $_POST['nome'];
		        $tipo = $_POST['tipo'];
		        $imagem = $_POST['imagem'];
		        $valor = $_POST['valor'];
                $marca = $_POST['marca'];
                $desc = $_POST['descricao'];
            
                $alteracoes = " NOME = '$nome', TIPO = '$tipo', IMAGEM = '$imagem', VALOR = '$valor', MARCA = '$marca', DESCRICAO = '$desc' ";

		        $argumentos = " WHERE COD_PROD = '$cod'";

                if ( funUpdate("tb_produto", $alteracoes, $argumentos)) 
                    echo "<script>location.replace('Restrito.php');</script>";
                    
                ?>

                </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>