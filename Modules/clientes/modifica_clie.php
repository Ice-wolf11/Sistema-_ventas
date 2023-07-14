<?php include_once(__DIR__.'/../../header.php') ?>
<?php
$codigo = $_GET["codigo"];
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/cliente.php');
$conexion = connect_db();
$cliente = new Cliente();
$cliente->conectar_db($conexion);
$datos=$cliente->consulta($codigo);

?>
<div class="container p-12">
<div class="row">

    <div class="card card-body">
        <form action="modifica_cliente.php" method="post">
        <div class="form-group">
        <div class="col-md-4">Codigo:</div>
        <div class="col-md-4">
            <input type="text" name="idcliente" class="form-control" value="<?php echo $codigo;?>" readonly>
            </div>
            <div class="col-md-4">Nombre:</div>
            <div class="col-md-4">
            <input type="text" name="nom" class="form-control" value="<?php echo $datos['nombre'];?>" >
        </div>
        <div class="col-md-4">RUC:</div>
        <div class="col-md-4">
            <input type="text" name="ruc" class="form-control" value="<?php echo $datos['ruc'];?>">
            </div>
            <div class="col-md-4">Direccion:</div>
            <div class="col-md-4">
            <input type="text" name="dir" class="form-control" value="<?php echo $datos['dircliente'];?>">
            </div>
            <div class="col-md-4">Telefono:</div>
            <div class="col-md-4">
            <input type="text" name="tel" class="form-control" value="<?php echo $datos['telcliente'];?>">
            </div>
            <div class="col-md-4">
            <input type="submit" class="btn btn-success btn-block" name="envia_datos" value="Enviar">
            </div>
        </form>

    </div>
  </div>
 </div>  
<?php include_once(__DIR__.'/../../footer.php') ?>