<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $fec =$_POST['fec'];
    $cli =$_POST['cli'];
    $user =$_SESSION['idEmpleado'];
    $prod =$_POST['prod'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/ventas.php');
    $conexion = connect_db();
    $venta = new Ventas();
    $venta->conectar_db($conexion);
    
    $response = $venta->agrega_venta($fec,$cli,$user,$prod);

    if($response) {
        $_SESSION['mensaje'] = 'Empleado agregado satisfactoriamente';
        $_SESSION['mensaje_tipo']='success';
        header("location: lista_venta.php");
    } else
    echo "No se pudo agregar el cliente";
    
}
?>
