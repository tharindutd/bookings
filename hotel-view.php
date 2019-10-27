<?php
$username = 'info@websrus.com.au';
$password = 'Mtbotntgbu@2017';

$page_url = $_SERVER['REQUEST_URI'];
$offset_arr = explode("/", $page_url);
$offset = 0;
if (is_numeric($offset_arr[sizeof($offset_arr) - 2])) {
    $offset = $offset_arr[sizeof($offset_arr) - 2] - 1;
}
$start_page = (floor($offset / 20) * 10) + 1;

$hid = $_GET['hotelid'];
$hfrom = $_GET['from'];
$hto = $_GET['to'];
$hchild = $_GET['child'];
$hadult = $_GET['adult'];
$hwhere = $_GET['where'];
$hroom = $_GET['room'];
$htatus = $_GET['status'];


$URL4 = "https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=$hid&extras=hotel_info,hotel_photos,hotel_description,hotel_description_formatted,hotel_facilities,hotel_policies,key_collection_info,payment_details,room_description,room_facilities,room_info,room_photos";

$URL5 = "https://distribution-xml.booking.com/2.4/json/blockAvailability?checkin=$hfrom&checkout=$hto&hotel_ids=$hid&extras=additional_room_info,photos,facilities";

$ch4 = curl_init();
curl_setopt($ch4, CURLOPT_URL, $URL4);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch4, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch4, CURLOPT_USERPWD, "$username:$password");
$response2 = curl_exec($ch4);
curl_close($ch4);
$arr = json_decode($response2, true);

$ch5 = curl_init();
curl_setopt($ch5, CURLOPT_URL, $URL5);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch5, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch5, CURLOPT_USERPWD, "$username:$password");
$response5 = curl_exec($ch5);
curl_close($ch5);
$arr5 = json_decode($response5, true);


?>

<!--Array end-->
<html>
<head>
    <link type="text/css" href="one.css" rel="stylesheet">
    <link type="text/css" href="index.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>VISIT 2 SRI LANKA | Hotel-View</title>


    <style type="text/css">


        #datepick3, #datepick4 {
            width: 150px;
            border: 0px;

        }

        [type="date"] {
            background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
        }

        [type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }

        /* custom styles */
        label {
            display: block;
        }

        #check-in, #check-out {
            border: 1px solid #c4c4c4;
            border-radius: 5px;
            background-color: #fff;
            padding: 3px 5px;
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
            width: 190px;
        }
    </style>
</head>

<!--Head end -->

<body onload="loadset()">


<div class="se-pre-con"></div>



<?php
    require 'header.php';
?>


<div class="wrap collapse">
    <h1>Bootstrap Modal Example</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-new" id="hidebtn">
        open modal
    </button>
</div>

<?php
require 'modal.php';
?>

<div style="height: 100px; width: 100%">

</div>

<!--tart main wrap-->
<div class="container">
    <!--start wrap-->

    <div id="row" class="row">


        <!--start left side-->

        <div class="col-lg-3 col-sm-12 col-xs-12" id="left-main">

            <!--start reseve btn1-->

            <div id="reseve1">
                <div style=" width: 90%; margin-left: 5%; height: 40px; -webkit-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75);">
                    <input id="reserve1" type="button" value="Reserve" class="btn btn-primary" style="border-radius: 0px; width: 99%; margin-left: 0.5%; margin-top: 1px;">
                </div>
            </div>

            <!--End research-btn1seve btn1-->

            <div class="bpg_holder_light_block" id="bpg_holder_light_block-id">
                <div id="rate_guarantee" class="rate_guarantee-class">
                <i class="
                bpg_logo
                "></i>
                <a href="javascript:void(0);" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-no-arrow="" data-popover-content="#bpg_desktop_badge" tabindex="0" class=" 
                open-bpg-in-overlay-instead
                pp_bpg_tooltip_holder" aria-describedby="current-popover">We Price Match
                </a>
                    <div id="bpg_desktop_badge" class="bui-panel bui-u-hidden">
                            <div class="pp-bpg-tooltip--header">
                                We Price Match
                            </div>
                            <div class="pp-bpg-tooltip--image"></div>
                            <div class="pp-bpg-tooltip--text>
                                    Low rates •
                                <span class="&quot;no_booking_fees_fr_tooltip&quot;">No booking fees</span> •
                                    Find something cheaper? We'll refund the difference!
                            </div>
                    </div>
                </div>
            </div>

            <!--start search box-->

            <div id="main-search">
                <span id="s-name">Search</span><br>
                <span class="d-txt">Destination </span>
                <input type="search" class="form-control destination" id="destiny" list="districtset">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p from"></i></span> <input type="date"
                                style="width: 150px; border: none;" id="da1" class="checkin"
                                placeholder="check-in-date">
                    </p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p to"></i></span> <input type="date"
                                style="width: 150px; border: none;" id="da2" class="checkout"
                                placeholder="check-out-date"></p>
                </div>

                <select name="adult" id="adult" class="form-control adult">
                    <?php
                    for ($var1 = 1; $var1 <= 30; $var1++) {
                        ?>

                        <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                    <?php }
                    ?>
                </select>

                <div id="ch">
                    <select name="child" id="child" class="form-control child">
                        <option value="0 CHILDREN">0 CHILDREN</option>
                        <?php
                        for ($var1 = 1; $var1 <= 15; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                        <?php }
                        ?>
                    </select>


                    <select name="child" id="room" class="form-control room">
                        <option value="1 ROOM">1 ROOM</option>
                        <?php
                        for ($var1 = 2; $var1 <= 30; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> ROOM"><?php echo $var1 ?> ROOM</option>

                        <?php }
                        ?>
                    </select>

                </div>

                <label class="ch-box">
                    <input type="checkbox"/>
                    <span class="iname"
                          data-title="If You Select This Position, We'ill Show YouPopular Business Travel Features Like Breakfast, Wi-fi And Free Parking"
                          style="font-size: 13px;">I'm travelling for work <i class="fas fa-question-circle"
                                                                              id="qu"></i></span>
                </label>

                <div>
                    <p id="aa"><input type="button" id="search-btn1" class="btn btn-primary" value="Serach"></p>
                </div>

            </div>

            <!--End search box-->

            <!--start Map box-->

            <!-- <div id="map-box"></div> -->

            <!--End Map box-->

            <!--start show similar box-->

            <div id="search-similar-box">
                <p style="font-size: 12px; color:#666666; width: 90%; margin-left: 5%">Like this one, but not quite sure
                    yet?</p>
                <input type="button"
                       style="width: 90%; margin-left: 5%; color:#00a8ff; font-size: 13px; font-weight: bold; height: 30px; margin-bottom: 5px; background: none;"
                       id="sho" value=" show Similar Hotels">
            </div>

            <!--End show similar box-->

            <!--start review box-->

<!--             <div id="review-box" class="row" style="margin: 0px; padding: 0px; margin-top: 20px;">
                <div id="review-score" class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <p id="review-score-txt"></p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">

                    <span id="excellent-txt"></span><br>
                    <span id="review-txt"></span>
                </div>
            </div> -->

            <!--End review box-->


        </div>

        <!--start left side-->


        <!--start right side-->

        <div class="col-lg-9 col-sm-12 col-xs-12" id="right-main">

            <!--start top bar filter-->

            <div id="top-bar-filter" class="row">
                <div id="info-price" class="col-sm-12 col-xs-12 col-lg-4">
                    <a href="#rwd-table">Info & Price</a>
                </div>
                <div id="facility" class="col-sm-12 col-xs-12 col-lg-4">
                    <a href="#f">Facilities</a>
                </div>
                <div id="house-rule" class="col-sm-12 col-xs-12 col-lg-4">
                    <a href="#last">House Rules</a>
                </div>
            </div>

            <!--start top bar filter-->


            <!--start top detail-->

            <div id="top-detail" class="row" style="margin: auto;">

                <!--start name-star-->

                <div id="name-star" class="col-sm-12 col-xs-12 col-lg-9">
                    <p id="hotel-type-txt"></p>
                    <p id="hotel-name"></p>
                    <p id="star-set"></p>
                    <p id="fit"><i class="fas fa-hand-point-right"></i></p>

                    <div id="beach-reserve">
                        <!--start beach front-->
                        <div id="beach-front">

                        </div>
                        <!--End beach front-->
                    </div>
                </div>

                <!--End name-star-->

                <!--start beach-reserve-->
                <div class="col-sm-12 col-xs-12 col-lg-3"">                    
                    <div id="reseve2-wrap">
                        <div style="width: 100%; height: 40px; -webkit-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.75); box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.75);">
                            <input type="button" class="btn btn-primary ok" value="Reserve" style="border-radius: 0px; width: 100%; margin-top: 1px; border: 2px solid #fff;">
                        </div>
                    </div>
                </div>

                <!--End beach-reserve-->

            </div>

            <!--End top detail-->

            <!--start address-->

            <div id="address-block" style="margin: 0;padding: 0">                 
                <p id="address-txt"></p>
                <p id="map-location"> </p>
                <div id="rate_guarantee" class="">
                    <i class="bpg_logo"></i>
                    <a href="javascript:void(0);" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-no-arrow="" data-popover-content="#bpg_desktop_badge" tabindex="0" class=" 
                    open-bpg-in-overlay-instead
                    pp_bpg_tooltip_holder" aria-describedby="current-popover">We Price Match
                    </a>
                </div>
            </div>
            <!--End address-->


            <!--start galery-->

            <div class="row" style="margin: 0px; padding: 0px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="gallary">
                        <div id="main-img">
                            <div id="lft-arrow">
                                <i class="fas fa-arrow-circle-left" id="prev"></i>
                            </div>

                            <div id="main-img-content">
                                <img src="" alt=""
                                     id="img-id" class="responsive img-thumbnail">
                            </div>

                            <div id="right-arrow">
                                <i class="fas fa-arrow-circle-right" id="next"></i>
                            </div>
                        </div>


                        <div id="thumb1" style="margin: auto; height: 40px; width: 100%;"></div>
                        <div id="thumb2" style="margin: auto; height: 40px; width: 100%;"></div>
                        <div id="thumb3" style="margin: auto; height: 40px; width: 100%;"></div>

                    </div>
                </div>
            </div>

            <!--End galery-->
            <hr>

            <!--start first stage-->

            <div id="div-for-first-stage-wrap" class="row" style="margin: auto;">
                <div id="name-and-disc" class="col-sm-12 col-xs-12 col-lg-8">
                    <p style="font-size: 19px; font-weight: bold; color:#333333;" id="a"></p>
                    <p style="color: #B75F00; font-size: 14px; font-weight: bold;" id="b"></p>

                    <div id="desc" style="width: 100%;">
                        <p class="para">We speak your language! </p>
                    </div>

                </div>

                <div id="guest-love-disc" class="col-sm-12 col-xs-12 col-lg-4">

                    <!--start love-->

                    <p style="font-size: 22px; color: #2c3e50;">Guests love... </p>
                    <p style="color: #111111; font-size: 14px;" id="love1"></p>
                    <p style="color: #111111; font-size: 14px;" id="love2"></p>
                    <p style="color: #111111; font-size: 14px;" id="love3"></p>
                    <hr>

                    <p style="color: #111111; font-size: 14px;" id="toprated"></p>

                    <p style="color: #111111; font-size: 14px;"><i class="fas fa-bed"
                                                                   style="color:#333333;padding-right: 10px;"></i>Want a
                        great night's sleep? This hotel was highly rated for its very comfy beds.</p>
                    <hr>
                    <p style="font-size: 14px; color: #666666; font-weight: bold;" id="f"></p>
                    <p id="ahhh"></p>

                    <hr>

                    <div id="free-wifi" style="width: 100%;">
                        <div style="float: left; width: 20%;">
                            <i class="fas fa-wifi"
                               style="font-size: 18px; color: #333333; margin-top: 10px; margin-left: 10px;"></i>
                        </div>
                        <div style="float: right; width: 80%;">
                            <p id="free-wi-fi-txt"> Free WiFi
                                Guests consistently rate the WiFi as excellent </p>
                        </div>
                    </div>

                    <div id="free-park" style="width: 100%;"></div>

                    <div id="reseve3-wrap">
                        <div id="reseve3-btn">
                            Reserve
                        </div>
                    </div>


                    <!--End love-->

                </div>
            </div>

            <!--end first stage-->


            <!--start second stage-->

            <hr>

            <div class="row" id="most-pop-facility" style="margin: auto;">
                <div id="most-pop-facility-content" class="col-sm-12 col-xs-12 col-lg-9">
                    <p id="most-txt">Most popular facilities </p>


                </div>
            </div>

            <p id="atm-facility"></p>

            <!--End second stage-->

            <!--start third state-->

            <div id="lock"
                 style="margin: auto; background-color: #F5FBF6; border: 1px solid aquamarine; border-radius: 5px; height: auto;">
                <p id="one-state"><i class="fas fa-lock-open"
                                     style="color: #0AB21B; font-size: 25px; padding-right: 20px;"></i>Lock in a great
                    price for your upcoming stay </p>
                <p style="color: #666666; font-size: 13px; margin-left: 100px; margin-bottom: 5px;">Get instant
                    confirmation with FREE
                    cancellation on most rooms!</p>
            </div>

            <!--End third state-->

            <!--start availability aria-->

            <p style="color: #000; font-size: 25px; margin-left: 10px; margin-top: 20px; font-weight:normal;">
                Availability</p>

            <div id="available-wrap" style="margin-bottom: 10px;">
                <p id="names" style="font-weight: normal; font-size: 16px; margin-left: 10px;"></p>

                <div class="row" id="" style="margin: auto;">
                    <div class="col-lg-4 col-sm-12 col-xs-12">
                        <span class="d-txt" style="font-weight: bold;">Check-in date</span>

                        <div class="d-pic">
                            <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick3" class="checkin2" placeholder="" type="date"></p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12 col-xs-12">
                        <span class="d-txt" style="font-weight: bold;">Check-Out date</span>
                        <div class="d-pic">
                            <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick4" class="checkout2" placeholder="" type="date"></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-xs-12">
                        <input type="button" value="check Availability" class="btn btn-primary" id="cheavailable1">

                    </div>

                </div>

                <div class="row" style=" margin-top: 10px; margin-bottom: 10px; margin-left: 20px;">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style=" margin-top: 10px;">
                        <span>Room</span>
                        <select name="roomset" id="rooms2" style="width: 50px;">
                            <option value="1">1</option>
                            <?php
                            for ($a = 2; $a <= 30; $a++) {
                                ?>
                                <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style=" margin-top: 10px;">
                        <span>Adult</span>

                        <select name="adutset" style="width: 50px;" id="adults2">
                            <option value="1">1</option>
                            <?php
                            for ($a = 2; $a <= 30; $a++) {
                                ?>
                                <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                            <?php }
                            ?>
                        </select>


                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style=" margin-top: 10px;">
                        <span>Children</span>

                        <select name="childsset" id="childs2" style="width: 50px;">
                            <?php
                            for ($a = 0; $a <= 15; $a++) {
                                ?>
                                <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>


                </div>

                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <input type="button" value="check Availability" class="btn btn-primary" id="cheavailable2"
                           style="display: none;">

                </div>

                <!--                <input type="button" value="check Availability" class="btn btn-primary" style="border-radius: 0px;">-->


            </div>


            <!--end availability aria-->

            <!--start table aria-->

            <div style="width: 100%;" id="x5">
            </div>


            <!--end table aria-->

            <!--start an inside-->

            <p style="font-size: 20px; margin-left: 10px; margin-top: 10px; font-weight: bold;" id="d"></p>

            <div style="width: 100%; height: auto; background-color: #E9F0FA; text-align: justify; padding: 20px 10px 20px 10px; padding: 5px;">
                <p style="color: #666666; font-size: 13px;" id="f" class="insidelook"></p>
            </div>

            <!--start an inside-->

            <hr>
            <div class="row" style="margin-bottom: 10px;" id="f">
                <div id="one-set" class="col-md-8 col-xs-12 col-sm-12">
                    <p><span style="color: #333333; font-size: 20px;" id="tag"></span></p>
                </div>
                <div id="two-set" class="col-md-4 col-xs-12 col-sm-12">
                    <div id="reseve2-wrap">
                        <div style="width: 100%; height: 40px; -webkit-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.75); box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75);">
                            <input type="button" class="btn btn-primary ok" value="Reserve" style="border-radius: 0px; width: 100%; margin-top: 1px; border: 2px solid #fff;"></div>
                    </div>
                </div>
            </div>


            <p style="font-size: 15px; font-weight: bold; color: #111111;">Most popular facilities </p>

            <div style="height: auto; width: 100%;">
                <!--start 1-->

                <div class="row" style="margin: auto;">

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Outdoors">
                        <p class="no"><i class="fas fa-cloud-sun"></i>Outdoors</p>

                        <ul class="list" id="outdoors-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Parking">
                        <p class="no"><i class="fas fa-parking"></i>Parking</p>

                        <ul class="list" id="parking-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Entertainment">
                        <p class="no"><i class="fas fa-people-carry"></i>Entertainment and family services </p>

                        <ul class="list" id="entertainment-txt"></ul>

                    </div>

                </div>

                <!--End 1-->

                <!--start 2        -->

                <div class="row" style="margin: auto;">

                    <!--                    Auther:-    hasika sandaruwan-->

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Activities">
                        <p class="no"><i class="fas fa-running"></i>Activities</p>

                        <ul class="list" id="activities-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="pool">
                        <p class="no"><i class="fas fa-swimmer"></i>Pool and wellness </p>

                        <ul class="list" id="pool-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="cleaning">
                        <p class="no"><i class="fas fa-tshirt"></i>Cleaning services </p>

                        <ul class="list" id="clean-txt"></ul>

                    </div>

                </div>

                <!--End 2        -->

                <!--start 3-->

                <div class="row" style="margin: auto;">

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="food">
                        <p class="no"><i class="fas fa-utensils"></i>Food & Drink</p>

                        <ul class="list" id="food-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="genaral">
                        <p class="no"><i class="fab fa-joget"></i>General </p>

                        <ul class="list" id="genaral-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Business">
                        <p class="no"><i class="fas fa-briefcase"></i>Business facilities</p>

                        <ul class="list" id="business-txt"></ul>

                    </div>

                </div>

                <!--start 3-->

                <!--end 4-->

                <div class="row" style="margin: auto;">

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Internet">
                        <p class="no"><i class="fas fa-wifi"></i>Internet </p>

                        <ul class="list" id="internet-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Reception">
                        <p class="no"><i class="fas fa-desktop"></i>Reception services </p>

                        <ul class="list" id="reception-txt"></ul>

                    </div>

                    <div class="out-door col-lg-4 col-sm-6 col-xs-12" id="Accessibility">
                        <p class="no"><i class="fas fa-wheelchair"></i>Accessibility</p>

                        <ul class="list" id="access-txt"></ul>

                        <!--                    Auther:-    hasika sandaruwan-->

                    </div>

                </div>

                <!--end 4-->

            </div>

            <!--end facilit-->

            <!--start house rule-->
            <hr>
            <p style="font-size: 15px; font-weight: bold; color: #111111;">House rules </p>
            <p style="font-size: 13px; color: #666666;" id="for-special"></p>


            <div id="last" style="padding-left: 10px;">
                <div class="row" id="one-a" style="margin: auto; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12"
                         style="color: #333333; font-size: 15px; padding-top: 20px; ">
                        <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i><span style="font-size: 13px;">Check-In</span>

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <p id="cin" style="font-size: 15px; color: #192a56; margin-top: 20px;"></p>
                    </div>
                </div>

                <div class="row" id="one-b" style="margin: auto; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12"
                         style="color: #333333; font-size: 15px; padding-top: 20px;">
                        <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i><span style="font-size: 13px;">Check-Out</span>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12"
                    ">
                    <p id="cout" style="font-size: 15px; color: #192a56; margin-top: 20px;"></p>
                </div>
            </div>
            <div class="row" id="one-d" style="margin: auto; margin-top: 10px; margin-bottom: 10px;">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12"
                     style="color: #333333; font-size: 15px; padding-top: 10px;">
                    <i class="fas fa-person-booth" style="margin-right: 10px;"></i><span style="font-size: 13px;">Children and
                    extra beds</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12" id="xxxx">

                </div>
            </div>

            <div class="row" id="one-e" style="margin: auto; margin-top: 10px; margin-bottom: 10px;">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12" style="color: #333333; font-size: 15px;">
                    <i class="fas fa-paw" style="margin-right: 10px;"></i><span style="font-size: 13px;">Pets</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12" id="pt">

                </div>
            </div>

            <div class="row" id="one-f" style="margin: auto; margin-top: 10px; margin-bottom: 10px;">

            </div>


        </div>

        <!--start house rule-->


    </div>

    <!--End right side-->

</div>

<!--End wrap-->


</div>
<!--End main wrap-->


<?php
require 'footer.php';
?>



<!--<iframe href="https://secure.booking.com/book.html?aid=1418617&hostname=www.booking.com&hotel_id=239938&stage=0&checkin=2019-06-12&interval=2&test=1" style="width: 100%; height:1500px; margin: 0px !important;" class="form-control text-center btn3"/>-->

<!--<iframe src="https://secure.booking.com/book.html?aid=1418617&hostname=www.booking.com&hotel_id=98251&stage=0&checkin=2019-06-12&interval=2&test=1" style="width: 100%; height:1500px; margin: 0px !important;"></iframe>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<script-->
<!--        src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"-->
<!--        integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="-->
<!--        crossorigin="anonymous"></script>-->

<script type="application/javascript" src="index.js"></script>
<script type="text/javascript">

    var username = "info@websrus.com.au";
    var password = "Mtbotntgbu@2017";


    var array = [];
    var position = 0;


    var statusbar = false;
    var where = "<?php echo $hwhere; ?>";
    var froms = "<?php echo $hfrom; ?>";
    var to = "<?php echo $hto; ?>";
    var rooms = "<?php echo $hroom; ?>";
    var child = "<?php echo $hchild; ?>";
    var adult = "<?php echo $hadult; ?>";
    statusbar = "<?php echo $htatus; ?>";
    // $('.wrap').hide();

    $('.child').val(child);
    $('.room').val(rooms);
    $('.adult').val(adult);
    $('.destination').val(where);
    $('.checkin').val(froms);
    $('.checkin2').val(froms);
    $('.checkout').val(to);
    $('.checkout2').val(to);


    console.log(where);
    console.log(froms);
    console.log(to);
    console.log(rooms);
    console.log(child);
    console.log(adult);


    var data_set = <?php echo json_encode($response2); ?>;
    var data_set2 = <?php echo json_encode($response5); ?>;
    var js_data = JSON.parse(data_set);
    var data_set2 = JSON.parse(data_set2);
    var roomdatafrather;


    console.log(js_data['result']);

    $(function () {
      $("[data-toggle=popover]").popover({
        html : true,
        trigger: 'hover',
        content: function() {
            var content = $(this).attr("data-popover-content");
            return $(content).html();
        }
    });
    })

    // start load top bar detail

    function loadset() {


        var hoteltypeurl = "https://distribution-xml.booking.com/2.4/json/hotelTypes?languages=en";
        var hotelid = js_data['result'][0]['hotel_data']['hotel_type_id'];
        var rating = js_data['result'][0]['hotel_data']['class'];
        var hoteltypename = "";
        $.ajax({
            type: 'GET',
            url: hoteltypeurl,
            dataType: 'json',
            async: false,
            headers: {
                'Authorization': 'Basic ' + btoa(username + ':' + password)
            },
            success: function (data) {
                console.log(data);
                for (var x = 0; x < data['result'].length; x++) {
                    if (hotelid === data['result'][x]['hotel_type_id']) {
                        hoteltypename = data['result'][x]['name'];
                        $('#hotel-type-txt').html(hoteltypename);
                    }
                }
            }
        });

        if (rating > 0) {
            var star = "";
            for (var ab = 0; ab < rating; ab++) {
                star = star + '<i class="fas fa-star"></i>';
            }

            $("#star-set").html(star);

        }

        $('#hotel-name').html(js_data['result'][0]['hotel_data']['name']);

        // load star

        var star_score = js_data['result'][0]['hotel_data']['review_score'];


        var ratingtype = "";
        var hoteldatatypefont = star_score;

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

        var number_of_star_score = js_data['result'][0]['hotel_data']['number_of_reviews'];
        var hnamess = js_data['result'][0]['hotel_data']['name'];

        $('#names').html('When would you like to stay at ' + hnamess + ' ?');

        $('#review-score-txt').html(star_score);

        $('#excellent-txt').html(ratingtype);

        $('#review-txt').html(number_of_star_score + ' reviews');


        star_score = Math.round(star_score);

        for (var a = 1; a <= star_score / 2; a++) {
            $('#star-set').append('<i class="fas fa-star"></i>');
        }

        // load beach

        for (var b = 0; b < js_data['result'][0]['hotel_data']['hotel_facilities'].length; b++) {
            if (js_data['result'][0]['hotel_data']['hotel_facilities'][b]['hotel_facility_type_id'] === 146) {
                $('#beach-front').append('<span id="beach-txt-img"><i class="fas fa-umbrella-beach"></i><p>Beach</p></span>');
                break;
            }
        }
        // start load address


        // end load top bar detail

        var address = js_data['result'][0]['hotel_data']['address'];
        var city = js_data['result'][0]['hotel_data']['city'];
        var latitude = js_data['result'][0]['hotel_data']['location']['latitude'];
        var longitude = js_data['result'][0]['hotel_data']['location']['longitude'];

        $('#address-txt').append('<i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>' + '' + address + ' ,' + city + '');
        
        $('#map-location').append("<a href='https://google.com/maps/?q="+latitude+","+longitude+"' target='_blank'>Good location – show map</a>");


        // start a

        $('#a').append('Get the celebrity treatment with world-class service at' + ' ' + js_data['result'][0]['hotel_data']['name']);

        // start b
        $('#b').append('<i class="far fa-star" style="color:#B75F00;padding-right: 10px;"></i>' + 'One of our top picks in' + ' ' + city);

        // start facility

        $('.se-pre-con').fadeOut();

        for (var c = 0; c < js_data['result'][0]['hotel_data']['hotel_facilities'].length; c++) {
            if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 301) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-swimmer"></i>Swimming pool</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 107) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-wifi"></i>Free Wi-Fi</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 119) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-swimmer"></i>Outdoor Pool</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 28) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-person-booth"></i>Family Room</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 146) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-umbrella-beach"></i>BeachFront</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 54) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-spa"></i>Spa And Wellness Center</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 7) {
                $('#most-pop-facility-content').append('<p class="facility-txt"><i class="fas fa-glass-cheers"></i>Bar</p>');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 53) {
                $('#atm-facility').html('<span style="font-size: 15px; color: #111111; font-weight: bold;">ATM and Currency Exchange:</span>Need cash? There\'s an ATM machine and a currency exchange service at this property.');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 2) {
                $('#love1').html('<i class="far fa-star"style="color:#333333;padding-right: 10px;"></i>' + js_data['result'][0]['hotel_data']['hotel_facilities'][c]['name'] + '');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 107) {
                $('#love2').html('<i class="far fa-star"style="color:#333333;padding-right: 10px;"></i>' + js_data['result'][0]['hotel_data']['hotel_facilities'][c]['name'] + '');
            }
            else if (js_data['result'][0]['hotel_data']['hotel_facilities'][c]['hotel_facility_type_id'] === 146) {
                $('#love3').html('<i class="far fa-star"style="color:#333333;padding-right: 10px;"></i>' + js_data['result'][0]['hotel_data']['hotel_facilities'][c]['name'] + '');
            }


        }
        // start d

        $('#d').html('An inside look at ' + js_data['result'][0]['hotel_data']['name']);

        $('.insidelook').html(js_data['result'][0]['hotel_data']['hotel_description'] + '\n' + js_data['result'][0]['hotel_data']['hotelier_welcome_message']);

        $('#tag').html('Facilities of ' + js_data['result'][0]['hotel_data']['name']);

        $('#wow').html('Great facilities! Review score, ' + js_data['result'][0]['hotel_data']['review_score']);


        var temp11=0;
        var temp12=0;
        var temp13=0;
        var tempA = 0;
        var tempb = 0;
        var temp3 = 0;
        var temp4 = 0;
        var temp5 = 0;
        var temp7 = 0;
        var temp8 = 0;
        var temp9 = 0;
        var temp10 = 0;



        for (var i = 0; i < js_data['result'][0]['hotel_data']['hotel_facilities'].length; i++) {

            var id = js_data['result'][0]['hotel_data']['hotel_facilities'][i]['hotel_facility_type_id'];
            var names = js_data['result'][0]['hotel_data']['hotel_facilities'][i]['name'];


            if (id === 12) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 14) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 15) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 26) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 65) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 70) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 72) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 76) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 103) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 104) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 119) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 121) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }
            else if (id === 122) {
                $('#outdoors-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp11=1;
            }

            // start parking


            else if (id === 2) {
                $('#parking-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp12=1;
            }
            else if (id === 46) {
                $('#parking-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');

                $('#free-park').html('<div style="float: left; width: 20%;"><i class="fas fa-parking"style="font-size: 25px; color: #333333; margin-top: 40px; margin-left: 10px;"></i></div><div style="float: right; width: 80%; margin-top: 5px;"><p id="free-park-txt"> Free WiFiGuests consistently rate the WiFi as excellent </p></div>');
                temp12=1;
            }
            else if (id === 52) {
                $('#parking-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp12=1;
            }

            // start entertatement


            else if (id === 21) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 28) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 41) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 51) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 25) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 64) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 109) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 114) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 118) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 142) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 144) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 145) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 146) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }
            else if (id === 169) {
                $('#entertainment-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp13=1;
            }

            // start activities




           else if (id === 9) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 11) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 19) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 29) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 30) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 57) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 58) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }
            else if (id === 66) {
                $('#activities-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempA = 1;
            }


            // start pool



           else if (id === 10) {
                $('#pool-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempb = 1;
            }
            else if (id === 54) {
                $('#pool-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempb = 1;
            }
            else if (id === 55) {
                $('#pool-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempb = 1;
            }
            else if (id === 63) {
                $('#pool-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                tempb = 1;
            }




            // clean start

           else if (id === 5) {
                $('#clean-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp3 = 1;
            }
            else if (id === 22) {
                $('#clean-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp3 = 1;
            }
            else if (id === 23) {
                $('#clean-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp3 = 1;
            }
            else if (id === 44) {
                $('#clean-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp3 = 1;
            }
            else if (id === 67) {
                $('#clean-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp3 = 1;
            }



            // start food




          else  if (id === 3) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }
            else if (id === 7) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }
            else if (id === 24) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }
            else if (id === 43) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
                $('#ahhh').html('' + names + '');
                $('#f').html('Breakfast info');
            }
            else if (id === 73) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }
            else if (id === 116) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }
            else if (id === 117) {
                $('#food-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp4 = 1;
            }




            // start genral




           else if (id === 13) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 16) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 17) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 27) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 45) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 48) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 53) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 60) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 75) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 81) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 111) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 139) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }
            else if (id === 143) {
                $('#genaral-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp5 = 1;
            }


            // start business





           else if (id === 27) {

                $('#business-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp7 = 1;
            }
            else if (id === 20) {
                $('#business-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp7 = 1;
            }




            // start internet




           else if (id === 47) {
                $('#internet-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp8 = 1;
            }
            else if (id === 96) {
                $('#internet-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp8 = 1;
            }
            else if (id === 107) {
                $('#internet-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp8 = 1;
            }
            else if (id === 163) {
                $('#internet-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp8 = 1;
            }


            // start reception




           else if (id === 8) {
                $('#reception-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp9 = 1;
            }



            // start reception




          else if (id === 8) {
                $('#reception-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp10 = 1;
            }

            // start accesee
            else if (id === 25) {
                $('#access-txt').append('<li><i class="fas fa-clipboard-check"></i>&nbsp;' + names + '</li>');
                temp10 = 1;
            }



        }



        if (tempA == 0) {
            $('#Activities').fadeOut();
        }

        if (tempb == 0) {
            $('#pool').fadeOut();
        }

        if (temp3 == 0) {
            $('#cleaning').fadeOut();
        }


        if (temp4 == 0) {
            $('#food').fadeOut();
        }

        if (temp5 == 0) {
            $('#genaral').fadeOut();
        }


        if (temp7 == 0) {
            $('#Business').fadeOut();
        }


        if (temp8 == 0) {
            $('#Internet').fadeOut();
        }

        if (temp9 == 0) {
            $('#Reception').fadeOut();
        }

        if (temp10 == 0) {
            $('#Accessibility').fadeOut();
        }
        if (temp11 == 0) {
            $('#Outdoors').fadeOut();
        }

        if (temp12 == 0) {
            $('#Parking').fadeOut();
        }

        if (temp13 == 0) {
            $('#Entertainment').fadeOut();
        }





        $('#toprated').html('<i class="fas fa-map-marker-alt" style="color:#333333;padding-right: 10px;"></i>Top location: Highly  by recent review Score');


        // create gallary

        $('#img-id').attr('src', js_data['result'][0]['hotel_data']['hotel_photos'][0]['url_original']);

        if (js_data['result'][0]['hotel_data']['hotel_photos'].length > 36) {
            for (var im = 1; im <= 20; im++) {
                var comp = '<div style="float: left;" id="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" onmouseover="loadimgwice(this)" ><img class="img-thumbnail" src="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" style="height: 40px; width: 46px;"></div>'
                $('#thumb1').append(comp);
            }

            for (var im2 = 13; im2 <= 24; im2++) {
                var comp = '<div style="float: left;" id="' + js_data['result'][0]['hotel_data']['hotel_photos'][im2]['url_original'] + '" onmouseover="loadimgwice(this)" ><img class="img-thumbnail" src="' + js_data['result'][0]['hotel_data']['hotel_photos'][im2]['url_original'] + '" style="height: 40px; width: 46px;"></div>'
                $('#thumb2').append(comp);
            }
            for (var im3 = 15; im3 <= 36; im3++) {
                var comp = '<div style="float: left;" id="' + js_data['result'][0]['hotel_data']['hotel_photos'][im3]['url_original'] + '" onmouseover="loadimgwice(this)" ><img class="img-thumbnail" src="' + js_data['result'][0]['hotel_data']['hotel_photos'][im3]['url_original'] + '" style="height: 40px; width: 46px;"></div>'
                $('#thumb3').append(comp);
            }
        } else if (js_data['result'][0]['hotel_data']['hotel_photos'].length > 24) {
            for (var im = 1; im <= 20; im++) {
                var comp = '<div style="float: left;" id="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" onmouseover="loadimgwice(this)" ><img class="img-thumbnail" src="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" style="height: 40px; width: 46px;"></div>'
                $('#thumb1').append(comp);
            }
        } else {
            console.log(js_data['result'][0]['hotel_data']['hotel_photos'].length);
            for (var im = 0; im < js_data['result'][0]['hotel_data']['hotel_photos'].length; im++) {
                var comp = '<div style="float: left;" id="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" onmouseover="loadimgwice(this)" ><img class="img-thumbnail" src="' + js_data['result'][0]['hotel_data']['hotel_photos'][im]['url_original'] + '" style="height: 40px; width: 46px;"></div>'
                $('#thumb1').append(comp);
            }
        }


        console.log(js_data);

        var ab1 = js_data['result'][0]['hotel_data']['checkin_checkout_times']['checkin_from'].split(":");
        var ab2 = js_data['result'][0]['hotel_data']['checkin_checkout_times']['checkout_to'].split(":");

        var a1 = "";
        var a2 = "";


        if (ab1[0] == "00") {
            a1 = "AM";
        } else if (ab1[0] == "01") {
            a1 = "AM";
        } else if (ab1[0] == "02") {
            a1 = "AM";
        } else if (ab1[0] == "03") {
            a1 = "AM";
        } else if (ab1[0] == "04") {
            a1 = "AM";
        } else if (ab1[0] == "05") {
            a1 = "AM";
        } else if (ab1[0] == "06") {
            a1 = "AM";
        } else if (ab1[0] == "07") {
            a1 = "AM";
        } else if (ab1[0] == "08") {
            a1 = "AM";
        } else if (ab1[0] == "09") {
            a1 = "AM";
        } else if (ab1[0] == "10") {
            a1 = "AM";
        } else if (ab1[0] == "11") {
            a1 = "AM";
        } else if (ab1[0] == "12") {
            a1 = "PM";
        } else if (ab1[0] == "13") {
            a1 = "PM";
        } else if (ab1[0] == "14") {
            a1 = "PM"
        } else if (ab1[0] == "15") {
            a1 = "PM"
        } else if (ab1[0] == "16") {
            a1 = "PM"
        } else if (ab1[0] == "17") {
            a1 = "PM"
        } else if (ab1[0] == "18") {
            a1 = "PM"
        } else if (ab1[0] == "19") {
            a1 = "PM"
        } else if (ab1[0] == "20") {
            a1 = "PM"
        } else if (ab1[0] == "21") {
            a1 = "PM"
        } else if (ab1[0] == "22") {
            a1 = "PM"
        } else if (ab1[0] == "23") {
            a1 = "PM"
        }


        if (ab2[0] == "00") {
            a2 = "AM";
        } else if (ab2[0] == "01") {
            a2 = "AM";
        } else if (ab2[0] == "02") {
            a2 = "AM";
        } else if (ab2[0] == "03") {
            a2 = "AM";
        } else if (ab2[0] == "04") {
            a2 = "AM";
        } else if (ab2[0] == "05") {
            a2 = "AM";
        } else if (ab2[0] == "06") {
            a2 = "AM";
        } else if (ab2[0] == "07") {
            a2 = "AM";
        } else if (ab2[0] == "08") {
            a2 = "AM";
        } else if (ab2[0] == "09") {
            a2 = "AM";
        } else if (ab1[0] == "10") {
            a2 = "AM";
        } else if (ab2[0] == "11") {
            a2 = "AM";
        } else if (ab2[0] == "12") {
            a2 = "PM";
        } else if (ab2[0] == "13") {
            a2 = "PM";
        } else if (ab2[0] == "14") {
            a2 = "PM"
        } else if (ab2[0] == "15") {
            a2 = "PM"
        } else if (ab2[0] == "16") {
            a2 = "PM"
        } else if (ab2[0] == "17") {
            a2 = "PM"
        } else if (ab2[0] == "18") {
            a2 = "PM"
        } else if (ab2[0] == "19") {
            a2 = "PM"
        } else if (ab2[0] == "20") {
            a2 = "PM"
        } else if (ab2[0] == "21") {
            a2 = "PM"
        } else if (ab2[0] == "22") {
            a2 = "PM"
        } else if (ab2[0] == "23") {
            a2 = "PM"
        }


        $('#cin').html(js_data['result'][0]['hotel_data']['checkin_checkout_times']['checkin_from'] + ' ' + a1);
        $('#cout').html(js_data['result'][0]['hotel_data']['checkin_checkout_times']['checkout_to'] + ' ' + a2);

        $('#for-special').html(js_data['result'][0]['hotel_data']['name'] + ' takes special requests - add in the next step! ');

        // load data to array for image
        for (var imagearr = 0; imagearr < js_data['result'][0]['hotel_data']['hotel_photos'].length; imagearr++) {
            array.push(js_data['result'][0]['hotel_data']['hotel_photos'][imagearr]['url_original']);
        }


        // load table

        console.log(statusbar);

        if (statusbar == "true") {
            // console.log('ok');
            loadwithDate(data_set2);
        } else if (statusbar == "false") {
            // console.log('no');
            loadwithoutDate(js_data);
        }

        var st;
        var pts;
        for (var ab = 0; ab < js_data['result'][0]['hotel_data']['hotel_policies'].length; ab++) {
            if (js_data['result'][0]['hotel_data']['hotel_policies'][ab]['type'] == "POLICY_CHILDREN") {
                st = js_data['result'][0]['hotel_data']['hotel_policies'][ab]['content'].split('\n');
            }

            if (js_data['result'][0]['hotel_data']['hotel_policies'][ab]['type'] == "POLICY_HOTEL_PETS") {
                pts = js_data['result'][0]['hotel_data']['hotel_policies'][ab]['content'];
            }

        }

        for (var ah = 0; ah < st.length; ah++) {
            $('#xxxx').append('<p  style="font-size: 13px;">' + st[ah] + '</p>');
        }

        $('#pt').append('<p  style="font-size: 13px;">' + pts + '</p>');


        if (js_data['result'][0]['hotel_data']['creditcard_required']) {

            var sam = '<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12" style="color: #333333; font-size: 15px; margin-top: 10px;"><i class="fas fa-credit-card" style="margin-right: 10px;"></i><span style="font-size: 13px;">Cards accepted at this hotel </span></div><div class="col-lg-9 col-md-9 col-sm-7 col-xs-12"><div style="width: 100%;"> <span><img src="https://cdn2.iconfinder.com/data/icons/credit-cards-6/156/american_express-512.png" alt="" style="width: 60px; height: 50px;"> <img src="data:image/png;base64,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" alt="" style="width: 50px; height: 30px;"> <img src="http://pngimg.com/uploads/visa/visa_PNG3.png" alt="" style="width: 50px; height: 30px;"></span> </div> <br>  <p style="font-size: 13px;">' + js_data['result'][0]['hotel_data']['name'] + ' accepts these cards and reserves the right to temporarily hold an amount prior to arrival.</p> </div>';
            $('#one-f').append(sam);


        }

        // load para


        $('#desc').append('<p class="para">' + js_data['result'][0]['hotel_data']['hotel_description'] + '</p>');
        $('#desc').append('<p class="para">' + js_data['result'][0]['hotel_data']['hotel_important_information'] + '</p>');
        if (js_data['result'][0]['hotel_data']['hotelier_welcome_message'] != undefined) {
            $('#desc').append('<p class="para">' + js_data['result'][0]['hotel_data']['hotelier_welcome_message'] + '</p>');
        } else {

        }
        $('#desc').append('<p class="para"> World Ranking is : ' + js_data['result'][0]['hotel_data']['ranking'] + '</p>');


        // load map

        var myLatlng = new google.maps.LatLng(js_data['result'][0]['hotel_data']['location']['latitude'],js_data['result'][0]['hotel_data']['location']['longitude']);
        var myOptions = {
            zoom: 4,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map-box"), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title:"Fast marker"
        });


        var guest_reviews = 0;
        if (js_data['result'][0]['hotel_data']['number_of_reviews'] != undefined) {
            guest_reviews = js_data['result'][0]['hotel_data']['number_of_reviews'];
        }

        $('#guest-review').html('Guest Reviews(' + guest_reviews + ')');

    }


    $('#prev').click(function () {
        if (position >= 1) {
            $('#img-id').attr('src', js_data['result'][0]['hotel_data']['hotel_photos'][position]['url_original']);
            position--;
        }
    });

    $('#next').click(function () {
        $('#img-id').attr('src', js_data['result'][0]['hotel_data']['hotel_photos'][position]['url_original']);
        position++;
    });


    // start facility popup


    $(function () {
        'use strict';
        $('.animated_progress span').each(function () {
            $(this).animate({
                width: $(this).data('progress')
            }, 1000, function () {
                $(this).text($(this).data('progress'));
            });
        });
    });




    $('#search-btn1').click(function () {

        var destinationsample = $('#destiny').val();
        var from = $('#datepick1').val();
        var to = $('#datepick2').val();
        var adult = $('#adult').val();
        var room = $('#room').val();
        var child = $('#child').val();


        var a = from.split("/");
        if (a.length > 1) {
            from = a[2] + '-' + a[0] + '-' + a[1];
            var a = to.split("/");
            to = a[2] + '-' + a[0] + '-' + a[1];
        }


        window.open(' http://visit2srilanka.com/result.php?destination=' + destinationsample + '&from=' + from + '&to=' + to + '&adult=' + adult + '&child=' + child + '&room=' + room + '', '_blank');
    });


    $('#sho').click(function () {
        window.open(' http://visit2srilanka.com/hotel.php', '_blank');
    });


    function loadwithDate(js_data) {

        console.log(js_data);

        var forx5 = '<table id="rwd-table"><thead><tr style="background-color: #4C76B2; color: white;"><th style="font-size: 14px; font-weight: bold; padding-right: 10px; text-align: center; border-right: 1px solid white;">Room Type</th><th style="font-size: 14px; font-weight: bold; text-align: center; border-right: 1px solid white;">Sleeps</th><th style="font-size: 14px; font-weight: bold; text-align: center; border-right: 1px solid white;">Today\'s Price</th><th style="font-size: 14px; font-weight: bold; text-align: center; border-right: 1px solid white;">Your Choice</th><th style="font-size: 14px; font-weight: bold; text-align: center; border-right: 1px solid white;"></th></tr></thead><tbody id="tbodytxt"></tbody></table>';
        $('#x5').append(forx5);


        for (var roomi = 0; roomi < js_data['result'][0]['block'].length; roomi++) {


            var maxperson = js_data['result'][0]['block'][roomi]['max_occupancy'];
            var roomtypespan = "";

            for (var xx = 0; xx < maxperson; xx++) {
                roomtypespan += '<i class="fas fa-user">&nbsp;';
            }

            // console.log(js_data);

            roomdatafrather = js_data['result'][0]['block'];

            var priceforroom = js_data['result'][0]['block'][roomi]['min_price']['price'];


            var prname = js_data['result'][0]['block'][roomi]['name'];
            var pr = prname.split("-");
            prname = pr[0];

            var yourchoicerefund = js_data['result'][0]['block'][roomi]['refundable'];
            var yourchoicebreakfirst = js_data['result'][0]['block'][roomi]['breakfast_included'];

            console.log(yourchoicerefund);
            console.log(yourchoicebreakfirst);

            var yourchoice = '';
            if (yourchoicebreakfirst) {
                yourchoice += '<span style="color: #4cd137; font-size: 13px;"><i class="fas fa-mug-hot" style=" font-size: 13px; margin-right: 5px;"></i>Good breakfast included</span><br>'
            }
            if (yourchoicerefund == false) {
                yourchoice = yourchoice + '<li style="font-size: 12px;">Non-refundable</li>';
            }
            if (yourchoicerefund == true) {
                yourchoice = yourchoice + '<li style="font-size: 12px;>Refundable-Possible</li>';
            }


            var facili = '';
            // for (var xample=0;xample<js_data['result'][0]['room_data'][roomi]['room_facilities'].length;xample++){
            //         // facili=facili+'<li>-'+js_data['result'][0]['room_data'][roomi]['room_facilities'][xample]['name']+'</li>';
            // }

            $('#tbodytxt').append('<tr  id="okk" class="' + roomi + '" onclick="loadroomdatadetail(roomdatafrather,this)"><td id="room-type"><i class="fas fa-chevron-right" style="color:#d35400; font-size: 15px; margin-right: 10px; "></i>' + prname + '<br><ul id="facid">' + facili + '</ul></td><td id="sam">' + roomtypespan + '</td><td id="pricefor"  class="' + roomi + '">US$' + priceforroom + '</td><td id="yourchoice"  class="' + roomi + '">' + yourchoice + '</td></tr>');


        }
    }

    function loadwithoutDate(js_data) {


        var forx5 = '<table id="rwd-table"><thead><tr style="background-color: #4C76B2; color: white;"><th style="font-size: 14px; font-weight: bold; border-right: 1px solid white;">Room Type</th><th style="font-size: 14px; font-weight: bold; padding-right: 10px; text-align: center; border-right: 1px solid white;">Sleeps</th><th></th></tr></thead><tbody id="tbodytxt"></tbody></table>';
        $('#x5').append(forx5);

        console.log(js_data);

        for (var roomi = 0; roomi < js_data['result'][0]['room_data'].length; roomi++) {


            var maxperson = js_data['result'][0]['room_data'][roomi]['room_info']['max_persons'];
            var roomtypespan = "";

            for (var xx = 0; xx < maxperson; xx++) {
                roomtypespan += '<i class="fas fa-user">&nbsp;';
            }

            // console.log(js_data);

            roomdatafrather = js_data['result'][0]['room_data'];


            $('#tbodytxt').append('<tr><td id="sam" class="' + roomi + '" style="text-align:left;" onclick="loadroomdata(roomdatafrather,this)"><i class="fas fa-chevron-right" style="color:#d35400; font-size: 15px; margin-right: 10px; "></i>' + js_data['result'][0]['room_data'][roomi]['room_name'] + '</td><td style="text-align:center;" id="okk" class="' + roomi + '" onclick="loadroomdata(roomdatafrather,this)">' + roomtypespan + '</td><td style="text-align:center;"><div style="width: 120px; height: 40px; background-color: white; -webkit-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); margin:auto;"><input type="button"  class="btn btn-primary" value="Reserve Room" onclick="call()" style="border-radius: 0px; width: 98%; margin-left: 1%; margin-top: 1px;"></div></td></tr>');
        }
    }


    $('#reserve1').click(function () {
        call();
    });
    $('.ok').click(function () {
        call();
    });
    $('#reseve3-btn').click(function () {
        call();
    });
    $('#reseve3').click(function () {
        call();
    });

    function call() {

        var hotelidforreseve = js_data['result'][0]['hotel_id'];
        var fromforreseve = $('.checkin').val();
        var toforreseve = $('.checkout').val();
        var childforreseve = $('.child').val();
        var adultforreseve = $('.adult').val();
        var roomforreseve = $('.room').val();

        if (hotelidforreseve != undefined && fromforreseve != undefined && toforreseve != undefined && childforreseve != undefined && adultforreseve != undefined && roomforreseve != undefined) {

            var a = childforreseve.split(" ");
            childforreseve = a[0];
            a = adultforreseve.split(" ");
            adultforreseve = a[0];
            a = roomforreseve.split(" ");
            roomforreseve = a[0];

            window.open('https://secure.booking.com/book.html?aid=1418617&hostname=www.booking.com&hotel_id=' + hotelidforreseve + '&checkin=' + fromforreseve + '&checkout=' + toforreseve + '&room=' + roomforreseve + '&child=' + childforreseve + '&adult=' + adultforreseve, '_blank');

        } else {
            alert('please enter Checkin checkout Data');
        }


    }


    var a1 = rooms.split(" ");
    var a2 = a1[0];
    $('#rooms2').val(a2);

    var b1 = adult.split(" ");
    var b2 = b1[0];
    $('#adults2').val(b2);

    var c1 = child.split(" ");
    var c2 = c1[0];
    $('#childs2').val(b2);


    $('#search-btn').click(function () {

        var destinationsample = $('#destiny').val();
        var from = $('#datepick3').val();
        var to = $('#datepick4').val();
        var adult = $('#adult').val();
        var room = $('#room').val();
        var child = $('#child').val();


        var a = from.split("/");
        if (a.length > 1) {
            from = a[2] + '-' + a[0] + '-' + a[1];
            var a = to.split("/");
            to = a[2] + '-' + a[0] + '-' + a[1];
        }


        window.open(' http://visit2srilanka.com/result.php?destination=' + destinationsample + '&from=' + from + '&to=' + to + '&adult=' + adult + '&child=' + child + '&room=' + room + '', '_blank');

    });

    $('#cheavailable1').click(function () {
        var destinationsample = $('#destiny').val();
        var from = $('#datepick3').val();
        var to = $('#datepick4').val();
        var adult = $('#adult').val();
        var room = $('#room').val();
        var child = $('#child').val();


        var a = from.split("/");
        if (a.length > 1) {
            from = a[2] + '-' + a[0] + '-' + a[1];
            var a = to.split("/");
            to = a[2] + '-' + a[0] + '-' + a[1];
        }


        window.open(' http://visit2srilanka.com/result.php?destination=' + destinationsample + '&from=' + from + '&to=' + to + '&adult=' + adult + '&child=' + child + '&room=' + room + '', '_blank');
    });


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&callback=initialize" ></script>

</body>
</html>
