<?php
include(__DIR__.'/../../header.php'); 

if (isset($_POST['envia_datos'])){
    $nom =$_POST['nom'];
    $tel =$_POST['tel'];
    $user =$_POST['user'];
    $pass =$_POST['pass'];
    
    include_once(__DIR__.'/../../includes/acceso.php');
    include_once(__DIR__.'/../../clases/Usuario.php');
    $conexion = connect_db();
    $usuario = new Usuario();
    $usuario->conectar_db($conexion);
    
    $response = $usuario->agrega_usuario($nom,$tel,$user,$pass);

    if($response) {
        header("location: lista_usuario.php");
    } else
    echo "No se pudo agregar el cliente";
    
}
?>
