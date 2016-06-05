/* -------------------------------------------------------------------------*/
/* ------------------------ Google Map -------------------------------------*/
/* -------------------------------------------------------------------------*/
var sections = ['01',  '02',  '03',  '04',  '05',  '06',  '07',  '08a', '08b', '09',  '10',  '11',  '12a', '12b']
var codes =    ['0085','0086','0087','0088','0089','0090','0075','0084','0076','0077','0078','0079','0082','0081']
var ctaLayer;

/* ------------------------ map page -------------------------------------*/
function initialize() {
  var ElCrucero = new google.maps.LatLng(27.654876,-107.742908);
  var mapOptions = {
    zoom: 11,
    center: ElCrucero
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  for (var iy=0; iy<sections.length; iy++) {
    ctaLayer = new google.maps.KmlLayer({
      url: "http://theprescotts.com/will/kml/CaminoDelCobre/" + codes[iy] + "_Section_" + sections[iy] + ".kml",
      preserveViewport: true
    });
    ctaLayer.setMap(map);
  }
}
google.maps.event.addDomListener(window, 'load', initialize);

/* ------------------------ section pages -------------------------------------*/
var section_map;
var section_ctaLayer

for (var ix=0; ix<sections.length; ix++) {
  (function () {
    var i = ix;
    google.maps.event.addDomListener(window, 'load', function () {
      section_map = new google.maps.Map(document.getElementById("section_" + sections[i] + "_map"));
      console.log(sections[i]);
      section_ctaLayer = new google.maps.KmlLayer({
        url: "http://theprescotts.com/will/kml/CaminoDelCobre/" + codes[i] + "_Section_" + sections[i] + ".kml"
      });
      section_ctaLayer.setMap(section_map);
    });
  })();
}

 


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

