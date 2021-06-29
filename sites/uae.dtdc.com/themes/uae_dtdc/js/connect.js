jQuery(document).ready(function() {

    var locdata = {
        "locations": [{
            "id": 0,
            "name": 'USA',
            "cx": 73,
            "cy": 50,
            "address":'545, 8th Ave,;Suite 17SW;New York, NY 10018',
            "email":'john@dtdc.com'
        }, {
            "id": 1,
            "name": 'UK',
            "cx": 135,
            "cy": 40,
           "address":'Unit 4 ,; Marlin Park,; Central Way,;Feltham TW14 0AN',
            "email":'sales.uk@dtdc.com ; css.uk@dtdc.com ; anilps@dtdc.com'
        }, {
            "id": 2,
            "name": 'UAE',
            "cx": 191,
            "cy": 68,
            "address" : 'P.O. Box 118519,;Salahuddin Street,;Deira, Dubai, UAE',
            "email" : 'expresscare@dtdc.com ; dtdcuae@eim.ae'
        }, {
            "id": 3,
            "name": 'Singapore',
            "cx": 240,
            "cy": 85,
            "address" : '101, Kitchener Road,;#02-36 Jalan Besar Plaza,;Singapore - 208511',
            "email" : 'yogeshb@dtdc.com ; css.sg@dtdc.com'
        }, {
            "id": 4,
            "name": 'Bangladesh',
            "cx": 223,
            "cy": 66,
            "address" : 'Taj Cassilina (5th Floor);25 Gulshan Avenue;Gulshan-1'
        },{
            "id": 5,
            "name": 'Canada',
            "cx": 55,
            "cy": 40,
            "address" : 'Isapur Estate, 7454;Airport Road,;Mississauga, ON L4T 2H5',
            "email" : 'css.canada@dtdc.com'
        }, {
            "id": 6,
            "name": 'China',
            "cx": 235,
            "cy": 60,
            "address" : 'Floor 1, Building No. 1,;No. 115,Hong Zhong Road,;Shanghai - 201130 China',
            "email" : 'teddy.sha@dnjexpress.com'
        }, {
            "id": 7,
            "name": 'Hong Kong',
            "cx": 238,
            "cy": 73,
            "address" : 'Workshop No15,12/F; Wing Hing Industrial Building,;No 83-93, Chai Wan Kok Street,Tsuen Wan, HongKong'
        }, {
            "id": 8,
            "name": 'Kenya',
            "cx": 173,
            "cy": 100,
            "address" : 'G-20, Lunga Lunga Square,;Lunga Lunga Road, Industrial Area,;Nairobi, Kenya',
            "email" : 'css.nairobi@dtdc.com/sales.nairobi@dtdc.com/elizabeth.nairobi@dtdc.com'
        }, {
            "id": 9,
            "name": 'Malaysia',
            "cx": 235,
            "cy": 80,
            "address" : 'NO:32, Jalan Sepadu 25/123A,;Seksyen 25, 40400 Shah Alam,;Selangor,Malaysia.',
            "email" : 'dtdcmalaysia@dtdc.com'
        }, {
            "id": 10,
            "name": 'Nepal',
            "cx": 218,
            "cy": 58,
            "address" : 'KA 1/33;Tripureswor,;Kathmandu Nepal',
            "email": 'kiran.nepal@dtdc.com/css.nepal@dtdc.com'
        }, /*{
            "id": 11,
            "name": 'Pakistan',
            "cx": 205,
            "cy": 65,
            "address" : '1/C, 8 Canal Park;Gulberg II;Lahore, Pakistan',
            "email": 'dtdc@pakistancargo.com'
        },*/ {
            "id": 12,
            "name": 'Sri Lanka',
            "cx": 219,
            "cy": 82,
            "address" : '316,; K. Cyril C. Perera Mawatha,;Colombo 13,; Sri Lanka',
            "email": 'steve.henderlin@dpex.com/shihan.hassen@dpex.com'
        },{
            "id": 13,
            "name" : "Sydney",
            "cx" : 293,
            "cy" : 127,
            "address" : '9/10 Ferngrove Place.;Chester Hill;NSW 2162'
        },{
            "id" : 14,
            "name" : "India",
            "cx" : 215,
            "cy" : 78,
            "address" : 'Corporate Office,;DTDC House, No.3,;Victoria Road,;Bangalore 560047, Karnataka'
        },{
            "id": 15,
            "name": 'Kuwait',
            "cx": 185,
            "cy": 65,
            "address" : ''
        },{
            "id": 16,
            "name" : "Melbourne",
            "cx" : 285,
            "cy" : 138,
            "address" : ''
        },{
            "id": 17,
            "name": 'Myanmar',
            "cx": 228,
            "cy": 70,
            "address" : ''

        },{
            "id": 18,
            "name": 'South Africa',
            "cx": 165,
            "cy": 120,
            "address" : ''

        },{
            "id": 19,
            "name": 'Saudi Arabia',
            "cx": 180,
            "cy": 70,
            "address" : ''
        },/*{
            "id": 20,
            "name": 'Oman',
            "cx": 190,
            "cy": 73,
            "address" : ''
        },*/{
            "id": 21,
            "name": 'ISRAEL',
            "cx": 170,
            "cy": 60,
            "address" : 'DTDC ISRAEL (Tikka Last Mile Ltd.) 28 Haarbaa st. Tel Aviv 6473925'
        },{
            "id": 22,
            "name": 'Germany',
            "cx": 150,
            "cy": 43,
           "address":'DTDC Express GMBH,Markt Str-21 65428, Rüsselsheim am Main,Germany.'
        },
        // {
        //     "id": 21,
        //     "name": 'Qatar',
        //     "cx": 175,
        //     "cy": 65,
        //     "address" : ''
        //  }
        //,{
        //     "id": 22,
        //     "name": '',
        //     "cx": 137,
        //     "cy": 53,
        //    "address":''
        // },{
        //     "id": 23,
        //     "name": '',
        //     "cx": 148,
        //     "cy": 45,
        //    "address":''
        // },{
        //     "id": 24,
        //     "name": '',
        //     "cx": 143,
        //     "cy": 47,
        //    "address":''
        // },{
        //     "id": 25,
        //     "name": '',
        //     "cx": 155,
        //     "cy": 49,
        //    "address":''
        // }
        ]
    }
    console.log("first on eis "+locdata.locations[0].name);
    for (i = 0; i < locdata.locations.length; i++) {


        var country_name = locdata.locations[i].name;
        var addr = locdata.locations[i].address;
        var nowCloned = jQuery( "#main-0" ).clone();

        console.log(jQuery("text"));
        nowCloned[0].id = "main-"+(i);
        var nc = "clip"+(i+1);
        nowCloned.find('animate:nth-child(1)').attr("xlink:href", '#'+nc);
        nowCloned.find('animate:nth-child(2)').attr("xlink:href", '#'+nc);

        var text = nowCloned.find('text');
        nowCloned.find('text').text(locdata.locations[i].name);
        if(nowCloned.find('text').text() == 'India'){
            nowCloned.find('text').attr('x',locdata.locations[i].cx-8);

        }
        else{
        nowCloned.find('text').attr('x',locdata.locations[i].cx);
        }
        if((nowCloned.find('text').text() == 'Sri Lanka') || (nowCloned.find('text').text() == 'Oman') ||
            (nowCloned.find('text').text() == 'Singapore')){
            console.log(nowCloned.find('text').text());
            nowCloned.find('text').attr('y',locdata.locations[i].cy+5);
        }
        else if(nowCloned.find('text').text() == 'India'){
            nowCloned.find('text').attr('y',locdata.locations[i].cy+2);
        }
        else{
            console.log(nowCloned.find('text').text());
        nowCloned.find('text').attr('y',locdata.locations[i].cy-2);
        }
        var fnow = nowCloned.find('circle:nth-child(3)')
        fnow.attr("id",nc);
        fnow.attr("cx",locdata.locations[i].cx);
        fnow.attr("cy",locdata.locations[i].cy);

        var backClass = "back"+locdata.locations[i].name.replace(/\s+/g, '-'); /*backUSA*/
        fnow.addClass(backClass);

        // if((backClass == 'backIndia') || (backClass == 'backSydney') ||
        //     (backClass == 'backSriLanka')|| (backClass == 'backPakistan')|| (backClass == 'backNepal')
        //     || (backClass == 'backMalaysia')|| (backClass == 'backKenya') || (backClass == 'backHongKong')
        //     || (backClass == 'backChina') || (backClass == 'backCanada') || (backClass == 'backBangladesh')
        //     || (backClass == 'backSingapore') || (backClass == 'backUAE') || (backClass == 'backUK') || (backClass == 'backUSA')){
        //          nowCloned.find('text').css({'font-size':'4px'});
        // }


        var fnow2 = nowCloned.find('circle:nth-child(4)')
        fnow2.attr("id",nc);
        fnow2.attr("cx",locdata.locations[i].cx);
        fnow2.attr("cy",locdata.locations[i].cy);

        var frontClass = "front"+locdata.locations[i].name.replace(/\s+/g, '-'); /*frontUSA*/
        fnow2.addClass(frontClass);


        if(fnow2.attr('class') == "front frontIndia"){
           fnow2.attr("r",1.5);
        }
        else if((fnow2.attr('class') == "front frontUSA") ||
                (fnow2.attr('class') == "front frontUK") ||
                (fnow2.attr('class') == "front frontCanada") ||
                (fnow2.attr('class') == "front frontUAE") ||
                (fnow2.attr('class') == "front frontSingapore") ||
                (fnow2.attr('class') == "front frontChina") ||
                (fnow2.attr('class') == "front frontSydney")){
                fnow2.attr('r',1.2);
            // nowCloned.find('text').css({'font-size':'5px'});
        }
        else{
            fnow2.attr('r',0.6);
        }
        nowCloned.appendTo( "#Layer_1" );


    };

jQuery("#Layer_1 g circle").hover(function (e) {
    jQuery(this).css({'padding':50});
    var idvar = jQuery(this).parent().attr('id').split('-')[1];
        var address = locdata.locations[idvar].address;
        var offset = jQuery(this).position();
        var dis = jQuery('.svg-wrapper').offset().top;
        if(address == "" || address == "null"){
            //console.log("nothing to show in address");
        }
        else{

            jQuery(this).css({'cursor':'pointer'});
            var disp_name = locdata.locations[idvar].name;
            jQuery('div#name').text(disp_name);
            var address = locdata.locations[idvar].address;

            var result = address.replace(/\;/g,"<br/>");
            address = result;

            document.getElementById('address').innerHTML = address;

            jQuery("div.popup").css({"left": e.pageX-130-90, "top": e.pageY-dis-130});
            jQuery("div.popup").fadeIn(500);
        }
 },function(){
            jQuery("div.popup").hide();
    });

var screenwidth = jQuery(window).width();
    if(screenwidth <= 990){
        jQuery('.bg').css({'height':jQuery('.map').height()}) ;
    }
});
