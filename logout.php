<?php
session_start();
session_unset($_SESSION["sid"]);
header("location:index.php");

?>

