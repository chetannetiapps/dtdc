
     var geocoder = new google.maps.Geocoder(); 
     var indlat = null;
     var indlng = null;
     var indmarker = null;
     var map = null;
     var mycircle = null; 
     var startposition='';
     var mak='';
     var directionsDisplay = new google.maps.DirectionsRenderer({ polylineOptions: { strokeColor: "#00237D" },suppressMarkers: true,draggable: true});
     var info_window = new google.maps.InfoWindow();
     var pudoinfo_window = new google.maps.InfoWindow({ZIndex:20000});
     var marker = null
     var markers = [];
     var markerCluster = null;
     var url = "/dtdcpudoweb/web";
     var finalpudoName = null;
     var finalpudonum = null;
     var finalpudoAddress = null;
     var finalPosition = null;
	 var workinghrs = null;
	 var contactnumber = null;
     var closeddays = null;
     var listdata = null;
     var pinB = null;
     var finaladdress = null;
     var finalradius = null;
     var finalradii = null;
     var geoscouturl = 'http://geoscout.dtdc.com/';

     var isMobile = {
		    Android: function() {
		        return navigator.userAgent.match(/Android/i);
		    },
		    BlackBerry: function() {
		        return navigator.userAgent.match(/BlackBerry/i);
		    },
		    iOS: function() {
		        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		    },
		    Opera: function() {
		        return navigator.userAgent.match(/Opera Mini/i);
		    },
		    Windows: function() {
		        return navigator.userAgent.match(/IEMobile/i);
		    },
		    any: function() {
		        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		    }
		}
     
     

function initialize(zoomlevel,centerlat,centerlng){

			
        var options = { 
            zoom: zoomlevel, 
            //center: new google.maps.LatLng(21.0000,78.0000), 
            center: new google.maps.LatLng(centerlat,centerlng),
             mapTypeControl: true,
             panControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL,
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        };
        
        map = new google.maps.Map(document.getElementById('map'), options); 
        markerCluster = new MarkerClusterer(map);
  }

 function codeAddress(address,radius) {
			
            //alert(pincodeToLatLng(address));

		
		$('.dropdown').find('#pudolist').show();
		
		if($('.main-wrapper:has(".map_cont")')){
			$('.main-wrapper').find('.map_cont').remove();
		}
		
		if($('.dropdown:has(".map_cont")')){
			$('.dropdown').find('.map_cont').remove();
		}
        
        address = 'india '+address;
        geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {

				    map.setCenter(results[0].geometry.location);
				               
					var beforelat = results[0].geometry.location.lat();
         			var beforelng = results[0].geometry.location.lng();

         			//console.log(lat+"break "+lng);


					if (mycircle) 
						mycircle.setMap(null);

							
				               marker = new google.maps.Marker({
				            	    map: map,  //<-- uncomment to show red marker
				            	    draggable:true,
				                    position: results[0].geometry.location,
				                    icon: url+'/img/user1.png'
				                });
				               mycircle = new google.maps.Circle({center:marker.getPosition(),
				                                                 radius: radius,
				                                                 fillOpacity: 0.0,
				                                                 strokeColor: '#b2b2b2',
																 strokeOpacity: 0.8,
				                                                 strokeWeight: 1,
				                                                 map: map});

                                startposition = marker.getPosition();

				               	// on clicking the current location show the info_window
				               	google.maps.event.addListener(marker, 'click', function() {	
                                           info_window.setContent("Your current location("+address+"), drag the baloon to your exact location")
                                           info_window.open(map, this);
                               	});
                              /* 	google.maps.event.addListener(marker, 'mouseout', function() {	
										info_window.close();
								});*/

                               	// on dragging the current location of user to exact location, recall the fetchlatlongAjax
                               	google.maps.event.addListener(marker, 'dragend', function() {
                               		var thismarker = this;
                               		
									                              		
										
											geocoder.geocode({'latLng': this.getPosition()}, function(results, status) {
											    if (status == google.maps.GeocoderStatus.OK) {
											      	if (results[1]) {
											      		startposition = thismarker.getPosition();

											      		
							                             info_window.setContent("Your current location("+results[1].formatted_address+"), drag the baloon to your exact location")
							                           	google.maps.event.addListener(thismarker, 'click', function() {	
							                           		info_window.setContent("Your current location("+results[1].formatted_address+"), drag the baloon to your exact location")

							                            });

											      		//thismarker.setMap(null)
											      		if(mycircle)
											      				mycircle.setMap(null);
											      		mycircle = new google.maps.Circle({center:thismarker.getPosition(),
				                                                 radius: radius,
				                                                 fillOpacity: 0.0,
				                                                 strokeColor: '#b2b2b2',
																 strokeOpacity: 0.8,
				                                                 strokeWeight: 1,
				                                                 map: map});
											      		var afterlat = results[0].geometry.location.lat();
         												var afterlng = results[0].geometry.location.lng();

											        		LatLngAjaxcall(afterlat,afterlng,'afterdrag');
											        	
											       	}
											    }
										    });	

                               	});
                               	
                               	
	
				               		
				               	LatLngAjaxcall(beforelat,beforelng,'beforedrag');
				            


         	}else{
				alert(status);
			}
    	})

}

function convertIntoWorkingdays(closeddays){

	var workingdays = null;
	switch(closeddays){
		case '0': workingdays = 'All days';
				  break;
		case '1': workingdays = 'Tue,Wed,Thu,Fri,Sat & Sun';
				  break;
		case '2': workingdays = 'Mon,Wed,Thu,Fri,Sat & Sun';
				  break;
		case '3': workingdays = 'Mon,Tue,Thu,Fri,Sat & Sun';
				  break;
		case '4': workingdays = 'Mon,Tue,Wed,Fri,Sat & Sun';
				  break;
		case '5': workingdays = 'Mon,Tue,Wed,Thu,Sat & Sun';
				  break;
		case '6': workingdays = 'Mon,Tue,Wed,Thu,Fri & Sun';
				  break;
		case '7': workingdays = 'Mon,Tue,Wed,Thu,Fri & Sat';
				  break;
	}
	return workingdays;
}

function convertInttoStringTime(time){
	var minutes = time.substring(0,time.length - 2);
	var seconds = time.slice(-2);
	if(minutes.length==1)
		minutes = 0+minutes;
	return  minutes+':'+seconds;
}

function LatLngAjaxcall(lat,lng,type){

	$.ajax({url:url+'/app_dev.php/mapjson/'+lat+'/'+lng+'/'+document.getElementById('radius').value, dataType:'json', success:function(result){
		//alert(result);
			//	console.log(result);
			 $('body').unblock();
									if(result.length)
									{
										google.maps.event.addListener(map, 'dragstart', function() {
											if($('.dropdown:has(".indvu")')){
												$('.dropdown').find('.indvu').remove();
											}
											$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');
									
										});
										
										google.maps.event.addListener(map, 'zoom_changed', function() {
											if($('.dropdown:has(".indvu")')){
												$('.dropdown').find('.indvu').remove();
											}
											$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');

										});
										
										
											markers = [];
										 listdata = '';
								               	for(var i=0;i<result.length;i++)
								               	{
													mak = new google.maps.LatLng(result[i].latitude,result[i].longitude);
													
													//marker.setMap(null);
													var maklat = result[i].latitude;
													var maklng = result[i].longitude;
													var phone =  result[i].phone;
													if(result[i].closeddays===null)
														var closeddays = "N.A";
													else
														var closeddays = convertIntoWorkingdays(result[i].closeddays);
												
													var pudonumber = result[i].pudonum;
													
													var phone =  result[i].phone;
													
													if(result[i].openinghours!==null && result[i].closinghours!=null)
														var workinghours = convertInttoStringTime(result[i].openinghours)+' to '+convertInttoStringTime(result[i].closinghours);
													else
														var workinghours  = "N.A";
														
													
													
													
													
													listdata += '<li>';
													listdata += '<div class="pudolistleft">';
														listdata += '<h1>'+result[i].pudoenterprise+' ('+pudonumber+')</h1>';												
														listdata += '<p>'+result[i].location+'</p>';
														listdata += '<span class="addinfo">Phone: '+phone+'</span><span class="addinfo">Working days: '+closeddays+'</span><span class="addinfo">Working hours : '+workinghours+' </span>';
													listdata += '</div>';
													listdata += '<div class="pudolistright">';
													if(isMobile.any()){
														listdata += '<div class="viewonmap" onclick="IndmarkerCall('+maklat+','+maklng+',\''+result[i].pudoenterprise+'\', \''+result[i].location+'\',\''+workinghours+'\',\''+phone+'\',\''+closeddays+'\',\''+pudonumber+'\')"><i class="fa fa-map-marker"></i><br><span>View Map</span></div>';
													}
													listdata += '<div class="direction" onclick="getDirections('+maklat+','+maklng+',\''+result[i].pudoenterprise+'\', \''+result[i].location+'\',\''+workinghours+'\',\''+phone+'\',\''+closeddays+'\',\''+pudonumber+'\',\'genmap\')"><br><br><span>Directions</span></div>';
													listdata += '<span class="distkm" id="distkm'+i+'">Loading...</span>';
													listdata += '<div class="directProceed" onclick="directProceed('+maklat+','+maklng+',\''+result[i].pudoenterprise+'\', \''+result[i].location+'\',\''+workinghours+'\',\''+phone+'\',\''+closeddays+'\',\''+pudonumber+'\')">  <span class="btn btn-primary btn-xs">Select</span></div>';
													listdata += '</div>';
													listdata += '</li>';
													
													var infocontent = '<ul class="indvu"><li>';
													infocontent += '<div class="pudolistleft">';
														infocontent += '<h1>'+result[i].pudoenterprise+' ('+pudonumber+')</h1>';												
														infocontent += '<p>'+result[i].location+'</p>';
														infocontent += '<span class="addinfo">Phone: '+phone+'</span><span class="addinfo">Working days: '+closeddays+'</span><span class="addinfo">Working hours : '+workinghours+' </span>';
													infocontent += '</div>';
													infocontent += '<div class="pudolistright">';
													infocontent += '<div class="direction" onclick="getDirections('+maklat+','+maklng+',\''+result[i].pudoenterprise+'\', \''+result[i].location+'\',\''+workinghours+'\',\''+phone+'\',\''+closeddays+'\',\''+pudonumber+'\',\'genmap\')"><br><br><span>Directions</span></div>';
													infocontent += '<span class="distkm" id="indistkm'+i+'">Loading...</span>';
													infocontent += '<div class="directProceed" onclick="directProceed('+maklat+','+maklng+',\''+result[i].pudoenterprise+'\', \''+result[i].location+'\',\''+workinghours+'\',\''+phone+'\',\''+closeddays+'\',\''+pudonumber+'\')">  <span class="btn btn-primary btn-xs">Select</span></div>';													
													listdata += '</div>';
													infocontent += '</li></ul>';

												
													var hovecontent = '<div class="hovecontent">';
														 	hovecontent += '<div class="pudolistleft">';
																hovecontent += '<h3>'+result[i].pudoenterprise+' ('+pudonumber+')</h3>';												
																hovecontent += '<p>'+result[i].location+'</p>';
																hovecontent += '<span class="addinfo">Phone: '+phone+'</span><span class="addinfo">Working days: '+closeddays+'</span><span class="addinfo">Working hours : '+workinghours+' </span>';
															hovecontent += '</div>';
															//hovecontent += '<div class="direction hoverimg"><img src="'+geoscouturl+'geoscout/sites/default/files/'+pudonumber+'_1.png" width="75px" height="75px"/></div>'; // temp hide on 14th july 2015
														hovecontent += '</div>';
												
														
													var dtdcmarker = new google.maps.Marker({position:mak,
														infoval:infocontent,
														hoveval:hovecontent,
														seq:i,
														//icon:url+'/img/pointer2.png'
														});
													if(!isMobile.any()) // Here we are checking for mobile case, if mobile then don't need to have click and hover effect
													{
														google.maps.event.addListener(dtdcmarker, 'click', function() {	

				                                         		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');
				                                         		if($('.dropdown:has(".indvu")')){
																		$('.dropdown').find('.indvu').remove();
																}
																$('.dropdown:not(:has(".indvu"))').append(this.infoval);
																getdistance(marker.getPosition(), this.position,this.seq,"indv"); 

																
																//this.setAnimation(google.maps.Animation.BOUNCE);
																

				                                        });

				                                        google.maps.event.addListener(dtdcmarker, 'mouseover', function() {	

				                                         		pudoinfo_window.setContent(this.hoveval);
				                                         		pudoinfo_window.open(map, this);
				                                         		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');

																
																
				                                        });
				                                        google.maps.event.addListener(dtdcmarker, 'mouseout', function() {	

				                                         		
				                                         		pudoinfo_window.close(map, this);

				                                         		
				                                         		//$('#pudolist').html(listdata);

																
																
				                                        });
				                                    }
				                                       
				                                 	getdistance(marker.getPosition(), mak,i,"list"); 
													markers.push(dtdcmarker);
													
												}
												
												
												
												$('#pudolist').html(listdata);
												if(type == "beforedrag"){
											        if (markerCluster) {
											          markerCluster.clearMarkers();
											        }
													markerCluster.addMarkers(markers);
												}else if(type== "afterdrag"){
													if (markerCluster) {
											          markerCluster.clearMarkers();
											        }
													markerCluster.addMarkers(markers);
													//markerCluster = new MarkerClusterer(map, markers);
												}					
									}else{

												var listdatanone = '<li>No Results Found!</li>';
												$('#pudolist').html(listdatanone);
												for(var i=0;i<markers.length;i++)
								               	{
								               			markers[i].setMap(null);
								               	}

									}

   	}})	
}


	
function getDirections(maklat,maklng,pudoenterprise,location,workinghours,phone,closingdays,pudonumber,option){
	$('.dropdown').find('.indvu').remove();
	if(indmarker)
			indmarker.setMap(null); // added on 30th july 2015 to disable the ind marker from mobile


	google.maps.event.addListener(map, 'dragstart', function() {
		if($('.dropdown:has(".indvu")')){
			$('.dropdown').find('.indvu').remove();
		}
		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');
	});
											
	google.maps.event.addListener(map, 'zoom_changed', function() {
		if($('.dropdown:has(".indvu")')){
			$('.dropdown').find('.indvu').remove();
		}
		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');

	});

	if(option == "viewmap"){
		markerCluster.addMarkers(markers);
		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');

	}else{
		if (markerCluster) {
		  markerCluster.clearMarkers();
		}
	}

	
	finalpudoName = pudoenterprise;
	finalpudoAddress = location;
	workinghrs = workinghours;
	contactnumber = phone;
	closeddays = closingdays;
	finalpudonum = pudonumber;
	
	marker.setDraggable(false);
	directionsDisplay.setMap(null);
	

	
	if($('.main-wrapper:has(".map_cont")')){
			$('.main-wrapper').find('.map_cont').remove();
	}
	$('.main-wrapper:not(:has(".map_cont"))').append('<div id="map_content" class="map_cont"><div class="map_detailheader" style="display:none"><span>X</span></div><div class="map_info"><div class="dir_text"></div><div class="dir_num"><span class="dir_dist"></span><span class="dir_time"></span><div class="map_detailinfo"></div></div></div><div class="map_proceed" style="display:none;"></div><div class="map_detailcont" id="map_detailcont" style="display:none;"></div></div>');
	
	//$('#map_content').html('');
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('map_detailcont'));
    var directionsService = new google.maps.DirectionsService();
	finalPosition = new google.maps.LatLng(maklat,maklng)
 
    var request ={
        origin:startposition,
        destination:finalPosition,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    if(pinB)
		pinB.setMap(null);
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK){
           directionsDisplay.setDirections(result);
          var endinfocontent = '<div class="endpudolistleft">';
				endinfocontent += '<h1>'+pudoenterprise+' ('+pudonumber+')</h1>';												
				endinfocontent += '<p>'+location+'</p>';
				endinfocontent += '<span>Phone: '+phone+'</span><span>Working days: '+closeddays+'</span><span>Working hours : '+workinghrs+' </span>';
			endinfocontent += '</div>';
           $('#map_content > .map_info > .dir_text').html(endinfocontent);
           $('#map_content > .map_info >  .dir_num > .dir_dist').html(result.routes[0].legs[0].distance.text);
           $('#map_content > .map_info >  .dir_num > .dir_time').html(result.routes[0].legs[0].duration.text);
           $('#map_content > .map_info >  .dir_num > .map_detailinfo').html('<a href="#" class="map_detaildir">Route Details</a><a href="#" class="proceed-fur btn btn-primary btn-xs">Select</a>');
            var _route = result.routes[0].legs[0]; 
			/*pinA = new google.maps.Marker({
				position: _route.start_location,
				map: map
			}),*/

			if(option != "viewmap"){
			
					pinB = new google.maps.Marker({
						position: _route.end_location,
						map: map,
						infoval: pudoenterprise+'<br>'+location,
						//icon: url+'/img/pointer2.png'
						
					});
			}
			/*google.maps.event.addListener(pinB, 'click', function() {	

			
				pudoinfo_window.setContent(this.infoval); 

				pudoinfo_window.open(map, this);
			
			});*/
			$(document).on('click','.map_detaildir',function(e){
				e.preventDefault();
				$('.search-field-set').hide();
				$('.search-field-userinfo').hide();			

				if($('.dropdown:has("#pudolist")')){
						$('.dropdown').find('#pudolist').html('').hide();
				}
					
					$(this).closest('.map_info').siblings('.map_detailheader').show()
					$(this).closest('.map_info').siblings('.map_proceed').show().html('<button class="btn btn-primary" id="proceed-fur">Select</button>')
					
					$(this).closest('.map_detailinfo').hide();
					$(this).closest('.map_info').siblings('.map_detailcont').show();
				//$(this).closest('.map_detailinfo').html(result);
			});		
			

			$(document).on('click','.map_detailheader span',function(){
					$('#map_content > .map_detailheader').hide();
					$('#map_content > .map_proceed').html('').hide();
					$('.search-field-set').show();
					$('#pudolist').show().html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');
					$('#map_content > .map_detailcont').hide();
					$('#map_content > .map_info > .dir_num >  .map_detailinfo').show();
					$('.search-field-userinfo').show();			

					
			});                                  
        }
    });
    geocoder.geocode({'latLng': new google.maps.LatLng(maklat,maklng)}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		   	if (results[1]) {
		   			$('#fulladdress').html(results[1].formatted_address);
		   	}
		}
	});


}

function directProceed(maklat,maklng,pudoenterprise,location,workinghours,phone,closingdays,pudonumber){
	finalpudoName = pudoenterprise;
	finalpudoAddress = location;
	workinghrs = workinghours;
	contactnumber = phone;
	closeddays = closingdays;
	finalpudonum = pudonumber;
	finalPosition = new google.maps.LatLng(maklat,maklng);
	proceedfurther();

	
}

function proceedfurther() {
		var sPageURL = document.location.toString();
		//alert(sPageURL);
		
		var sessionkey = sPageURL.split('dropselect/')[1];
		
		$.ajax({url:url+'/app_dev.php/mapSenderDetails/'+sessionkey, dataType:'json',success:function(resdata){
			//console.log(result)
			 $('body').unblock();
			 var result = resdata.data
			if(resdata.status!=0)
			{
				var contleft= '<div class="cont-left-main">\
										<h2>Sender Details</h2>\
										<div class="sender_details">\
											<h2>'+result[0].sfirstname+' '+result[0].slastname+'</h2>\
											<p>'+result[0].slocation+' '+result[0].saddress+' '+result[0].scity+' '+result[0].spin+'<span>Phone: '+result[0].sphone+'</span><span>Email: '+result[0].semail+'</span></p>\
											<span class="order-num">Order No - '+result[0].shipmentnum+'</span>\
										</div>\
									</div>';
									
					var contright = '<div class="cont-right-main">\
									<h2>Drop Location</h2>\
									<div class="Reviever_details">\
										<div class="Reviever_details_main">\
											<h2>'+finalpudoName+' ('+finalpudonum+')</h2>\
											<div class="col-md-9 clear-left">\
												<div class="reciever_address">\
													<p>'+finalpudoAddress+'</p>\
													<span>Contact Number : '+contactnumber+'</span>\
													<span class="work">Working Days : '+closeddays+'</span>\
													<span class="time">Working hours: '+workinghrs+'</span>\
												</div>\
												<a href="'+finalpudoAddress+'"  class="view-map"> View or Change Location </a>\
											</div>';
											/*<div class="col-md-3 pudo-image">\
												<img src="'+geoscouturl+'geoscout/sites/default/files/'+finalpudonum+'_1.png" width="150px" height="150px">\
											</div>\*/ // temp hide on 14th July 2015
						 contright += 	'</div>\
									</div>\
								</div>';
					
					//var contfooter = '<div class="col-md-6">';
										//<a href="#" id="canceldrop" name="cancel" class="submit_details" onclick="window.location.reload;"><i class="fa fa-angle-left fa-5"></i> Change Location</a></div>
					var	contfooter = '<div class="col-md-4 col-sm-6 col-xs-6 pull-right"><a href="/app_dev.php/mapsavepudodrop/'+sessionkey+'" name="submit" class="submit_details submit_drop">Continue <img src="'+url+'/img/continue_btn.png" /></a></div>';

									
					 $('.main-block').html(' <div class="content-block desc">\
							<div class="container">\
								<div class="content-left col-md-4"></div>\
								<div class="content-right col-md-8"></div>\
								<div class="col-md-12 summary-footer"></div>\
							</div>\
						 </div>');
						 
					$('.content-left').html(contleft);
					$('.content-right').html(contright);
					$('.summary-footer').html(contfooter);

					
					
			} else {
				Messageblock("Sorry!! Technical Error Please contact your Portal Administrator! Please wait we are redirecting back to your portal page.",false,'error');
			}
		
		}})
		
	}


function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
} 

function getdistance(markerlatlng,maklatlng,obj,type){
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [markerlatlng],
        destinations: [maklatlng],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            if(type =='indv'){
            	console.log(obj)
           		 document.getElementById('indistkm'+obj).innerHTML = distance;
           	}else{
            	 document.getElementById('distkm'+obj).innerHTML = distance;
            }
          		
 
        } else {
             if(type =='indv'){
            	console.log(obj)
           		 document.getElementById('indistkm'+obj).innerHTML = "N.A";
           	}else{
            	 document.getElementById('distkm'+obj).innerHTML = "N.A";
            }
        }
    });

}

function IndmarkerCall(ilat,ilng,pudoenterprise,location,workinghours,closeddays,phone,pudonumber){

	

	$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');
	if($('.dropdown:has(".indvu")')){
		$('.dropdown').find('.indvu').remove();
	}
	if (markerCluster) {
		markerCluster.clearMarkers();
	}

	for(var i=0;i<markers.length;i++)
   	{
   			markers[i].setMap(null);
   	}

   	if(indmarker)
   		indmarker.setMap(null);
   	if(directionsDisplay)
   		directionsDisplay.setMap(null);
   	if(pinB)
   		pinB.setMap(null);

   	var indmak = new google.maps.LatLng(ilat,ilng);

   	var hovecontent = '<div class="hovecontent">';
	 	hovecontent += '<div class="pudolistleft">';
			hovecontent += '<h3>'+pudoenterprise+' ('+pudonumber+')</h3>';												
			hovecontent += '<p>'+location+'</p>';
			hovecontent += '<span class="addinfo">Phone: '+phone+'</span><span class="addinfo">Working days: '+closeddays+'</span><span class="addinfo">Working hours : '+workinghours+' </span>';
		hovecontent += '</div>';
		//hovecontent += '<div class="direction hoverimg"><img src="'+geoscouturl+'geoscout/sites/default/files/'+pudonumber+'_1.png" width="75px" height="75px"/></div>'; // temp hide on 14th july 2015
	hovecontent += '</div>';

   	indmarker = new google.maps.Marker({position:indmak,hoveval:hovecontent,map: map});

   	map.setZoom(13);
	map.panTo(indmak)

	

	google.maps.event.addListener(indmarker, 'mouseover', function() {	

     		pudoinfo_window.setContent(this.hoveval);
     		pudoinfo_window.open(map, this);
     		$('#pudolist').html('<li class="listallclass"><a href="#" id="listall"> <i class="fa fa-list"></i> List all results</a></li>');

			
    });
    google.maps.event.addListener(indmarker, 'mouseout', function() {	
	
     		pudoinfo_window.close(map, this);

    });


}
function getinitialize(){
		
		if($('#address').val()!='')
			finaladdress = $('#address').val();
		if($('#radius').val()!=''){
			finalradii = $('#radius').val();
			finalradius = parseInt($('#radius').val(), 10) * 1000;
		}
		
		if(finaladdress != null ){
			
			codeAddress(finaladdress,finalradius);
			if(finalradii == 2)
				initialize(14,21.0000,78.0000);
			else if(finalradii == 5)
				initialize(12,21.0000,78.0000);
			else if(finalradii == 10)
				initialize(11,21.0000,78.0000);
			else if(finalradii == 15)
				initialize(10,21.0000,78.0000);
			else if(finalradii == 20)
				initialize(9,21.0000,78.0000);
		}
		
}

function Messageblock(msg,status,otp){
	   var msg = $('body').block({
					message: msg,
					centerX: true,
					centerY: true,
					css: {
						width: '50%',
						height: '50%',
						border: '3px solid #204d74',
						backgroundColor: '#FFF',
						color: '#000',
						padding: '25px',
						baseZ: 20000
					}

				});
	
		if(status === true)
			setTimeout(function(){ $('body').unblock(); $(window).unbind('beforeunload'); window.location.href=url+"/drop-success.php?msg="+otp+""; },4000);
		else
			setTimeout(function(){ $('body').unblock(); $(window).unbind('beforeunload'); window.location.href=url+"/dashboard-drop.html"; },3000);

		
	}

$(document).ready(function(){
	
	
	
	initialize(5,21.0000,78.0000);
	
	if(getUrlParameter('pin')!=''){
		$('#address').val(getUrlParameter('pin'));
		getinitialize();
	}
	
	$(document).on('click','#search',function(){
			getinitialize();
	}).on('change','#radius',function(){
		getinitialize();
	});
	
	$(document).on('keypress',function(e){
     var key=e.keyCode || e.which;
      if (key==13){
		  getinitialize()
      }
	});
	

	
	

    

    $(document).on('click','#listall',function(e){
		e.preventDefault();
		$('#pudolist').html(listdata);
		$('.indvu').remove();
		if($('.main-wrapper:has(".map_cont")')){
			$('.main-wrapper').find('.map_cont').remove();
		}
		for(var  j=0; j<markers.length;j++)
		{
			getdistance(marker.getPosition(),markers[j].getPosition()	,j,"list");
		}
		
	});
	

    
	
	$(document).on('click','#proceed-fur, .proceed-fur', function(e){ e.preventDefault(); proceedfurther(); });
	
	$(document).on('click','#canceldrop',function(e) {
		e.preventDefault();
	 //	location.reload();
	 var radiiarr = new Array(2,5,10,15,20);
var lyt = 	'<div class="search-block">\
				<div class="col-md-4 main-wrapper">\
					<div class="search-field-set">\
						<input type="text" name="address" id="address" class="form-control" placeholder="Enter locality or Pincode to Drop Shipment" value="'+finaladdress+'"/>\
						<select id="radius" name="radius" class="form-control">';
						for(var i = 0;i<radiiarr.length;i++){
							 lyt += '<option value="'+radiiarr[i]+'"';
								if(finalradii== radiiarr[i])
									lyt += 'selected';
								lyt += '>'+radiiarr[i]+'Km</option>';
						}	
lyt +=				'</select>\
						<button name="search" id="search" class="btn btn-primary"><i class="fa fa-search"></i></button>\
					</div>\
					<div class="dropdown">\
						<ul id="pudolist">\
						</ul>\
					</div>\
				</div>\
				<div class="col-md-8"></div>\
			</div>\
		<div class="content-block">\
			<div  id="map" class="map"></div>\
		</div>';
		
		 $('.main-block').html(lyt);
		 getinitialize();
 
	});
	
	
	$(document).on('click','.submit_drop',function(e){
		e.preventDefault();
		var path = $(this).attr('href');

		$.ajax({url:url+path,dataType:'json', data:{'pudonum':finalpudonum,'shipmenttype':'2','idproof':0},  success:function(result){
			//console.log(result);
				Messageblock('Thank you for selecting your drop location. Please wait we will redirect back to your portal page',true,result.otp);
		}});
	});
	
	$(document).on('click','.view-map',function(e){
						e.preventDefault();	
					/*	var n = 500;
						var r = 500;
						var i = screen.width / 2 - n / 2;
						var s = screen.height / 2 - r / 2;
						window.open("https://maps.google.it/maps?z=14&t=m&hl=en-US&gl=US&mapclient=embed&q=" + finalPosition + "&iwloc=A&output=embed", "Address", "width=500px, height=500px, top=" + s + ", left=" + i + "")
						*/
						
						e.preventDefault();
			var radiiarr = new Array(2,5,10,15,20);
			var lyt = 	'<div class="search-block">\
							<div class="col-md-4 main-wrapper">\
								<div class="search-field-set">\
									<input type="text" name="address" id="address" class="form-control" placeholder="Enter locality or Pincode to Drop Shipment" value="'+finaladdress+'"/>\
									<select id="radius" name="radius" class="form-control">';
									for(var i = 0;i<radiiarr.length;i++){
										 lyt += '<option value="'+radiiarr[i]+'"';
											if(finalradii== radiiarr[i])
												lyt += 'selected';
											lyt += '>'+radiiarr[i]+'Km</option>';
									}	
			lyt +=				'</select>\
									<button name="search" id="search" class="btn btn-primary"><i class="fa fa-search"></i></button>\
								</div>\
								<span class="search-field-userinfo">Enter location/Pincode of the desired drop location</span>\
								<div class="dropdown">\
									<ul id="pudolist">\
									</ul>\
								</div>\
							</div>\
							<div class="col-md-8"></div>\
						</div>\
					<div class="content-block">\
						<div  id="map" class="map"></div>\
					</div>';
					
					 $('.main-block').html(lyt);
					 initialize(5,21.0000,78.0000);
					
					 geocoder.geocode( { 'location': finalPosition}, function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
								marker = new google.maps.Marker({
				            	    map: map,  //<-- uncomment to show red marker
				            	    draggable:true,
				                    position: startposition,
				                    icon: url+'/img/user1.png'
				                });
										   
								var beforelat = results[0].geometry.location.lat();
								var beforelng = results[0].geometry.location.lng();
								getDirections(beforelat,beforelng,finalpudoName,finalpudoAddress,workinghrs,contactnumber,closeddays,finalpudonum,"viewmap");

						}
				   });
					 

				
	});
	
	$(window).bind('beforeunload', function(){
		return 'Going back or Refreshing the page you will lose your data';
	});	
	

	
	$(document).ajaxStart(function () {
		 $('body').block({
			message: '<img src="'+url+'/img/ajax_loader.gif" width="50px" height ="50px"/>',
			centerX: true,
			centerY: true,
			css: {
				width: '100px',
				height: '100px',
				border: '3px solid #204d74',
				backgroundColor: '#FFF',
				color: '#fff',
				padding: '25px',
				baseZ: 20000
			}

		});
	}).ajaxStop(function(){

		//setTimeout(function(){ $('body').unblock(); },1000);
	});

});
