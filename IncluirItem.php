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
            
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $imagem = $_POST['imagem'];
                $valor = $_POST['valor'];
                $marca = $_POST['marca'];
                $descricao = $_POST['descricao'];
                
                $campos = "NOME, TIPO, IMAGEM, MARCA, DESCRICAO, VALOR";
                $valores = "'$nome', '$tipo', '$imagem', '$marca', '$descricao', '$valor'";
                
                if(funInsert("tb_produto", $campos, $valores))
                    echo "<script>location.replace('Restrito.php');</script>";
            
        ?>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>