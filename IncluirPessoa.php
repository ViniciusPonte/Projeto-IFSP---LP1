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
                $end = $_POST['rua'];
                $datanasc = $_POST['data-nasc'];
                $num = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $cep = $_POST['cep'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cel = $_POST['cel'];
                $email = $_POST['email'];
                $sexo = $_POST['sexo'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                
                $campos = "NOME, ENDERECO, DATA_NASC, NUMERO, BAIRRO, CEP, CIDADE, ESTADO, CEL, EMAIL, SEXO, RG, CPF, LOGIN, SENHA";
                $valores = "'$nome', '$end', '$datanasc', '$num', '$bairro', '$cep', '$cidade', '$estado', '$cel', '$email', '$sexo', '$rg', '$cpf', '$login', '$senha'";
                
                if(funInsert("tb_cliente", $campos, $valores))
                    echo "<script>location.replace('Index.php');</script>";
            
        ?>

        </div>
        
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>