<?php
session_start();
session_destroy();

header("location:../pagina/index.php");
?>