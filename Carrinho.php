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
            
        
        <div class="carrinho-pagina row col-md-10">
        <?php
            
                if (isset($_COOKIE['ck_carr']))	{
			         $carrinho = $_COOKIE['ck_carr'];
                     $carrinho = unserialize($carrinho);
			         $total=0;
                    
		          echo "  <div class='carrinho-tabela'><h1 id='titulo-carrinho'>Meu Carrinho</h1>
                            <div class='row'>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Imagem</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Código</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Nome</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Marca</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Valor</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Quantidade</div>
                                     <div class='tabela-carrinho col text-center font-weight-bold'>Remover</div>
				                </div>
                            <div class='carrinho_tamanhoajustavel'>";			
				for($i=0; $i < count($carrinho); $i++) {
                    $cod = $carrinho[$i][0];
                    $argumentos = " WHERE COD_PROD = '$cod' ";							
                    $tabela = funSelect('tb_produto', '*', $argumentos);
                    
					echo "<div class='carrinho-tabela row'>
                            <div class='tabela-carrinho col text-center'><a href='Detalhes.php?cod_prod=". $tabela[0]['COD_PROD'] ."'><img src='". $tabela[0]['IMAGEM'] ."' width='100px' height='100px'/></a></div>
                            <div class='tabela-carrinho col text-center'>". $tabela[0]['COD_PROD'] ."</div>
							<div class='tabela-carrinho col text-center'>". $tabela[0]['NOME'] ."</div>
							<div class='tabela-carrinho col text-center'>". $tabela[0]['MARCA'] ."</div>
							<div class='tabela-carrinho col text-center'>R$ ". number_format($tabela[0]['VALOR'],2,',','.') ."</div>
                            <div class='tabela-carrinho col text-center'>
                                <form action='CarrinhoAtualizar.php?i=$i' method='post'>
									<input type='number' name='quant' value='". $carrinho[$i][1] ."' min='1' max='20' style='width:30px;'/>
                                    <button id='botaoAtualiza' type='submit' class='btn blue-gradient'><i class='tiny material-icons'>update</i></button>
								</form>
                            </div>
                            <div class='tabela-carrinho col text-center'><a href='CarrinhoRemover.php?i=$i'><i class='small material-icons'>delete</i></a></div>
						</div>";
                    $total = $total + ( $tabela[0]['VALOR'] * $carrinho[$i][1] );
				}
		      echo "</div>
                        <div class='row'>
				            <div class='col text-left font-weight-bold'>Total: R$ ".number_format($total,2,',','.')."</div>
						</div>
                        <div class='row'>                            
                            <div class='col text-center'><button class='btn blue-gradient'><a class='botao-comprar' style='color: white;' href='CarrinhoEsvaziar.php'>Esvaziar Carrinho</a></button></div>";
                    ?>
                    <?php if($logado) : ?>
                          <div class='col text-center'><button class='btn blue-gradient'><a class='botao-comprar' style='color: white;' href='FinalizarCompra.php'>Finalizar Compra</a></button></div>
                    <?php else : ?>
                          <div class='col text-center'><button class='btn blue-gradient'><a class='botao-comprar' style='color: white;' href='FazerLogin.php'>Finalizar Compra</a></button></div>
                    <?php endif; ?>
                    <?php
                        echo "</div>
              </div>";
            }else {
			     echo "<div id='carrinho-pagina-vazio row col-md-10'>
                    <h6 class='p-2 m-2 bg-danger text-white text-center'>Carrinho Vazio!</h6>
                 </div>";
		    }

        ?>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>