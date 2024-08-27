var map = L.map('map', {
    crs: L.CRS.Simple,
    minZoom: -0.5,
    maxZoom: 1,
    attributionControl: false // Quita la marca de agua de leaflet
});

var bounds = [
    [0, 0],
    [900, 1400]
];
var image = L.imageOverlay('assets/images/media/Mapa-Taino-Bay.jpg', bounds).addTo(map);

map.fitBounds(bounds);

// Crear un ícono con HTML que contenga la tabla de filtrado
var filterIcon = L.divIcon({
    className: 'filter-icon', // Clases CSS personalizadas para el ícono
    html: `
        <div id="filterTable">
            <table>
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
    `,
    iconSize: [200, 200], // Ajusta el tamaño del ícono según sea necesario
    iconAnchor: [100, 100], // Anclaje del ícono en relación con su punto central
    popupAnchor: [0, -100] // Ajusta el punto de apertura del popup si es necesario
});

// Agregar el ícono al mapa como un marcador
var filterMarker = L.marker([0, 0], {
    icon: filterIcon
}).addTo(map);

// Establecer la posición del marcador en el mapa
filterMarker.setLatLng([10, 120]); // Cambia la latitud y longitud según tu mapa

// Definir un icono personalizado
var retailIcon = L.icon({
    iconUrl: 'assets/icons/map/retail.svg', // Reemplaza con la ruta de tu icono
    iconSize: [38, 38], // Tamaño del icono
    iconAnchor: [22, 38], // Punto de anclaje del icono (coordenadas donde estará el "pie" del icono)
    popupAnchor: [0, -30] // Punto donde se abrirá el popup en relación al icono
});
var restroomsIcon = L.icon({
    iconUrl: 'assets/icons/map/restrooms.svg', // Reemplaza con la ruta de tu icono
    iconSize: [38, 38], // Tamaño del icono
    iconAnchor: [22, 38], // Punto de anclaje del icono (coordenadas donde estará el "pie" del icono)
    popupAnchor: [0, -30] // Punto donde se abrirá el popup en relación al icono
});

// Crear un objeto para almacenar los marcadores por data-marker-id
var markers = {};

// Crear y agregar un marcador con un data-marker-id específico
var marker = L.marker([493, 315], {
        icon: retailIcon
    }) // Aplica el icono personalizado
    .addTo(map)
    .bindPopup('Find our store. Come visit us and enjoy exclusive offers!');
var marker = L.marker([225, 215], {
        icon: retailIcon
    }) // Aplica el icono personalizado
    .addTo(map)
    .bindPopup('Find our store. Come visit us and enjoy exclusive offers!');
var marker = L.marker([400, 400], {
        icon: retailIcon
    }) // Aplica el icono personalizado
    .addTo(map)
    .bindPopup('Find our store. Come visit us and enjoy exclusive offers!');

// Asociar el marcador al data-marker-id en el objeto
markers[1] = marker; // 1 es el data-marker-id

// Repite este proceso para cada marcador que necesites
var marker2 = L.marker([500, 700], {
        icon: restroomsIcon
    })
    .addTo(map)
    .bindPopup('Find the restrooms. Please follow the signs for easy access.');

markers[2] = marker2; // 2 es el data-marker-id

// Función para manejar el clic en la tabla dentro del ícono
document.querySelector('#filterTable').addEventListener('click', function(event) {
    var row = event.target.closest('tr');
    if (row) {
        var markerId = row.getAttribute('data-marker-id');
        var selectedMarker = markers[markerId];

        if (selectedMarker) {
            selectedMarker.openPopup();
            map.setView(selectedMarker.getLatLng(), map.getZoom());
        }
    }
});