<?php
session_start();
unset($_SESSION["korisnickoIme"]);
session_destroy();
header("Location: index.php");
?>