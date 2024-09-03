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
    document.getElementById('map').style.height = '40vh'; // Tamaño más pequeño para mobile
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
}
// #endregion

// #region Control de filtrado
var filterControl1 = L.control({ position: 'topleft' });

filterControl1.onAdd = function(map) {
    var container = L.DomUtil.create('div', 'leaflet-control-filter service');
    container.innerHTML = `
        <div class="filter-header">
            <span class="header-text">First Container</span>
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

filterControl1.addTo(map);

var filterControl2 = L.control({ position: 'topleft' });

filterControl2.onAdd = function(map) {
    var container = L.DomUtil.create('div', 'leaflet-control-filter restaurants');
    container.innerHTML = `
        <div class="filter-header">
            <span class="header-text">Second Container</span>
            <button class="minimize-btn">X</button>
        </div>
        <div  class="filter-content">
            <table class="tabla-icons">
                <tr data-marker-id="3">
                    <td><img src="assets/icons/map/bar.svg" alt="retail"></td>
                    <td>RETAIL</td>
                </tr>
                <tr data-marker-id="4">
                    <td><img src="assets/icons/map/food.svg" alt="restrooms"></td>
                    <td>RESTROOMS</td>
                </tr>
            </table>
        </div>
    `;
    L.DomEvent.disableClickPropagation(container);
    return container;
};

filterControl2.addTo(map);
// #endregion

// #region Evento para minimizar o expandir el contenido del filtro
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
// #endregion

// #region Definición de íconos usando L.divIcon
var retailIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="200"
     data-aos-offset="0">
               <img src="assets/icons/map/retail.svg" alt="retail" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [11.5, 23], // Ajusta el anclaje como en L.icon
    popupAnchor: [0, -30]   // Ajusta el anclaje del popup como en L.icon
});

var restroomsIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="400"
     data-aos-offset="0">
               <img src="assets/icons/map/restrooms.svg" alt="restrooms" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [11.5, 23],
    popupAnchor: [0, -30]
});

var barIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="800"
     data-aos-offset="0">
               <img src="assets/icons/map/bar.svg" alt="bar" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [11.5, 23],
    popupAnchor: [0, -30]
});

var foodIcon = L.divIcon({
    html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="600"
     data-aos-offset="0">
               <img src="assets/icons/map/food.svg" alt="food" width="23" height="23">
           </div>`,
    className: '', // Puedes usar tu propia clase CSS o dejarla vacía
    iconSize: [23, 23],
    iconAnchor: [11.5, 23],
    popupAnchor: [0, -30]
});
// #endregion

// #region Marcadores y sus eventos
var markers = {
    1: [
        L.marker([608, 347], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([450, 258], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([278, 240], { icon: retailIcon }).addTo(map).bindPopup('Find our store.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ],
    2: [
        L.marker([556, 534], { icon: restroomsIcon }).addTo(map).bindPopup('Find the restrooms.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([786, 825], { icon: restroomsIcon }).addTo(map).bindPopup('Find the restrooms.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ],
    3: [
        L.marker([640, 507], { icon: barIcon }).addTo(map).bindPopup('Find the bar.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([730, 770], { icon: barIcon }).addTo(map).bindPopup('Find the bar.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ],
    4: [
        L.marker([728, 501], { icon: foodIcon }).addTo(map).bindPopup('Find the food.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); }),
        L.marker([758, 751], { icon: foodIcon }).addTo(map).bindPopup('Find the food.').on('mouseover', function() { this.openPopup(); }).on('mouseout', function() { this.closePopup(); })
    ]
};
// #endregion


// #region Manejo de la visibilidad de los marcadores al hacer clic en el filtro
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
        lastClickedId = markerId; // Actualizar lastClickedId al último marcador clicado
    }
});

// Nueva funcionalidad para filtrar por tabla al hacer clic en el span.header-text
$(document).on('click', '.header-text', function() {
    var table = $(this).closest('.leaflet-control-filter').find('table');
    var markerIds = table.find('tr').map(function() {
        return $(this).data('marker-id');
    }).get();

    // Ocultar todos los marcadores antes de aplicar el nuevo filtro
    $.each(markers, function(id, markerGroup) {
        markerGroup.forEach(function(marker) {
            map.removeLayer(marker);
        });
    });

    // Mostrar solo los marcadores correspondientes a la tabla seleccionada
    markerIds.forEach(function(markerId) {
        markers[markerId].forEach(function(marker) {
            map.addLayer(marker);
        });
    });

    markersVisible = false; // Marcar que los marcadores están ocultos
    lastClickedId = 'table-' + table.index(); // Actualizar lastClickedId al último marcador clicado
});
// #endregion
