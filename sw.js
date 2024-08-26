const app = "taino-bay";
const assets = [
  "/",
  "index.php",
  "home.php",
  "faqs.php",
  "assets/css/style.css",
  "assets/js/app.js",
  "assets/favicons/favicon-512x512.png",
];

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(app).then(function (cache) {
      cache.addAll(assets);
    })
  );
  return self.clients.claim();
});

self.addEventListener("fetch", function (event) {
  event.respondWith(
    caches.match(event.request).then(function (res) {
      return res;
    })
  );
});
