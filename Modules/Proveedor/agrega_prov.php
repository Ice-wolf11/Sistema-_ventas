<?php 
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /Tareas/sisventas/login.php");
    exit;
}

include_once(__DIR__.'/../../header.php') ?>
<div class="container p-12">
<div class="row">
<div class="col-md-4">
                <div class="card card-body">
                    <form action="agrega_proveedor.php" method="post">
                        <div class="form-group">
                        <input type="text" name="nom" class="form-control" placeholder="Nombre Proveedor" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="ruc" class="form-control" placeholder="RUC" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="dir" class="form-control" placeholder="Dirección" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="tel" class="form-control" placeholder="Telefono" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Correo" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" name="envia_datos" value="Enviar">
                        </div>
                    </form>

                </div>

            </div>
            </div>
            </div>  
<?php include_once(__DIR__.'/../../footer.php') ?>