var CACHE_NAME = 'mark616-version-20';
var urlsToCache = [
  '/css/app.59961df6.css',
  '/css/chunk-vendors.6c57f554.css',
  '/js/app.ffc9da2b.js',
  '/js/chunk-vendors.889908ca.js'
];

self.addEventListener('install', function(event) {
  self.skipWaiting();
  console.log('Service Worker: Installed');
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Service Worker: Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Call Activate Event
self.addEventListener('activate', e => {
  console.log('Service Worker: Activated');
  // Remove unwanted caches
  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cache => {
          if (cache !== CACHE_NAME) {
            console.log('Service Worker: Clearing Old Cache ' + cache);
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// Call Fetch Event
self.addEventListener('fetch', e => {
  console.log('Service Worker: Fetching ' + e.request);
  e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});
