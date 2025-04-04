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
    <main class="opinion-content">
        <div class="write-opinion">
            <div class="img-opinion">
            <span class="i-opinion"><img src="{{ asset('image/grafica2.png') }}" alt=""></span>
            <h3>¿Qué tal estuvo el producto?</h3>
            </div>
            <div class="stars-opinion">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>Escribe una opinion</p>
            <input class = "product-opinion" type="user-opinion" rows="1" placeholder="¿Que deben de saber los otros clientes?" required>
            <div class="share-content">
                <a href="" class="share-photo"><i class="fa-solid fa-camera">Compartir un video o una foto</i></a>
            </div>
            <p>Titula tu opinión (requerido)</p>
            <input class = "product-opinion" type="user-opinion" placeholder="¿Que es lo más importante para compartir?">
            <div class="send-opinion">
            <a href="" class="send-btn">Enviar</a>
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
<script src="{{ asset('js/funtions.js') }}"></script>
@include('layout.footer')
</html>