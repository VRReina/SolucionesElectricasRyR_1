<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/proyectos.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts/cabecera')

<div class="img-container">
    <!-- Imagen que ocupa todo el ancho de la página -->
    <img src="{{ asset('images/imagen.png') }}" class="w-full h-auto" alt="Imagen de fondo">
    <!-- Encabezado h1 encima de la imagen -->
    <h1 class="h1-responsive">Proyectos de instalaciones eléctricas y automatización industrial</h1>
</div>


<div class="container mx-auto mt-5 p-4">
<div class="flex items-center mb-10">
        <div class="w-full border-t border-gray-900"></div>
        <div class="mx-4 text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11.3 1.046a1 1 0 00-.872.714l-4 12a1 1 0 001.175 1.285l3.551-.888-1.524 4.571a1 1 0 001.755.924l7-11A1 1 0 0015.868 5h-3.551l2.187-3.429a1 1 0 00-1.755-.924L11.3 1.046z"/>
            </svg>
        </div>
        <div class="w-full border-t border-gray-900"></div>
    </div>
    @foreach($proyectos as $index => $item)
    @if ($index > 0)
    <!-- Línea separadora con icono de rayo -->
    <div class="flex items-center mb-10">
        <div class="w-full border-t border-gray-900"></div>
        <div class="mx-4 text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11.3 1.046a1 1 0 00-.872.714l-4 12a1 1 0 001.175 1.285l3.551-.888-1.524 4.571a1 1 0 001.755.924l7-11A1 1 0 0015.868 5h-3.551l2.187-3.429a1 1 0 00-1.755-.924L11.3 1.046z"/>
            </svg>
        </div>
        <div class="w-full border-t border-gray-900"></div>
    </div>
    @endif

    @if ($index % 2 == 0)
    <!-- Primera Sección -->
    <div class="flex flex-col md:flex-row mb-10">
        <div class="md:w-1/2 flex flex-col justify-center p-4">
            <h1 class="text-3xl font-bold mb-4">{{ $item->nombre_proyecto }}</h1>
            <p class="text-lg">{{ $item->descripcion }}</p>
        </div>
        <div class="md:w-1/2 flex justify-center items-center p-4">
            <img src="{{ asset('storage/' . $item->img_1) }}" class="w-1/2 mr-2" alt="">
            <img src="{{ asset('storage/' . $item->img_2) }}" class="w-1/2 ml-2" alt="">
        </div>
    </div>
    @else
    <!-- Segunda Sección -->
    <div class="flex flex-col md:flex-row mb-10">
        <div class="md:w-1/2 flex justify-center items-center p-4">
            <img src="{{ asset('storage/' . $item->img_1) }}" class="w-1/2 mr-2" alt="">
            <img src="{{ asset('storage/' . $item->img_2) }}" class="w-1/2 ml-2" alt="">
        </div>
        <div class="md:w-1/2 flex flex-col justify-center p-4">
            <h1 class="text-3xl font-bold mb-4">{{ $item->nombre_proyecto }}</h1>
            <p class="text-lg">{{ $item->descripcion }}</p>
        </div>
    </div>
    @endif
    @endforeach 
</div>

@include('layouts/footer')
</body>
</html>
