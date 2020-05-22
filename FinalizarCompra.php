<script>
    alert("Compra finalizada com sucesso!");
    <?php
        setcookie('ck_carr', '', time()-1);
    ?>
    location.replace("Index.php");
</script>