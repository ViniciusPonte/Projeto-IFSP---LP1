<?php
session_start();
session_destroy();
echo "<script>location.replace('../Index.php');</script>";
exit();