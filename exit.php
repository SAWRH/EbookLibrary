<?php
require_once "session.php";
unset($_SESSION['user']);
header("Location: auth.php");
?>