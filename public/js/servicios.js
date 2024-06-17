//Servicios 

function showContent(tabName) {
    // Ocultar todos los contenidos
    var contents = document.querySelectorAll('.tab-content2');
    contents.forEach(function (content) {
        content.classList.remove('active');
    });

    // Mostrar el contenido correspondiente al hacer clic en la pestaña
    var selectedContent = document.querySelector('.tab-content2[data-tab="' + tabName + '"]');
    if (selectedContent) {
        selectedContent.classList.add('active');
    }

    // Resaltar la pestaña activa
    var tabs = document.querySelectorAll('.tab1');
    tabs.forEach(function (tab) {
        tab.classList.remove('active');
    });

    var selectedTab = document.querySelector('.tab1[data-tab="' + tabName + '"]');
    if (selectedTab) {
        selectedTab.classList.add('active');
    }
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("readMoreBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}