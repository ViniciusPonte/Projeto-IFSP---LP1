
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
            
        
        <div class="detalhar border-0 row col-md-10">
            <?php
                $cod = $_GET['cod_prod'];
                $argumentos = " WHERE COD_PROD = $cod ";
                $tabela = funSelect("tb_produto", "*", $argumentos);
            
                echo "<h5 class='titulo-detalhe'>". $tabela[0]['NOME'] ."</h5>
                            <div class='row detalhes'>
                                <div>
                                    <div class='col w-50' id='left'>
                                        <div><img src='". $tabela[0]['IMAGEM'] ."' class='elevateImage' data-zoom-image='". $tabela[0]['IMAGEM'] ."' width='300' height='300'/></div>
                                    </div>
                                    <div class='col w-50' id='right'>
                                        <div><p class='desc_item'><strong>Marca:</strong> ". $tabela[0]['MARCA'] ."</p></div>
                                        <div><p class='desc_item'><strong>Descrição:</strong> ". $tabela[0]['DESCRICAO'] ."</p></div>
                                        <div><p class='desc_item'><strong>Valor:</strong> R$ ". number_format($tabela[0]['VALOR'],2,',','.') ."</p></div><br/>
                                        <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[0]['COD_PROD'] ."'>Adicionar ao Carrinho</a></button></div>
                                    </div>
                                </div>
                             </div>";
            ?>
        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>