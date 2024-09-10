// #region Detección de dispositivo
// Detectar si es un dispositivo móvil
var isMobile = window.innerWidth <= 768;
// #endregion

// #region Configuración del mapa
// Configuración del mapa
var map = L.map('map', {
    crs: L.CRS.Simple,
    minZoom: -1, // Permitir un zoom más alejado
    maxZoom: 1,
    attributionControl: false,
    maxBounds: [
        [-100, -100],  // Límites más amplios
        [1200, 1600]
    ],
    maxBoundsViscosity: 0.3, // Restringir el movimiento fuera de los límites
});
// #endregion

// #region Configuración de tamaño y zoom según el dispositivo
var bounds = [[0, 0], [1100, 1500]];

if (isMobile) {
    document.getElementById('map').style.height = '70vh'; // Tamaño más pequeño para mobile
    document.getElementById('map').style.width = '92vw';  // Tamaño más pequeño para mobile
} else {
    document.getElementById('map').style.height = '100vh'; // Tamaño normal para desktop
    document.getElementById('map').style.width = '75vw';   // Tamaño normal para desktop
}
// #endregion

// #region Agregar la imagen del mapa
L.imageOverlay('assets/images/media/Mapa-Taino-Bay.jpg', bounds).addTo(map);
map.fitBounds(bounds); // Ajustar los bounds para que el mapa se vea correctamente

// Ajustar el nivel de zoom según el dispositivo después de ajustar los bounds
if (!isMobile) {
    map.setZoom(0); // Zoom inicial en escritorio
} else {
    map.setZoom(-1)
}
// #endregion

// #region Evento para minimizar o expandir el contenido del filtro
if(!isMobile){
    $(document).on('click', '.minimize-btn', function () {
        var $minimizeBtn = $(this); // Store the minimize-btn element
        var $filter = $minimizeBtn.closest('.leaflet-control-filter');
        var $filterContent = $filter.find('.filter-content');
        var $headerText = $filter.find('.header-text');

        // Toggle the "show" and "hide" classes on the minimize-btn element
        $minimizeBtn.toggleClass('show').toggleClass('hide');

        if ($minimizeBtn.hasClass('hide')) {
            $filterContent.hide();
            $headerText.hide(); // Ocultar el span con clase header-text
            $minimizeBtn.text('☰');
            $filter.css('width', 'fit-content'); // Aplicar width: fit-content cuando se oculta
        } else {
            $filterContent.show();
            $headerText.show(); // Mostrar el span con clase header-text
            $minimizeBtn.text('X');
            $filter.css('width', ''); // Restablecer el width cuando el contenido se muestra
        }
    });


}

// #endregion


// #region Definición de íconos usando L.divIcon
var retailIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="0"
     data-aos-offset="0">
               <img src="assets/icons/map/retail.svg" alt="retail" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [0, 0], // Ajusta el anclaje como en L.icon
    popupAnchor: [12, -20]   // Ajusta el anclaje del popup como en L.icon
});

var restroomsIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="200"
     data-aos-offset="0">
               <img src="assets/icons/map/restrooms.svg" alt="restrooms" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [0, 0],
    popupAnchor: [12, -20]
});

var barIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="400"
     data-aos-offset="0">
               <img src="assets/icons/map/bar.svg" alt="bar" width="23" height="23">
           </div>`,
    className: '',
    iconSize: [23, 23],
    iconAnchor: [0, 0],
    popupAnchor: [12, -20]
});

var foodIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/food.svg" alt="food" width="23" height="23">
           </div>`,
    className: '',
    iconSize: [23, 23],
    iconAnchor: [0, 0],
    popupAnchor: [12, -20]
});
// #endregion

// #region Marcadores y sus eventos
var markers = {
    1: [
        L.marker([630, 325], { icon: retailIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); }),
        L.marker([472, 236], { icon: retailIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); }),
        L.marker([300, 218], { icon: retailIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); })
    ],
    2: [
        L.marker([578, 520], { icon: restroomsIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); }),
        L.marker([810, 811], { icon: restroomsIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); })
    ],
    3: [
        L.marker([661, 495], { icon: barIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); }),
        L.marker([751, 756], { icon: barIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); })
    ],
    4: [
        L.marker([750, 487], { icon: foodIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); }),
        L.marker([780, 737], { icon: foodIcon }).addTo(map).bindPopup(`
            <div style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Find our store</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `).on('mouseover', function () { this.openPopup(); }).on('mouseout', function () { this.closePopup(); })
    ]
};
// Evento para ajustar el tamaño de los íconos en función del zoom
map.on('zoom', function() {
    var currentZoom = map.getZoom();

    // Define el tamaño base y la escala para ajustar el tamaño de los íconos
    var baseSize = 23; // Tamaño base de los íconos
    var scale = Math.pow(1.5, currentZoom); // Escala para aumentar o reducir el tamaño según el zoom

    // Actualiza el tamaño de los íconos según el nivel de zoom
    document.querySelectorAll('.custom-icon img').forEach(icon => {
        var newSize = baseSize * scale;
        icon.style.width = newSize + 'px';
        icon.style.height = newSize + 'px';
    });
});

// #endregion



// #region Manejo de la visibilidad de los marcadores al hacer clic en el filtro
// Variable global para almacenar el último ID clickado y el estado de visibilidad de los marcadores
var lastClickedId = null;
var markersVisible = true;

// Evento para manejar el click en las filas de la tabla
$(document).on('click', '.tabla-icons tr', function () {
    var markerId = $(this).data('marker-id');
    var selectedMarkers = markers[markerId]; // Obtener los marcadores correspondientes al ID

    if (lastClickedId === markerId && !markersVisible) {
        // Si se hace clic en el mismo ícono y los marcadores están ocultos, mostrar todos los marcadores
        $.each(markers, function (id, markerGroup) {
            markerGroup.forEach(function (marker) {
                map.addLayer(marker);
            });
        });
        markersVisible = true; // Marcar que los marcadores están visibles
        lastClickedId = null;  // Resetear lastClickedId para permitir nueva selección
    } else {
        // Ocultar todos los marcadores
        $.each(markers, function (id, markerGroup) {
            markerGroup.forEach(function (marker) {
                map.removeLayer(marker);
            });
        });
        // Mostrar solo los marcadores seleccionados
        selectedMarkers.forEach(function (marker) {
            map.addLayer(marker);
        });
        markersVisible = false; // Marcar que los marcadores están ocultos
        lastClickedId = markerId; // Actualizar lastClickedId al último marcador clicado
    }
});

// Nueva funcionalidad para filtrar por tabla al hacer clic en el span.header-text
$(document).on('click', '.header-text', function () {
    var table = $(this).closest('.leaflet-control-filter').find('table');
    var markerIds = table.find('tr').map(function () {
        return $(this).data('marker-id');
    }).get();

    // Ocultar todos los marcadores antes de aplicar el nuevo filtro
    $.each(markers, function (id, markerGroup) {
        markerGroup.forEach(function (marker) {
            map.removeLayer(marker);
        });
    });

    // Mostrar solo los marcadores correspondientes a la tabla seleccionada
    markerIds.forEach(function (markerId) {
        markers[markerId].forEach(function (marker) {
            map.addLayer(marker);
        });
    });

    markersVisible = false; // Marcar que los marcadores están ocultos
    lastClickedId = 'table-' + table.index(); // Actualizar lastClickedId al último marcador clicado
});

// Evento para manejar la activación visual de las filas
document.querySelectorAll('.tabla-icons tr').forEach(row => {
    row.addEventListener('click', function () {
        // Si la fila ya tiene la clase 'active', se la quita
        if (this.classList.contains('active')) {
            this.classList.remove('active');
        } else {
            // Si no, se la quita de todas las filas y la añade solo a la fila actual
            document.querySelectorAll('.tabla-icons tr.active').forEach(activeRow => {
                activeRow.classList.remove('active');
            });

            // Añade la clase 'active' solo a la fila clickeada
            this.classList.add('active');
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona todas las tablas con la clase 'tabla-icons'
    var tablas = document.querySelectorAll('.tabla-icons');

    if(!isMobile){
        tablas.forEach(function(tabla) {
            // Cuenta el número de filas en el tbody de la tabla
            var filas = tabla.querySelectorAll('tbody tr').length;
    
            // Aplica el estilo CSS si hay más de 5 filas
            if (filas > 6) {
                tabla.querySelector('tbody').style.display = 'grid';
                tabla.querySelector('tbody').style.gridTemplateColumns = 'repeat(2, 1fr)';
            } else {
                // Asegúrate de que se use el estilo original si hay 5 o menos filas
                tabla.querySelector('tbody').style.display = 'block';
                tabla.querySelector('tbody').style.gridTemplateColumns = '';
            }
        });
    }
});

// #endregion
