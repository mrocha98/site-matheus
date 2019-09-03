<?php
@session_start();
if(!$_SESSION['usuario']){
    header('Location: loginForm.php');
    exit();
}