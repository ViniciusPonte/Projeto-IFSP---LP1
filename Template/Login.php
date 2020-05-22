<?php
    include 'usuario_logado.php';
?>
<div id="login col-md-1">
    <?php if($logado) : ?>
        <p class='login-inscrever'>Bem vindo <?php echo $_SESSION['LOGIN'];?> | <a href="Template/logout.php">Sair</a></p>
    <?php else : ?>
        <p class='login-inscrever'><a href='Registro.php'>Registre-se</a> ou <a href=FazerLogin.php>Faça login</a></p>
    <?php endif; ?>
</div>
            