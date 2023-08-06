<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}
include_once(__DIR__.'/../../header.php');
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/ventas.php');
include_once(__DIR__.'/../../clases/Usuario.php');
include_once(__DIR__.'/../../clases/producto.php');
include_once(__DIR__.'/../../clases/cliente.php');
$conexion = connect_db();
$venta = new Ventas();
$venta->conectar_db($conexion);
$datos_venta = $venta->listaventa();
$usuario = new Usuario();
$usuario->conectar_db($conexion);
$cliente = new Cliente();
$cliente->conectar_db($conexion);
$producto = new Producto();
$producto->conectar_db($conexion);
if ($datos_venta){
    ?>
    <div class="container p-12">
        <div class="row">
        <div class="container p-4">
            <h4>Listado de Ventas</h4>
            <a href="agrega_ven.php" class="btn btn-info add-new">Nuevo</a>
        </div>  
        <div class="card card-body">

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
        
    <?php
    while ($row=mysqli_fetch_array($datos_venta)){ 
        $id=$row["idVenta"];
        $idclie=$row["idCliente"];
        $idEmpleado = $row["idEmpleado"];
        $idprod = $row["idProducto"];
        $clientes = $cliente->NombreCliente($idclie);
        $productos = $producto->NombreProducto($idprod);
        $emp = $usuario->NombreUsuario($idEmpleado);
        ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $productos[0]; ?></td>
                    <td><?php echo $clientes[0]; ?></td>
                    <td><?php echo $emp[0]; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td>  
                    <a href="#" class="btn btn-info add-new">Imprimir</a>    
                    </td>
                </tr>
             <?php
    }    
    ?>
    </tbody>
   </table>

            </div>

        </div>

    </div>
    
<?php
}

?>