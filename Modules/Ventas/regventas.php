<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /Tareas/sisventas/login.php");
    exit;
}

$idcliente = $_POST["sel_cliente"];
echp $idcliente;
?>