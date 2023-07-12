<?php include_once(__DIR__.'/../../header.php') ?>
<?php
$codigo = $_GET["codigo"];
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/cliente.php');
$conexion = connect_db();
$cliente = new Cliente();
$cliente->conectar_db($conexion);
$res=$cliente->borrar($codigo);
if ($res)
    header("Location: lista_cliente.php");
else
    echo "Error no se pudo eliminar..";

?>
 