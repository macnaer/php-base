<?php
session_start();
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";


session_destroy();
header("Location: index.php");
exit();
?>