<?php
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $nom =$_POST['nom'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/proveedor.php');
    $conexion = connect_db();
    $proveedor = new Proveedor();
    $proveedor->conectar_db($conexion);
    
    $response = $proveedor->agrega_proveedor($nom);

    if($response) {
        header("location: lista_proveedor.php");
    } else
    echo "No se pudo agregar el cliente";
    
}
?>
