<?php
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $nom =$_POST['nom'];
    $ruc = $_POST['ruc'];
    $dir = $_POST['dir'];
    $tel = $_POST['tel'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/cliente.php');
    $conexion = connect_db();
    $cliente = new Cliente();
    $cliente->conectar_db($conexion);
    
    $response = $cliente->agrega_cliente($nom,$dir,$ruc,$tel);

    if($response) {
        header("location: lista_cliente.php");
    } else
    echo "No se pudo agregar el cliente";
    
}
?>
