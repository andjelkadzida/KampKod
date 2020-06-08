<?php
session_start();
unset($_SESSION["adminName"]);
session_destroy();
header("Location: index.php");
?>