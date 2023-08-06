<?php
session_start();
if (!isset($_SESSION['login_estado']) and $_SESSION['login_estado'] != 1){
    header("location: /sisventas/login.php");
    exit;
}

include_once(__DIR__.'/../../header.php') 

?>
<div class="container p-12">
<div class="row">
<div class="col-md-4">
                <div class="card card-body">
                    <form action="agrega_venta.php" method="post">
                        <div class="form-group">
                        <input type="date" name="fec" class="form-control" placeholder="fecha" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="cli" class="form-control" placeholder="Cliente" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Usuario" value="<?php echo $_SESSION['nombre']; ?>" readonly>
                        </div>
                        <div class="form-group">
                        <input type="text" name="prod" class="form-control" placeholder="Producto" autofocus>
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