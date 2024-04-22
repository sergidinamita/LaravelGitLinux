<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="/login" method="post">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Iniciar sesión">
        </form>
        <a href="/forgot-password">¿Olvidaste tu contraseña?</a>
    </div>
</body>
</html>