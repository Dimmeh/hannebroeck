/**
 * Created by dimmy on 11-1-2016.
 */
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('google-maps'), {
        center: {lat: 51.607184, lng: 4.8598589},
        zoom: 15,
        scrollwheel: false
    });
}