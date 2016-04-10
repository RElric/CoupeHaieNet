function initMap() {
    var myLatLng = {lat: 49.616398, lng: -1.727116};
    
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 12
    });
    
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Coupe Haie Net'
    });
}

