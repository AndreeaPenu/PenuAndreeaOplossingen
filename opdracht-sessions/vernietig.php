<?php
session_start();
session_destroy();
header("location:adrespagina.php");
exit();
?>