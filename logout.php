<?php
session_start();

unset($_SESSION['laprima']);

session_destroy();

header("Location:pagehome2.php");
?>