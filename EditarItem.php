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
            
        
        <div class="restritoadd-pagina row col-md-10">
        <?php
            
                $cod = $_GET['cod'];
                $argumentos = " WHERE COD_PROD = '$cod'";
                $tabela = funSelect("tb_produto", "*", $argumentos);
                
                echo "<div><h1 class='text-center' id='titulo-adicionar'>Alterar um produto</h1>
                    <div class='row'>
                        <form action='UpdateItem.php?cod=$cod' method='post'>
                                 <label class='labeladd'>Nome do produto: </label> <input type='text' name='nome' size='40' value='". $tabela[0]['NOME'] ."' maxlength='40' required/><br/><br/>
                                 <label class='labeladd'>Tipo: </label>
                                    <select name='tipo' required >
                                        <option value='". $tabela[0]['TIPO'] ."' selected>". $tabela[0]['TIPO'] ."</option> 
                                        <option value='Smartphones'>Smartphones</option> 
                                        <option value='Acessórios'>Acessórios</option>
                                        <option value='Computadores'>Computadores</option>
                                        <option value='Computadores Gamer'>Computadores Gamer</option>
                                        <option value='Notebook Gamer'>Notebook Gamer</option>
                                        <option value='Notebooks/Ultrabooks'>Notebooks/Ultrabooks</option>
                                        <option value='Tablets'>Tablets</option>
                                        <option value='Coolers'>Coolers</option>
                                        <option value='Disco Rígido (HD)'>Disco Rígido (HD)</option>
                                        <option value='Fontes'>Fontes</option>
                                        <option value='Memória RAM'>Memória RAM</option>
                                        <option value='Placa de Vídeo (VGA)'>Placa de Vídeo (VGA)</option>
                                        <option value='Placas de Som'>Placas de Som</option>
                                        <option value='Placas-Mãe'>Placas-Mãe</option>
                                        <option value='Processadores'>Processadores</option>
                                        <option value='Gabinetes'>Gabinetes</option>
                                        <option value='Pen Drive'>Pen Drive</option>
                                        <option value='Som'>Som</option>
                                        <option value='Teclado'>Teclado</option>
                                        <option value='Mouse'>Mouse</option>
                                        <option value='WebCam'>WebCam</option>
                                     </select> <br/><br/>
                              <label class='labeladd'>Imagem: </label> <input type='text' value='". $tabela[0]['IMAGEM'] ."' name='imagem' size='50' maxlength='50' value='imagens/produtos/' required /><br/><br/>
                              <label class='labeladd'>Valor: </label> <input type='number' value='". $tabela[0]['VALOR'] ."' name='valor' min='1' max='50000' value='0' required />,00 <br/><br/>
                              <label class='labeladd'>Marca: </label> <input type='text' value='". $tabela[0]['MARCA'] ."' name='marca' size='50' maxlength='30' required/><br/><br/>
                              <label class='labeladd'>Descrição: </label> <textarea name='descricao' rows='20' cols='50' style='height: 20%;'></textarea><br/><br/>
                              <button type='submit' class='btn blue-gradient right'><a class='botao-comprar'>Editar</a></button>
                              </form>
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