 var infoBox

 function mapset(){
 var latlng = new google.maps.LatLng(13.746579, 100.549604);
    var myOptions = {
      zoom: 17,
      center: latlng,
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DEFAULT
      },
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
		position: google.maps.ControlPosition.RIGHT_BOTTOM
      },
	  panControl: true,
	  panControlOptions: {
        position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
	  streetViewControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }	
	var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions); 
	
	var kmlOP = {
	suppressInfoWindows: false,
	preserveViewport: true,
	clickable: false
	};
	
	/*var th = new google.maps.KmlLayer('http://www.chachingdesign.com/client_access/citrus-hotel/include/th.kml',kmlOP);
 	th.setMap(map);*/
	
	 var imageTH = 'images/marker.png';
	 
	
	var newLL = new google.maps.LatLng(13.746579, 100.549604);	  
	var markerkl= new google.maps.Marker({
        position: newLL, map: map,  icon: imageTH
    }); 
	

	/* google.maps.event.addListener(markerkl, "click", function(e) {
      var infoBox = new InfoBox({latlng: markerkl.getPosition(), map: map, target:"mapdata.html"});
	  
    });*/
	 
	 var contentString = '<div style="font-size:13px; font-weight:normal; color:#000; padding-top:10px;">'+
	 '<strong style="color:#d9531e;">Arcadia Suites Bangkok Phloenchit Serviced Apartment <br /> by Compass Hospitality</strong><br />'+
	'15 Soi Nai Lert, Wireless Road, Lumpini Sub-district,<br />'+
	'Pathumwan District, Bangkok 10330<br />'+
	'<strong>Tel: </strong>+66 2 305 6565<br />'+
	'<strong>Fax:</strong>+66 2 305 6599</div>';

var infowindow = new google.maps.InfoWindow({
    content: contentString
});


google.maps.event.addListener(markerkl, 'click', function() {
  infowindow.open(map,markerkl);
});
google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(latlng);
});

	 
}

 function showMaps(ll,lt,name,des,img,get_by) {
	
//=========================  Map Option =========================
  var latlng_Click_view = new google.maps.LatLng(ll,lt);
  var myOptions = {
      zoom: 16,
      center: latlng_Click_view
      }
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions); 
//=========================  Map Option =========================

//=========================  Click View Map =========================
  var MAP_View = new google.maps.Marker({
      position: latlng_Click_view,
      map: map,
      title: name
  });
  
  
  
  // var contentString = '<div class="box-info-marker fixInfo"><img src="'+img+'" align="left"> <div class="detail"><h3>'+name+'</h3><p>'+des+'</p></div></div>';
  // var infowindow = new google.maps.InfoWindow({
  //   content: contentString
  // });

  /*google.maps.event.addListener(MAP_View, 'click', function() {
     infowindow.open(map,MAP_View);
     $("html, body").animate({ scrollTop: $('body').offset().top }, 800);
  });*/
  google.maps.event.addListener(MAP_View, 'click', function() {     	            
        			// $( '#infowindow' ).show();
        			// $( '#infowindow' ).empty();
        			// $( '#infowindow' ).append( contentString );	
     $("html, body").animate({ scrollTop: $('#mapcanvas').offset().top-200 }, 300);
  });
  google.maps.event.trigger(MAP_View,'click');
//=========================  Click View Map =========================


//=========================  Citrus 11 Map =========================
  var Marker_Hotel = new google.maps.MarkerImage('images/marker.png');
  var Citrus11_Map = new google.maps.LatLng(13.746579, 100.549604);    
  var Citrus= new google.maps.Marker({
      position: Citrus11_Map , 
      map: map,  
      icon: Marker_Hotel, 
      title:"Arcadia Suites Bangkok"
    }); 
  var contentString_Citrus = '<div class="center"><br><img src="images/logo.png"><br><br></div>';
  var infowindow_Citrus = new google.maps.InfoWindow({
    content: contentString_Citrus
  });
  google.maps.event.addListener(Citrus, 'click', function() {
     infowindow_Citrus.open(map,Citrus);
     $("html, body").animate({ scrollTop: $('body').offset().top }, 800);
  });
//=========================  Citrus 11 Map =========================


//========================= Resize Set Center =========================
  currentPoint=latlng_Click_view;
  currentZoom=10;

  google.maps.event.addDomListener(window, 'Resize', function() {
    map.setCenter(currentPoint);
    map.setZoom(currentZoom);
  });
  
 /*CALCULATE ROUTE*/
 	

  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay;
  var directionsRenderer;
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);
  if(get_by='walking'){
       var request = {
        origin:Citrus11_Map,
        destination:latlng_Click_view,
        travelMode: google.maps.TravelMode.WALKING
    };
  }
  if(get_by=''){
       var request = {
        origin:Citrus11_Map,
        destination:latlng_Click_view,
        travelMode: google.maps.TravelMode.DRIVING
		
        // travelMode: google.maps.TravelMode.WALKING
    };
  }
		/*FIX ROUTE*/
		var pline = {
					map: map,
					strokeColor: "#534741",
					strokeOpacity: 0.8,
					strokeWeight:10
		}; 
		directionsDisplay.setOptions({
			polylineOptions: pline,
			 suppressMarkers: true
			 //preserveViewport: true
		});
		/*FIX ROUTE*/


  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });/*CALCULATE ROUTE*/
  
//========================= Resize Set Center =========================

}
 