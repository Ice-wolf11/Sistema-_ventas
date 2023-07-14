<?php include_once(__DIR__.'/../../header.php') ?>
<?php
$codigo = $_GET["codigo"];
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/proveedor.php');
$conexion = connect_db();
$proveedor = new Proveedor();
$proveedor->conectar_db($conexion);
$res=$proveedor->borrar($codigo);
if ($res)
    header("Location: lista_proveedor.php");
else
    echo "Error no se pudo eliminar..";

?>
 