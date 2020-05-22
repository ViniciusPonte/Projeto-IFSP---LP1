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
        
        <div class="main">
                <div class="slider container row col-md-12">
                    <a href="Index.php?opc=C"><img class="sliderimg" src="imagens/celulares.jpg" style="border-radius:30px; border: 3px outset #000066;"/></a>
                    <a href="Index.php?opc=H"><img class="sliderimg" src="imagens/hardware.jpg" style="border-radius:30px; border: 3px outset #000066;"/></a>
                    <a href="Index.php?opc=O"><img class="sliderimg" src="imagens/computadores.png" style="border-radius:30px; border: 3px outset #000066;"/></a>
                    <a href="Index.php?opc=P"><img class="sliderimg" src="imagens/perifericos.jpg" style="border-radius:30px; border: 3px outset #000066;"/></a>
                </div>
            <div class="container principal row">
                <div class="sessao_menu col-md-3">
                    <ul class="collapsible expandable">
                        <li class="active">
                            <div class="collapsible-header sessao_itens"><br/><i class="material-icons">settings_cell</i>  Celulares</div>
                                <div class="collapsible-body sessao_itens">
                                    <span>
                                    <ul>
                                        <li class="lista-itens">Smartphones</li>
                                        <li class="lista-itens">Acessórios</li>
                                    </ul>
                                    </span>
                                </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header sessao_itens"><i class="material-icons">computer</i>  Computadores</div>
                                <div class="collapsible-body sessao_itens">
                                    <span>
                                    <ul>
                                        <li class="lista-itens">Computadores</li>
                                        <li class="lista-itens">Computadores Gamer</li>
                                        <li class="lista-itens">Notebook Gamer</li>
                                        <li class="lista-itens">Notebooks/Ultrabooks</li>
                                        <li class="lista-itens">Tablets</li>
                                    </ul>
                                    </span>
                                </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header sessao_itens"><i class="material-icons">featured_video</i>  Hardware</div>
                                <div class="collapsible-body sessao_itens">
                                    <span>
                                    <ul>
                                        <li class="lista-itens">Coolers</li>
                                        <li class="lista-itens">Disco Rigido (HD)</li>
                                        <li class="lista-itens">Fontes</li>
                                        <li class="lista-itens">Memória RAM</li>
                                        <li class="lista-itens">Placas de Vídeo (VGA)</li>
                                        <li class="lista-itens">Placas de Som</li>
                                        <li class="lista-itens">Placas-Mãe</li>
                                        <li class="lista-itens">Processadores</li>
                                    </ul>
                                    </span>
                                </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header sessao_itens"><i class="material-icons">mouse</i>  Periféricos</div>
                                <div class="collapsible-body sessao_itens">
                                    <span>
                                    <ul>
                                        <li class="lista-itens">Gabinetes</li>
                                        <li class="lista-itens">Pen Drive</li>
                                        <li class="lista-itens">Som</li>
                                        <li class="lista-itens">Teclado</li>
                                        <li class="lista-itens">Mouse</li>
                                        <li class="lista-itens">WebCam</li>
                                    </ul>
                                    </span>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="mercado col-md-9">
                    <?php 
                        $colunas = 3;
                        $contador = 0;
                    
                    
                        #CAMPO DE BUSCA ------------------------------------------------------------------------------------------------------
                        echo "<table class='table'>";
                        $buscar = $_POST['buscar'];
                        $argumentos = " WHERE 1 = 1 AND NOME LIKE '%$buscar%' OR MARCA LIKE '%$buscar%' OR TIPO LIKE '%$buscar%'";
                        $tabela = funSelect("tb_produto", "*", $argumentos);
                    
                        if($contador==0){
                            echo "<tr>";
                        }
                    
                        for($i=0; $i<count($tabela); $i++){
                            echo "<th class='border-0'>
                                    <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='col text-center'><img src='". $tabela[$i]['IMAGEM'] ."' width='100px' height='100px'/></div></a><br/>
                                    <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='col text-center'>" . mb_strimwidth($tabela[$i]['NOME'], 0, 25, '...') .  " </div></a><br/>
                                    <div class='col text-center'>". $tabela[$i]['MARCA'] ."</div><br/>
							        <div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
                                    <div class='col text-center'><a href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."' class='waves-effect waves-light btn'><i class='material-icons right'>add_shopping_cart</i>COMPRAR</a></div>
                                    </th>";
                                $contador++;
                            
                            if($contador==$colunas){
                                echo "</tr>";
                                $contador=0;
                            }
                            echo "</div>";
                            }
                            echo "</table>";
                    ?>
                    
                    
                </div>
            </div>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>