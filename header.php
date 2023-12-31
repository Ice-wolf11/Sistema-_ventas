<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/sisventas/index.php">Empresa SA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Archivos
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         
            <li><a class="dropdown-item" href="/sisventas/Modules/Productos/lista_producto.php">Productos</a></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/clientes/lista_cliente.php">Clientes</a></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/Proveedor/lista_proveedor.php">Proveedor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/Documentos/lista_docu.php">Documentos</a></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/Usuarios/lista_usuario.php">Usuarios</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Procesos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/sisventas/Modules/Ventas/agrega_ven.php">Registro Ventas</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultas</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/sisventas/Modules/Productos/ConsultaStock.php">Stock De Productos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/Ventas/lista_venta.php">ver ventas</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuracion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/sisventas/logout.php">Salir</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/sisventas/Modules/Usuarios/contraseña.php">cambiar contraseña</a></li>
            </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>