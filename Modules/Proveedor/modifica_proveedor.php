<?php
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $id= $_POST['idcliente'];
    $nom = $_POST['nom'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/proveedor.php');
    $conexion = connect_db();
    $proveedor = new Proveedor();
    $proveedor->conectar_db($conexion);
    
    $response = $proveedor->modifica_proveedor($id,$nom);

    if($response) {
        header("location: lista_proveedor.php");
    } else
    echo "No se pudo modificar el producto";
    
}
?>
