function initialize() {
  var Recowata = new google.maps.LatLng(27.708892,-107.684341);
  var mapOptions = {
    zoom: 11,
    center: Recowata
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var ctaLayer = new google.maps.KmlLayer({
//     url: 'http://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml'
//     url: '../kml/caminodelcobre.kml'
    url: 'http://theprescotts.com/will/caminodelcobre/kml/caminodelcobre6.kml'
     //     url: 'http://theprescotts.com/will/kml/LycianWay.kml'
  });
  ctaLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


