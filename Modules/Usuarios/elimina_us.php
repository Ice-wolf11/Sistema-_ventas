<?php include_once(__DIR__.'/../../header.php') ?>
<?php
$codigo = $_GET["codigo"];
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/Usuario.php');
$conexion = connect_db();
$usuario = new Usuario();
$usuario->conectar_db($conexion);
$res=$usuario->borrar($codigo);
if ($res)
    header("Location: lista_usuario.php");
else
    echo "Error no se pudo eliminar..";

?>
 