<?php

if (isset($_POST['envia_login'])){
   
    $nom = $_POST['usua'];
    $pass = $_POST['pass'];
    
    include_once('includes/acceso.php');
    include_once('clases/Usuario.php');
    $conexion = connect_db();
    $usuario = new Usuario();
    $usuario->conectar_db($conexion);
    
    $res = $usuario->lee_datos($nom,$pass);
    
    if($res) {
        
        // aqui validamos las credenciales
        $usuario = $res["Usuario"];
        $clave = $res["Contraseña"];
        
        if (password_verify($pass,$clave)) {
            //echo "acceso correcto";
            session_start();
            $_SESSION['nombre'] = $res["nombre"];
            $_SESSION['idEmpleado']= $res["idEmpleado"];
            $_SESSION['login_estado'] = 1;
            header("location:index.php");
        } else
               header("location: login.php");
       

    }else
          header("location: login.php");

   
   
}
?>