<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="app">
        <form action="formulario.php" method="POST">
            <br><br>
            <fieldset>
                <legend id="claveypass">Clave de Usuario y Contraseña</legend>
                <label for="">Clave de usuario <i>(Campo obligatorio)</i></label><br>
                <input type="text" name="idUser" placeholder="Ingresa tu Clave" required><br><br>
                <label for="">Contraseña <i>(Campo obligatorio)</i></label><br>
                <input type="password" name="Contraseña" placeholder="Ingresa tu contraseña" required>
                <label for="">Ingresa nuevamente tu contraseña <i>(Campo obligatorio)</i></label>
                <input type="password" name="Contraseña" placeholder="Confirma tu contraseña" required>
            </fieldset> 
            <br><br>
            <fieldset>
                <legend id="Inf">Información complementaria</legend>
                <label for="">Nombre(s) <i>(Campo obligatorio)</i></label> <br>
                <input type="text" name="Nombre" id="" placeholder="Ingresa tu nombre" required><br><br>
                <label for="">Primer apellido <i>(Campo obligatorio)</i></label><br>
                <input type="text" name="ApellidoP" placeholder="Primer apellido" required><br><br>
                <label for="">Segundo apellido <i>(Campo obligatorio)</i></label><br>
                <input type="text" name="ApellidoM" placeholder="Segundo apellido" required><br><br>
                <label for="">Dirección de correo UNAM <i>(Campo obligatorio)</i></label><br>
                <input type="email" name="Email" placeholder="email" required>
            </fieldset>
            <fieldset>
                <input type="submit" name="insert" value = "Guardar">
                <button name="guardar">Guardar</button>
                
                <button name="cancelar">Cancelar</button>
            </fieldset>
        </form>
    </div>
    <?php include 'usuarios.php';?>
</body>
</html>