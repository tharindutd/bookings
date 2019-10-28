<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="index.css">
    <link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<!--    <script-->
<!--            src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"-->
<!--            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="-->
<!--            crossorigin="anonymous"></script>-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <title>VISIT 2 SRI LANKA | HOTELS</title>
</head>
<body onload="loaddefault()">


<?php
require 'header.php';

$date = new \DateTime();
$minDate = $date->format("Y-m-d"); 

?>
<div class="se-pre-con"></div>
<!--start wrap-->
<div class="container">
    <div id="main-row" class="row">
        <div id="left-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-3">
            <div id="main-search">
                <span id="s-name">Search</span><br>
                <span class="d-txt">Destination </span>
                <input type="search" class="form-control destiny1" id="destiny" list="districtset" value="Colombo">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p a"></i></span> <input id="datepick1" type="hidden" min='<?php print $minDate; ?>' placeholder=""><input id="span-datepick1" style="border: none;" class="daterange" type="text" placeholder=""><span class="daterange" id="span-datepick1" style="width:100%"></span> </p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p b"></i></span> <input id="datepick2" type="hidden" min='<?php print $minDate; ?>' placeholder=""><input id="span-datepick2"  style="border: none;background: none" class="daterange" type="text" placeholder=""><span class="daterange2" id="span-datepick2" style="width:100%"></span></p>
                </div>

                <select name="adult" id="adult" class="form-control adult1">
                    <?php
                    for ($var1 = 1; $var1 <= 30; $var1++) {
                        ?>

                        <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                    <?php }
                    ?>
                </select>

                <div id="ch">
                    <select name="child" id="child" class="form-control child1">
                        <option value="0 CHILDREN">0 CHILDREN</option>
                        <?php
                        for ($var1 = 1; $var1 <= 15; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                        <?php }
                        ?>
                    </select>


                    <select name="room" id="room" class="form-control room1">
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
                    <p id="aa"><input type="button" id="search-btn" class="btn btn-primary" value="Search"></p>
                </div>

            </div>
            <div class="filters-main">
                <fieldset>
                    <div id="filterbox_options">
                        <div class="filterbox_options_content" data-block-id="filter_options">
                            <div class="filter_by_wrapper">
                                <h2 class="filter_by" tabindex="-1">Filter results</h2>
                            </div>
                        </div>
                        <div class="filter-content">
                            <div class="filtercategory start-rating-header icon_filtercategory_container">
                                <h3 class="filtercategory-title">Star Rating</h3>
                            </div>
                            <div class="filteroptions star-ratings" role="group">
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="onestar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">1 star</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="twostar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">2 star</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="threestar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">3 star</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="fourstar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">4 star</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="fivestar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">5 star</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                                <div class="filteroptions-content-wrap">                                    
                                    <div class="filteroptions-content" id="nonestar">
                                        <input class="bui-checkbox__input filteroption-input" type="checkbox">
                                        <span class="filter_label">Unrated</span>
                                        <span class="filter_count"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="filteroptions hotel-types" role="group">
                                <div class="filtercategory hotel-types-header icon_filtercategory_container">
                                    <h3 class="filtercategory-title">Property Type</h3>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </div>
            <!-- <div class="filter-main">
                <div class="filter-main-name">

                    <span>Filter by :<i class="fas fa-sort-amount-down"
                                        style="float: right; margin-right: 60px;color: #7f8fa6; font-size: 30px; margin-top: 5px;"></i></span>
                </div>
                <hr>

                <div class="loads" style="width: 250px;">
                    <div class="star-rating-filter collapse">
                        <p class="star-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div class="star-rating-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="s1"/>
                                <span class="iname">1 Star</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="s2"/>
                                <span class="iname">2 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="s3"/>
                                <span class="iname">3 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="s4"/>
                                <span class="iname">4 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="s5"/>
                                <span class="iname">5 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="s6"/>
                                <span class="iname">Unrated</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div class="quiqe-filter">
                        <p class="quiq-txt">Quick filters <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div class="quiq-filter-inside">
                            <label class="checkbox_1"">
                                <input type="checkbox" id="hotels"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="verygood"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="freewifi"/>
                                <span class="iname">Free Wifi</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="airportsutle"/>
                                <span class="iname">Airport Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="mount"/>
                                <span class="iname">Mount Lavinia</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="beachfront"/>
                                <span class="iname">Beachfront</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="sup"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div class="fun-thinks-filter">
                        <p id="fun-thinks-txt">Fun Thinks To Do <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="fun-thinks-filter-inside">

                            <label class="checkbox_1">
                                <input type="checkbox" class="fitnesscenter"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="golscours"/>
                                <span class="iname">Golf Course</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="library"/>
                                <span class="iname">Library</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="massage"/>
                                <span class="iname">Massage</span>
                                <span class="txt-count"></span>
                            </label>

                            <p class="show-all" id="show-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox" id="teniscourt"/>
                                    <span class="iname">Tennis Court</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="souna"/>
                                    <span class="iname">Souna</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="fishing"/>
                                    <span class="iname">Fishing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="gameroom"/>
                                    <span class="iname">Games Room</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="casino"/>
                                    <span class="iname">Casino</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="spaand"/>
                                    <span class="iname">Spa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="biliads"/>
                                    <span class="iname">Billiards</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="caroke"/>
                                    <span class="iname">Karaoke</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="tbltenis"/>
                                    <span class="iname">Table Tennis</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="hottub"/>
                                    <span class="iname">Hot Tub</span>
                                    <span class="txt-count"></span>
                                </label>

                            </div>


                        </div>
                    </div>

                    <div id="reception-filter">
                        <p id="reception-txt">24-Hour Reception <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="reception-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="frontdesc"/>
                                <span class="iname">Front desk Open 24/7</span>
                                <span class="txt-count"></span>
                            </label>
                        </div>
                    </div>


                    <div id="Beach-filter">
                        <p id="Beach-txt">Beach Access <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="Beach-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="beachfront1"/>
                                <span class="iname">Beach Front</span>
                                <span class="txt-count"></span>
                            </label>
                        </div>
                    </div>


                    <div id="property-filter">
                        <p id="property-txt">Property Type <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="property-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="apartments"/>
                                <span class="iname">Apartments</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="hotels1"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="bedandbrekfirst"/>
                                <span class="iname">Bed And BreakFirst</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="guesthouse"/>
                                <span class="iname">Guest House</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="homestays"/>
                                <span class="iname">HomeStays</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="holidayhomes"/>
                                <span class="iname">Holiday Homes</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="villa"/>
                                <span class="iname">Villas</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="property-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="property-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox" id="resorts"/>
                                    <span class="iname">Resorts</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="lodges"/>
                                    <span class="iname">Lodges</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="countryhous"/>
                                    <span class="iname">Country Houses</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="capculehotel"/>
                                    <span class="iname">Capsule Hotels</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>


                    <div id="review-rating-filter" class="collapse">
                        <p id="review-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="review-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="nine"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="eight"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="seven"/>
                                <span class="iname">Good: 7+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1" >
                                <input type="checkbox" id="six"/>
                                <span class="iname">Pleasant: 6+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="five"/>
                                <span class="iname">No Rating</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>


                    <div id="facility-filter">
                        <p id="facility-txt">Facilities <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="facility-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="parking"/>
                                <span class="iname">Parking</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="resturent"/>
                                <span class="iname">Restaurant</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="petallowd"/>
                                <span class="iname">Pets Allowed</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="roomservice"/>
                                <span class="iname">Room Service</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="fitnesscenter1"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="nosmoke"/>
                                <span class="iname">Non-Smokin Room</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="airport"/>
                                <span class="iname">Air-Port Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="facilitydisable"/>
                                <span class="iname">Facilities For Disabled Guests</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox" id="familtyroom"/>
                                    <span class="iname">Family Rooms</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="spa"/>
                                    <span class="iname">Spa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="freeifi"/>
                                    <span class="iname">Free Wi-fi</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="eletric"/>
                                    <span class="iname">Electric Vehicle Charging Station</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="swimingpool"/>
                                    <span class="iname">Swiming Pool</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="room-facility-filter" class="collapse">
                        <p id="room-facility-txt">Room Facilities <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="room-facility-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="kitchen"/>
                                <span class="iname">Kitchen/Kitchenette</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="privatebath"/>
                                <span class="iname">private Bathroom</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="aircondition"/>
                                <span class="iname">Air Conditioning</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="bath"/>
                                <span class="iname">Bath</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" is="terres"/>
                                <span class="iname">Terrace</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="balcony"/>
                                <span class="iname">Balcony</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="flattv"/>
                                <span class="iname">Flat-Screen TV</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="washingmashin"/>
                                <span class="iname">Washing Machine</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="room-facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="room-facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox" id="patio"/>
                                    <span class="iname">Patio</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="soundprof"/>
                                    <span class="iname">Soundproofing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="view"/>
                                    <span class="iname">View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="seawiew"/>
                                    <span class="iname">Sea View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="electricke"/>
                                    <span class="iname">Electric Kettle</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox" id="c"/>
                                    <span class="iname">Coffee/Tea Maker</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>
                    <hr>
                </div>
            </div> -->
        </div>


        <div id="right-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-9">


            <p id="prpertfound"></p>

            <!--start top search-->

            <div class="row" id="fu">
                <div class="col-lg-4 col-md-4 col-xs-12 pics A" style="background-color: #0AB21B; font-size: 10px;">
                    OUR TOP PICKS
                </div>
                <div style="font-size: 10px;" class="col-lg-4 col-xs-12  col-md-4  pics C">
                    SHOW HOMES FIRST
                </div>
                <div style="font-size: 10px;" class="col-lg-4 col-md-4  col-xs-12 pics B">
                    PRICE (LOWEST FIRST)
                </div>
            </div>

            <!--start top search-->

            <div id="details">

            </div>


<!--            start pagination-->

            <div class="wrapper">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12" id="pag">
<!--                            <h1>jQuery Pagination</h1>-->
<!--                            <p>Simple pagination using the TWBS pagination JS library. Click the buttons below to navigate to the appropriate content</p>-->

                        </div>
                    </div>

                    <div id="page-content" class="page-content">Page 1</div>
                </div>
            </div>


<!--            start pagination-->

        </div>
    </div>
</div>


<?php
require 'footer.php'
?>

<!--start wrap-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
<script type="text/javascript">

$(function() {
     $('.daterange').daterangepicker({
       locale: {
         format: 'MMMM D, YYYY'
       },
       autoApply:true,
       autoUpdateInput:false,
     }, function(start, end, label) {
       $("#span-datepick1").val(start.format('MMMM D, YYYY'));
       $("#span-datepick2").val(end.format('MMMM D, YYYY'));
       $("#datepick1").val(start.format('M/DD/YYYY'));
       $("#datepick2").val(end.format('M/DD/YYYY'));
     });

   });

   $(function() {
     $('.daterange2').daterangepicker({
       locale: {
         format: 'MMMM D, YYYY'
       },
       autoApply:true,
       autoUpdateInput:false,
     }, function(start, end, label) {
       $("#span-datepick1").val(start.format('MMMM D, YYYY'));
       $("#span-datepick2").val(end.format('MMMM D, YYYY'));
       $("#datepick1").val(start.format('M/DD/YYYY'));
       $("#datepick2").val(end.format('M/DD/YYYY'));
     });

   });

    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").hide();
    });



    $('.A').click(function () {
        allWhite();
        $('.A').css("background-color","#0AB21B");
    });
    $('.B').click(function () {
        allWhite();
        $('.B').css("background-color","#0AB21B");
    });
    $('.C').click(function () {
        allWhite();
        $('.C').css("background-color","#0AB21B");
    });
    $('.D').click(function () {
        allWhite();
        $('.D').css("background-color","#0AB21B");
    });
    $('.E').click(function () {
        allWhite();
        $('.E').css("background-color","#0AB21B");
    });



    function allWhite() {
        $('.A').css("background-color","white");
        $('.B').css("background-color","white");
        $('.D').css("background-color","white");
        $('.E').css("background-color","white");
        $('.F').css("background-color","white");
    }
    



    // $('.wrap').hide();



    // start drop down


    // $('#filter-main-name').click(function () {
    //     $('#loads').slideToggle(function () {
    //
    //     });
    // });
    //
    // $('#star-txt').click(function () {
    //     $('#star-rating-filter-inside').slideToggle(function () {
    //
    //     });
    //
    // });
    //
    //
    // $('#quiq-txt').click(function () {
    //     $('#quiq-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    //
    //
    // $('#fun-thinks-txt').click(function () {
    //     $('#fun-thinks-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    // $('#reception-txt').click(function () {
    //     $('#reception-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    // $('#facility-txt').click(function () {
    //     $('#facility-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    //
    //
    // $('#room-facility-txt').click(function () {
    //     $('#room-facility-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    //
    // $('#district-txt').click(function () {
    //     $('#district-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    //
    // $('#Beach-txt').click(function () {
    //     $('#Beach-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    // $('#property-txt').click(function () {
    //     $('#property-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    // // $('#filter-main').click(function () {
    // //     $('#load').slideToggle(function () {
    // //
    // //     });
    // // });
    // $('#review-txt').click(function () {
    //     $('#review-filter-inside').slideToggle(function () {
    //
    //     });
    // });
    //
    // $('#show-funs').click(function () {
    //     $('#hidden-funs').slideToggle(function () {
    //
    //     });
    //     $('#show-funs').hide();
    //
    // });
    //
    // $('#property-funs').click(function () {
    //     $('#property-hidden-funs').slideToggle(function () {
    //
    //     });
    //     $('#property-funs').hide();
    //
    // });
    // $('#facility-funs').click(function () {
    //     $('#facility-hidden-funs').slideToggle(function () {
    //
    //     });
    //     $('#facility-funs').hide();
    //
    // });
    // $('#room-facility-funs').click(function () {
    //     $('#room-facility-hidden-funs').slideToggle(function () {
    //
    //     });
    //     $('.room-facility-funs').hide();
    //
    // });
    // $('#district-funs').click(function () {
    //     $('#district-hidden-funs').slideToggle(function () {
    //
    //     });
    //     $('#district-funs').hide();
    //
    // });
    //
    // // end drop down

    function loaddefault() {


        $('.se-pre-con').fadeOut();

        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var tomorrow = new Date(Date.now() + 24 * 60 * 60 * 1000);
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        var t_dd = String(tomorrow.getDate()).padStart(2, '0');
        var t_mm = String(tomorrow.getMonth() + 1).padStart(2, '0'); //January is 0!
        var t_yyyy = tomorrow.getFullYear();
        start = months[today.getMonth()] + ' ' + dd + ', ' + yyyy;
        end = months[tomorrow.getMonth()] + ' ' + t_dd + ', ' + t_yyyy;

        today_s = mm + '/' + dd + '/' + yyyy;
        tomorrow_s = t_mm + '/' + t_dd + '/' + t_yyyy;

        $('#datepick1').val(today_s);
        $('#datepick2').val(tomorrow_s);
        $("#span-datepick1").val(start);
        $("#span-datepick2").val(end);


        loadHotelNameWice('Colombo');




    }

</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="index.js" type="text/javascript"></script>
</body>
</html>
