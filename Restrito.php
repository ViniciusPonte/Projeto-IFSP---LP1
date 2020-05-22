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
            
                $argumentos = " ORDER BY NOME ";
                $tabela = funSelect("tb_produto", "*", $argumentos);
		          echo "  <div><h1 id='titulo-restrito'>Restrito - Alterações</h1>
                  <div class='row'>
                        <a class='btn-floating btn-large waves-effect waves-light blue' title='Adicionar um produto' href='AddItem.php'><i class='material-icons'>add</i></a>
                  </div>
                            <div class='row'>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Imagem</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Nome</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Tipo</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Marca</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Valor</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Alterar</div>
                                     <div class='tabela-restrito col text-center font-weight-bold'>Excluir</div>
				                </div>
                            <div class='restrito-tabela'>";			
				for($i=0; $i < count($tabela); $i++) {		
					echo "<div class='row'>
                            <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='tabela-restrito col text-center'><img src='". $tabela[$i]['IMAGEM'] ."' width='100px' height='100px'/></div></a>
							<div class='tabela-restrito col text-center'>". $tabela[$i]['NOME'] ."</div>
							<div class='tabela-restrito col text-center'>". $tabela[$i]['TIPO'] ."</div>
                            <div class='tabela-restrito col text-center'>". $tabela[$i]['MARCA'] ."</div>
							<div class='tabela-restrito col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
                            <div class='tabela-restrito col text-center'><a href='EditarItem.php?cod=". $tabela[$i]['COD_PROD'] ."' ><i class='small material-icons'>create</i></a></div>
                            <div class='tabela-restrito col text-center'><a href='ExcluiItem.php?cod=". $tabela[$i]['COD_PROD'] ."' ><i class='small material-icons'>delete</i></a></div>
						</div>";
				}
		      echo "</div></div>";

        ?>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>