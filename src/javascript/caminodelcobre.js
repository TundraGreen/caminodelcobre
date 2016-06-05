/* -------------------------------------------------------------------------*/
/* ------------------------ Google Map -------------------------------------*/
/* -------------------------------------------------------------------------*/
function initialize() {
  var Recowata = new google.maps.LatLng(27.708892,-107.684341);
  var mapOptions = {
    zoom: 11,
    center: Recowata
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/caminodelcobre/kml/caminodelcobre6.kml'
  });
  ctaLayer.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

var section_map;
var section_ctaLayer
var sections = ['01',  '02',  '03',  '04',  '05',  '06',  '07',  '08',  '09',  '10',  '11',  '12']
var codes =    ['0085','0086','0087','0088','0089','0090','0075','0076','0077','0078','0079','0080']
dumpProperties(sections, 'sections');

for (var ix=0; ix<12; ix++) {
  (function () {
    var i = ix;
    google.maps.event.addDomListener(window, 'load', function () {
      section_map = new google.maps.Map(document.getElementById("section_" + sections[i] + "_map"));
      section_ctaLayer = new google.maps.KmlLayer({
        url: "http://theprescotts.com/will/kml/CaminoDelCobre/" + codes[i] + "_Section_" + sections[i] + ".kml"
      });
      section_ctaLayer.setMap(section_map);
    });
  })();
}

 
/*
function initialize_01() {
google.maps.event.addDomListener(window, 'load', initialize_01);
  section_map = new google.maps.Map(document.getElementById('section_01_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_01.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_01);

function initialize_02() {
  section_map = new google.maps.Map(document.getElementById('section_02_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0086_Section_02.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_02);

function initialize_03() {
  section_map = new google.maps.Map(document.getElementById('section_03_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_03.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_03);

function initialize_04() {
  section_map = new google.maps.Map(document.getElementById('section_04_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_04.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_04);

function initialize_05() {
  section_map = new google.maps.Map(document.getElementById('section_05_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_05.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_05);

function initialize_06() {
  section_map = new google.maps.Map(document.getElementById('section_06_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_06.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_06);

function initialize_07() {
  section_map = new google.maps.Map(document.getElementById('section_07_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_07.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_07);

function initialize_08() {
  section_map = new google.maps.Map(document.getElementById('section_08_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_08.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_08);

function initialize_09() {
  section_map = new google.maps.Map(document.getElementById('section_09_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_09.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_09);

function initialize_10() {
  section_map = new google.maps.Map(document.getElementById('section_10_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_10.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_10);

function initialize_11() {
  section_map = new google.maps.Map(document.getElementById('section_11_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_11.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_11);

function initialize_12() {
  section_map = new google.maps.Map(document.getElementById('section_12_map'));
  section_ctaLayer = new google.maps.KmlLayer({
    url: 'http://theprescotts.com/will/kml/CaminoDelCobre/0085_Section_12.kml'
  });
  section_ctaLayer.setMap(section_map);
}
google.maps.event.addDomListener(window, 'load', initialize_12);
*/


/* -------------------------------------------------------------------------*/
/* ------------------------ Global variables -------------------------------*/
/* -------------------------------------------------------------------------*/
var slideShowOn = true;
var currImageId; // Note: Initial value of currImageId is set by inline script from php value
var images = [
  "imagenes/5df66c02c709f7cf6cd36d3c844ac9b3.jpeg",
  "imagenes/724f73961a1ec8e2b4240b272ef1f382.jpeg",
  "imagenes/783a906bb4ee3aba0a8917ef28af5e0d.jpeg"
];
var alts = [
  "Canyon Scene",
  "Canyon Scene",
  "Canyon Scene"
];
var dots = [
		"imagenes/Green-dot.png",	// Active
		"imagenes/Brown-dot.png"	// Inactive
];

/* -------------------------------------------------------------------------*/
/* ------------------------ Change language --------------------------------*/
/* -------------------------------------------------------------------------*/
function changeLanguage(langCode) {
		$.cookie("langCode", langCode, {path:"/"});
		window.location.reload();
}

/* -------------------------------------------------------------------------*/
/* ------------------------ Preload images ---------------------------------*/
/* -------------------------------------------------------------------------*/
function preload () {
	$(images).each(function() {
		var image = $('<img />').attr('src', this);
	});
	$(dots).each(function() {
		var image = $('<img />').attr('src', this);
	});
}

/* -------------------------------------------------------------------------*/
/* ------------------------ Slide show -------------------------------------*/
/* -------------------------------------------------------------------------*/
function bindClick(i) {
	$("#dotImage" + i).bind("click", function(event) {
		setImage(i);
	});
}

function init() {
	// Note: Initial value of currImageId is set by inline script from php value
	setImage(currImageId);
	var i;
	for (i=0; i<images.length; i++) {
		bindClick(i);
	}
	tpSetTimeout();
	preload();
}

function nextImage() {
	currImageId = (currImageId + 1) % images.length;
	setImage(currImageId);
}

function setImage (im) {
	var dot;
	var i;
	$('#mainImage').attr('src', images[im]);
	$('#mainImage').attr('alt', alts[im]);
	$('#mainImage').fadeIn('slow');
	for (i=0; i<images.length; i++) {
		if (i === im) {
			$('#dotImage'+i).attr('src', dots[0]);
		}
		else {
			$('#dotImage'+i).attr('src', dots[1]);
		}
	}
}

function stopSwap () {
	slideShowOn = false;
}

function tpSetTimeout () {
	if(slideShowOn) {
		nextImage();
		setIntervalID = window.setTimeout (tpSetTimeout, 2500);
	}
}

// $(document).ready(tpSetTimeout);

/* -------------------------------------------------------------------------*/
/* ------------------------ Debug utilities --------------------------------*/
/* -------------------------------------------------------------------------*/
function dumpProperties(obj, objName) {
	var tp = typeof(obj);
	var i;
	for (i in obj) {
		if (true) {
			try {
				console.log(objName + "." + i + " = " + obj[i]);
			}
			catch (err) {
				console.log("Error for: " + objName + "." + i);
				console.log("Error description: " + err.description);
			}
		}
	}
	return;
}
function countProperties(obj, objName) {
	var tp = typeof(obj);
	console.log("Type of " + objName + ": " + tp);
	var count = 0;
	var i;
	for (i in obj) {
		if (true) {
			count++;
		}
	}
	console.log("Count: " + count);
}

