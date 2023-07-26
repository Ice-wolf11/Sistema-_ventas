<?php 
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /Tareas/sisventas/login.php");
    exit;
}
include_once(__DIR__.'/../../header.php') ?>
<?php
$codigo = $_GET["codigo"];
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/Usuario.php');
$conexion = connect_db();
$usuario = new Usuario();
$usuario->conectar_db($conexion);
$datos=$usuario->consulta($codigo);

?>
<div class="container p-12">
<div class="row">

    <div class="card card-body">
        <form action="modifica_usuario.php" method="post">
        <div class="form-group">
        <div class="col-md-4">Codigo:</div>
        <div class="col-md-4">
            <input type="text" name="idusuario" class="form-control" value="<?php echo $codigo;?>" readonly>
            </div>
            <div class="col-md-4">Nombre:</div>
            <div class="col-md-4">
            <input type="text" name="nom" class="form-control" value="<?php echo $datos['nombre'];?>" >
        </div>
        <div class="col-md-4">Telefono:</div>
        <div class="col-md-4">
            <input type="text" name="tel" class="form-control" value="<?php echo $datos['telefono'];?>">
            </div>
            <div class="col-md-4">Usuario:</div>
            <div class="col-md-4">
            <input type="text" name="user" class="form-control" value="<?php echo $datos['Usuario'];?>">
            </div>
            <div class="col-md-4">Contraseña:</div>
            <div class="col-md-4">
            <input type="text" name="pass" class="form-control" value="<?php echo $datos['Contraseña'];?>">
            </div>
            <div class="col-md-4">
            <input type="submit" class="btn btn-success btn-block" name="envia_datos" value="Enviar">
            </div>
        </form>

    </div>
  </div>
 </div>   
<?php include_once(__DIR__.'/../../footer.php') ?>