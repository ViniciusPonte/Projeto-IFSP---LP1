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
                    <a href="Index.php?opc=C"><img class="sliderimg" src="imagens/celulares.jpg" style="border-radius:30px;"/></a>
                    <a href="Index.php?opc=H"><img class="sliderimg" src="imagens/hardware.jpg" style="border-radius:30px;"/></a>
                    <a href="Index.php?opc=O"><img class="sliderimg" src="imagens/computadores.png" style="border-radius:30px;"/></a>
                    <a href="Index.php?opc=P"><img class="sliderimg" src="imagens/perifericos.jpg" style="border-radius:30px;"/></a>
                </div>
            <div class="container principal row">
                <div class="sessao_menu col-md-3">
                    <ul class="collapsible expandable">
                        <li class="active disabled">
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
                        <li class="active disabled">
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
                        <li class="active disabled">
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
                        <li class="active disabled">
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
                    
                        if(isset($_GET['opc'])){
                            $opc = $_GET['opc'];
                        }
                        else{
                            $opc = "M";
                        }
                    
                        #--------------------------------------------------------------------------------------------------------------------
                        #GERAL --------------------------------------------------------------------------------------------------------------
                    
                        if( $opc == "M"){
                            echo "<table class='table'>";
                                $tabela = funSelect("tb_produto", "*", "");
                            if($contador==0){
                                echo "<tr>";
                            }
                    
                                for($i=0; $i<count($tabela); $i++){
                                    echo "<th class='border-0'>
                                             <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='col text-center'><img src='". $tabela[$i]['IMAGEM'] ."' width='100px' height='100px'/></div></a><br/>
                                             <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='col text-center'>" . mb_strimwidth($tabela[$i]['NOME'], 0, 25, '...') .  " </div></a><br/>
                                             <div class='col text-center'>". $tabela[$i]['MARCA'] ."</div><br/>
                                             <div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
                                             <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'>COMPRAR <i class='fas fa-cart-plus'></i></a></button></div>
                                             </th>";
                                    $contador++;
                            
                                    if($contador==$colunas){
                                        echo "</tr>";
                                        $contador=0;
                                    }
                                    echo "</div>";
                                }
                            echo "</table>";
                        }
                    
                        #--------------------------------------------------------------------------------------------------------------------
                        #CELULARES ------------------------------------------------------------------------------------------------------
                        elseif( $opc == "C"){
                            $argumentos = " WHERE TIPO = 'Smartphones' OR TIPO = 'Acessórios'";
                            echo "<table class='table'>";
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
                                             <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'>COMPRAR <i class='fas fa-cart-plus'></i></a></button></div>
                                             </th>";
                                    $contador++;
                            
                                    if($contador==$colunas){
                                        echo "</tr>";
                                        $contador=0;
                                    }
                                    echo "</div>";
                                }
                            echo "</table>";
                        }
                    
                        #--------------------------------------------------------------------------------------------------------------------
                        #HARDWARE -----------------------------------------------------------------------------------------------------------
                        elseif( $opc == "H"){
                            $argumentos = " WHERE TIPO = 'Coolers' OR TIPO = 'Disco Rígido (HD)' OR TIPO = 'Fontes' OR TIPO = 'Memória RAM' OR TIPO = 'Placa de Vídeo (VGA)' OR TIPO = 'Placas de Som' OR TIPO = 'Placas-Mãe' OR TIPO = 'Processadores'";
                            echo "<table class='table'>";
                                $tabela = funSelect("tb_produto", "*", $argumentos);
                            if($contador==0){
                                echo "<tr>";
                            }
                    
                                for($i=0; $i<count($tabela); $i++){
                                    echo "<th class='border-0'>
                                            <div class='col text-center'><a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><img src='". $tabela[$i]['IMAGEM'] ."' width='100px' height='100px'/></a></div><br/>
                                             <a href='Detalhes.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'><div class='col text-center'>" . mb_strimwidth($tabela[$i]['NOME'], 0, 25, '...') .  " </div></a><br/>
                                             <div class='col text-center'>". $tabela[$i]['MARCA'] ."</div><br/>
                                             <div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
                                             <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'>COMPRAR <i class='fas fa-cart-plus'></i></a></button></div>
                                             </th>";
                                    $contador++;
                            
                                    if($contador==$colunas){
                                        echo "</tr>";
                                        $contador=0;
                                    }
                                    echo "</div>";
                                }
                            echo "</table>";
                        }
                    
                        #--------------------------------------------------------------------------------------------------------------------
                        #COMPUTADORES -------------------------------------------------------------------------------------------------------
                        elseif( $opc == "O"){
                            $argumentos = " WHERE TIPO = 'Computadores' OR TIPO = 'Computadores Gamer' OR TIPO = 'Notebook Gamer' OR TIPO = 'Notebooks/Ultrabooks' OR TIPO = 'Tablets'";
                            echo "<table class='table'>";
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
                                             <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'>COMPRAR <i class='fas fa-cart-plus'></i></a></button></div>
                                             </th>";
                                    $contador++;
                            
                                    if($contador==$colunas){
                                        echo "</tr>";
                                        $contador=0;
                                    }
                                    echo "</div>";
                                }
                            echo "</table>";
                        }
                    
                        #--------------------------------------------------------------------------------------------------------------------
                        #PERIFÉRICOS --------------------------------------------------------------------------------------------------------
                        elseif( $opc == "P"){
                            $argumentos = " WHERE TIPO = 'Gabinetes' OR TIPO = 'Pen Drive' OR TIPO = 'Som' OR TIPO = 'Teclado' OR TIPO = 'Mouse' OR TIPO = 'Mouse' OR TIPO = 'WebCam'";
                            echo "<table class='table'>";
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
                                              <div class='col text-center'><button class='btn blue-gradient'><a  style='color: white;' class='botao-comprar' href='CarrinhoIncluir.php?cod_prod=". $tabela[$i]['COD_PROD'] ."'>COMPRAR <i class='fas fa-cart-plus'></i></a></button></div>
                                             </th>";
                                    $contador++;
                            
                                    if($contador==$colunas){
                                        echo "</tr>";
                                        $contador=0;
                                    }
                                    echo "</div>";
                                }
                            echo "</table>";
                        } 
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