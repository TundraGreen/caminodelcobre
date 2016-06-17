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
  if (ix == 8 || ix == 13) {continue};
  (function () {
    var i = ix;
    google.maps.event.addDomListener(window, 'load', function () {
      section_map = new google.maps.Map(document.getElementById("section_" + sections[i] + "_map"));
      section_ctaLayer = new google.maps.KmlLayer({
        url: "http://theprescotts.com/will/kml/CaminoDelCobre/" + codes[i] + "_Section_" + sections[i] + ".kml"
      });
      section_ctaLayer.setMap(section_map);
      if(sections[i] == '08a' || sections[i] == '12a') {
        i++;
        section_ctaLayer = new google.maps.KmlLayer({
          url: "http://theprescotts.com/will/kml/CaminoDelCobre/" + codes[i] + "_Section_" + sections[i] + ".kml"
        });
        section_ctaLayer.setMap(section_map);
      }
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

/* ---------------------------------------------------------- */
/* --------------- Elevation plot --------------------------- */
function draw() {
  var canvas = document.getElementById("canvas");
  if (null==canvas || !canvas.getContext) return;

  var axes={}, ctx=canvas.getContext("2d");
  axes.x0 = .5;  // x0 pixels from left to x=0
  axes.y0 = .5 + 190; // y0 pixels from top to y=0
  axes.xScale = 500/10;                 // 500 pixels for 10 km
  axes.yScale = 200/500;                // 100 pixels for 2100 to 2600 m

  showAxes(ctx,axes);
  plotElevations(ctx, axes);

}
function plotElevations(ctx, axes) {
  var xx, yy, x0=axes.x0, y0=axes.y0, dataScale;
  var length = document.getElementById("segment_length").innerText;
  var elevMin = document.getElementById("min_elevation").innerText;
  var elevMax = document.getElementById("max_elevation").innerText;
  var data = JSON.parse(document.getElementById("elev_data").innerText);
//  dumpProperties(length,'length');
  var dataCount = data.length;
  var xScale = length/dataCount * axes.xScale;
  var yScale = axes.yScale;
  ctx.beginPath();
  ctx.lineWidth = 1;
  ctx.strokeStyle = "rgb(11,153,11)";
  for (var i=0; i<dataCount; i++) {
    xx = parseInt(i * xScale);
    yy = parseInt((data[i] - 2100.) * yScale);
    if (i == 0) ctx.moveTo(x0+xx, y0-yy);
    else        ctx.lineTo(x0+xx, y0-yy);
  }
  ctx.stroke();
}
function showAxes(ctx,axes) {
  var x0=axes.x0, w=ctx.canvas.width;
  var y0=axes.y0, h=ctx.canvas.height;
  var xmin = axes.doNegativeX ? 0 : x0;
  ctx.beginPath();
  ctx.strokeStyle = "rgb(128,128,128)";
  ctx.moveTo(xmin,y0); ctx.lineTo(w,y0);  // X axis
  ctx.moveTo(x0,0);    ctx.lineTo(x0,h);  // Y axis
  ctx.stroke();
  ctx.fillText('2100 m', x0 + 5, y0 - 5);
  ctx.fillText('2600 m', x0 + 5, y0 - 180);
  ctx.fillText('0 km (green)', x0 + 5, y0 + 10);
  ctx.fillText('(red) 10 km', x0 + 450, y0 + 10);
}
/* ---------------------------------------------------------- */

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

