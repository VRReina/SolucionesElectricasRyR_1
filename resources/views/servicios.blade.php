<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/servicios.css') }}" rel="stylesheet">
    <title>Servicios</title>
</head>
<body>
@include('layouts/cabecera')

<div class="servicios">
    <div class="tab1 active" data-tab="electricidad" onclick="showContent('electricidad')">Electricidad</div>
    <div class="tab1" data-tab="automatizacion" onclick="showContent('automatizacion')">Automatización Industrial</div>
</div>

<div class="content2">
    <div class="tab-content2 active" data-tab="electricidad">
        <div id="card-area">
            <div class="wrapper">
                <div class="box-area">
                    @foreach($electricidads as $item)
                    <div class="box">
                        <img src="{{ asset('storage/' . $item->img) }}" alt="{{ $item->servicio }}">
                        <div class="over">
                            <h6>{{ $item->servicio }}</h6>
                            <p>{{ $item->descripcion }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content2" data-tab="automatizacion">
        <div id="card-area">
            <div class="wrapper">
                <div class="box-area">
                    @foreach($automatizacions as $item)
                    <div class="box">
                        <img src="{{ asset('storage/' . $item->img) }}" alt="{{ $item->servicio }}">
                        <div class="over">
                            <h6>{{ $item->servicio }}</h6>
                            <p>{{ $item->descripcion }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/servicios.js') }}"></script>
@include('layouts/footer')
</body>
</html>
