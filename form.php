
<?php
    $where=$_GET['destination'];
    $from=$_GET['from'];
    $to=$_GET['to'];
    $adult=$_GET['adult'];
    $child=$_GET['child'];
    $room=$_GET['room'];
?>

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
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>VISIT 2 SRI LANNKA</title>
</head>
<body onload="loaddefault()">


<div class="se-pre-con"></div>


<?php
require 'header.php';
?>


<!--start wrap-->


<!--<div id="loaddiv">-->
<!---->
<!--    <p style="text-align: center; margin-top: 100px;"><img src="Capture.PNG" alt=""></p>-->
<!--    <p style="text-align: center;"><img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt=""></p>-->
<!---->
<!--</div>-->

<div class="wrap">
    <div id="main-row" class="row">
        <div id="left-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-3">
            <div id="main-search">
                <span id="s-name">Search</span><br>
                <span class="d-txt">Destination/property name: </span>
                <input type="search" class="form-control" id="destiny" list="districtset" value="Colombo">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick1"
                                                                                   placeholder="check-in-date"></p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick2"
                                                                                   placeholder="check-out-date"></p>
                </div>

                <select name="adult" id="adult" class="form-control">
                    <?php
                    for ($var1 = 1; $var1 <= 30; $var1++) {
                        ?>

                        <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                    <?php }
                    ?>
                </select>

                <div id="ch">
                    <select name="child" id="child" class="form-control">
                        <option value="0 CHILDREN">0 CHILDREN</option>
                        <?php
                        for ($var1 = 1; $var1 <= 15; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                        <?php }
                        ?>
                    </select>


                    <select name="child" id="room" class="form-control">
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
                    <p id="aa"><input type="button" id="search-btn" class="btn btn-primary" value="Serach"></p>
                </div>

            </div>
            <div id="filter-main">
                <div id="filter-main-name">

                    <span>Filter by :<i class="fas fa-sort-amount-down"
                                        style="float: right; margin-right: 60px;color: #7f8fa6; font-size: 30px; margin-top: 5px;"></i></span>
                </div>
                <hr>

                <div id="loads" style="width: 250px;">
                    <div id="star-rating-filter">
                        <p id="star-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="star-rating-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">1 Star</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">2 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">3 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">4 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">5 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Unrated</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="quiqe-filter">
                        <p id="quiq-txt">Quick filters <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="quiq-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Free Wifi</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Airport Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Collupitiya</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Beachfront</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="fun-thinks-filter">
                        <p id="fun-thinks-txt">Fun Thinks To Do <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="fun-thinks-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Beach</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Golf Course</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Library</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Massage</span>
                                <span class="txt-count"></span>
                            </label>

                            <p class="show-all" id="show-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Tennis Court</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Souna</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Fishing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Games Room</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Casino</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Spa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Billiards</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Karaoke</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Table Tennis</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
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
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
                                <span class="iname">Apartments</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Bed And BreakFirst</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Guest House</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">HomeStays</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Holiday Homes</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Villas</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="property-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="property-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Resorts</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Lodges</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Country Houses</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Capsule Hotels</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Motels</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Campsites</span>
                                    <span class="txt-count"></span>
                                </label>

                            </div>


                        </div>
                    </div>


                    <div id="review-rating-filter">
                        <p id="review-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="review-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Good: 7+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Pleasant: 6+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
                                <span class="iname">Parking</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Restaurant</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Pets Allowed</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Room Service</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Non-Smokin Room</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Air-Port Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Facilities For Disabled Guests</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Family Rooms</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Sa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Free Wi-fi</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Electric Vehicle Charging Station</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Swiming Pool</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="room-facility-filter">
                        <p id="room-facility-txt">Room Facilities <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="room-facility-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Kitchen/Kitchenette</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">private Bathroom</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Air Conditioning</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Bath</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Terrace</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Balcony</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Flat-Screen TV</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Washing Machine</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="room-facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="room-facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Patio</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Soundproofing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Sea View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Electric Kettle</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Coffee/Tea Maker</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="district-filter">
                        <p id="district-txt">District <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="district-filter-inside">

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Colombo District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Batticaloa District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Ampara District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Jaffna District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Mullaitivu District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Vavuniya District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Puttalam District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Kurunegala District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Gampaha District</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="district-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="district-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Colombo District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kalutara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Anuradhapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Polonnaruwa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Matale District</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kandy District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Nuwara Eliya District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kegalle District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Ratnapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Trincomalee District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Batticaloa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Ampara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Jaffna District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kilinochchi District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Mannar District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Badulla District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Monaragala District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Hambantota District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Matara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Galle District</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>
                    <hr>
                    <div id="map-view">

                    </div>

                </div>

            </div>
        </div>


        <div id="right-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-9">

            <p id="prpertfound"></p>

            <!--start top search-->

            <div class="row" id="fu">
                <div id="top-pics" class="col-lg-2 col-md-2 col-xs-12 pics">
                    our top pics
                </div>
                <div id="price" class="col-lg-2 col-md-2  col-xs-12 pics">
                    Price (lowest first)
                </div>
                <div id="stars" class="col-lg-2 col-xs-12  col-md-2  pics">
                    stars <i class="fas fa-sort-down" style="color: #d35400; font-size: 15px;"></i>
                </div>
                <div id="star-price" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Star Rating And Price
                </div>
                <div id="top-review" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Top reviewed
                </div>
            </div>


            <!--start top search-->

            <div id="details">

            </div>


        </div>
    </div>
</div>


<!--start wrap-->



<?php
require 'footer.php';
?>



<script type="text/javascript">




    $('.wrap').hide();


    $(document).ready(function () {
        $('#datepick1').datepicker()
        $('#datepick2').datepicker()
    });


    // start drop down


    $('#filter-main-name').click(function () {
        $('#loads').slideToggle(function () {

        });
    });

    $('#star-txt').click(function () {
        $('#star-rating-filter-inside').slideToggle(function () {

        });

    });


    $('#quiq-txt').click(function () {
        $('#quiq-filter-inside').slideToggle(function () {

        });
    });


    $('#fun-thinks-txt').click(function () {
        $('#fun-thinks-filter-inside').slideToggle(function () {

        });
    });
    $('#reception-txt').click(function () {
        $('#reception-filter-inside').slideToggle(function () {

        });
    });
    $('#facility-txt').click(function () {
        $('#facility-filter-inside').slideToggle(function () {

        });
    });


    $('#room-facility-txt').click(function () {
        $('#room-facility-filter-inside').slideToggle(function () {

        });
    });

    $('#district-txt').click(function () {
        $('#district-filter-inside').slideToggle(function () {

        });
    });

    $('#Beach-txt').click(function () {
        $('#Beach-filter-inside').slideToggle(function () {

        });
    });
    $('#property-txt').click(function () {
        $('#property-filter-inside').slideToggle(function () {

        });
    });
    // $('#filter-main').click(function () {
    //     $('#load').slideToggle(function () {
    //
    //     });
    // });
    $('#review-txt').click(function () {
        $('#review-filter-inside').slideToggle(function () {

        });
    });

    $('#show-funs').click(function () {
        $('#hidden-funs').slideToggle(function () {

        });
        $('#show-funs').hide();

    });

    $('#property-funs').click(function () {
        $('#property-hidden-funs').slideToggle(function () {

        });
        $('#property-funs').hide();

    });
    $('#facility-funs').click(function () {
        $('#facility-hidden-funs').slideToggle(function () {

        });
        $('#facility-funs').hide();

    });
    $('#room-facility-funs').click(function () {
        $('#room-facility-hidden-funs').slideToggle(function () {

        });
        $('#room-facility-funs').hide();

    });
    $('#district-funs').click(function () {
        $('#district-hidden-funs').slideToggle(function () {

        });
        $('#district-funs').hide();

    });

    // end drop down

    function loaddefault() {

        loadHotelNameWice('Colombo');
        $('.se-pre-con').fadeOut();

    }


</script>


<script src="index.js" type="text/javascript"></script>
</body>
</html><!doctype html>
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
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body onload="loaddefault()">


<!--start wrap-->


<div id="loaddiv">

    <p style="text-align: center; margin-top: 100px;"><img src="Capture.PNG" alt=""></p>
    <p style="text-align: center;"><img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt=""></p>

</div>

<div class="wrap">
    <div id="main-row" class="row">
        <div id="left-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-3">
            <div id="main-search">
                <span id="s-name">Search</span><br>
                <span class="d-txt">Destination/property name: </span>
                <input type="search" class="form-control" id="destiny" list="districtset" value="Colombo">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick1"
                                                                                   placeholder="check-in-date"></p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick2"
                                                                                   placeholder="check-out-date"></p>
                </div>

                <select name="adult" id="adult" class="form-control">
                    <?php
                    for ($var1 = 1; $var1 <= 30; $var1++) {
                        ?>

                        <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                    <?php }
                    ?>
                </select>

                <div id="ch">
                    <select name="child" id="child" class="form-control">
                        <option value="0 CHILDREN">0 CHILDREN</option>
                        <?php
                        for ($var1 = 1; $var1 <= 15; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                        <?php }
                        ?>
                    </select>


                    <select name="child" id="room" class="form-control">
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
                    <p id="aa"><input type="button" id="search-btn" class="btn btn-primary" value="Serach"></p>
                </div>

            </div>
            <div id="filter-main">
                <div id="filter-main-name">

                    <span>Filter by :<i class="fas fa-sort-amount-down"
                                        style="float: right; margin-right: 60px;color: #7f8fa6; font-size: 30px; margin-top: 5px;"></i></span>
                </div>
                <hr>

                <div id="loads" style="width: 250px;">
                    <div id="star-rating-filter">
                        <p id="star-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="star-rating-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">1 Star</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">2 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">3 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">4 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">5 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Unrated</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="quiqe-filter">
                        <p id="quiq-txt">Quick filters <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="quiq-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Free Wifi</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Airport Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Collupitiya</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Beachfront</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="fun-thinks-filter">
                        <p id="fun-thinks-txt">Fun Thinks To Do <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="fun-thinks-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Beach</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Golf Course</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Library</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Massage</span>
                                <span class="txt-count"></span>
                            </label>

                            <p class="show-all" id="show-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Tennis Court</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Souna</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Fishing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Games Room</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Casino</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Spa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Billiards</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Karaoke</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Table Tennis</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
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
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
                                <span class="iname">Apartments</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Bed And BreakFirst</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Guest House</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">HomeStays</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Hotels</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Holiday Homes</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Villas</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="property-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="property-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Resorts</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Lodges</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Country Houses</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Capsule Hotels</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Motels</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Campsites</span>
                                    <span class="txt-count"></span>
                                </label>

                            </div>


                        </div>
                    </div>


                    <div id="review-rating-filter">
                        <p id="review-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="review-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Good: 7+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Pleasant: 6+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
                                <span class="iname">Parking</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Restaurant</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Pets Allowed</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Room Service</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Fitness Center</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Non-Smokin Room</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Air-Port Shuttle</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Facilities For Disabled Guests</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Family Rooms</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Sa And Wellness Center</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Free Wi-fi</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Electric Vehicle Charging Station</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Swiming Pool</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="room-facility-filter">
                        <p id="room-facility-txt">Room Facilities <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="room-facility-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Kitchen/Kitchenette</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">private Bathroom</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Air Conditioning</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Bath</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Terrace</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Balcony</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Flat-Screen TV</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Washing Machine</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="room-facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="room-facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Patio</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Soundproofing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Sea View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Electric Kettle</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Coffee/Tea Maker</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="district-filter">
                        <p id="district-txt">District <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="district-filter-inside">

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Colombo District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Batticaloa District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Ampara District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Jaffna District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Mullaitivu District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Vavuniya District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Puttalam District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Kurunegala District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Gampaha District</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="district-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="district-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Colombo District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kalutara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Anuradhapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Polonnaruwa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Matale District</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kandy District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Nuwara Eliya District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kegalle District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Ratnapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Trincomalee District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Batticaloa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Ampara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Jaffna District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Kilinochchi District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Mannar District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Badulla District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Monaragala District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Hambantota District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Matara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Galle District</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>
                    <hr>
                    <div id="map-view">

                    </div>

                </div>

            </div>
        </div>


        <div id="right-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-9">

            <p id="prpertfound"></p>

            <!--start top search-->

            <div class="row" id="fu">
                <div id="top-pics" class="col-lg-2 col-md-2 col-xs-12 pics">
                    our top pics
                </div>
                <div id="price" class="col-lg-2 col-md-2  col-xs-12 pics">
                    Price (lowest first)
                </div>
                <div id="stars" class="col-lg-2 col-xs-12  col-md-2  pics">
                    stars <i class="fas fa-sort-down" style="color: #d35400; font-size: 15px;"></i>
                </div>
                <div id="star-price" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Star Rating And Price
                </div>
                <div id="top-review" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Top reviewed
                </div>
            </div>


            <!--start top search-->

            <div id="details">

            </div>


        </div>
    </div>
</div>


<!--start wrap-->


<script type="text/javascript">




    $('.wrap').hide();


    $(document).ready(function () {
        $('#datepick1').datepicker()
        $('#datepick2').datepicker()
    });


    // start drop down


    $('#filter-main-name').click(function () {
        $('#loads').slideToggle(function () {

        });
    });

    $('#star-txt').click(function () {
        $('#star-rating-filter-inside').slideToggle(function () {

        });

    });


    $('#quiq-txt').click(function () {
        $('#quiq-filter-inside').slideToggle(function () {

        });
    });


    $('#fun-thinks-txt').click(function () {
        $('#fun-thinks-filter-inside').slideToggle(function () {

        });
    });
    $('#reception-txt').click(function () {
        $('#reception-filter-inside').slideToggle(function () {

        });
    });
    $('#facility-txt').click(function () {
        $('#facility-filter-inside').slideToggle(function () {

        });
    });


    $('#room-facility-txt').click(function () {
        $('#room-facility-filter-inside').slideToggle(function () {

        });
    });

    $('#district-txt').click(function () {
        $('#district-filter-inside').slideToggle(function () {

        });
    });

    $('#Beach-txt').click(function () {
        $('#Beach-filter-inside').slideToggle(function () {

        });
    });
    $('#property-txt').click(function () {
        $('#property-filter-inside').slideToggle(function () {

        });
    });
    // $('#filter-main').click(function () {
    //     $('#load').slideToggle(function () {
    //
    //     });
    // });
    $('#review-txt').click(function () {
        $('#review-filter-inside').slideToggle(function () {

        });
    });

    $('#show-funs').click(function () {
        $('#hidden-funs').slideToggle(function () {

        });
        $('#show-funs').hide();

    });

    $('#property-funs').click(function () {
        $('#property-hidden-funs').slideToggle(function () {

        });
        $('#property-funs').hide();

    });
    $('#facility-funs').click(function () {
        $('#facility-hidden-funs').slideToggle(function () {

        });
        $('#facility-funs').hide();

    });
    $('#room-facility-funs').click(function () {
        $('#room-facility-hidden-funs').slideToggle(function () {

        });
        $('#room-facility-funs').hide();

    });
    $('#district-funs').click(function () {
        $('#district-hidden-funs').slideToggle(function () {

        });
        $('#district-funs').hide();

    });

    // end drop down

    function loaddefault() {

        loadHotelNameWice('Colombo');

    }


</script>


<script src="index.js" type="text/javascript"></script>
</body>
</html><!doctype html>
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
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body onload="loaddefault()">


<!--start wrap-->


<div id="loaddiv">

    <p style="text-align: center; margin-top: 100px;"><img src="Capture.PNG" alt=""></p>
    <p style="text-align: center;"><img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt=""></p>

</div>

<div class="wrap">
    <div id="main-row" class="row">
        <div id="left-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-3">
            <div id="main-search">
                <span id="s-name">Search</span><br>
                <span class="d-txt">Destination/property name: </span>
                <input type="search" class="form-control" id="destiny" list="districtset" value="Colombo">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick1"
                                                                                   placeholder="check-in-date"></p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick2"
                                                                                   placeholder="check-out-date"></p>
                </div>

                <select name="adult" id="adult" class="form-control">
                    <?php
                    for ($var1 = 1; $var1 <= 30; $var1++) {
                        ?>

                        <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                    <?php }
                    ?>
                </select>

                <div id="ch">
                    <select name="child" id="child" class="form-control">
                        <option value="0 CHILDREN">0 CHILDREN</option>
                        <?php
                        for ($var1 = 1; $var1 <= 15; $var1++) {
                            ?>

                            <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                        <?php }
                        ?>
                    </select>


                    <select name="child" id="room" class="form-control">
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
                    <p id="aa"><input type="button" id="search-btn" class="btn btn-primary" value="Serach"></p>
                </div>

            </div>
            <div id="filter-main">
                <div id="filter-main-name">

                    <span>Filter by :<i class="fas fa-sort-amount-down"
                                        style="float: right; margin-right: 60px;color: #7f8fa6; font-size: 30px; margin-top: 5px;"></i></span>
                </div>
                <hr>

                <div id="loads" style="width: 250px;">
                    <div id="star-rating-filter">
                        <p id="star-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="star-rating-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">1 Star</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">2 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">3 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">4 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">5 Stars</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Unrated</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="quiqe-filter">
                        <p id="quiq-txt">Quick filters <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="quiq-filter-inside">
                            <label class="checkbox_1"">
                            <input type="checkbox" id="hotels"/>
                            <span class="iname">Hotels</span>
                            <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
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
                                <input type="checkbox"/>
                                <span class="iname">Collupitiya</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="beachfront"/>
                                <span class="iname">Beachfront</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                        </div>
                    </div>

                    <div id="fun-thinks-filter">
                        <p id="fun-thinks-txt">Fun Thinks To Do <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="fun-thinks-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox" id="beach"/>
                                <span class="iname">Beach</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="fitnesscenter"/>
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
                                <input type="checkbox" id="beachfront"/>
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
                                <input type="checkbox" id="hotels"/>
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


                    <div id="review-rating-filter">
                        <p id="review-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="review-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Superb: 9+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Very Good: 8+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Good: 7+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Pleasant: 6+</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
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
                                <input type="checkbox" id="fitnesscenter"/>
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

                    <div id="room-facility-filter">
                        <p id="room-facility-txt">Room Facilities <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="room-facility-filter-inside">
                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Kitchen/Kitchenette</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">private Bathroom</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Air Conditioning</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Bath</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Terrace</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Balcony</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Flat-Screen TV</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox"/>
                                <span class="iname">Washing Machine</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="room-facility-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="room-facility-hidden-funs" class="collapse">
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Patio</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Soundproofing</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Sea View</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Electric Kettle</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox"/>
                                    <span class="iname">Coffee/Tea Maker</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>

                    <div id="district-filter">
                        <p id="district-txt">District <i
                                    style="margin-left: 50px; font-size: 15px; color: blue; float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="district-filter-inside">

                            <label class="checkbox_1">
                                <input type="checkbox" id="ColomboDistrict"/>
                                <span class="iname">Colombo District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="BatticaloaDistrict"/>
                                <span class="iname">Batticaloa District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="AmparaDistrict"/>
                                <span class="iname">Ampara District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="JaffnaDistrict"/>
                                <span class="iname">Jaffna District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="MullaitivuDistrict"/>
                                <span class="iname">Mullaitivu District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="VavuniyaDistrict"/>
                                <span class="iname">Vavuniya District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="PuttalamDistrict"/>
                                <span class="iname">Puttalam District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="KurunegalaDistrict"/>
                                <span class="iname">Kurunegala District</span>
                                <span class="txt-count"></span>
                            </label>

                            <label class="checkbox_1">
                                <input type="checkbox" id="GampahaDistrict"/>
                                <span class="iname">Gampaha District</span>
                                <span class="txt-count"></span>
                            </label>


                            <p class="show-all" id="district-funs">Show All <i class="fas fa-sort-down"></i></p>

                            <div id="district-hidden-funs" class="collapse">

                                <label class="checkbox_1">
                                    <input type="checkbox"  id="KalutaraDistrict"/>
                                    <span class="iname">Kalutara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="AnuradhapuraDistrict"/>
                                    <span class="iname">Anuradhapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="PolonnaruwaDistrict"/>
                                    <span class="iname">Polonnaruwa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="MataleDistrict"/>
                                    <span class="iname">Matale District</span>
                                    <span class="txt-count"></span>
                                </label>
                                <label class="checkbox_1">
                                    <input type="checkbox" id="KandyDistrict"/>
                                    <span class="iname">Kandy District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="NuwaraEliyaDistrict"/>
                                    <span class="iname">Nuwara Eliya District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="KegalleDistrict"/>
                                    <span class="iname">Kegalle District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="RatnapuraDistrict"/>
                                    <span class="iname">Ratnapura District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="TrincomaleeDistrict"/>
                                    <span class="iname">Trincomalee District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="BatticaloaDistrict"/>
                                    <span class="iname">Batticaloa District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="AmparaDistrict"/>
                                    <span class="iname">Ampara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="JaffnaDistrict"/>
                                    <span class="iname">Jaffna District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="KilinochchiDistrict"/>
                                    <span class="iname">Kilinochchi District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="MannarDistrict"/>
                                    <span class="iname">Mannar District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="BadullaDistrict"/>
                                    <span class="iname">Badulla District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="MonaragalaDistrict"/>
                                    <span class="iname">Monaragala District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="HambantotaDistrict"/>
                                    <span class="iname">Hambantota District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="MataraDistrict"/>
                                    <span class="iname">Matara District</span>
                                    <span class="txt-count"></span>
                                </label>

                                <label class="checkbox_1">
                                    <input type="checkbox" id="GalleDistrict"/>
                                    <span class="iname">Galle District</span>
                                    <span class="txt-count"></span>
                                </label>


                            </div>


                        </div>
                    </div>
                    <hr>
                    <div id="map-view">

                    </div>

                </div>

            </div>
        </div>


        <div id="right-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-9">

            <p id="prpertfound"></p>

            <!--start top search-->

            <div class="row" id="fu">
                <div id="top-pics" class="col-lg-2 col-md-2 col-xs-12 pics">
                    our top pics
                </div>
                <div id="price" class="col-lg-2 col-md-2  col-xs-12 pics">
                    Price (lowest first)
                </div>
                <div id="stars" class="col-lg-2 col-xs-12  col-md-2  pics">
                    stars <i class="fas fa-sort-down" style="color: #d35400; font-size: 15px;"></i>
                </div>
                <div id="star-price" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Star Rating And Price
                </div>
                <div id="top-review" class="col-lg-3  col-md-3  col-xs-12 pics">
                    Top reviewed
                </div>
            </div>


            <!--start top search-->

            <div id="details">

            </div>


        </div>
    </div>
</div>


<!--start wrap-->


<script type="text/javascript">




    // $('.wrap').hide();


    $(document).ready(function () {
        $('#datepick1').datepicker()
        $('#datepick2').datepicker()
    });


    // start drop down


    $('#filter-main-name').click(function () {
        $('#loads').slideToggle(function () {

        });
    });

    $('#star-txt').click(function () {
        $('#star-rating-filter-inside').slideToggle(function () {

        });

    });


    $('#quiq-txt').click(function () {
        $('#quiq-filter-inside').slideToggle(function () {

        });
    });


    $('#fun-thinks-txt').click(function () {
        $('#fun-thinks-filter-inside').slideToggle(function () {

        });
    });
    $('#reception-txt').click(function () {
        $('#reception-filter-inside').slideToggle(function () {

        });
    });
    $('#facility-txt').click(function () {
        $('#facility-filter-inside').slideToggle(function () {

        });
    });


    $('#room-facility-txt').click(function () {
        $('#room-facility-filter-inside').slideToggle(function () {

        });
    });

    $('#district-txt').click(function () {
        $('#district-filter-inside').slideToggle(function () {

        });
    });

    $('#Beach-txt').click(function () {
        $('#Beach-filter-inside').slideToggle(function () {

        });
    });
    $('#property-txt').click(function () {
        $('#property-filter-inside').slideToggle(function () {

        });
    });
    // $('#filter-main').click(function () {
    //     $('#load').slideToggle(function () {
    //
    //     });
    // });
    $('#review-txt').click(function () {
        $('#review-filter-inside').slideToggle(function () {

        });
    });

    $('#show-funs').click(function () {
        $('#hidden-funs').slideToggle(function () {

        });
        $('#show-funs').hide();

    });

    $('#property-funs').click(function () {
        $('#property-hidden-funs').slideToggle(function () {

        });
        $('#property-funs').hide();

    });
    $('#facility-funs').click(function () {
        $('#facility-hidden-funs').slideToggle(function () {

        });
        $('#facility-funs').hide();

    });
    $('#room-facility-funs').click(function () {
        $('#room-facility-hidden-funs').slideToggle(function () {

        });
        $('#room-facility-funs').hide();

    });
    $('#district-funs').click(function () {
        $('#district-hidden-funs').slideToggle(function () {

        });
        $('#district-funs').hide();

    });

    // end drop down

    function loaddefault() {

        var where = <?php echo $where; ?>;
        var froms = <?php echo $from; ?>;
        var to = <?php echo $to; ?>;
        var rooms = <?php echo $room; ?>;
        var child = <?php echo $child; ?>;
        var adult = <?php echo $adult; ?>;

        console.log(where,froms,to,rooms,child,adult);


        // loadHotelNameWice('Colombo');

    }


</script>


<script src="index.js" type="text/javascript"></script>
</body>
</html>