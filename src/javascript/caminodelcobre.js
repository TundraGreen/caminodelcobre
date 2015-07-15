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
//     url: 'http://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml'
//     url: '../kml/caminodelcobre.kml'
    url: 'http://theprescotts.com/will/caminodelcobre/kml/caminodelcobre6.kml'
     //     url: 'http://theprescotts.com/will/kml/LycianWay.kml'
  });
  ctaLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


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

