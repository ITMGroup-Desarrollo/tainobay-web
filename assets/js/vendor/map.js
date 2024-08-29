// Detectar si es un dispositivo móvil
var isMobile = window.innerWidth <= 768;

// Configurar el mapa
var map = L.map('map', {
    crs: L.CRS.Simple,
    minZoom: -1, // Permitir un zoom más alejado
    maxZoom: 1,
    attributionControl: false,
    maxBounds: [
        [-100, -100],  // Límites más amplios
        [1100, 1500]
    ],
    maxBoundsViscosity: 0.3, // Restringir el movimiento fuera de los límites
});

// Configurar los límites y el zoom según el dispositivo
var bounds = [[0, 0], [900, 1400]];

if (isMobile) {
    document.getElementById('map').style.height = '400px'; // Tamaño más pequeño para mobile
    document.getElementById('map').style.width = '400px'; // Tamaño más pequeño para mobile
    console.log('Estoy en mobile')
} else {
    map.fitBounds(bounds); // Ajuste normal en escritorio
    document.getElementById('map').style.height = '900px'; // Tamaño normal para desktop
}


// Agregar la imagen del mapa
L.imageOverlay('assets/images/media/Mapa-Taino-Bay.jpg', bounds).addTo(map);

map.fitBounds(bounds); // Asegurarse de que los bounds estén ajustados correctamente en ambos dispositivos

var filterControl = L.control({position: 'topleft'});

filterControl.onAdd = function(map) {
    var container = L.DomUtil.create('div', 'leaflet-control-filter');
    container.innerHTML = `
        <div class="filter-header">
            <button class="minimize-btn">X</button>
        </div>
        <div class="filter-content">
            <table class="tabla-icons">
                <tr data-marker-id="1">
                    <td><img src="assets/icons/map/retail.svg" alt="retail"></td>
                    <td>RETAIL</td>
                </tr>
                <tr data-marker-id="2">
                    <td><img src="assets/icons/map/restrooms.svg" alt="restrooms"></td>
                    <td>RESTROOMS</td>
                </tr>
            </table>
        </div>
    `;
    L.DomEvent.disableClickPropagation(container);
    return container;
};

filterControl.addTo(map);

$(document).on('click', '.minimize-btn', function() {
    var $filterContent = $(this).closest('.leaflet-control-filter').find('.filter-content');
    if ($filterContent.is(':visible')) {
        $filterContent.hide();
        $(this).text('☰');
    } else {
        $filterContent.show();
        $(this).text('X');
    }
});

var retailIcon = L.icon({
    iconUrl: 'assets/icons/map/retail.svg',
    iconSize: [38, 38],
    iconAnchor: [22, 38],
    popupAnchor: [0, -30]
});

var restroomsIcon = L.icon({
    iconUrl: 'assets/icons/map/restrooms.svg',
    iconSize: [38, 38],
    iconAnchor: [22, 38],
    popupAnchor: [0, -30]
});

var markers = {
    1: [
        L.marker([493, 315], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([362, 233], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([225, 215], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ],
    2: [
        L.marker([450, 497], { icon: restroomsIcon }).addTo(map).bindPopup('Find the restrooms.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([637, 770], { icon: restroomsIcon }).addTo(map).bindPopup('Find the restrooms.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ]
};

var lastClickedId = null;
var markersVisible = true;

$(document).on('click', '.leaflet-control-filter tr', function() {
    var markerId = $(this).data('marker-id');
    var selectedMarkers = markers[markerId];

    if (lastClickedId === markerId && !markersVisible) {
        // Si se hace clic en el mismo ícono y los marcadores están ocultos, mostrar todos los marcadores
        $.each(markers, function(id, markerGroup) {
            markerGroup.forEach(function(marker) {
                map.addLayer(marker);
            });
        });
        markersVisible = true; // Marcar que los marcadores están visibles
        lastClickedId = null;  // Resetear lastClickedId para permitir nueva selección
    } else {
        // Ocultar todos los marcadores
        $.each(markers, function(id, markerGroup) {
            markerGroup.forEach(function(marker) {
                map.removeLayer(marker);
            });
        });
        // Mostrar solo los marcadores seleccionados
        selectedMarkers.forEach(function(marker) {
            map.addLayer(marker);
        });
        markersVisible = false; // Marcar que los marcadores están ocultos
        lastClickedId = markerId; // Marcar el ícono seleccionado
    }
});
