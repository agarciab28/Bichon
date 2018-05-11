function initMap() {
    var latLng = {
        lat: 19.7103431,
        lng:-101.2013821
    }

    var map = new google.maps.Map(document.getElementById('mapa'), {
      'center': latLng,
      'zoom': 15,
      'mapTypeId': google.maps.MapTypeId.ROADMAP
    });

    var contenido = '<h2>Bichon</h2>' +
                    '<p>Visitanos!</p>';

    var informacion = new google.maps.InfoWindow({
        content: contenido
    });

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'GDLWEBCAMP'
    });

    marker.addListener('click', function(){
        informacion.open(map,marker)
    });
}
