// Para borrar cache cambiar el nombre de la constante "app"

const app = "taino-bay";
const assets = [
  "en/home",
  "en/port-experience",
  "assets/images/favicon.ico",
  "assets/css/core.css",
  "assets/css/main.css",
  "assets/css/theme.css",
  "assets/css/vendor/aos.min.css",
  "assets/css/vendor/bootstrap.min.css",
  "assets/css/vendor/bricklayer.min.css",
  "assets/css/vendor/button-share.css",
  "assets/css/vendor/contact-form.css",
  "assets/css/vendor/dynamic-carousel.css",
  "assets/css/vendor/dynamic-slider.min.css",
  "assets/css/vendor/faqs.css",
  "assets/css/vendor/font-awesome.min.css",
  "assets/css/vendor/font-family.min.css",
  "assets/css/vendor/footer.css",
  "assets/css/vendor/lightbox.min.css",
  "assets/css/vendor/menu-engine.min.css",
  "assets/css/vendor/menu-grid.min.css",
  "assets/css/vendor/port-experience.css",
  "assets/css/vendor/review-tripadvisor.css",
  "assets/css/vendor/swiper.min.css",
  "assets/fonts/font-awesome/fa-brands-400.woff2",
  "assets/fonts/font-awesome/fa-solid-900.woff2",
  "assets/fonts/lato/Lato-Black.woff",
  "assets/images/icons/pwa/isotipo-tainobay-192.png",
  "assets/images/icons/tripadvisor-black.png",
  "assets/images/icons/tripadvisor-blanco.png",
  "assets/images/logo-white.svg",
  "assets/images/media/bg-port-experience.webp",
  "assets/images/media/img-menu-1.jpg",
  "assets/images/media/img-menu-2.jpg",
  "assets/images/media/precarga.png",
  "assets/images/errors/lost-connection-cat.png",
  "assets/images/errors/lost-connection.png",
  "assets/js/main.js",
  "assets/js/vendor/anime.min.js",
  "assets/js/vendor/aos.min.js",
  "assets/js/vendor/bootstrap.min.js",
  "assets/js/vendor/bricklayer.min.js",
  "assets/js/vendor/cursor-effect.min.js",
  "assets/js/vendor/dynamic-slider.min.js",
  "assets/js/vendor/gsap.min.js",
  "assets/js/vendor/imagesloaded.pkgd.min.js",
  "assets/js/vendor/inview.min.js",
  "assets/js/vendor/jquery.min.js",
  "assets/js/vendor/lax.min.js",
  "assets/js/vendor/lightbox.min.js",
  "assets/js/vendor/magnetic-effect.min.js",
  "assets/js/vendor/map-styles.min.js",
  "assets/js/vendor/menu-engine.min.js",
  "assets/js/vendor/menu-grid.min.js",
  "assets/js/vendor/progressbar.min.js",
  "assets/js/vendor/shuffle.min.js",
  "assets/js/vendor/stickybits.min.js",
  "assets/js/vendor/swiper.min.js",
  "assets/js/vendor/typed.min.js",
  "es/offline",
  "en/offline",
  "manifest.json",
];

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(app).then(function (cache) {
      return cache.addAll(assets);
    })
  );
});

// self.addEventListener("activate", (event) => {
//   // Elimina la caché vieja cuando se active una nueva versión
//   event.waitUntil(
//     caches.keys().then((cacheNames) => {
//       return Promise.all(
//         cacheNames.map((cache) => {
//           if (cache !== app) {
//             return caches.delete(cache);
//           }
//         })
//       );
//     })
//   );
// });

self.addEventListener("fetch", function (event) {
  event.respondWith(
    caches.match(event.request).then(function (cachedResponse) {
      // Utiliza la respuesta en caché si está disponible
      if (cachedResponse) {
        return cachedResponse;
      }

      if (event.request.url.startsWith("http")) {
        return fetch(event.request)
          .then(function (networkResponse) {
            let clonedResponse = networkResponse.clone();

            // Valida en la caché
            if (networkResponse && networkResponse.status === 200) {
              caches.open(app).then(function (cache) {
                cache.put(event.request, clonedResponse);
              });
            }
            return networkResponse;
          })
          .catch(function () {
            const urlPath = new URL(event.request.url).pathname;
            // console.log(urlPath);

            const isSpanish = urlPath.startsWith("/es/");

            return caches.match(isSpanish ? "/es/offline" : "/en/offline");
          });
      }
    })
  );
});
