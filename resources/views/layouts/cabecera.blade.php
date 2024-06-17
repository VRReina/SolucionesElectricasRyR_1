<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Soluciones Electricas RyR</title>
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    </div>
    <nav>
    <ul class="nav-links">
    <li id="ubicacion"><a href="{{ route('inicio') }}">Inicio</a>
</li>
    <li id="ubicacion1"><a href="{{ route('servicios') }}">Servicios</a></li>
    <li id="ubicacion3"><a href="{{ route('proyectos') }}">Proyectos</a></li>
</ul>            
    </nav>
    <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
    <div id="mobile-menu" class="overlay">
        <a onclick="closeNav()" href="#" class="close">&times;</a>
        <div class="overlay-content">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('servicios') }}">Servicios</a>
            <a href="{{ route('proyectos') }}">Proyectos</a>
        </div>
    </div>
</header>

<div class="container mt-5">

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary btn-float" data-toggle="modal" data-target="#quotationModal">
        Cotizar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="quotationModal" tabindex="-1" aria-labelledby="quotationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quotationModalLabel">Formulario de Cotizaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/cotizaciones" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tipo-persona" class="col-form-label">Tipo Persona/Empresa</label>
                            <select class="form-select" name="tipo_persona" aria-label="Default select example" required>
                                <option selected>Seleccione</option>
                                <option value="Persona Natural">Persona Natural</option>
                                <option value="Persona Jurídica">Persona Jurídica</option>
                                <option value="Empresa">Empresa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tipo_documento" class="col-form-label">Tipo Documento</label>
                            <select class="form-select" name="tipo_documento" aria-label="Default select example" required>
                                <option selected>Seleccione</option>
                                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                <option value="Rut">Rut</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_cliente" class="col-form-label">Número Documento</label>
                            <input type="text" class="form-control" id="id_cliente" name="id_cliente" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Correo Electronico:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo_servicio" class="form-label">Tipo de Servicio</label>
                            <select id="tipo_servicio" class="form-select" name="tipo_servicio" aria-label="Default select example" required>
                                <option selected>Seleccione</option>
                                <option value="Electricidad">Electricidad</option>
                                <option value="Automatización Industrial">Automatización Industrial</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="servicio" class="form-label">Servicio</label>
                            <select id="servicio" class="form-select" name="servicio" aria-label="Default select example" required>
                                <option selected>Seleccione</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <a href="https://wa.me/1234567890" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+pP7TO6yCydcO4l8GSt1hUCF8J6Oc7uQ9tc6HnbNQuIv+30kuXosr0pFeM2fT7" crossorigin="anonymous"></script>
<script>
    function openNav() {
        document.getElementById("mobile-menu").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mobile-menu").style.width = "0";
    }
</script>


<!-- Scripts -->
<script src="{{ asset('js/navbar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tipo_servicio').change(function() {
                var tipoServicio = $(this).val();
                var servicios = [];

                if (tipoServicio == 'Electricidad') {
                    servicios = [
                        'Legalización de proyectos de media y baja tensión ante la prestadora de servicios',
                        'Levantamiento con GPS Garmin de redes eléctricas',
                        'Construcción de media tensión',
                        'Construcción de baja tensión',
                        'Instalaciones internas',
                        'Instalación equipos a presión'
                    ];
                } else if (tipoServicio == 'Automatización Industrial') {
                    servicios = [
                        'Automatización Procesos Industriales',
                        'Construcción de Tableros a 220v y 440v',
                        'Mantenimiento preventivo y correctivo de procesos industriales',
                        'Asesoría e instalación de procesos automatización con nuevas tecnologías domóticas'
                    ];
                }

                $('#servicio').empty().append('<option selected>Seleccione</option>');
                $.each(servicios, function(index, value) {
                    $('#servicio').append('<option value="' + value + '">' + value + '</option>');
                });
            });
        });
    </script>
</body>
</html>
