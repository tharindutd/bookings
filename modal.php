<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css" type="text/css">


    <style type="text/css">
        #rfac {
            list-style: none;
        }
    </style>


</head>
<body>

<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true"  style=" background-color: #E9F0FA;">

    <div class="modal-dialog"  style=" background-color: #E9F0FA;">

        <!-- Modal Content: begins -->
        <div class="modal-content" style=" height: auto; background-color: white">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <!--                <h4 class="modal-title" id="gridSystemModalLabel">Your Headings</h4>-->
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style=" background-color: #E9F0FA;">
                <div class="body-message" style=" background-color: #E9F0FA;">
                    <div class="row" style=" background-color: #E9F0FA;">
                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12"
                             style=" height: 350px; background-color: #E9F0FA;">
                            <div id="reseve2-wrap">
                                <div style="width: 100%; height: 40px; background-color: white; -webkit-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75); box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.75);">
                                    <input type="button" class="btn btn-primary ok" value="Reserve"
                                           style="border-radius: 0px; width: 100%; margin-top: 1px;"></div>
                            </div>
                            <div style="float: left;  height: 350px; width: 10%;">
<!--                                <i class="fas fa-arrow-circle-left"-->
<!--                                   style="color: #2b2b2b; font-size: 25px; margin-top: 100px;"></i>-->
                            </div>
                            <div style="float: left; height: 350px; width: 80%">
                                <img src=""
                                     alt="img" style="width: 100%; height: 350px;" id="mroomimg">
                            </div>
                            <div style="float: left; height: 350px; width: 10%;">
<!--                                <i class="fas fa-arrow-circle-right"-->
<!--                                   style="color: #2b2b2b; font-size: 25px; margin-top: 100px; float: right;"></i>-->
                            </div>
                        </div>
                    </div>

                    <div style="height: auto; margin-top: 10px; padding-right: 5px;" class="row">

                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-1" class="img-thumbnail" src="" alt=""  style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-2" class="img-thumbnail" src="" alt=""  style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-3" class="img-thumbnail" src="" alt=""  style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-4" class="img-thumbnail" src="" alt=""  style="height: 80px; width: 100%;">
                        </div>
                    </div>

                    <div style="width: 100%; height: 1px; background-color: #0984e3;"></div>

                    <div style="width: 100%; height: auto" id="detailsforroom">



                    </div>

                    <div id="filteraria-ok" style="width: 100%; height: auto; margin-top: 20px;">
<!--                        <span>Free WiFi! </span><br>-->
<!---->
<!--                        <span style="font-weight: bold;font-size: 13px;">Parking</span><br>-->
<!--                        <span>Free! Free private parking is available on site (reservation is not needed). </span>-->







                        <div id="main-search">
                            <span id="s-name">Search</span><br>

                            <spann class="d-txt">Check-in date</spann>

                            <div class="d-pic">
                                <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick1" class="dpicfrom3" type="date"
                                                                                               placeholder="check-in-date"></p>
                            </div>


                            <spann class="d-txt">Check-out date</spann>
                            <div class="d-pic">
                                <p><span><i class="fas fa-calendar-alt d-p"></i></span> <input id="datepick2" class="dpicto3" type="date"
                                                                                               placeholder="check-out-date"></p>
                            </div>

                            <select name="adult" id="adult" class="form-control adult3">
                                <?php
                                for ($var1 = 1; $var1 <= 30; $var1++) {
                                    ?>

                                    <option value="<?php echo $var1 ?> ADULT"><?php echo $var1 ?> ADULT</option>

                                <?php }
                                ?>
                            </select>

                            <div id="ch">
                                <select name="child" id="child" class="form-control child3">
                                    <option value="0 CHILDREN">0 CHILDREN</option>
                                    <?php
                                    for ($var1 = 1; $var1 <= 15; $var1++) {
                                        ?>

                                        <option value="<?php echo $var1 ?> CHILDREN"><?php echo $var1 ?> CHILDREN</option>

                                    <?php }
                                    ?>
                                </select>


                                <select name="child" id="room" class="form-control room3">
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
                    </div>


                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>-->
            </div>

        </div>
        <!-- Modal Content: ends -->

    </div>

</div>

<script type="text/javascript" src="index.js"></script>
</body>
</html>