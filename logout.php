<?php
@session_start();
unset($_SESSION['usuario']);
header('location: loginForm.php');
exit();