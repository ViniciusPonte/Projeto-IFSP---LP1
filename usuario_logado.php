<?php
if(isset($_SESSION['COD_CLI'])){
    $logado = $_SESSION['usuario_logado'];
    $login = $_SESSION['LOGIN'];
}else{
    $logado = 0;
    $login = "";
}

?>