<?php include_once(__DIR__.'/../../header.php') ?>
<div class="container p-12">
<div class="row">
<div class="col-md-4">
                <div class="card card-body">
                    <form action="agrega_usuario.php" method="post">
                        <div class="form-group">
                        <input type="text" name="nom" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="tel" class="form-control" placeholder="Telefono" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" name="pass" class="form-control" placeholder="Contraseña" autofocus>
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