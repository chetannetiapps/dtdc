jQuery(document).ready(function($){
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
     var pudoinfo_window = new google.maps.InfoWindow({ZIndex:1000});
     var marker = null
     var markers = [];
     var markerCluster = null;
     var url = "";
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





     	/*$.extend( $.fn.dataTable.defaults, {
		      "ordering": false
		});
		var table  = $('#contactustable').DataTable({
		"dom": '<"misinfo"><"lengthfilter"l<"dateslider"><"dropfilter">f<"pdficon"><"excelicon">><t>ip',
		language: {
			"search": "_INPUT_",
			"searchPlaceholder": "Search..",
			"lengthMenu": "Show _MENU_ ",
			"sInfo":'{{ "Showing _START_ to _END_ of _TOTAL_ entries" }}',
            "sZeroRecords": "No data to show",
            "sProcessing": "Loading..."
		},
		"TableTools": {
            "aButtons": [ "csv", "pdf", "print" ],
        },
		"columns": [
            { "data": "title" },
            { "data": "field_franchise_contact_person_value" },
            { "data": "address" },
            { "data": "field_fr_city_value" },
            { "data": "field_franchise_country_value" },
            { "data": "field_fr_email_value" },
            { "data": "field_franchise_fax_value" },
            { "data": "field_franchise_phone_value"},
            { "data": "field_pincode_value"},
        ],
		"bProcessing": true,
		"bServerSide": true,
		"fnServerData": function ( sSource, aoData, fnCallback,oSettings) {
			aoData.push( { "name": "dateStart", "value": $('#dateStart').val(), } );
			aoData.push( { "name": "dateEnd", "value": $('#dateEnd').val(), } );
			aoData.push( { "name": "shipmenttype", "value": $('#droppickup').val(), } );
			oSettings.jqXHR =	$.ajax( {
			"dataType": 'json',
			"type": "POST",
			"url": sSource,
			"data": aoData,
			"beforeSend":function(){
				//($('body'))
			},
			"complete":function(){
				//endajaxload($('body'))
			},
			"success": fnCallback
			} )
			},
			"sAjaxSource": "/contactus_listview_ajax"
		
		});*/


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
            //zoom: zoomlevel, 
            zoom: 2, 
            //center: new google.maps.LatLng(21.0000,78.0000), 
           //center: new google.maps.LatLng(centerlat,centerlng),
           	 center: new google.maps.LatLng(0, 0),
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
        LatLngAjaxcall('_none');
  }


function LatLngAjaxcall(cont){

	$.ajax({url:url+'/custom-contact-us-ajax',type:'post', data:{'country':cont}, dataType:'json', success:function(result){
		//alert(result);
			//	console.log(result);
									if(result.length)
									{
										
										
										
										markers = [];
									 	listdata = '';
								               	for(var i=0;i<result.length;i++)
								               	{
								               		//console.log('latitude '+result[0].lat)
													mak = new google.maps.LatLng(result[i].lat,result[i].lng);
													
													//marker.setMap(null);
													var maklat = result[i].latitude;
													var maklng = result[i].longitude;
													var phone =  result[i].phone;
													var frcode = result[i].frcode;
													var location = result[i].location;
													var title = result[i].title;
													
													var hovecontent = '<div class="hovecontent34">';
														 	hovecontent += '<div class="pudolistleft">';
																hovecontent += '<h3>'+result[i].title+'</h3>';												
																hovecontent += '<p>'+result[i].location+'</p>';
																//hovecontent += '<span class="addinfo">Phone: '+phone+'</span><span class="addinfo">Working days: '+closeddays+'</span><span class="addinfo">Working hours : '+workinghours+' </span>';
															hovecontent += '</div>';
															//hovecontent += '<div class="direction hoverimg"><img src="'+geoscouturl+'geoscout/sites/default/files/'+pudonumber+'_1.png" width="75px" height="75px"/></div>'; // temp hide on 14th july 2015
														hovecontent += '</div>';

														
													var dtdcmarker = new google.maps.Marker({position:mak,
														// infoval:infocontent,
														hoveval:hovecontent,
														 seq:i
														//icon:url+'/img/pointer2.png'
														});

													markers.push(dtdcmarker);

													google.maps.event.addListener(dtdcmarker, 'mouseover', function() {	
													 		//alert('dslkfj')
			                                         		pudoinfo_window.setContent(this.hoveval);
			                                         		pudoinfo_window.open(map, this);

			                                        });
			                                        google.maps.event.addListener(dtdcmarker, 'mouseout', function() {	

			                                         		
			                                         		pudoinfo_window.close(map, this);

			                                         		
			                                         		//$('#pudolist').html(listdata);

															
															
			                                        });
													
												} // for loop ends
												

												for(var i=0;i<markers.length;i++)
								               	{
								               			markers[i].setMap(null);
								               	} 
												
												
										        if (markerCluster) {
										          markerCluster.clearMarkers();
										        }
											
													markerCluster.addMarkers(markers);
													//markerCluster = new MarkerClusterer(map, markers);
												if(cont!='_none'){
													geocoder.geocode({'address': cont}, function(results, status) {
													    if (status == google.maps.GeocoderStatus.OK) {
													      	if (results[0]) {
													      		map.setCenter(results[0].geometry.location);
													      		map.setZoom(5);
													      	}
													    }
													})
												}
																	
									}else{

												
												for(var i=0;i<markers.length;i++)
								               	{
								               			markers[i].setMap(null);
								               	}

									}

   	}})	
}


	


	
	
	
	initialize(5,21.0000,78.0000);
	
	// if(getUrlParameter('pin')!=''){
	// 	$('#address').val(getUrlParameter('pin'));
	// 	getinitialize();
	// }
	
	// $(document).on('click','#search',function(){
	// 		getinitialize();
	// }).on('change','#radius',function(){
	// 	getinitialize();
	// });
	
	// $(document).on('keypress',function(e){
 //     var key=e.keyCode || e.which;
 //      if (key==13){
	// 	  getinitialize()
 //      }
	// });
	

	
	$(document).on('change','#countries',function(){
		var country = $(this).val();
		$('#list-view-button').attr('href','contact-us-list?field_franchise_country_value='+country);
		LatLngAjaxcall(country);
	})

    

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
	
	// $(window).bind('beforeunload', function(){
	// 	return 'Going back or Refreshing the page you will lose your data';
	// });	
	

	
	// $(document).ajaxStart(function () {
	// 	 $('body').block({
	// 		message: '<img src="'+url+'/img/ajax_loader.gif" width="50px" height ="50px"/>',
	// 		centerX: true,
	// 		centerY: true,
	// 		css: {
	// 			width: '100px',
	// 			height: '100px',
	// 			border: '3px solid #204d74',
	// 			backgroundColor: '#FFF',
	// 			color: '#fff',
	// 			padding: '25px',
	// 			baseZ: 20000
	// 		}

	// 	});
	// }).ajaxStop(function(){

	// 	//setTimeout(function(){ $('body').unblock(); },1000);
	// });

});
