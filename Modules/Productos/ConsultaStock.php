<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}

include_once(__DIR__.'/../../header.php');
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/producto.php');
$conexion = connect_db();
$oproducto = new Producto();
$oproducto->conectar_db($conexion);
$datos_produ = $oproducto->listaprodu();
if ($datos_produ){
    ?>
    <div class="container p-12">
        <div class="row">
        <div class="container p-4">
        <h4>Stock de Productos</h4>
        </div>  
        <div class="card card-body">

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th>Unidad</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
        
    <?php
    while ($row=mysqli_fetch_array($datos_produ)){
        $id=$row['idProducto'];
        $nom=$row['nomproducto'];
        $und=$row['unimed'];
        $can=$row['stock'];
        ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $und; ?></td>
                    <td><?php echo $can; ?></td>
                    <td>
                    <a href="ComprarProd.php?codigo=<?php echo $id; ?>" class="btn btn-info add-new">Comprar</a>     
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