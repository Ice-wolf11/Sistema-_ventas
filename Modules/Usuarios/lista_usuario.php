<?php
include_once(__DIR__.'/../../header.php');
include_once(__DIR__.'/../../includes/acceso.php');
include_once(__DIR__.'/../../clases/Usuario.php');
$conexion = connect_db();
$usuario = new Usuario();
$usuario->conectar_db($conexion);
$datos_user = $usuario->lista_usuario();
if ($datos_user){
    ?>
    <div class="container p-12">
        <div class="row">
        <div class="container p-4">
            <h4>Listado de Usuarios</h4>
        <a href="agrega_us.php" class="btn btn-info add-new">Nuevo</a>
        </div>  
        <div class="card card-body">

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
        
    <?php
    while ($row=mysqli_fetch_array($datos_user)){ 
        $id=$row["idEmpleado"];
        ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['Usuario']; ?></td>
                    <td><?php echo $row['Contraseña']; ?></td>
                    <td>
                    <a href="modifica_us.php?codigo=<?php echo $id; ?>" class="btn btn-info add-new">Modificar</a>   
                    <a href="elimina_us.php?codigo=<?php echo $id; ?>" class="btn btn-info add-new">Eliminar</a>    
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