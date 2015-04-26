//code from http://stackoverflow.com/questions/14628800/html5-appcache-event-for-no-update
// Check if a new cache is available on page load.
if(navigator.onLine){
window.addEventListener('load', function (e) {

    window.applicationCache.addEventListener('updateready', function (e) {
        if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
                window.location.reload();
        } else {
            // Manifest didn't changed. Nothing new to server.
        }
    }, false);

}, false);
}