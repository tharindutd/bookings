

var dataforsuperb;
var long;
var lat;
var showpricetate = false;
var schild;
var sadult;
var sroom;
var swhere;
var tempwhere;
if (screen.width < 500) {

    $('#cheavailable1').hide();
    $('#cheavailable2').show();

    $('#star-rating-filter-inside').fadeOut(function () {

    });

    $('#quiq-filter-inside').fadeOut(function () {

    });

    $('#fun-thinks-filter-inside').fadeOut(function () {

    });

    $('#reception-filter-inside').fadeOut(function () {

    });

    $('#facility-filter-inside').fadeOut(function () {

    });

    $('#room-facility-filter-inside').fadeOut(function () {

    });

    $('#district-filter-inside').fadeOut(function () {

    });

    $('#Beach-filter-inside').fadeOut(function () {

    });

    $('#property-filter-inside').fadeOut(function () {

    });

    $('#review-filter-inside').fadeOut(function () {

    });


    $('#loads').fadeOut(function () {

    });


}


var username = "info@websrus.com.au";
var password = "Mtbotntgbu@2017";

// start city data

var cityurl = 'https://distribution-xml.booking.com/2.4/json/cities?countries=lk&extras=location&';
var cityarray = [];
var districtarray = [];
var regionarray = [];
var destinationtype = "";
var offsetvalue = 0;
var cityid;
var hoteforuniqregion;
var hoteforuniqregiontepm = [];
var destination = "Colombo";

for (var x = 0; x < 2; x++) {
    $.ajax({
        type: 'GET',
        url: cityurl + 'offset=' + offsetvalue + '&rows=1000',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {
            cityarray.push(data);
        }
    });
    offsetvalue = 1000;
}

for (var x = 0; x < cityarray.length; x++) {
    for (var y = 0; y < cityarray[x]['result'].length; y++) {
        var option = '<option value="' + cityarray[x]['result'][y]['name'] + '">' + cityarray[x]['result'][y]['name'] + '</option>';
        $('#districtset').append(option);
    }
}

$.ajax({
    type: 'GET',
    url: 'https://distribution-xml.booking.com/2.4/json/districts?countries=lk&extras=location',
    dataType: 'json',
    async: false,
    crossDomain: true,
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Authorization': 'Basic ' + btoa(username + ':' + password)
    },
    success: function (data) {
        districtarray = data;
        // console.log(data)
        for (var x = 0; x < data['result'].length; x++) {
            var option = '<option value="' + data['result'][x]['name'] + '">' + data['result'][x]['name'] + '</option>';
            $('#districtset').append(option);
        }
    }
});

$.ajax({
    type: 'GET',
    url: 'https://distribution-xml.booking.com/2.4/json/regions?countries=lk',
    dataType: 'json',
    async: false,
    crossDomain: true,
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Authorization': 'Basic ' + btoa(username + ':' + password)
    },
    success: function (data) {
        regionarray = data;
        // console.log(data);
        for (var x = 0; x < data['result'].length; x++) {
            var option = '<option value="' + data['result'][x]['name'] + '">' + data['result'][x]['name'] + '</option>';
            // $('#districtset').append(option);
        }
    }
});


// end city data


// start search btn click


var from;
var to;
var destinationsample = "Colombo";
var okadd=false;

$('#search-btn').click(function () {

    if ($('#destiny').val() != "") {

        destinationsample = $('#destiny').val();
        from = $('#datepick1').val();
        to = $('#datepick2').val();

        if (from == "" || to == "") {

            // $('#loaddiv').show();
            // $('.wrap').hide();

            $('#details').empty();
            okadd=true;
            loadHotelNameWice($('#destiny').val());
        } else {
            // $('#loaddiv').show();
            // $('.wrap').hide();

            $('#details').empty();

            var a = from.split("/");
            if (a.length > 1) {
                from = a[2] + '-' + a[0] + '-' + a[1];
                var a = to.split("/");
                to = a[2] + '-' + a[0] + '-' + a[1];
            }

            // console.log('----------------')
            // console.log(a.length)
            // console.log(from)
            // console.log(to)
            // console.log('----------------')

            showpricetate = true;
            loadavailable(destinationsample, from, to);
        }
    } else {
        alert("Please Enter a destination");
    }


});


function loadHotelNameWiceto(where, froms, tos, rooms, child, adult) {

    tempwhere=where;
    $('#destiny').val(where);
    $('#datepick1').val(froms);
    $('#datepick2').val(tos);
    // $('#adult').val(rooms);
    // $('#child').val(child);
    // $('#room').val(adult);
    loadavailable(where, froms, tos);
    from = froms;
    to = tos;
    sadult=adult;
    schild=child;
    sroom=rooms;
    swhere=where;

}


function loadHotelNameWice(destination) {

    // console.log(regionarray);

    cityid = 0;
    destinationtype = "";

    for (var x = 0; x < cityarray.length; x++) {
        for (var y = 0; y < cityarray[x]['result'].length; y++) {

            if (cityarray[x]['result'][y]['name'] === destination) {
                destinationtype = "city_ids";
                cityid = cityarray[x]['result'][y]['city_id'];
                // console.log(long, lat);
                // var html = '<iframe src="https://servicepoints.dhlecommerce.com/?lnglat='+lat+','+long+'&language=en"></iframe>';
                // $("#map-view").append(html);
                break;

            }
        }
    }

    if (destinationtype == "") {
        // console.log("district")
        for (var x = 0; x < districtarray['result'].length; x++) {

            if (districtarray['result'][x]['name'] == destination) {
                destinationtype = "city_ids";
                cityid = districtarray['result'][x]['city_id'];
                // console.log(long, lat);
                // var html = '<iframe src="https://servicepoints.dhlecommerce.com/?lnglat='+lat+','+long+'&language=en"></iframe>';
                // $("#map-view").append(html);
                break;
            }

        }
    }

    if (destinationtype == "") {
        // console.log("region")
        for (var x = 0; x < regionarray['result'].length; x++) {

            if (regionarray['result'][x]['name'] == destination) {
                destinationtype = "region_ids";
                cityid = regionarray['result'][x]['region_id'];
                break;
            }

        }
    }



    if (okadd){
        tempwhere=destination;
        loadDataforuniqdistrictforbtn(destinationtype, cityid, destination);
    } else{
        tempwhere=destination;
        loadDataforuniqdistrict(destinationtype, cityid, destination);
    }


}

function loadDataforuniqdistrictforbtn(destinationtype, cityid, destination) {

    console.log('withokadd');

    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotels?' + destinationtype + '=' + cityid + '&rows=1000',
        // url: 'https://distribution-xml.booking.com/2.4/json/hotels?city_ids=-2214877&rows=1000',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {


            if (data['result'].length > 0) {
                $('#prpertfound').html('' + tempwhere + ': ' + data['result'].length + ' properties found ');
                // loadAll(data);
                loadpagination(data);
                // console.log(data);
                dataforsuperb = data;
            } else {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                // $('.wrap').show();
                // $('#loaddiv').hide();
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);

            }
        }, error: function (error) {
            $('#prpertfound').html('There Are No Found Any Result For Your Request');
            var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
            $('#details').append(god);


            // for (var a = 0; a < 10; a++) {
            //     var ini = '<div id="content-init"><img src="Capture.PNG" alt="" style="width: 100%; height: 100%; border-radius: 5px;"></div>';
            //     $('#details').append(ini);
            // }

            // $('.wrap').show();
            // $('#loaddiv').hide();

        }
    });

    // console.log("ok");

}

function loadDataforuniqdistrict(destinationtype, cityid, destination) {

    console.log('wthoutoklog')
    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotels?' + destinationtype + '=' + cityid + '&rows=1000',
        // url: 'https://distribution-xml.booking.com/2.4/json/hotels?city_ids=-2214877&rows=1000',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {


            if (data['result'].length > 0) {



                $('#prpertfound').html('' + tempwhere + ': ' + data['result'].length + ' properties found ');
                loadpagination(data);
                // console.log(data);
                dataforsuperb = data
            } else {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                // $('.wrap').show();
                // $('#loaddiv').hide();
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);

            }
        }, error: function (error) {
            $('#prpertfound').html('There Are No Found Any Result For Your Request');
            var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
            $('#details').append(god);


            // for (var a = 0; a < 10; a++) {
            //     var ini = '<div id="content-init"><img src="Capture.PNG" alt="" style="width: 100%; height: 100%; border-radius: 5px;"></div>';
            //     $('#details').append(ini);
            // }

            // $('.wrap').show();
            // $('#loaddiv').hide();

        }
    });

    // console.log("ok");

}


function loadAll(data) {



//
//     if (data['result'].length > 10) {
    for (var x = 0; x < 10; x++) {
        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + data['result'][x]['hotel_id'] + '&extras=hotel_facilities,hotel_info,hotel_photos,hotel_description',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {


                // console.log(data);

                var star = "";
                var bool = false;
                if (data['result'][0]['hotel_data']['class'] > 0) {
                    bool = true;
                    for (var ab = 0; ab < data['result'][0]['hotel_data']['class']; ab++) {
                        star = star + '<i class="fas fa-star"></i>';
                    }
                } else {

                }

                if (bool) {

                    star = star + '&nbsp;<span id="finger"><i class="fas fa-hand-point-right"></i></span>';
                }


                var ratingtype = "";
                var hoteldatatypefont = data['result'][0]['hotel_data']['review_score'];

                if (hoteldatatypefont > 9) {
                    ratingtype = "Superb";
                } else if (hoteldatatypefont > 8) {
                    ratingtype = "Very Good";
                } else if (hoteldatatypefont > 7) {
                    ratingtype = "Good";
                } else if (hoteldatatypefont > 6) {
                    ratingtype = "Pleasant";
                } else {
                    ratingtype = "Pleasant";
                }

                var rescor;

                if (data['result'][0]['hotel_data']['review_score'] != null) {
                    rescor = data['result'][0]['hotel_data']['review_score'];
                } else {
                    rescor = 0;
                }

                var ccr = "";

                if (data['result'][0]['hotel_data']['creditcard_required'] == false) {
                    ccr = '<p id="posible-credit"><i class="far fa-credit-card"></i>Reservation possible without a credit card</p>';
                }

                var facil = "";
                var ok = false;

                for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                    if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 146) {
                        facil = '<div id="label1">BeachFront</div>';
                        ok = true;
                        break;
                    }
                }

                if (ok == false) {
                    for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                        if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 43) {
                            facil = '<div id="label2">Breakfast included</div>';
                            ok = true;
                            break;
                        }
                    }
                }


                var hoteltype = "";
                $.ajax({
                    type: 'GET',
                    url: 'https://distribution-xml.booking.com/2.4/json/hotelTypes?hotel_type_ids=' + data['result'][0]['hotel_data']['hotel_type_id'],
                    dataType: 'json',
                    async: false,
                    crossDomain: true,
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Authorization': 'Basic ' + btoa(username + ':' + password)
                    },
                    success: function (data) {
                        hoteltype = data['result'][0]['name'];
                    }
                });

                var dis = data['result'][0]['hotel_data']['hotel_description'];
                var xs = dis.split(".");
                dis = xs[0] + '.';

                var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><br><span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + '</span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lri" style="float: left;"><p id="rate-txt">' + rescor + '</p></div></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

                $('#details').append(dataset);
                // $('.wrap').show();
                // $('#loaddiv').hide();
            }
        });
    }

}


// load available


function loadavailable(destination, from, to) {
    tempwhere = destination;
    destinationsample=tempwhere;
    // console.log(destination, from, to);
    cityid = 0;
    destinationtype = "";

    for (var x = 0; x < cityarray.length; x++) {
        for (var y = 0; y < cityarray[x]['result'].length; y++) {

            if (cityarray[x]['result'][y]['name'] === destination) {
                destinationtype = "city_ids";
                cityid = cityarray[x]['result'][y]['city_id'];

                break;

            }
        }
    }

    if (destinationtype == "") {
        // console.log("district")
        for (var x = 0; x < districtarray['result'].length; x++) {

            if (districtarray['result'][x]['name'] == destination) {
                destinationtype = "city_ids";
                cityid = districtarray['result'][x]['city_id'];

                break;
            }

        }
    }

    if (destinationtype == "") {
        // console.log("region")
        for (var x = 0; x < regionarray['result'].length; x++) {

            if (regionarray['result'][x]['name'] == destination) {
                destinationtype = "region_ids";
                cityid = regionarray['result'][x]['region_id'];

                break;
            }

        }
    }

    console.log(cityid);
    loadspecific(destinationtype, cityid, from, to);
}


function loadspecific(destinationtype, cityid, from, to) {
    // console.log(destinationtype, cityid, from, to);


    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotelAvailability?checkin=' + from + '&checkout=' + to + '&' + destinationtype + '=' + cityid + '&room1=A,A&extras=room_details,hotel_details,hotel_amenities,payment_terms&offset=0&rows=1000',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {
            // console.log(data);
            if (data['result'].length > 0) {
                $('#prpertfound').html('' + tempwhere + ': ' + data['result'].length + ' properties found ');
                // console.log(data);
                 loadpagination2(data)
                // loadspecdata(data);
                dataforsuperb = data;
            } else {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                // $('.wrap').show();
                // $('#loaddiv').hide();
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);

            }
        }, error: function (error) {
            $('#prpertfound').html('There Are No Found Any Result For Your Request');
            var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
            $('#details').append(god);

            // for (var a = 0; a < 10; a++) {
            //     var ini = '<div id="content-init"><img src="Capture.PNG" alt="" style="width: 100%; height: 100%; border-radius: 5px;"></div>';
            //     $('#details').append(ini);
            // }

            // $('.wrap').show();
            // $('#loaddiv').hide();
        }
    });
}

function loadspecdata(data) {
    var uniqdata;
    var roomtype;
    for (var x = 0; x < 10; x++) {

        var roomtypeid = data[x]['rooms'][0]['room_type_id'];
        var roomtypename = data[x]['rooms'][0]['room_name'];
        var roomcount = data[x]['rooms'][0]['num_rooms_available_at_this_price'];
        var roomprice = data[x]['rooms'][0]['price'];

        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/roomTypes?room_type_ids=' + data[x]['rooms'][0]['room_type_id'],
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                // console.log(data);
                roomtype = data['result'][0]['name'];
            }
        });


        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + data[x]['hotel_id'] + '&extras=hotel_facilities,hotel_info,hotel_photos,hotel_description',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                uniqdata = data;
            }
        });


        var star = "";
        var bool = false;
        if (uniqdata['result'][0]['hotel_data']['class'] > 0) {
            bool = true;
            for (var ab = 0; ab < uniqdata['result'][0]['hotel_data']['class']; ab++) {
                star = star + '<i class="fas fa-star"></i>';
            }
        } else {

        }

        if (bool) {

            star = star + '&nbsp;<span id="finger"><i class="fas fa-hand-point-right"></i></span>';
        }


        var ratingtype = "";
        var hoteldatatypefont = uniqdata['result'][0]['hotel_data']['review_score'];

        if (hoteldatatypefont > 9) {
            ratingtype = "Superb";
        } else if (hoteldatatypefont > 8) {
            ratingtype = "Very Good";
        } else if (hoteldatatypefont > 7) {
            ratingtype = "Good";
        } else if (hoteldatatypefont > 6) {
            ratingtype = "Pleasant";
        } else {
            ratingtype = "Pleasant";
        }

        var rescor;

        if (uniqdata['result'][0]['hotel_data']['review_score'] != null) {
            rescor = uniqdata['result'][0]['hotel_data']['review_score'];
        } else {
            rescor = 0;
        }

        var ccr = "";

        if (uniqdata['result'][0]['hotel_data']['creditcard_required'] == false) {
            ccr = '<p id="posible-credit"><i class="far fa-credit-card"></i>Reservation possible without a credit card</p>';
        }

        var facil = "";
        var ok = false;

        for (var load = 0; load < uniqdata['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
            if (uniqdata['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 146) {
                facil = '<div id="label1">BeachFront</div>';
                ok = true;
                break;
            }
        }


        var brin = "";
        if (ok == false) {
            for (var load = 0; load < uniqdata['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                if (uniqdata['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 43) {
                    facil = '<div id="label2">Breakfast included</div>';
                    brin = '<span id="brin">Breakfast included</span>'
                    ok = true;
                    break;
                }
            }
        }


        var roomtypespan;

        if (roomtypeid == 8 || roomtypeid == 9 || roomtypeid == 23) {
            roomtypespan = '<span id="roomtypes">' + roomtype + '</span>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i><br>';
        } else if (roomtypeid == 7) {
            roomtypespan = '<span id="roomtypes">' + roomtype + '</span>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i><br>';
        } else if (roomtypeid === 1 || roomtypeid == 11 || roomtypeid == 13 || roomtypeid == 24 || roomtypeid == 27 || roomtypeid == 29 || roomtypeid == 30) {
            roomtypespan = '<span id="roomtypes">' + roomtype + '</span>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i>&nbsp;<i class="fas fa-user"></i><br>';
        } else {
            roomtypespan = '<span id="roomtypes">' + roomtype + '</span>&nbsp;<i class="fas fa-user"></i><br>';
        }

        var roomnameset = '<span id="roomnameid">' + roomtypename + '</span><br>';
        var roomcountet = ''
        var allset = '';


        if (roomcount < 5) {
           if (roomcount==1){
               roomcountet = '<span id="roomcountset"> only ' + roomcount + ' room left! </span><br>';
           } else{
               roomcountet = '<span id="roomcountset"> only ' + roomcount + ' rooms left! </span><br>';
           }
            allset = roomtypespan + roomnameset + roomcountet;
        } else if (roomcount == 0) {
            allset = '<span style="color: crimson; font-size: 15px;">You Mised It..</span>';
        } else {
            allset = roomtypespan + roomnameset + roomcountet;
        }


        var disc = uniqdata['result'][0]['hotel_data']['hotel_description'];
        var xsc = disc.split(".");
        disc = xsc[0] + '.';
        console.log('discribe:-'+disc);
        console.log(uniqdata['result'][0]['hotel_data']['hotel_description']);



        var pr = roomprice;
        var pri = '<span id="pri">US$' + pr + '</span>'
        var ini = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + uniqdata['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;margin-top: 10px;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="l-hotel-name" onclick="forindiv(this)" class="' + uniqdata['result'][0]['hotel_id'] + '">' + uniqdata['result'][0]['hotel_data']['name'] + '</span><div style="margin-left:5px; display:inline;"> <span id="l-start">' + star + '</span></div><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span> <span id="address-txt">' + uniqdata['result'][0]['hotel_data']['address'] + ',' + uniqdata['result'][0]['hotel_data']['city'] +'</span><p id="welcome-msg">'+disc+'</p>' + ccr + '</div> <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div id="btn-show-price2"><input type="button" value="See Availability" class="btn btn-primary btn-sh2" id="'+uniqdata['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div> </div></div><div id="extra-detail" class="row" style="margin: 0px; padding: 0px;"><div id="l" class="col-sm-12 col-xs-12 col-md-10 col-lg-8">' + allset + '</div><div id="r" class="col-sm-12 col-xs-12 col-md-2 col-lg-4">' + pri + '<hr style="background: none; border: none;">' + brin + '</div></div></div></div> </div> </div> </div> </div>';
        $('#details').append(ini);

        // $('.wrap').show();
        // $('#loaddiv').hide();


    }

}


function forindiv(event) {

    var checkin1 = $('#datepick1').val();
    var checkout1 = $('#datepick2').val();
    var checkin2 = $('.dp1').val();
    var checkout2 = $('.dp2').val();

    var varfrom;
    var varto;

    var vwhere = $('.destiny1').val();
    var vchild = $('.child1').val();
    var vroom = $('.room1').val();
    var vadult = $('.adult1').val();

    if (vwhere == undefined) {
        vwhere = $('.destiny2').val();
    }

    if (vroom == undefined) {
        vroom = $('.room2').val();
    }

    if (vadult == undefined) {
        vadult = $('.adult2').val();
    }

    if (checkin1 != "" && checkout1 != "") {
        varfrom = checkin1;
        varto = checkout1;
        var a = varfrom.split("/");
        if (a.length > 1) {
            varfrom = a[2] + '-' + a[0] + '-' + a[1];
            var a = varto.split("/");
            varto = a[2] + '-' + a[0] + '-' + a[1];
        }

        if (vchild == undefined) {
            vchild = $('.child2').val();

            if (checkin2 != undefined && checkout2 != undefined) {
                varfrom = checkin2;
                varto = checkout2;
                var a = varfrom.split("/");
                if (a.length > 1) {
                    varfrom = a[2] + '-' + a[0] + '-' + a[1];
                    var a = varto.split("/");
                    varto = a[2] + '-' + a[0] + '-' + a[1];
                }
            }

        }
    }

    var theClass = $(event).attr('class');
    window.location.assign('http://visit2srilanka.com/hotel-view.php?hotelid=' + theClass + '&from=' + varfrom + '&to=' + varto + '&child=' + vchild + '&adult=' + vadult + '&where=' + vwhere + '&room=' + vroom + '&status=false');
}


// End search btn click


// filters

$(document).ready(function () {
    $('#freewifi').val(this.checked);

    $('#freewifi').change(function () {
        if (this.checked) {
            loadhotels(3);
        }
        $('#freewifi').val(this.checked);
    });
});

$(document).ready(function () {
    $('#airportsutle').val(this.checked);

    $('#airportsutle').change(function () {
        if (this.checked) {
            loadhotels(139);
        }
        $('#airportsutle').val(this.checked);
    });
});

$(document).ready(function () {
    $('#beachfront').val(this.checked);

    $('#beachfront').change(function () {
        if (this.checked) {
            loadhotels(146);
        }
        $('#beachfront').val(this.checked);
    });
});

$(document).ready(function () {
    $('#beachfront1').val(this.checked);

    $('#beachfront1').change(function () {
        if (this.checked) {
            loadhotels(146);
        }
        $('#beachfront1').val(this.checked);
    });
});


$(document).ready(function () {
    $('#fitnesscenter').val(this.checked);

    $('#fitnesscenter').change(function () {
        if (this.checked) {
            loadhotels(11);
        }
        $('#fitnesscenter').val(this.checked);
    });
});

$(document).ready(function () {
    $('.fitnesscenter').val(this.checked);

    $('.fitnesscenter').change(function () {
        if (this.checked) {
            loadhotels(11);
        }
        $('#fitnesscenter').val(this.checked);
    });
});

$(document).ready(function () {
    $('#fitnesscenter1').val(this.checked);

    $('#fitnesscenter1').change(function () {
        if (this.checked) {
            loadhotels(11);
        }
        $('#fitnesscenter1').val(this.checked);
    });
});

$(document).ready(function () {
    $('#golscours').val(this.checked);

    $('#golscours').change(function () {
        if (this.checked) {
            loadhotels(2);
        }
        $('#golscours').val(this.checked);
    });
});

$(document).ready(function () {
    $('#library').val(this.checked);

    $('#library').change(function () {
        if (this.checked) {
            loadhotels(24);
        }
        $('#library').val(this.checked);
    });
});

$(document).ready(function () {
    $('#massage').val(this.checked);

    $('#massage').change(function () {
        if (this.checked) {
            loadhotels(21);
        }
        $('#massage').val(this.checked);
    });
});

$(document).ready(function () {
    $('#teniscourt').val(this.checked);

    $('#teniscourt').change(function () {
        if (this.checked) {
            loadhotels(9);
        }
        $('#teniscourt').val(this.checked);
    });
});

$(document).ready(function () {
    $('#souna').val(this.checked);

    $('#souna').change(function () {
        if (this.checked) {
            loadhotels(10);
        }
        $('#souna').val(this.checked);
    });
});

$(document).ready(function () {
    $('#fishing').val(this.checked);

    $('#fishing').change(function () {
        if (this.checked) {
            loadhotels(19);
        }
        $('#fishing').val(this.checked);
    });
});

$(document).ready(function () {
    $('#gameroom').val(this.checked);

    $('#gameroom').change(function () {
        if (this.checked) {
            loadhotels(29);
        }
        $('#gameroom').val(this.checked);
    });
});

$(document).ready(function () {
    $('#casino').val(this.checked);

    $('#casino').change(function () {
        if (this.checked) {
            loadhotels(30);
        }
        $('#casino').val(this.checked);
    });
});

$(document).ready(function () {
    $('#spaand').val(this.checked);

    $('#spaand').change(function () {
        if (this.checked) {
            loadhotels(54);
        }
        $('#spaand').val(this.checked);
    });
});

$(document).ready(function () {
    $('#biliads').val(this.checked);

    $('#biliads').change(function () {
        if (this.checked) {
            loadhotels(2);
        }
        $('#biliads').val(this.checked);
    });
});

$(document).ready(function () {
    $('#caroke').val(this.checked);

    $('#caroke').change(function () {
        if (this.checked) {
            loadhotels(59);
        }
        $('#caroke').val(this.checked);
    });
});

$(document).ready(function () {
    $('#tbltenis').val(this.checked);

    $('#tbltenis').change(function () {
        if (this.checked) {
            loadhotels(2);
        }
        $('#tbltenis').val(this.checked);
    });
});

$(document).ready(function () {
    $('#hottub').val(this.checked);

    $('#hottub').change(function () {
        if (this.checked) {
            loadhotels(21);
        }
        $('#hottub').val(this.checked);
    });
});

$(document).ready(function () {
    $('#frontdesc').val(this.checked);

    $('#frontdesc').change(function () {
        if (this.checked) {
            loadhotels(23);
        }
        $('#frontdesc').val(this.checked);
    });
});


$(document).ready(function () {
    $('#parking').val(this.checked);

    $('#parking').change(function () {
        if (this.checked) {
            loadhotels(1);
        }
        $('#parking').val(this.checked);
    });
});
$(document).ready(function () {
    $('#resturent').val(this.checked);

    $('#resturent').change(function () {
        if (this.checked) {
            loadhotels(3);
        }
        $('#resturent').val(this.checked);
    });
});
$(document).ready(function () {
    $('#petallowd').val(this.checked);

    $('#petallowd').change(function () {
        if (this.checked) {
            loadhotels(4);
        }
        $('#petallowd').val(this.checked);
    });
});
$(document).ready(function () {
    $('#roomservice').val(this.checked);

    $('#roomservice').change(function () {
        if (this.checked) {
            loadhotels(5);
        }
        $('#roomservice').val(this.checked);
    });
});
$(document).ready(function () {
    $('#nosmoke').val(this.checked);

    $('#nosmoke').change(function () {
        if (this.checked) {
            loadhotels(29);
        }
        $('#nosmoke').val(this.checked);
    });
});
$(document).ready(function () {
    $('#airport').val(this.checked);

    $('#airport').change(function () {
        if (this.checked) {
            loadhotels(17);
        }
        $('#airport').val(this.checked);
    });
});

$(document).ready(function () {
    $('#facilitydisable').val(this.checked);

    $('#facilitydisable').change(function () {
        if (this.checked) {
            loadhotels(25);
        }
        $('#facilitydisable').val(this.checked);
    });
});
$(document).ready(function () {
    $('#familtyroom').val(this.checked);

    $('#familtyroom').change(function () {
        if (this.checked) {
            loadhotels(28);
        }
        $('#familtyroom').val(this.checked);
    });
});
$(document).ready(function () {
    $('#spa').val(this.checked);

    $('#spa').change(function () {
        if (this.checked) {
            loadhotels(54);
        }
        $('#spa').val(this.checked);
    });
});
$(document).ready(function () {
    $('#freeifi').val(this.checked);

    $('#freeifi').change(function () {
        if (this.checked) {
            loadhotels(107);
        }
        $('#freeifi').val(this.checked);
    });
});
$(document).ready(function () {
    $('#eletric').val(this.checked);

    $('#eletric').change(function () {
        if (this.checked) {
            loadhotels(182);
        }
        $('#eletric').val(this.checked);
    });
});
$(document).ready(function () {
    $('#swimingpool').val(this.checked);

    $('#swimingpool').change(function () {
        if (this.checked) {
            loadhotels(301);
        }
        $('#swimingpool').val(this.checked);
    });
});

//


function loadhotels(val) {

    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotels?' + destinationtype + '=' + cityid + '&hotel_facility_type_ids=' + val,
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {
            // console.log(data);
            if (data['result'].length > 0) {
                $('#prpertfound').html('' + tempwhere + ': ' + data['result'].length + ' properties found ');
                // console.log(data);
                loadpagination(data);
                // loadAll(data);
            } else {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');

                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);



                // for (var a = 0; a < 10; a++) {
                //     var ini = '<div id="content-init"><img src="Capture.PNG" alt="" style="width: 100%; height: 100%; border-radius: 5px;"></div>';
                //     $('#details').append(ini);
                // }
                // $('.wrap').show();
                // $('#loaddiv').hide();
            }
        }, error: function (error) {
            $('#prpertfound').html('There Are No Found Any Result For Your Request');

            var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
            $('#details').append(god);



            // for (var a = 0; a < 10; a++) {
            //     var ini = '<div id="content-init"><img src="Capture.PNG" alt="" style="width: 100%; height: 100%; border-radius: 5px;"></div>';
            //     $('#details').append(ini);
            // }

            // $('.wrap').show();
            // $('#loaddiv').hide();
        }
    });


}


// load district

$(document).ready(function () {
    $('#ColomboDistrict').val(this.checked);

    $('#ColomboDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Colombo District");
        }
        $('#ColomboDistrict').val(this.checked);
    });
});


$(document).ready(function () {
    $('#HambantotaDistrict').val(this.checked);

    $('#HambantotaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Hambantota District");
        }
        $('#HambantotaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#MullaitivuDistrict').val(this.checked);

    $('#MullaitivuDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Mullaitivu District");
        }
        $('#MullaitivuDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#VavuniyaDistrict').val(this.checked);

    $('#VavuniyaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Vavuniya District");
        }
        $('#VavuniyaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#PuttalamDistrict').val(this.checked);

    $('#PuttalamDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Puttalam District");
        }
        $('#PuttalamDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#KurunegalaDistrict').val(this.checked);

    $('#KurunegalaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Kurunegala District");
        }
        $('#KurunegalaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#GampahaDistrict').val(this.checked);

    $('#GampahaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Gampaha District");
        }
        $('#GampahaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#KalutaraDistrict').val(this.checked);

    $('#KalutaraDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Kalutara District");
        }
        $('#KalutaraDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#AnuradhapuraDistrict').val(this.checked);

    $('#AnuradhapuraDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Anuradhapura District");
        }
        $('#AnuradhapuraDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#PolonnaruwaDistrict').val(this.checked);

    $('#PolonnaruwaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Polonnaruwa District");
        }
        $('#PolonnaruwaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#MataleDistrict').val(this.checked);

    $('#MataleDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Matale District");
        }
        $('#MataleDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#KandyDistrict').val(this.checked);

    $('#KandyDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Kandy District");
        }
        $('#KandyDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#NuwaraEliyaDistrict').val(this.checked);

    $('#NuwaraEliyaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Nuwara Eliya District");
        }
        $('#NuwaraEliyaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#KegalleDistrict').val(this.checked);

    $('#KegalleDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Kegalle District");
        }
        $('#KegalleDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#RatnapuraDistrict').val(this.checked);

    $('#RatnapuraDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Ratnapura District");
        }
        $('#RatnapuraDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#TrincomaleeDistrict').val(this.checked);

    $('#TrincomaleeDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Trincomalee District");
        }
        $('#TrincomaleeDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#BatticaloaDistrict').val(this.checked);

    $('#BatticaloaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Batticaloa District");
        }
        $('#BatticaloaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#AmparaDistrict').val(this.checked);

    $('#AmparaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Ampara District");
        }
        $('#AmparaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#JaffnaDistrict').val(this.checked);

    $('#JaffnaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Jaffna District");
        }
        $('#JaffnaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#KilinochchiDistrict').val(this.checked);

    $('#KilinochchiDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Kilinochchi District");
        }
        $('#KilinochchiDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#MannarDistrict').val(this.checked);

    $('#MannarDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Mannar District");
        }
        $('#MannarDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#BadullaDistrict').val(this.checked);

    $('#BadullaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Badulla District");
        }
        $('#BadullaDistrict').val(this.checked);
    });
});

$(document).ready(function () {
    $('#MonaragalaDistrict').val(this.checked);

    $('#MonaragalaDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Monaragala District");
        }
        $('#MonaragalaDistrict').val(this.checked);
    });
});
$(document).ready(function () {
    $('#MataraDistrict').val(this.checked);

    $('#MataraDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Matara District");
        }
        $('#MataraDistrict').val(this.checked);
    });
});
$(document).ready(function () {
    $('#GalleDistrict').val(this.checked);

    $('#GalleDistrict').change(function () {
        if (this.checked) {
            loaddistrictwice("Galle District");
        }
        $('#GalleDistrict').val(this.checked);
    });
});


function loaddistrictwice(val) {
    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    loadHotelNameWice(val);

}

// load hoteltype wice


$(document).ready(function () {
    $('#hotels').val(this.checked);

    $('#hotels').change(function () {
        if (this.checked) {
            loadhoteltypewice(204);
        }
        $('#hotels').val(this.checked);
    });
});

$(document).ready(function () {
    $('#hotels1').val(this.checked);

    $('#hotels1').change(function () {
        if (this.checked) {
            loadhoteltypewice(204);
        }
        $('#hotels1').val(this.checked);
    });
});

$(document).ready(function () {
    $('#apartments').val(this.checked);

    $('#apartments').change(function () {
        if (this.checked) {
            loadhoteltypewice(201);
        }
        $('#apartments').val(this.checked);
    });
});

$(document).ready(function () {
    $('#bedandbrekfirst').val(this.checked);

    $('#bedandbrekfirst').change(function () {
        if (this.checked) {
            loadhoteltypewice(208);
        }
        $('#bedandbrekfirst').val(this.checked);
    });
});

$(document).ready(function () {
    $('#guesthouse').val(this.checked);

    $('#guesthouse').change(function () {
        if (this.checked) {
            loadhoteltypewice(216);
        }
        $('#guesthouse').val(this.checked);
    });
});

$(document).ready(function () {
    $('#homestays').val(this.checked);

    $('#homestays').change(function () {
        if (this.checked) {
            loadhoteltypewice(222);
        }
        $('#homestays').val(this.checked);
    });
});

$(document).ready(function () {
    $('#holidayhomes').val(this.checked);

    $('#holidayhomes').change(function () {
        if (this.checked) {
            loadhoteltypewice(220);
        }
        $('#holidayhomes').val(this.checked);
    });
});

$(document).ready(function () {
    $('#villa').val(this.checked);

    $('#villa').change(function () {
        if (this.checked) {
            loadhoteltypewice(213);
        }
        $('#villa').val(this.checked);
    });
});

$(document).ready(function () {
    $('#resorts').val(this.checked);

    $('#resorts').change(function () {
        if (this.checked) {
            loadhoteltypewice(206);
        }
        $('#resorts').val(this.checked);
    });
});

$(document).ready(function () {
    $('#lodges').val(this.checked);

    $('#lodges').change(function () {
        if (this.checked) {
            loadhoteltypewice(221);
        }
        $('#lodges').val(this.checked);
    });
});

$(document).ready(function () {
    $('#countryhous').val(this.checked);

    $('#countryhous').change(function () {
        if (this.checked) {
            loadhoteltypewice(223);
        }
        $('#countryhous').val(this.checked);
    });
});

$(document).ready(function () {
    $('#capculehotel').val(this.checked);

    $('#capculehotel').change(function () {
        if (this.checked) {
            loadhoteltypewice(225);
        }
        $('#capculehotel').val(this.checked);
    });
});


function loadhoteltypewice(val) {


    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotels?' + destinationtype + '=' + cityid + '&hotel_type_ids=' + val,
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {
            // console.log(data);
            $('#prpertfound').html('' + destinationsample + ': ' + data['result'].length + ' properties found ');

            if (data['result'].length > 0) {
                loadpagination(data);
                // loadAll(data);

            } else {
                // $('#loaddiv').hide();
                // $('.wrap').show();
            }

        }
    });
}


function lowestprice(destination) {

    cityid = 0;
    destinationtype = "";

    for (var x = 0; x < cityarray.length; x++) {
        for (var y = 0; y < cityarray[x]['result'].length; y++) {

            if (cityarray[x]['result'][y]['name'] === destination) {
                destinationtype = "city_ids";
                cityid = cityarray[x]['result'][y]['city_id'];
                break;
            }
        }
    }

    var checkin = $('#datepick1').val();
    var checkout = $('#datepick2').val();

    if (checkin == '' || checkout == '') {    
        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var checkin = d.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        var month = tomorrow.getMonth() + 1;
        var day = tomorrow.getDate();
        var checkout = tomorrow.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;
    } else {
        if (typeof checkin != 'undefined') {
            var a = checkin.split("/");
            if (a.length > 1) {
                checkin = a[2] + '-' + a[0] + '-' + a[1];
            }
        }

        if (typeof checkout != 'undefined') {
            var a = checkout.split("/");
            if (a.length > 1) {
                checkout = a[2] + '-' + a[0] + '-' + a[1];
            }
        }
    }

    $('#details').empty();

    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.5/json/hotelAvailability?checkin='+checkin+'&checkout='+checkout+'&city_ids='+cityid+'&room1=A,A&extras=room_details,hotel_details',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {
            // console.log(data);
            $('#prpertfound').html('' + destinationsample + ': ' + data['result'].length + ' properties found ');

            var res = [];
            $.each(data['result'], function(index, value){
                var price = value['price'];
                res[index] = price;
            });

            var sortedArr = res.sort(function(a, b) { 
                return a < b ? -1 : (a > b ? 1 : 0);
            });

            // var result = [];

            // $.each(sortedArr, function(index, price){

            //     $.each(data['result'], function(i, v) {

            //         if (typeof v['price'] != 'undefined' && price == v['price']) {
            //             result.push(v);
            //             data['result'].splice(i, 1);                        
            //         }
            //     });
            // });

            // data['result'] = result;

            if (data['result'].length > 0) {
                loadpagination(data);
                // loadAll(data);

            } else {
                // $('#loaddiv').hide();
                // $('.wrap').show();
            }

        }
    });
}


// top filters

$('.A').click(function () {
    // $('#loaddiv').show();
    // $('.wrap').hide();

    $('#details').empty();
    loadHotelNameWice($('.destiny1').val());
});

$('.B').click(function () {

    $('#details').empty();
    // loadHotelsuperbvice(7);
    lowestprice($('.destiny1').val());
});


$('.top').click(function () {
    // $('#loaddiv').show();
    // $('.wrap').hide();
// console.log('klk');
    $('#details').empty();
     loadHotelNameWice($('#destiny').val());
});

$('.pri').click(function () {

    $('#details').empty();
    loadHotelsuperbvice(7);
});




$(document).ready(function () {
    $('#verygood').val(this.checked);

    $('#verygood').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(8);
        }
        $('#verygood').val(this.checked);
    });
});

$(document).ready(function () {
    $('#sup').val(this.checked);

    $('#sup').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(9);
        }
        $('#sup').val(this.checked);
    });
});

$(document).ready(function () {
    $('#five').val(this.checked);

    $('#five').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(5);
        }
        $('#five').val(this.checked);
    });
});

$(document).ready(function () {
    $('#six').val(this.checked);

    $('#six').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(6);
        }
        $('#six').val(this.checked);
    });
});

$(document).ready(function () {
    $('#seven').val(this.checked);

    $('#seven').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(7);
        }
        $('#seven').val(this.checked);
    });
});

$(document).ready(function () {
    $('#eight').val(this.checked);

    $('#eight').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(8);
        }
        $('#eight').val(this.checked);
    });
});

$(document).ready(function () {
    $('#nine').val(this.checked);

    $('#nine').change(function () {
        if (this.checked) {
            loadHotelsuperbvice(9);
        }
        $('#nine').val(this.checked);
    });
});

$(document).ready(function () {
    $('#mount').val(this.checked);

    $('#mount').change(function () {
        if (this.checked) {
            loadHotelNameWice('Mount Lavinia');
        }
        $('#mount').val(this.checked);
    });
});

var temp1 = 0;
var temp2 = 0;

function loadHotelsuperbvice(val) {
    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    for (var superb = 0; superb < 10; superb++) {

        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + dataforsuperb['result'][temp1]['hotel_id'] + '&extras=hotel_info',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                // console.log(temp1);

                var valueforlog = data['result'][0]['hotel_data']['review_score'];
                if (valueforlog >= val) {
                    // console.log(valueforlog);
                    // console.log(superb);
                    loadAllforstarrate(data['result'][0]['hotel_id']);
                } else {
                    superb--;
                }
            }
        });
        temp1++;


    }


}


function loadAllforstarrate(num) {

    $.ajax({
        type: 'GET',
        url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + num + '&extras=hotel_facilities,hotel_info,hotel_photos,hotel_description',
        dataType: 'json',
        async: false,
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Authorization': 'Basic ' + btoa(username + ':' + password)
        },
        success: function (data) {


            // console.log(data);

            var star = "";
            var bool = false;
            if (data['result'][0]['hotel_data']['class'] > 0) {
                bool = true;
                for (var ab = 0; ab < data['result'][0]['hotel_data']['class']; ab++) {
                    star = star + '<i class="fas fa-star"></i>';
                }
            } else {

            }

            if (bool) {

                star = star + '&nbsp;<span id="finger"><i class="fas fa-hand-point-right"></i></span>';
            }


            var ratingtype = "";
            var hoteldatatypefont = data['result'][0]['hotel_data']['review_score'];

            if (hoteldatatypefont > 9) {
                ratingtype = "Superb";
            } else if (hoteldatatypefont > 8) {
                ratingtype = "Very Good";
            } else if (hoteldatatypefont > 7) {
                ratingtype = "Good";
            } else if (hoteldatatypefont > 6) {
                ratingtype = "Pleasant";
            } else {
                ratingtype = "Pleasant";
            }

            var rescor;

            if (data['result'][0]['hotel_data']['review_score'] != null) {
                rescor = data['result'][0]['hotel_data']['review_score'];
            } else {
                rescor = 0;
            }

            var ccr = "";

            if (data['result'][0]['hotel_data']['creditcard_required'] == false) {
                ccr = '<p id="posible-credit"><i class="far fa-credit-card"></i>Reservation possible without a credit card</p>';
            }

            var facil = "";
            var ok = false;

            for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 146) {
                    facil = '<div id="label1">BeachFront</div>';
                    ok = true;
                    break;
                }
            }

            if (ok == false) {
                for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                    if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 43) {
                        facil = '<div id="label2">Breakfast included</div>';
                        ok = true;
                        break;
                    }
                }
            }


            var hoteltype = "";
            $.ajax({
                type: 'GET',
                url: 'https://distribution-xml.booking.com/2.4/json/hotelTypes?hotel_type_ids=' + data['result'][0]['hotel_data']['hotel_type_id'],
                dataType: 'json',
                async: false,
                crossDomain: true,
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Authorization': 'Basic ' + btoa(username + ':' + password)
                },
                success: function (data) {
                    hoteltype = data['result'][0]['name'];
                }
            });

            var dis = data['result'][0]['hotel_data']['hotel_description'];
            var xs = dis.split(".");
            dis = xs[0] + '.';
            console.log('discribe:-'+dis);
            console.log(data['result'][0]['hotel_data']['hotel_description']);

            var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><br><span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + ' -<a href="#"> Show on map</a></span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lri" style="float: left;"><p id="rate-txt">' + rescor + '</p></div></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

            $('#details').append(dataset);


            // $('#loaddiv').hide();
            // $('.wrap').show();
        }
    });


}


// star

$(document).ready(function () {
    $('#s1').val(this.checked);

    $('#s1').change(function () {
        if (this.checked) {
            loadsuperstar(1);
        }
        $('#s1').val(this.checked);
    });
});

$(document).ready(function () {
    $('#s2').val(this.checked);

    $('#s2').change(function () {
        if (this.checked) {
            loadsuperstar(2);
        }
        $('#s2').val(this.checked);
    });
});

$(document).ready(function () {
    $('#s3').val(this.checked);

    $('#s3').change(function () {
        if (this.checked) {
            loadsuperstar(3);
        }
        $('#s3').val(this.checked);
    });
});

$(document).ready(function () {
    $('#s4').val(this.checked);

    $('#s4').change(function () {
        if (this.checked) {
            loadsuperstar(4);
        }
        $('#s4').val(this.checked);
    });
});

$(document).ready(function () {
    $('#s5').val(this.checked);

    $('#s5').change(function () {
        if (this.checked) {
            loadsuperstar(5);
        }
        $('#s5').val(this.checked);
    });
});

$(document).ready(function () {
    $('#s6').val(this.checked);

    $('#s6').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#s6').val(this.checked);
    });
});

// star


$('.C').click(function () {

    loadhoteltypewice(201);
});
$('.sta').click(function () {

    loadhoteltypewice(201);
});

var temp3 = 0;
var temp4 = 0;

function loadsuperstar(val) {

    // $('#loaddiv').show();
    // $('.wrap').hide();
    //
    $('#details').empty();


    for (var superb = 0; superb < 10; superb++) {

        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + dataforsuperb['result'][temp3]['hotel_id'] + '&extras=hotel_info',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                // console.log(temp3);

                var valueforlog = data['result'][0]['hotel_data']['class'];
                if (valueforlog == val) {
                    // console.log(valueforlog);
                    // console.log(superb);
                    loadAllforstarrate(data['result'][0]['hotel_id']);
                } else {
                    superb--;
                }
            }
        });

        temp3++;


    }


}


// room facility

$(document).ready(function () {
    $('#kitchen').val(this.checked);

    $('#kitchen').change(function () {
        if (this.checked) {
            loadroomfac(2);
        }
        $('#kitchen').val(this.checked);
    });
});

$(document).ready(function () {
    $('#privatebath').val(this.checked);

    $('#privatebath').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#privatebath').val(this.checked);
    });
});

$(document).ready(function () {
    $('#aircondition').val(this.checked);

    $('#aircondition').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#aircondition').val(this.checked);
    });
});

$(document).ready(function () {
    $('#bath').val(this.checked);

    $('#bath').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#bath').val(this.checked);
    });
});

$(document).ready(function () {
    $('#terres').val(this.checked);

    $('#terres').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#terres').val(this.checked);
    });
});

$(document).ready(function () {
    $('#balcony').val(this.checked);

    $('#balcony').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#balcony').val(this.checked);
    });
});

$(document).ready(function () {
    $('#flattv').val(this.checked);

    $('#flattv').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#flattv').val(this.checked);
    });
});

$(document).ready(function () {
    $('#washingmashin').val(this.checked);

    $('#washingmashin').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#washingmashin').val(this.checked);
    });
});

$(document).ready(function () {
    $('#patio').val(this.checked);

    $('#patio').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#patio').val(this.checked);
    });
});

$(document).ready(function () {
    $('#soundprof').val(this.checked);

    $('#soundprof').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#soundprof').val(this.checked);
    });
});

$(document).ready(function () {
    $('#view').val(this.checked);

    $('#view').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#view').val(this.checked);
    });
});

$(document).ready(function () {
    $('#seawiew').val(this.checked);

    $('#seawiew').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#seawiew').val(this.checked);
    });
});

$(document).ready(function () {
    $('#electricke').val(this.checked);

    $('#electricke').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#electricke').val(this.checked);
    });
});

$(document).ready(function () {
    $('#electricke').val(this.checked);

    $('#electricke').change(function () {
        if (this.checked) {
            loadsuperstar(0);
        }
        $('#electricke').val(this.checked);
    });
});


$('.D').click(function () {
    loadhotels(146);
});

$('.starprice').click(function () {
    loadhotels(146);
});

$('.E').click(function () {

    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    loadHotelNameWice('Colombo');
});

$('.topreview').click(function () {

    // $('#loaddiv').show();
    // $('.wrap').hide();
    $('#details').empty();

    loadHotelNameWice('Colombo');
});


var temp5 = 0;
var temp6 = 0;

function loadroomfac(val) {
    // console.log('ok');
    // $('#loaddiv').show();
    // $('.wrap').hide();
    //
    $('#details').empty();


    for (var superb = 0; superb < 10; superb++) {

        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + dataforsuperb['result'][temp5]['hotel_id'] + '&extras=room_facilities',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                // console.log(data)
                // console.log(temp5);

                var valueforlog = data['result'][0]['hotel_data']['class'];
                if (valueforlog == val) {
                    // console.log(valueforlog);
                    // console.log(superb);
                    loadAllforstarrate(data['result'][0]['hotel_id']);
                } else {
                    superb--;
                }
            }
        });

        temp5++;


    }


}

// room facility


function loadshowprice2(event) {

    var checkin1 = $('#datepick1').val();
    var checkout1 = $('#datepick2').val();
    var checkin2 = $('.dp1').val();
    var checkout2 = $('.dp2').val();

    var vchild;
    var vroom;
    var vadult;
    var vwhere;
    var varfrom;
    var varto;


    if (checkin1 == "" || checkout1 == "" || checkin2 == "" || checkout2 == "") {
        alert('pleace enter a date');
    } else {

        if (checkin1 != "" && checkout1 != "") {

            vwhere = $('.destiny1').val();
            vchild = $('.child1').val();
            vroom = $('.room1').val();
            vadult = $('.adult1').val();

            varfrom = checkin1;
            varto = checkout1;
            var a = varfrom.split("/");
            if (a.length > 1) {
                varfrom = a[2] + '-' + a[0] + '-' + a[1];
                var a = varto.split("/");
                varto = a[2] + '-' + a[0] + '-' + a[1];
            }

            console.log('A' + vwhere, vchild, vroom, vadult, varfrom, varto);

            if (vwhere == undefined) {
                vwhere = $('.destiny2').val();


            }
            if (vchild == undefined) {
                vchild = $('.child2').val();

                varfrom = checkin2;
                varto = checkout2;
                var a = varfrom.split("/");
                if (a.length > 1) {
                    varfrom = a[2] + '-' + a[0] + '-' + a[1];
                    var a = varto.split("/");
                    varto = a[2] + '-' + a[0] + '-' + a[1];
                }

            }
            if (vroom == undefined) {
                vroom = $('.room2').val();
            }
            if (vadult == undefined) {
                vadult = $('.adult2').val();
            }


            console.log('B' + vwhere, vchild, vroom, vadult, varfrom, varto);
        }


        var theClass = $(event).attr('id');
        console.log(theClass);
        window.location.assign('http://visit2srilanka.com/hotel-view.php?hotelid=' + theClass + '&from=' + varfrom + '&to=' + varto + '&child=' + vchild + '&adult=' + vadult + '&where=' + vwhere + '&room=' + vroom + '&status=true');

    }
}


// start hover img

function loadimgwice(event) {

    var img = $(event).attr('id');
    $('#img-id').attr('src', img);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function loadroomdata(dataforroom, event) {

    $('#detailsforroom').empty();

    var x = $(event).attr('class');

    var datafortable = js_data['result'][0]['room_data'][x];


    // console.log(datafortable);

    $('#mroomimg').attr('src', datafortable['room_photos'][0]['url_original']);
    $('#img-1').attr('src', datafortable['room_photos'][0]['url_original']);
    $('#img-2').attr('src', datafortable['room_photos'][1]['url_original']);
    $('#img-3').attr('src', datafortable['room_photos'][2]['url_original']);
    $('#img-4').attr('src', datafortable['room_photos'][3]['url_original']);


    $('#img-1').hover(function () {
        var val1 = $('#img-1').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-2').hover(function () {
        var val1 = $('#img-2').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-3').hover(function () {
        var val1 = $('#img-3').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-4').hover(function () {
        var val1 = $('#img-4').attr('src');
        $('#mroomimg').attr('src', val1);
    });

    for (var z = 0; z < datafortable['room_facilities'].length; z++) {
        if (datafortable['room_facilities'][z]['room_facility_type_id'] == 38) {
            $('#detailsforroom').append('<span style="font-size: 13px; margin-top: 10px;"><i class="fas fa-shower" style="font-size: 20px"></i>&nbsp;<span style="font-weight: bold; font-family: 13px">Private bathroom</span> </span><br><br>');
        }
        if (datafortable['room_facilities'][z]['room_facility_type_id'] == 108) {
            $('#detailsforroom').append(' <span style="font-size: 13px;"><i class="fas fa-umbrella-beach" style="font-size: 20px"></i>&nbsp;<span style="font-weight: bold; font-family: 13px">Sea View</span></span><br><br>');
        }
    }


    $('#detailsforroom').append('<span style="font-size: 13px; font-weight: bold">Room Size</span>&nbsp;<span style="font-size: 12px;">'+datafortable['room_info']['room_size']['metre_square']+ ' m <sup>2</sup> </span><br>');


    var spli=datafortable['room_description'].split('.');
    var dis=spli[0]+'. '+spli[1]+'. '+spli[2]



    $('#detailsforroom').append('<span style="font-size: 13px; text-align: justify; padding: 10px 10px 10px 10px;">'+dis+'</span><br>');


    $('#detailsforroom').append('<span style="font-size: 13px; font-weight: bold;">Room Facilities: </span><br>');


    $('#detailsforroom').append(' <ul id="rfac" type="square"></ul>');

    for (var z = 0; z < datafortable['room_facilities'].length; z++) {
        $('#rfac').append('<li style="font-size: 13px;"><i class="fab fa-squarespace" style="color: #393939; font-size: 12px; margin-right: 10px;"></i>'+datafortable['room_facilities'][z]['name']+'</li>');
    }









    document.getElementById('hidebtn').click();

}

function loadroomdatadetail(dataforroom, event) {

    $('.destiny3').val($('.destination').val());
    $('.dpicfrom3').val($('.checkin').val());
    $('.dpicto3').val($('.checkout').val());
    $('.adult3').val($('.adult').val());
    $('.child3').val($('.child').val());
    $('.room3').val($('.room').val());

    $('#detailsforroom').empty();

    var x = $(event).attr('class');

    var datafortable = dataforroom[x];

    $('#mroomimg').attr('src', datafortable['photos'][0]['url_original']);
    $('#img-1').attr('src', datafortable['photos'][0]['url_original']);
    $('#img-2').attr('src', datafortable['photos'][0]['url_original']);
    $('#img-3').attr('src', datafortable['photos'][0]['url_original']);
    $('#img-4').attr('src', datafortable['photos'][0]['url_original']);


    $('#img-1').hover(function () {
        var val1 = $('#img-1').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-2').hover(function () {
        var val1 = $('#img-2').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-3').hover(function () {
        var val1 = $('#img-3').attr('src');
        $('#mroomimg').attr('src', val1);
    });
    $('#img-4').hover(function () {
        var val1 = $('#img-4').attr('src');
        $('#mroomimg').attr('src', val1);
    });

    for (var z = 0; z < datafortable['facilities'].length; z++) {
        if (datafortable['facilities'][z] == "Shower") {
            $('#detailsforroom').append('<span style="font-size: 13px; margin-top: 10px;"><i class="fas fa-shower" style="font-size: 20px"></i>&nbsp;<span style="font-weight: bold; font-family: 13px">Private bathroom</span> </span><br><br>');
        }
        if (datafortable['facilities'][z] == "View") {
            $('#detailsforroom').append(' <span style="font-size: 13px;"><i class="fas fa-umbrella-beach" style="font-size: 20px"></i>&nbsp;<span style="font-weight: bold; font-family: 13px">Sea View</span></span><br><br>');
        }
    }


    $('#detailsforroom').append('<span style="font-size: 13px; font-weight: bold">Room Size</span>&nbsp;<span style="font-size: 12px;">'+datafortable['room_surface_in_feet2']+ ' m <sup>2</sup> </span><br>');


    var spli=datafortable['room_description'].split('.');
    var dis=spli[0]+'. '+spli[1]+'. '+spli[2]

    $('#detailsforroom').append('<span style="font-size: 13px; text-align: justify; padding: 10px 10px 10px 10px;">'+dis+'</span><br>');


    $('#detailsforroom').append('<span style="font-size: 13px; font-weight: bold;">Room Facilities: </span><br>');


    $('#detailsforroom').append(' <ul id="rfac" type="square"></ul>');

    for (var z = 0; z < datafortable['facilities'].length; z++) {
        $('#rfac').append('<li style="font-size: 13px;"><i class="fab fa-squarespace" style="color: #393939; font-size: 12px; margin-right: 10px;"></i>'+datafortable['facilities'][z]+'</li>');
    }






    document.getElementById('hidebtn').click();

}

// start pagination


function loadpagination(value) {

    var ifnot=false;

    $('#pag').empty();
    $('#pag').append('<ul id="pagination-demo" class="pagination-sm"></ul>');

     // console.log(value['result']);

    if (value['result'].length>10){
        var datacount =value['result'].length/10;
         // console.log(datacount);
        var arrayall=[];
        var arrtemp=[];
        var countertemp=0;
        for (var ab=0;ab<value['result'].length;ab++){
            arrtemp.push(value['result'][ab]);
            countertemp++;
            if (countertemp==10){
                countertemp=0;
                arrayall.push(arrtemp);
                arrtemp=[];
            }
        }

         console.log(arrayall);

        $('#pagination-demo').twbsPagination({
            totalPages: datacount,
            visiblePages: 6,
            next: 'Next',
            prev: 'Prev',
            onPageClick: function (event, page) {

                // $('.wrap').show();
                // $('#loaddiv').hide();
                $('#details').empty();

                if (ifnot==false) {
                    page=0;
                }
                ifnot=true;

                frompagination(arrayall[page]);
                $('#page-content').text('Page ' + page) + ' content here';
            }
        });

    }else{



        var arrayall=[];
        var arrtemp=[];
        var countertemp=0;
        for (var ab=0;ab<value['result'].length;ab++){
            arrtemp.push(value['result'][ab]);
            countertemp++;
            if (countertemp==value['result'].length){
                countertemp=0;
                arrayall.push(arrtemp);
                arrtemp=[];
            }
        }

        console.log(arrayall);

        $('#pagination-demo').twbsPagination({
            totalPages: 1,
            visiblePages: 1,
            next: 'Next',
            prev: 'Prev',
            onPageClick: function (event, page) {

                // $('.wrap').show();
                // $('#loaddiv').hide();
                $('#details').empty();

                if (ifnot==false) {
                    page=0;
                }
                ifnot=true;

                frompagination(arrayall[page]);
                $('#page-content').text('Page ' + page) + ' content here';
            }
        });




    }

}




function frompagination(data) {

console.log('loaded');

    for (var x = 0; x < 10; x++) {
        $.ajax({
            type: 'GET',
            url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + data[x]['hotel_id'] + '&extras=hotel_facilities,hotel_info,hotel_photos,hotel_description',
            dataType: 'json',
            async: false,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {


                console.log(data);

                var star = "";
                var bool = false;
                if (data['result'][0]['hotel_data']['class'] > 0) {
                    bool = true;
                    for (var ab = 0; ab < data['result'][0]['hotel_data']['class']; ab++) {
                        star = star + '<i class="fas fa-star"></i>';
                    }
                } else {

                }

                if (bool) {

                    star = star + '&nbsp;<span id="finger"><i class="fas fa-hand-point-right"></i></span>';
                }


                var ratingtype = "";
                var hoteldatatypefont = data['result'][0]['hotel_data']['review_score'];

                if (hoteldatatypefont > 9) {
                    ratingtype = "Superb";
                } else if (hoteldatatypefont > 8) {
                    ratingtype = "Very Good";
                } else if (hoteldatatypefont > 7) {
                    ratingtype = "Good";
                } else if (hoteldatatypefont > 6) {
                    ratingtype = "Pleasant";
                } else {
                    ratingtype = "Pleasant";
                }

                var rescor;

                if (data['result'][0]['hotel_data']['review_score'] != null) {
                    rescor = data['result'][0]['hotel_data']['review_score'];
                } else {
                    rescor = 0;
                }

                var ccr = "";

                if (data['result'][0]['hotel_data']['creditcard_required'] == false) {
                    ccr = '<p id="posible-credit"><i class="far fa-credit-card"></i>Reservation possible without a credit card</p>';
                }

                var facil = "";
                var ok = false;

                for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                    if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 146) {
                        facil = '<div id="label1">BeachFront</div>';
                        ok = true;
                        break;
                    }
                }

                if (ok == false) {
                    for (var load = 0; load < data['result'][0]['hotel_data']['hotel_facilities'].length; load++) {
                        if (data['result'][0]['hotel_data']['hotel_facilities'][load]['hotel_facility_type_id'] == 43) {
                            facil = '<div id="label2">Breakfast included</div>';
                            ok = true;
                            break;
                        }
                    }
                }


                var hoteltype = "";
                $.ajax({
                    type: 'GET',
                    url: 'https://distribution-xml.booking.com/2.4/json/hotelTypes?hotel_type_ids=' + data['result'][0]['hotel_data']['hotel_type_id'],
                    dataType: 'json',
                    async: false,
                    crossDomain: true,
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Authorization': 'Basic ' + btoa(username + ':' + password)
                    },
                    success: function (data) {
                        hoteltype = data['result'][0]['name'];
                    }
                });

                var dis = data['result'][0]['hotel_data']['hotel_description'];
                var xs = dis.split(".");
                dis = xs[0] + '.';

                console.log(dis);
                console.log(data['result'][0]['hotel_data']['hotel_description']);

                var number_of_reviews = 0;

                if (typeof data['result'][0]['hotel_data']['number_of_reviews'] != 'undefined') {
                    number_of_reviews = reviewsdata['result'][0]['hotel_data']['number_of_reviews'];
                }

                var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;margin-top: 10px;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><div style="margin-left:5px; display:inline;"><span id="l-start">' + star + '</span></div><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + '</span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

                $('#details').append(dataset);
                // $('.wrap').show();
                // $('#loaddiv').hide();
            }
        });
    }

}




function loadpagination2(value) {

    var ifnot=false;

    $('#pag').empty();
    $('#pag').append('<ul id="pagination-demo" class="pagination-sm"></ul>');

    // console.log(value['result']);

    if (value['result'].length>10){
        var datacount =value['result'].length/10;
        // console.log(datacount);
        var arrayall=[];
        var arrtemp=[];
        var countertemp=0;
        for (var ab=0;ab<value['result'].length;ab++){
            arrtemp.push(value['result'][ab]);
            countertemp++;
            if (countertemp==10){
                countertemp=0;
                arrayall.push(arrtemp);
                arrtemp=[];
            }
        }

        console.log(arrayall);

        $('#pagination-demo').twbsPagination({
            totalPages: datacount,
            visiblePages: 6,
            next: 'Next',
            prev: 'Prev',
            onPageClick: function (event, page) {

                // $('.wrap').show();
                // $('#loaddiv').hide();
                $('#details').empty();

                if (ifnot==false) {
                    page=0;
                }
                ifnot=true;

                loadspecdata(arrayall[page]);
                $('#page-content').text('Page ' + page+1) + ' content here';
            }
        });

    }else{



        var arrayall=[];
        var arrtemp=[];
        var countertemp=0;
        for (var ab=0;ab<value['result'].length;ab++){
            arrtemp.push(value['result'][ab]);
            countertemp++;
            if (countertemp==value['result'].length){
                countertemp=0;
                arrayall.push(arrtemp);
                arrtemp=[];
            }
        }

        console.log(arrayall);

        $('#pagination-demo').twbsPagination({
            totalPages: 1,
            visiblePages: 1,
            next: 'Next',
            prev: 'Prev',
            onPageClick: function (event, page) {

                // $('.wrap').show();
                // $('#loaddiv').hide();
                $('#details').empty();

                if (ifnot==false) {
                    page=0;
                }
                ifnot=true;

                loadspecdata(arrayall[page]);
                $('#page-content').text('Page ' + page+1) + ' content here';
            }
        });




    }

}

// start header