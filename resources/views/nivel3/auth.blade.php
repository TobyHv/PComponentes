<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
<main class="auth-content">
    <div class="card-auth">
        <!-- Sección de Iniciar Sesión -->
        <div class="box">
            <h2>Iniciar Sesión</h2>
            <p>Bienvenido, entra a tu cuenta.</p>
            <form>
                <input class = "auth-user" type="email" placeholder="Correo Electrónico" required>
                <input class = "auth-user" type="password" placeholder="Contraseña" required>
                <button class = "auth-btn">Iniciar Sesión</button>
            </form>
            <a href="#" class="link-auth">¿Olvidaste tu contraseña?</a>
        </div>

        <!-- Sección de Registro -->
        <div class="box">
            <h2>Crear una Nueva Cuenta</h2>
            <p>Crea tu cuenta con tu usuario, correo y contraseña.</p>
            <form>
                <input class = "auth-user" type="text" placeholder="Usuario" required>
                <input class = "auth-user" type="email" placeholder="Correo Electrónico" required>
                <input class = "auth-user" type="password" placeholder="Contraseña" required>
                <input class = "auth-user" type="password" placeholder="Confirmar Contraseña" required>
                <button class = "auth-btn" class="btn">Registrarme</button>
            </form>
        </div>
    </div>
</main>
@include('layout.related-products')
</body>
@include('layout.footer')
</html>