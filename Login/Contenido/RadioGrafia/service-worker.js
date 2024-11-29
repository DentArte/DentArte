const CACHE_NAME = "radiografias-cache";
const urlsToCache = [
    "/",
    "/index.php",
    "/gallery.php",
    "/styles.css",
    "/app.js",
    "/manifest.json",
    "/uploads/" // Incluye la carpeta de imágenes
];

self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache);
            })
    );
});

self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
    );
});
