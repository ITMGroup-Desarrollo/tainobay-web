// #region Detección de dispositivo
// Detectar si es un dispositivo móvil
var isMobile = window.innerWidth <= 768;
// #endregion

// #region Configuración del mapa
// Configuración del mapa
var map = L.map("map", {
  crs: L.CRS.Simple,
  minZoom: -1, // Permitir un zoom más alejado
  maxZoom: 1,
  attributionControl: false,
  maxBounds: [
    [-150, -150], // Límites más amplios
    [1200, 1600],
  ],
  maxBoundsViscosity: 0.3, // Restringir el movimiento fuera de los límites
});
// #endregion

// #region Configuración de tamaño y zoom según el dispositivo
var bounds = [
  [0, 0],
  [1100, 1500],
];

if (isMobile) {
  document.getElementById("map").style.height = "70vh"; // Tamaño más pequeño para mobile
  document.getElementById("map").style.width = "92vw"; // Tamaño más pequeño para mobile
} else {
  document.getElementById("map").style.height = "100vh"; // Tamaño normal para desktop
  document.getElementById("map").style.width = "75vw"; // Tamaño normal para desktop
}
// #endregion

// #region Agrega la imagen del mapa
L.imageOverlay("assets/images/media/nuevo-mapa-taino-sin-nombres.jpg", bounds).addTo(
  map
);
map.fitBounds(bounds); // Ajustar los bounds para que el mapa se vea correctamente

// Ajustar el nivel de zoom según el dispositivo después de ajustar los bounds
if (!isMobile) {
  map.setZoom(0); // Zoom inicial en escritorio
} else {
  map.setZoom(-1);
}
// #endregion

// #region Evento para minimizar o expandir el contenido del filtro

if (!isMobile) {
  $(document).on('click', '.minimize-btn', function () {
    var $minimizeBtn = $(this); // Botón que disparó el evento
    var $filter = $minimizeBtn.closest('.leaflet-control-filter'); // Contenedor asociado
    var $filterContent = $filter.find('.filter-content');
    var $headerText = $filter.find('.header-text');

    // Verifica si el botón clicado actualmente está en estado "hide"
    var isExpanding = !$minimizeBtn.hasClass('show');

    // Cambia todos los demás botones a "hide"
    $('.minimize-btn.show').not($minimizeBtn).each(function () {
        var $otherBtn = $(this);
        $otherBtn.removeClass('show').addClass('hide');
        var $otherFilter = $otherBtn.closest('.leaflet-control-filter');
        $otherFilter.find('.filter-content').slideUp(200); // Contrae contenido de otros botones
        $otherBtn.text('☰'); // Restablece el texto
        $otherFilter.find('.header-text').get(0).style.paddingRight = '0rem'; // Ajusta estilo
    });

    // Alternar el estado del botón clicado
    if (isExpanding) {
        $minimizeBtn.removeClass('hide').addClass('show'); // Cambia a "show"
        $filterContent.slideDown(200); // Expande el contenido
        $minimizeBtn.html('<img src="assets/icons/map/x.svg" alt="close">'); // Cambia el contenido del botón
        $headerText.get(0).style.paddingRight = ''; // Restablece el relleno
    } else {
        $minimizeBtn.removeClass('show').addClass('hide'); // Cambia a "hide"
        $filterContent.slideUp(200); // Contrae el contenido
        $minimizeBtn.text('☰'); // Cambia el texto
        $headerText.get(0).style.paddingRight = '0rem'; // Ajusta el relleno
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
               <img src="assets/icons/map/retail.svg" alt="retail" width="20" height="20">
           </div>`,
  className: "", // Puedes usar tu propia clase CSS o dejarla vacía
  iconSize: [20, 20],
  iconAnchor: [0, 0], // Ajusta el anclaje como en L.icon
  popupAnchor: [12, -20], // Ajusta el anclaje del popup como en L.icon
});
var restroomsIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="200"
     data-aos-offset="0">
               <img src="assets/icons/map/restrooms.svg" alt="restrooms" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var barIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="400"
     data-aos-offset="0">
               <img src="assets/icons/map/bar.svg" alt="bar" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var foodIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/food.svg" alt="food" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var drugstoreIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/drugstore.svg" alt="drugstore" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var experienceIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/experience.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var showIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/show.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var fruitIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/fruits.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var camaraIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/camara.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var starIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/star.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var taxiIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/taxi.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
var shorexIcon = L.divIcon({
  html: `<div class="custom-icon" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">
               <img src="assets/icons/map/shorex.svg" alt="experience" width="20" height="20">
           </div>`,
  className: "",
  iconSize: [20, 20],
  iconAnchor: [0, 0],
  popupAnchor: [12, -20],
});
// #endregion

// #region Marcadores y sus eventos
var markers = {
  1: [
    L.marker([910, 565], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button 
                      style="padding: 5px 10px; background-color: #1c355e; color: white; border: none; border-radius: 5px; cursor: pointer;"
                      onmouseover="this.style.backgroundColor='#f5a23a';" 
                      onmouseout="this.style.backgroundColor='#1c355e';">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  2: [
    L.marker([890, 650], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  3: [
    L.marker([470, 300], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  4: [
    L.marker([520, 560], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  5: [
    L.marker([880, 1105], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  6: [
    L.marker([1030, 770], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  7: [
    L.marker([750, 580], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([360, 390], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  8: [
    L.marker([830, 900], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([650, 680], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([560, 395], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([330, 315], { icon: experienceIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  9: [
    L.marker([863, 1290], { icon: restroomsIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([1000, 1100], { icon: restroomsIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([585, 490], { icon: restroomsIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([800, 760], { icon: restroomsIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  10: [
    L.marker([883, 1260], { icon: showIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([975, 1070], { icon: showIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([825, 495], { icon: showIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([745, 605], { icon: showIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([445, 395], { icon: showIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  11: [
    L.marker([865, 1205], { icon: fruitIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([975, 755], { icon: fruitIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([415, 310], { icon: fruitIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([430, 275], { icon: fruitIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([255, 305], { icon: fruitIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  12: [
    L.marker([800, 1300], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([940, 1090], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([945, 940], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([1040, 845], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([645, 715], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([900, 535], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([410, 430], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([300, 260], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([220, 335], { icon: camaraIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  13: [
    L.marker([810, 1230], { icon: starIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([835, 1295], { icon: starIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([900, 1130], { icon: starIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    
  ],
  14: [
    L.marker([185, 270], { icon: taxiIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  15: [
    L.marker([920, 1280], { icon: shorexIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  20: [
    L.marker([840, 1177], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  21: [
    L.marker([930, 1157], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  22: [
    L.marker([990, 960], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([595, 297], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  23: [
    L.marker([995, 896], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([890, 1002], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([885, 738], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  24: [
    L.marker([995, 862], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  25: [
    L.marker([995, 830], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  26: [
    L.marker([1000, 799], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  27: [
    L.marker([985, 725], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  28: [
    L.marker([966, 683], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([895, 910], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([280, 225], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  29: [
    L.marker([957, 650], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  30: [
    L.marker([953, 620], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  31: [
    L.marker([880, 1065], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  32: [
    L.marker([882, 1035], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  33: [
    L.marker([895, 955], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([510, 250], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  34: [
    L.marker([871, 835], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  35: [
    L.marker([845, 802], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([461, 233], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  36: [
    L.marker([935, 782], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      
      L.marker([910, 788], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  37: [
    L.marker([870, 595], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  38: [
    L.marker([995, 925], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  39: [
    L.marker([860, 622], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([320, 220], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([250, 240], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  40: [
    L.marker([865, 648], { icon: drugstoreIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  41: [
    L.marker([868, 675], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  42: [
    L.marker([878, 710], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  43: [
    L.marker([900, 763], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
      L.marker([360, 230], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  44: [
    L.marker([660, 355], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  45: [
    L.marker([651, 334], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  46: [
    L.marker([640, 320], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  47: [
    L.marker([627, 309], { icon: drugstoreIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  48: [
    L.marker([612, 302], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  49: [
    L.marker([578, 295], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  50: [
    L.marker([930, 1157], { icon: retailIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  60: [
    L.marker([990, 1250], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  61: [
    L.marker([890, 860], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  62: [
    L.marker([920, 740], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  63: [
    L.marker([908, 703], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
    L.marker([662, 472], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  64: [
    L.marker([965, 1008], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  65: [
    L.marker([775, 695], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  66: [
    L.marker([748, 465], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  67: [
    L.marker([393, 250], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  68: [
    L.marker([938, 815], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  69: [
    L.marker([760, 638], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  70: [
    L.marker([665, 565], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  71: [
    L.marker([550, 300], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  72: [
    L.marker([380, 347], { icon: foodIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
  73: [
    L.marker([945, 590], { icon: barIcon })
      .addTo(map)
      .bindPopup(
        `
            <div class="pop" style="text-align: center;">
                <img src="assets/images/port-experience/blue-parrot/blue-parrot-logo-black.svg" alt="Logo" style="width: 50px; height: 50px;">
                <p>Fugiat sunt eiusmod dolor consectetur cillum laboris.</p>
                <a href="https://example.com" target="_blank">
                    <button style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Visit our store
                    </button>
                </a>
            </div>
        `
      )
      .on("click", function (e) {
        this.openPopup();
        map.setView(this.getLatLng(), map.getZoom(), {
          animate: true,
          pan: { duration: 1 },
        });
      }),
  ],
};

// Evento para ajustar el tamaño de los íconos en función del zoom
map.on("zoom", function () {
  var currentZoom = map.getZoom();

  // Define el tamaño base y la escala para ajustar el tamaño de los íconos
  var baseSize = 20; // Tamaño base de los íconos
  var scale = Math.pow(1.5, currentZoom); // Escala para aumentar o reducir el tamaño según el zoom

  // Actualiza el tamaño de los íconos según el nivel de zoom
  document.querySelectorAll(".custom-icon img").forEach((icon) => {
    var newSize = baseSize * scale;
    icon.style.width = newSize + "px";
    icon.style.height = newSize + "px";
  });
});

// #endregion

// #region Manejo de la visibilidad de los marcadores al hacer clic en el filtro
// Variable global para almacenar el último ID clickado y el estado de visibilidad de los marcadores
var lastClickedId = null;
var markersVisible = true;

// Evento para manejar el click en las filas de la tabla
$(document).on("click", ".tabla-icons tr", function () {
  var markerId = $(this).data("marker-id");
  var selectedMarkers = markers[markerId]; // Obtener los marcadores correspondientes al ID

  if (lastClickedId === markerId && !markersVisible) {
    // Si se hace clic en el mismo ícono y los marcadores están ocultos, mostrar todos los marcadores
    $.each(markers, function (id, markerGroup) {
      markerGroup.forEach(function (marker) {
        map.addLayer(marker);
      });
    });
    markersVisible = true; // Marcar que los marcadores están visibles
    lastClickedId = null; // Resetear lastClickedId para permitir nueva selección
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
$(document).on("click", ".header-text", function () {
  var table = $(this).closest(".leaflet-control-filter").find("table");
  var tableIndex = table.index();
  var markerIds = table
    .find("tr")
    .map(function () {
      return $(this).data("marker-id");
    })
    .get();

  // Verificar si el filtro ya está activo para esta tabla
  if (lastClickedId === "table-" + tableIndex && !markersVisible) {
    // Mostrar todos los marcadores (quitar filtro)
    $.each(markers, function (id, markerGroup) {
      markerGroup.forEach(function (marker) {
        map.addLayer(marker);
      });
    });

    markersVisible = true; // Marcar que los marcadores están visibles
    lastClickedId = null; // Resetear el último clic
  } else {
    // Aplicar filtro: ocultar todos los marcadores
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

    markersVisible = false; // Marcar que los marcadores están filtrados
    lastClickedId = "table-" + tableIndex; // Actualizar lastClickedId
  }
});


// // Evento para manejar la activación visual de las filas
// document.querySelectorAll(".tabla-icons tr").forEach((row) => {
//   row.addEventListener("click", function () {
//     // Si la fila ya tiene la clase 'active', se la quita
//     if (this.classList.contains("active")) {
//       this.classList.remove("active");
//     } else {
//       // Si no, se la quita de todas las filas y la añade solo a la fila actual
//       document
//         .querySelectorAll(".tabla-icons tr.active")
//         .forEach((activeRow) => {
//           activeRow.classList.remove("active");
//         });

//       // Añade la clase 'active' solo a la fila clickeada
//       this.classList.add("active");
//     }
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  // Selecciona todas las tablas con la clase 'tabla-icons'
  var tablas = document.querySelectorAll(".tabla-icons");

  if (!isMobile) {
    tablas.forEach(function (tabla) {
      // Cuenta el número de filas en el tbody de la tabla
      var filas = tabla.querySelectorAll("tbody tr").length;

      // Aplica el estilo CSS si hay más de 5 filas
      if (filas > 6 && filas <= 22) {
        tabla.querySelector("tbody").style.display = "grid";
        tabla.querySelector("tbody").style.gridTemplateColumns =
          "repeat(2, 1fr)";
      } else if (filas > 22) {
        tabla.querySelector("tbody").style.display = "grid";
        tabla.querySelector("tbody").style.gridTemplateColumns =
          "repeat(3, 1fr)";
      } else {
        // Asegúrate de que se use el estilo original si hay 6 o menos filas
        tabla.querySelector("tbody").style.display = "table-row-group";
        tabla.querySelector("tbody").style.gridTemplateColumns = "";
      }
    });
  }
});

// #endregion
