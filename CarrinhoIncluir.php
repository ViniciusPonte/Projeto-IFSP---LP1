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
            
               $cod = $_GET['cod_prod'];
                $qtd = 0;   // Quantidade
			     // Verifica se o cookie do Carrinho já está sendo usado
			     if (isset($_COOKIE['ck_carr'])) {
				    $carrinho = $_COOKIE['ck_carr'];   // Atribui o conteúdo do cookie para uma variável
				    $carrinho = unserialize($carrinho); // Converte de literal (texto) para array
				    $i = count($carrinho);// Obtém a última posição do array
				    // Verifica se o produto já está no Carrinho
                        for($j=0; $j < $i; $j++){
                            if($cod==$carrinho[$j][0]){
                                $i = $j;	//Substitui por ele mesmo
                                $qtd = $carrinho[$j][1];
                            }
                        }
			     }else {
				    //Adiciona o primeiro item no vetor
				    $i = 0;
			     }
                    $qtd++;// Ajusta a quantidade
					$carrinho[$i][0] = $cod;// Atribui o ID do Produto
					$carrinho[$i][1] = $qtd;// Guarda a Quantidade 
				    $carrinho = serialize($carrinho);// Converte de array para literal (texto)
				
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