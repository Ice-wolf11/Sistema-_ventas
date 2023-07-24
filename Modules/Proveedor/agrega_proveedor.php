<?php
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $nom =$_POST['nom'];
    $ruc =$_POST['ruc'];
    $dir =$_POST['dir'];
    $tel =$_POST['tel'];
    $email =$_POST['email'];
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/proveedor.php');
    $conexion = connect_db();
    $proveedor = new Proveedor();
    $proveedor->conectar_db($conexion);
    
    $response = $proveedor->agrega_proveedor($nom,$ruc,$dir,$tel,$email);

    if($response) {
        header("location: lista_proveedor.php");
    } else
    echo "No se pudo agregar el cliente";
    
}
?>
