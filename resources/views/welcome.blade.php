<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styless.css') }}" rel="stylesheet">
  <title>Inicio</title>
</head>
<body>
@include('layouts/cabecera')

<div class="container">
    <div class="row d-flex">
        <div class="col-md-6 col-sm-12">
            <h1>¡Bienvenidos a Soluciones Electricas RYR!</h1>
            <p>Somos una empresa que brinda soluciones integrales en el campo de la electricidad y la automatización, con el propósito de contribuir al desarrollo sostenible y a la satisfacción de nuestros clientes.</p>
        </div>
        <div class="col mt-4 ">
            <img src="{{ asset('images/imagen2.jpeg') }}" class="img-fluid img-thumbnail rounded">
        </div>
        <div class="col mt-4">
            <img src="{{ asset('images/imagen1.jpg') }}" class="img-fluid img-thumbnail rounded">
        </div>
    </div>
</div>

    <!--Vision y mision-->
    <div class="container-info">
        <div class="slider text-center mb-3">
            <div class="tab active" data-tab="mision">Misión</div>
            <div class="tab" data-tab="vision">Visión</div>
        </div>

        <div class="content">
            <div class="tab-content active" data-tab="mision">
                Nuestra misión es proporcionar soluciones eléctricas y de automatización innovadoras y de alta calidad para satisfacer las necesidades de nuestros clientes en diferentes sectores, mejorando la eficiencia, seguridad y productividad de sus instalaciones. 
            </div>
            <div class="tab-content" data-tab="vision">
                Ser reconocidos como líderes en el mercado de servicios eléctricos y de automatización, ofreciendo soluciones innovadoras, eficientes y personalizadas para diferentes sectores. Ser reconocidos por nuestro compromiso con la calidad, la seguridad y el medio ambiente, y por nuestra capacidad de adaptarnos a las necesidades cambiantes del mercado.
            </div>
        </div>
    </div>

    <div class="flex items-center mb-10">
        <div class="w-full border-t border-gray-900"></div>
        <div class="mx-4 text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11.3 1.046a1 1 0 00-.872.714l-4 12a1 1 0 001.175 1.285l3.551-.888-1.524 4.571a1 1 0 001.755.924l7-11A1 1 0 0015.868 5h-3.551l2.187-3.429a1 1 0 00-1.755-.924L11.3 1.046z"/>
            </svg>
        </div>
        <div class="w-full border-t border-gray-900"></div>
    </div>
    <h1>Servicios</h1>
    <div class="tarjetas-container d-flex col">
        <div class="tarjeta">
            <img src="{{ asset('images/imagen2.jpeg') }}" class="img-fluid  rounded" alt="Imagen de la tarjeta">
            <div class="contenido">
                <h1>ELECTRICIDAD</h1>
                <a href="{{ route('servicios') }}">Ver servicios</a>
            </div>
        </div>
        <div class="tarjeta">
            <img src="{{ asset('images/imagen1.jpg') }}" class="img-fluid  rounded" alt="Imagen de la tarjeta">
            <div class="contenido">
                <h1>AUTOMATIZACIÓN</h1>
                <a href="{{ route('servicios') }}">Ver servicios</a>
            </div>
        </div>
    </div>
    
    <!--Equipo de trabajo-->

<div class="flex items-center mb-10">
    <div class="w-full border-t border-gray-900"></div>
        <div class="mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="9" y="2" width="6" height="20" stroke-width="2"/>
                <line x1="3" y1="6" x2="21" y2="6" stroke-width="2"/>
                <line x1="3" y1="12" x2="21" y2="12" stroke-width="2"/>
                <line x1="3" y1="18" x2="21" y2="18" stroke-width="2"/>
            </svg>
        </div>
    <div class="w-full border-t border-gray-900"></div>
</div>

    <h1 id="equipo">Equipo de Trabajo</h1>
    <div class="container1">
    <div class="card">
        <div class="imgBx">
            <img src="{{ asset('images/Usuarios/jose.jpeg') }}">
        </div>
        <div class="contenido1">
            <h4>Jose Leonard Ramirez </h4>
            <p>Tecnico Electricista</p>
        </div>
    </div>
    
    <div class="card">
        <div class="imgBx">
            <img src="{{ asset('images/Usuarios/juan_jose.jpeg') }}">
        </div>
        <div class="contenido1">
            <h4>Juan Jose Ramirez Reina</h4>
            <p>Tecnólogo Automatización Industrial</p>
        </div>
    </div>
</div>

<div class="flex items-center mb-10">
        <div class="w-full border-t border-gray-900"></div>
        <div class="mx-4 text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11.3 1.046a1 1 0 00-.872.714l-4 12a1 1 0 001.175 1.285l3.551-.888-1.524 4.571a1 1 0 001.755.924l7-11A1 1 0 0015.868 5h-3.551l2.187-3.429a1 1 0 00-1.755-.924L11.3 1.046z"/>
            </svg>
        </div>
        <div class="w-full border-t border-gray-900"></div>
</div>

     <!--Ubicacion-->
     <div class="container2">
        <h1>Ubicación</h1><br>
        <div class="iframe">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Neiva+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href='https://maps-generator.com/'></a>
        </div>
     </div>

     @include('layouts/footer')
<!-- Scripts -->
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>