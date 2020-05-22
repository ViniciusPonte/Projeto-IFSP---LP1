<?php

include 'DB.php';
function verifica(){
    $user = $_POST['user'];
    $password = $_POST['pwd'];
    $sql = "SELECT * FROM tb_admin WHERE LOGIN = '$user' AND PASSWORD = '$password'";
    return mysqli_query($_SESSION['con'], $sql);
}

$res = verifica();

if(mysqli_num_rows($res) == 1){
    $usuario = mysqli_fetch_assoc($res);
    $_SESSION['COD_CLI'] = $usuario['COD_CLI'];
    $_SESSION['LOGIN'] = $usuario['LOGIN'];
    $_SESSION['usuario_logado'] = TRUE;
    echo "<script>window.location='Index.php'</script>";
}else{
    echo "<script> language='JavaScript'>
                alert('Usuário ou senha inválidos!');
                location.replace('FazerLogin.php');
            </script>";
}

?>