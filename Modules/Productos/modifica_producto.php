<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $id=$_POST['idproducto'];
    $nom =strtoupper($_POST['nom']);
    $und = strtoupper($_POST['und']);
    $can = $_POST['can'];
    $pre = $_POST['pre'];
    $cos = $_POST['cos'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/producto.php');
    $conexion = connect_db();
    $oproducto = new Producto();
    $oproducto->conectar_db($conexion);
    
    $response = $oproducto->modifica_producto($id,$nom,$und,$can,$pre,$cos);

    if($response) {
        header("location: lista_producto.php");
    } else
    echo "No se pudo modificar el producto";
    
}
?>
