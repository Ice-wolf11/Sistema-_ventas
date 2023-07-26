<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /Tareas/sisventas/login.php");
    exit;
}
include_once(__DIR__.'/../../header.php');
include_once(__DIR__.'/../../footer.php');
include_once(__DIR__.'/../../clases/cliente.php');
include_once(__DIR__.'/../../clases/documento.php');
include_once(__DIR__.'/../../clases/producto.php');
include_once(__DIR__.'/../../includes/acceso.php');
// creacion objetos
$conexion = connect_db();
$ocli = new Cliente();
$ocli->conectar_db($conexion);
$datos_cli = $ocli->listacli();

$odoc = new Documento();
$odoc->conectar_db($conexion);
$datos_doc = $odoc->listadocu();

$oprodu = new Producto();
$oprodu->conectar_db($conexion);
$datos_produ = $oprodu->listaprodu();
?>
<h4>Registro de Ventas</h4>
<div class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Vendedor</label>
    </div>
    <div class="col">
    <input class="form-control" type="text" value="<?php echo $_SESSION['nombre']; ?>" aria-label="readonly input example" readonly>
    </div>
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Documento</label>
    </div>
    <div class="col">
    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccione Documento</option>
    <?php
        while ($rdoc=mysqli_fetch_array($datos_doc)){
            $id_doc = $rdoc['idDocumento'];
            $nombre = $rdoc['nombre'];
            ?>
    <option value="<?php echo $id_doc; ?>"><?php echo $nombre; ?></option>
    <?php } ?>
  </select>
    </div>
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nro. Documento</label>
    </div>
    <div class="col">
    <input class="form-control" type="text" value="" aria-label="readonly input example" name="nrodocu" readonly>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Cliente</label>
    </div>
    <div class="col">
    <select class="form-select" aria-label="Default select example" name="idcliente">
  ><?php
        while ($rcli=mysqli_fetch_array($datos_cli)){
            $id_cli = $rcli['idCliente'];
            $nombre = $rcli['nombre'];
            ?>
    <option value="<?php echo $id_cli; ?>"><?php echo $nombre; ?></option>
    <?php } ?>
  </select>
    </div>
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo Venta</label>
    </div>
    <div class="col">
    <select class="form-select" aria-label="Default select example" name="sel_tipoven">
  <option selected>Seleccione Tipo</option>
  <option value="CON">Venta Contado</option>
  <option value="CRE">Venta Credito</option>
  
  </select>
    </div>
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha</label>
    </div>
    <div class="col">
    <input class="form-control" type="text" aria-label="readonly input example" name="fecha" value="<?php echo date('d-m-Y'); ?>" readonly>
    </div>
  </div>
  </div>
<div class="container">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Agregar Productos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregando detalle venta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Producto</label>
    </div>
    <div class="col">
    <select class="form-select" aria-label="Default select example" name="idcliente">
  ><?php
        while ($rcli=mysqli_fetch_array($datos_produ)){
            $id_cli = $rcli['idProducto'];
            $nomprodu = $rcli['nomproducto'];
            ?>
    <option value="<?php echo $id_cli; ?>"><?php echo $nomprodu; ?></option>
    <?php } ?>
  </select>

    </div>
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
    </div>
    <div class="col">
    <input class="form-control" type="text" name="preuni">
    </div>     
    <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">Cant</label>
    </div>
    <div class="col">
    <input class="form-control" type="text" name="cant">
    </div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container">
<table class="table table-hover">
<thead>
    <th>Nro</th>
    <th>Codigo</th>
    <th>Descripcion</th>
    <th>Unidad</th>
    <th>Cant.</th>
    <th>P.Unit</th>
    <th>Importe</th>
</thead>
<tbody>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
</tbody>
</table>

<table class="table table-striped">
    <thead>
<th align="right">Subtotal</th>
<th align="right">
<input type="text" style="width:100; align-text:right;" name="subtotal" readonly>
</th>
    </thead>
    <thead>
<th align="right">IGV</th>
<th align="right">
<input type="text" style="width:100; align-text:right;" name="igv" readonly>
</th>
    </thead>
    <thead>
<th align="right">Total Venta</th>
<th align="right">
<input type="text" style="width:100; align-text:right;" name="total" readonly>
</th>
    </thead>
</table>
<hr>
<button type="button" name="btn_registrar" class="btn btn-success">Registrar Venta</button>
<button type="reset" name="btn_registrar" class="btn btn-success">Limpiar</button>
<button type="button" name="btn_registrar" class="btn btn-success">Salir</button>
</div>
</div>



