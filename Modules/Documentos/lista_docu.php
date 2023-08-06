<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}

include_once(__DIR__.'/../../header.php');
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/documento.php');
$conexion = connect_db();
$documento = new Documento();
$documento->conectar_db($conexion);
$datos_doc = $documento->listadocu();

if ($datos_doc){
    ?>
    <div class="container p-12">
        <div class="row">
        <div class="container p-4">
        <h4>Documentos</h4>
        <!--<a href="agrega_prod.php" class="btn btn-info add-new">Nuevo</a> -->
        </div>  
        <div class="card card-body">

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Nro Documento</th>
                </tr>
            </thead>
            <tbody>
        
    <?php
    while ($row=mysqli_fetch_array($datos_doc)){
        $id=$row['idDocumento'];
        $nom=$row['nombre'];
        $num =$row['NroDocumento'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nom; ?></td>
            <td><?php echo $num; ?></td>
            <td>
                <a href="modifica_prod.php?codigo=<?php echo $id; ?>" class="btn btn-info add-new">Ver</a>   
                <a href="elimina_prod.php?codigo=<?php echo $id; ?>" class="btn btn-info add-new">Descargar</a>    
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


