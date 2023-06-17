<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="api/auth.php" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="user" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
