
//Menu
function openNav(){
    document.getElementById("mobile-menu").style.width = "100%";
}

    function closeNav(){
    document.getElementById("mobile-menu").style.width = "0%";
}
   
//MISION Y VISION 

document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');

    // Mostrar el primer elemento por defecto
    tabs[0].classList.add('active');
    tabContents[0].classList.add('active');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const selectedTab = tab.getAttribute('data-tab');
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            tab.classList.add('active');
            document.querySelector(`.tab-content[data-tab="${selectedTab}"]`).classList.add('active');
        });
    });
});


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