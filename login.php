<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./styles/index.css">
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <section>
        <div class="container">
            <form class="formulario" action="valida.php" method="post">

                <h2>Iniciar Sesión</h2>

                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="usua" required>
                    <label>User name</label>
                </div>
            
                <div class="inputbox">
                    <ion-icon name="eye-off-outline"></ion-icon>
                    <input type="password" name ="pass" required>
                    <label>Password</label>
                    
                </div>

                <button type="submit" name="envia_login">INGRESAR</button>
                <div class="register">
                    <p>No tengo una cuenta <a href="#">Regístrate</a></p>
                </div>
                
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>