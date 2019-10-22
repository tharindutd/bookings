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
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>VISIT2SRILANKA | HOTELS</title>


    <style type="text/css">

        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript,
        if it's not present, don't show loader */
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(Preloader_3.gif) center no-repeat #fff;
        }




        /*pagination*/


        .wrapper{
            margin: 60px auto;
            text-align: center;
        }
        h1{
            margin-bottom: 1.25em;
        }
        #pagination-demo{
            display: inline-block;
            margin-bottom: 1.75em;
        }
        #pagination-demo li{
            display: inline-block;
        }

        .page-content{
            background: #eee;
            display: inline-block;
            padding: 10px;
            width: 100%;
            max-width: 660px;
        }

        /*pagination*/



        #loaddiv {
            width: 100%;
            position: fixed;
            background-color: white;
            height: 100%;
        }

        .wrap {
            width: 85%;
            height: auto;
            /*border: 1px solid #231418;*/
            margin-left: 7.5%;
            padding: 0px;
        }

        #main-row {
            /*border: 1px solid black;*/
            height: auto;
            padding: 0px;
            margin: 0px;
        }

        #left-side {
            /*border: 1px solid black;*/
            height: auto;
        }

        #right-side {
            /*border: 1px solid black;*/
            height: auto;
        }

        #main-search {
            width: 100%;
            height: auto;
            background-color: #FEBB02;
            margin-top: 20px;
            border-radius: 5px;
            padding-top: 15px;
        }

        #adult {
            width: 90%;
            margin-left: 5%;
            margin-top: 25px;
        }

        #search-btn {
            margin-bottom: 20px;
            font-size: 23px;
            width: 110px;
        }

        #search-btn:hover {
            background-color: #003580;
        }


        #search-btn1 {
            margin-bottom: 20px;
            font-size: 23px;
            width: 110px;
        }

        #search-btn1:hover {
            background-color: #003580;
        }

        #aa {
            text-align: right;
            width: 90%;
            margin-left: 5%;
        }

        #child {
            width: 48%;
            font-size: 12px;
            float: left;
            height: 35px;
        }

        #room {
            width: 48%;
            font-size: 12px;
            float: right;
            height: 35px;
        }

        #map-view {
            width: 90%;
            height: 150px;
            border: 1px solid darkslategray;
            margin-left: 5%;
        }

        #ch {
            width: 90%;
            margin-left: 5%;
            margin-top: 15px;
        }

        .ch-box {
            width: 90%;
            margin-left: 5%;
            margin-top: 5px;
        }

        #qu {
            font-size: 15px;
            color: black;
        }

        #qu:hover {
            cursor: help;
        }

        /*strt tool tip*/

        [data-title]:hover {
            position: relative;
            cursor: help;
        }

        [data-title]:hover::before {
            content: attr(data-title);
            position: absolute;
            bottom: -26px;
            display: inline-block;
            padding: 3px 6px;
            border-radius: 2px;
            background: #000;
            color: #0097e6;
            font-size: 12px;
            font-family: sans-serif;
            white-space: nowrap;

        }

        [data-title]:hover::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 8px;
            display: inline-block;
            color: #0097e6;
            border: 8px solid transparent;
            border-bottom: 8px solid #000;

        }

        /*End tool tip*/

        #s-name {
            color: #2f3640;
            font-size: 25px;
            margin-top: 50px;
            margin-left: 5%;
            width: 90%;
        }

        .d-txt {
            color: #2f3640;
            font-size: 14px;
            margin-left: 5%;
            width: 90%;
        }

        #destiny {
            margin-left: 5%;
            width: 90%;
            margin-bottom: 5px;
        }

        .d-pic {
            background-color: white;
            width: 90%;
            height: 35px;
            border-radius: 2px;
            margin-left: 5%;
            padding-top: 3px;
            box-shadow: 0px 0px 1px 1px white;
            margin-bottom: 5px;
        }

        .d-p {
            font-size: 20px;
            color: #2f3640;
            margin-left: 5px;

        }

        #datepick1, #datepick2,#datepick3,#datepick4 {
            width: 150px;
            border: 0px;

        }

        #filter-main {
            width: 100%;
            height: auto;
            border: 1px solid gray;
            margin-top: 10px;
            border-radius: 5px;
        }

        #filter-main-name {
            width: 100%;
            height: auto;
            font-weight: bold;
            font-size: 18px;
            padding-top: 5px;
            padding-left: 10px;
        }

        #filter-main-name:hover {
            cursor: pointer;
        }

        #star-rating-filter, #quiqe-filter, #fun-thinks-filter, #reception-filter, #Beach-filter, #property-filter, #review-rating-filter, #facility-filter, #room-facility-filter, #district-filter {
            width: 100%;
            height: auto;
        }

        #star-rating-filter-inside, #quiq-filter-inside, #fun-thinks-filter-inside, #reception-filter-inside, #Beach-filter-inside, #property-filter-inside, #review-filter-inside, #facility-filter-inside, #room-facility-filter-inside, #district-filter-inside {
            width: 100%;
            height: auto;
        }

        #star-txt, #quiq-txt, #fun-thinks-txt, #reception-txt, #Beach-txt, #property-txt, #review-txt, #facility-txt, #room-facility-txt, #district-txt {
            color: #38385E;
            font-size: 14px;
            padding-left: 20px;
            font-weight: bold;;
        }

        #star-txt:hover, #quiq-txt, #fun-thinks-txt, #reception-txt, #Beach-txt, #property-txt, #review-txt, #facility-txt, #room-facility-txt, #district-txt {
            cursor: pointer;
        }

        .show-all {

            font-size: 12px;
            color: #00a8ff;
            width: 90%;
            margin-left: 5%;
            text-align: center;
        }

        .show-all i {
            margin-left: 10px;
        }

        .show-all:hover {
            cursor: pointer;
            color: #192a56;
        }

        #hidden-funs {

        }

        .txt-count {
            text-align-last: right;
            width: 40px;
            font-size: 12px;
            color: gray;
        }

        .iname {
            width: 170px;
            font-size: 13px;
            color: black;
        }

        /*check box*/

        code {
            border: 2px solid gray;
            border-radius: 4px;
            padding: 0.5% 1%;
            background: #f2f2f2;
        }

        .checkbox_1 {
            display: inline-flex;
            cursor: pointer;
            padding: 0.5rem;
            position: relative;
        }

        .checkbox_1 > span {
            padding: 0 .25rem;
        }

        .checkbox_1 > input {
            width: 21px;
            height: 21px;

            /* remove default browser styling */
            -webkit-appearance: none;
            -mox-appearance: none;
            -o-appearance: none;
            appearance: none;

            /* custom styling */
            background-color: #f2f2f2;
            border: 2px solid gray;
            border-radius: 4px;
            cursor: pointer;
            outline: none;

            transition-duration: 0.3s;
        }

        .checkbox_1 > input:checked {
            border: 3px solid #004466;
            background-color: #5ac5c9;
        }

        /* style checkmark symbol */
        .checkbox_1 > input:checked + span::before {
            color: #004466;
            content: "\2713";
            text-align: center;

            display: block;
            position: absolute;
            left: .95rem;
            top: .5rem;
        }

        .checkbox_1 > input:active {
            border: 2px solid #5ac5c9;
        }

        .checkbox_1 > input:focus + label::before {
            outline: #5d9dd5 solid 1px;
            box-shadow: 0 0px 8px #5e9ed6;
        }

        /* need this so the check doesn't fly away */
        input[id="check_2"] + label {
            position: relative;
        }

        input[id="check_2"] + label::before {
            width: 20px;
            height: 20px;

            background: #f2f2f2;
            border: 3px solid #5ac5c9;
            border-radius: 4px;
            content: "";

            display: inline-block;
            position: relative;
            margin-right: 10px;
        }

        input[id="check_2"]:checked + label::before {
            background: #5ac5c9;
            border: 3px solid #004466;
        }

        /* style checkmark symbol */
        input[id="check_2"]:checked + label::after {
            width: 13px;
            height: 6px;

            content: "";
            border-left: 2px solid #004466;
            border-bottom: 2px solid #004466;

            top: .4rem;
            left: .4rem;
            position: absolute;
            transform: rotate(-45deg);
        }

        input[id="check_2"]:focus + label::before {
            outline: #5d9dd5 solid 1px;
            box-shadow: 0 0 8px #5e9ed6;
        }

        /* hide default checkbox */
        input[id="check_2"] {
            width: 1px;
            height: 1px;

            overflow: hidden;
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
        }

        /*check box*/

        /*start rigt*/

        @media only screen and (max-width: 800px) {
            .pics {
                color: #192a56;
                text-align: center;
                border-right: none;
                font-size: 13px;
                padding-top: 3px;
                border-bottom: 1px solid #0077CC;
            }

        }

        #fu {
            width: 100%;
            height: auto;
            border-radius: 5px;
            border: 1px solid #0077CC;
            border-top: 5px solid #0077CC;
            margin-top: 30px;
            margin-bottom: 5px;
            margin-left: 3px;
        }

        .pics:hover{
            background-color: #E9F0FA;
        }

        .pics {
            color: #192a56;
            text-align: center;
            border-right: 1px solid #0077CC;
            font-size: 13px;
            padding-top: 2px;
        }

        .pics:hover {
            cursor: pointer;
        }

        .pics:nth-last-child {
            border: none;
        }

        #details {
            width: 100%;
            height: auto;
        }

        #prpertfound {
            font-size: 25px;
            font-weight: bold;
            margin-top: 10px;
        }

        /*details*/

        #right-main {
            height: auto;
        }

        /*start content-init*/

        #content-init {
            width: 100%;
            height: auto;
            border: 1px solid #3498db;
            -webkit-box-shadow: 0px -1px 13px -1px rgba(52, 152, 219, 1);
            -moz-box-shadow: 0px -1px 13px -1px rgba(52, 152, 219, 1);
            box-shadow: 0px -1px 13px -1px rgba(52, 152, 219, 1);
            margin-top: 10px;
            border-radius: 5px;
        }

        #content-init:hover {
            background-color: #E9F0FA;
            cursor: pointer;
        }

        /*start img content*/

        #img-content {
            height: auto;
        }

        #img {
            width: 90%;
            margin-left: 19px;
            height: 200px;
            margin-top: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }


        @media screen and (max-width: 900px) {
            #img {
                width: 50%;
                margin-left: 19px;
                height: 200px;
                margin-top: 10px;
                border-radius: 5px;
                margin-bottom: 10px;
            }
        }
        @media screen and (max-width: 500px) {
            #img {
                width: 90%;
                margin-left: 19px;
                height: 200px;
                margin-top: 10px;
                border-radius: 5px;
                margin-bottom: 10px;
            }
        }


        #label1 {
            height: 50px;
            width: 160px;
            background-image: url("Flag.png");
            position: absolute;
            margin-top: 30px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            text-align: center;
            padding-top: 7px;
            color: black;
        }

        #label2 {
            height: 50px;
            width: 160px;
            background-image: url("FlagGreen.png");
            position: absolute;
            margin-top: 30px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            text-align: center;
            padding-top: 7px;
            color: black;
        }

        #btn-show-price {
            width: 80%;
            background-color: white;
            border-radius: 2px;
            height: 42px;
            margin-top: 70px;
            margin-left: 20px;
            margin-bottom: 10px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);
            box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);

        }

        #content-init:hover #btn-show-price{
            animation-name: shake;
            animation-duration: 0.5s;
            animation-iteration-count:infinite;
            animation-timing-function: ease-in;
            position: relative;
        }

        #content-init:hover #btn-show-price2{
            animation-duration: 0.5s;
            animation-iteration-count:infinite;
            animation-timing-function: ease-in;
            position: relative;
        }

        /*@keyframes shakeAnim {*/
        /*0% {left: 0}*/
        /*1% {left: -3px}*/
        /*2% {left: 5px}*/
        /*3% {left: -8px}*/
        /*4% {left: 8px}*/
        /*5% {left: -5px}*/
        /*6% {left: 3px}*/
        /*7% {left: 0}*/
        /*}*/

        /*@keyframes shake {*/
        /*0% {left: 0}*/
        /*1% {left: -5px}*/
        /*2% {left: 8px}*/
        /*3% {left: -10px}*/
        /*4% {left: 8px}*/
        /*5% {left: -3px}*/
        /*6% {left: 5px}*/
        /*7% {left: 0}*/
        /*}*/


        #btn-show-price1 {
            width: 152px;
            background-color: white;
            border-radius: 2px;
            border: 1px solid dimgrey;
            height: 42px;
            margin-top: 5px;
            margin-bottom: 10px;
            float: right;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);
            box-shadow: 0px 0px 5px 0px rgba(0,206,201,1);

        }

        #address-txt {
            color: #0652DD;
            font-size: 11px;
        }

        #content-init {
            margin-top: 20px;
        }

        .btn-sh:hover {
            background-color: #003580;

        }

        .btn-sh {
            width: 98%;
            margin-left: 1%;
            margin-top: 1px;
            border-radius: 0px;
        }

        .btn-sh2:hover {
            background-color: #003580;

        }

        .btn-sh2 {
            width: 98%;
            margin-left: 1%;
            margin-top: 1px;
            border-radius: 0px;
        }

        .btn-sh1:hover {
            background-color: #003580;

        }

        .btn-sh1 {
            width: 150px;
            margin-top: 1px;
            border-radius: 0px;
        }

        /*start img content*/

        /*sart content-side*/

        #content-side {
            height: auto;
        }

        /*start left content*/

        #left-set {
            height: auto;
        }

        #l-hotel-name {
            color: #3498db;
            font-size: 16px;
            font-weight: bold;
        }

        #l-start {
            color: #f39c12;
            font-size: 13px;
            font-weight: lighter;
        }

        #finger i {
            background-color: #f39c12;
            padding: 5px;
            color: bisque;
            border-radius: 5px;
            font-size: 13px;
            font-weight: lighter;
        }

        #map-img {
            font-size: 15px;
            margin-right: 5px;
        }

        #address-txt a {
            text-decoration: underline;
            font-size: 12px;
            margin-left: 10px;
        }

        #welcome-msg {
            text-align: justify;
            font-size: 12px;
        }

        #right-set {
            height: auto;
            text-align: center;
            margin-top: 10px;

        }

        #type-fab {
            color: navy;
            font-size: 16px;
            font-weight: lighter;
        }

        #type-rew {
            color: gray;
            font-size: 13px;
            font-weight: lighter;
        }

        #rate-txt {
            width: 35px;
            height: 35px;
            background-color: #003580;
            color: bisque;
            margin-top: 3px;
            margin-left: 10px;
            text-align: center;
            padding-top: 2px;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
            font-weight: bold;
        }

        #g-v-t {
            background-color: #F07C00;
            width: 150px;
            text-align: center;
            padding-bottom: 5px;
            color: bisque;
            border-radius: 5px;
        }

        #x {
            width: 100%;
            height: auto;
            margin-top: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        #x:hover {
            background-color: white;

        }

        #ab {
            color: #2c3e50;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
        }

        #ac {
            color: #2ecc71;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
        }

        #bb, #bd {
            color: gray;
            font-size: 13px;
            text-align: center;
        }

        #bc {
            color: gray;
            font-size: 20px;
            text-align: center;
        }

        #be {
            color: #27ae60;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }

        #btn-sho {
            width: 98%;
            margin-left: 1%;
            margin-top: 1px;
        }

        #btn-show-price-2 {
            width: 95%;
            margin-left: 2.5%;
            background-color: white;
            border-radius: 2px;
            border: 1px solid dimgrey;
            height: 42px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        #btn-show-price2 {
            width: 150px;
            float: right;
            background-color: white;
            border-radius: 2px;
            border: 1px solid dimgrey;
            height: 42px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        #ishoteltype {
            padding: 2px 2px 2px 2px;
            background-color: darkgrey;
            margin-right: 5px;
            font-size: 13px;
            border-radius: 5px;
            color: white;
        }

        #l-hotel-name:hover {
            color: #FDBA02;
        }

        #ishoteltype:hover {
            background-color: #FDBA02;
        }

        #posible-credit {
            color: #32670F;
            font-size: 13px;
            font-weight: bold;
        }

        #posible-credit i {
            font-size: 15px;
            margin-right: 5px;
        }

        /*End left content*/

        /*End content-side*/

        /*End content-init*/

        /*start paginatio*/

        /*load detail wice*/

        /*load detail wice*/

        #extra-detail {
            width: 95%;
            height: auto;
            background-color: white;
            margin-left: 2.5%;
            border-radius: 5px;
        }

        #roomtypes {
            font-size: 12px;
            color: #212121;
            font-weight: bold;
            margin-left: 10px;
        }

        #roomtypes i {
            font-size: 13px;
        }

        #roomnameid {
            font-size: 12px;
            color: #212121;
            font-weight: bold;
            margin-left: 10px;
        }

        #roomcountset {
            font-size: 13px;
            color: #b71c1c;
            font-weight: bold;
            margin-left: 10px;
        }


        #pri {
            font-weight: bold;
            font-size: 20px;
            color: #0AB21B;
            float: right;
            margin-right: 5px;
        }
        #brin{
            font-weight: bold;
            font-size: 12px;
            color: #0AB21B;
            float: right;
            margin-right: 5px;
        }
    </style>



</head>
<body onload="loaddefault()">

<!--<div class="se-pre-con"></div>-->


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
                <span class="d-txt">Destination </span>
                <input type="search" class="form-control destiny1" id="destiny" list="districtset" value="Colombo">
                <datalist id="districtset">

                </datalist>

                <spann class="d-txt">Check-in date</spann>

                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p a"></i></span> <input id="datepick1"
                                                                                   placeholder=""></p>
                </div>


                <spann class="d-txt">Check-out date</spann>
                <div class="d-pic">
                    <p><span><i class="fas fa-calendar-alt d-p b"></i></span> <input id="datepick2"
                                                                                   placeholder=""></p>
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
                    <div id="star-rating-filter" class="collapse">
                        <p id="star-txt">Star Rating <i
                                    style="margin-left: 50px; font-size: 15px; color: blue;  float: right; margin-right: 10px;"
                                    class="fas fa-sort-down"></i></p>

                        <div id="star-rating-filter-inside">
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

                    <div id="fun-thinks-filter">
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
<!--                    <div id="map-view">-->
<!---->
<!--                    </div>-->

                </div>

            </div>
        </div>


        <div id="right-side" class="col-xs-12 col-sm-12 col-md-12 col-xl-9">


            <p id="prpertfound"></p>

            <!--start top search-->

            <div class="row" id="fu">
                <div class="col-lg-2 col-md-2 col-xs-12 pics A" style="background-color: #0AB21B">
                    OUR TOP PICS
                </div>
                <div style="font-size: 12px;" class="col-lg-2 col-md-2  col-xs-12 pics B">
                    GOOD-SUPERB
                </div>
                <div class="col-lg-2 col-xs-12  col-md-2  pics C">
                    APARTMENT
<!--                    <i class="fas fa-sort-down" style="color: #d35400; font-size: 15px;"></i>-->
                </div>
                <div class="col-lg-3  col-md-3  col-xs-12 pics D">
                    BEACH FRONT
                </div>
                <div class="col-lg-3  col-md-3  col-xs-12 pics E ">
                    COLOMBO DISTRICT
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


<!--start wrap-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
<script type="text/javascript">


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


        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;

        $('#datepick1').val(today);

        $('#datepick2').val(today);


        loadHotelNameWice('Mirissa');




    }




    $(document).ready(function () {
        $('#datepick1').datepicker()
        $('#datepick2').datepicker()
        $('#datepick3').datepicker()
        $('#datepick4').datepicker()
    });


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
                    alert('try again');
                }
            }, error: function (error) {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);
                alert('try again');

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
                    dataforsuperb = data;
                } else {
                    $('#prpertfound').html('There Are No Found Any Result For Your Request');
                    // $('.wrap').show();
                    // $('#loaddiv').hide();
                    var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                    $('#details').append(god);
                    alert('try again');
                }
            }, error: function (error) {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);
                alert('try again');

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

                    var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><br><span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + '- <a href="#">Show on map</a></span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lf" style=" float: left;"><span id="type-fab">' + ratingtype + '</span><br><span id="type-rew">' + data['result'][0]['hotel_data']['number_of_reviews'] + ' Reviews</span></div><div id="lri" style="float: left;"><p id="rate-txt">' + rescor + '</p></div></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

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
                    alert('try again');
                }
            }, error: function (error) {
                $('#prpertfound').html('There Are No Found Any Result For Your Request');
                var god= '<div style="width:100%; height:300px; border:1px solid #FEBB02; border-radius:5px;"><div style="width: 100%; height: 200px; background-color: #FFD2A2;"><p style="text-align: center;"><i class="fas fa-cogs" style="font-size: 50px; color: #E76D00;"></i></p><p style="text-align: center; color: #E76D00; font-size: 25px;">Take Control of Your Search</p><p style="font-size: 15px; text-align: center;">Find the properties you want using one of these options:</p></div> <div style="width: 100%; height: 100px; background-color:#FFF6DE;padding-top: 10px; "><p style="font-size: 15px; margin-left: 10px;">Use the search box on the left</p></div></div>';
                $('#details').append(god);
                alert('try again');
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
                url: 'https://distribution-xml.booking.com/2.4/json/hotels?hotel_ids=' + data[x]['hotel_id'] + '&extras=hotel_facilities,hotel_info,hotel_photos',
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


            var pr = roomprice;
            var pri = '<span id="pri">$' + pr + '</span>'
            var ini = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + uniqdata['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="l-hotel-name" onclick="forindiv(this)" class="' + uniqdata['result'][0]['hotel_id'] + '">' + uniqdata['result'][0]['hotel_data']['name'] + '</span> <br> <span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span> <span id="address-txt">' + uniqdata['result'][0]['hotel_data']['address'] + ',' + uniqdata['result'][0]['hotel_data']['city'] + ' -<a href="#"> Show on map</a></span><p id="welcome-msg"></p>' + ccr + '</div> <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lf" style=" float: left;"><span id="type-fab">' + ratingtype + '</span><br> <span id="type-rew">' + uniqdata['result'][0]['hotel_data']['number_of_reviews'] + ' Reviews</span>   </div><div id="lri" style="float: left;"> <p id="rate-txt">' + rescor + '</p> </div> </div> </div></div><div id="extra-detail" class="row" style="margin: 0px; padding: 0px;"><div id="l" class="col-sm-12 col-xs-12 col-md-10 col-lg-8">' + allset + '</div><div id="r" class="col-sm-12 col-xs-12 col-md-2 col-lg-4">' + pri + '' + brin + '</div></div><div id="btn-show-price2"><input type="button" value="See Availability" class="btn btn-primary btn-sh2" id="'+uniqdata['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div> </div> </div> </div> </div>';
            $('#details').append(ini);

            // $('.wrap').show();
            // $('#loaddiv').hide();


        }

    }


    function forindiv(event) {

        console.log('ok');

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


            var theClass = $(event).attr('class');
            console.log(theClass);
            window.location.assign('http://visit2srilanka.com/hotel-view.php?hotelid=' + theClass + '&from=' + varfrom + '&to=' + varto + '&child=' + vchild + '&adult=' + vadult + '&where=' + vwhere + '&room=' + vroom + '&status=false');

        }
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

                    alert('try again');

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

                alert('try again');

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


    // top filters

    $('.A').click(function () {
        // $('#loaddiv').show();
        // $('.wrap').hide();

        $('#details').empty();
        loadHotelNameWice($('.destiny1').val());
    });

    $('.B').click(function () {

        $('#details').empty();
        loadHotelsuperbvice(7);
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

                var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><br><span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + ' -<a href="#"> Show on map</a></span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lf" style=" float: left;"><span id="type-fab">' + ratingtype + '</span><br><span id="type-rew">' + data['result'][0]['hotel_data']['number_of_reviews'] + ' Reviews</span></div><div id="lri" style="float: left;"><p id="rate-txt">' + rescor + '</p></div></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

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

                    var dataset = '<div id="content-init"><div class="row" style="margin: auto;"><div id="img-content" class="col-lg-4 col-md-5 col-sm-12 col-xs-12">' + facil + '<img src="' + data['result'][0]['hotel_data']['hotel_photos'][0]['url_original'] + '" alt="" id="img"></div><div id="content-side" class="col-lg-8 col-md-7 col-sm-12 col-xs-12"><div class="row" style="margin: auto;"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " id="left-set"><span id="ishoteltype">' + hoteltype + '</span><span id="l-hotel-name" onclick="forindiv(this)" class="' + data['result'][0]['hotel_id'] + '">' + data['result'][0]['hotel_data']['name'] + '</span><br><span id="l-start">' + star + '</span><br><span id="map-img"><i class="fas fa-map-marker-alt"></i></span><span id="address-txt">' + data['result'][0]['hotel_data']['address'] + ', ' + data['result'][0]['hotel_data']['city'] + ' -<a href="#"> Show on map</a></span><p id="welcome-msg">' + dis + '</p>' + ccr + '</div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right-set"><div style="padding-left: 20px;  width: 100%"><div id="lf" style=" float: left;"><span id="type-fab">' + ratingtype + '</span><br><span id="type-rew">' + data['result'][0]['hotel_data']['number_of_reviews'] + ' Reviews</span></div><div id="lri" style="float: left;"><p id="rate-txt">' + rescor + '</p></div></div><div id="btn-show-price"><input type="button" value="Show Prices" class="btn btn-primary btn-sh" id="'+data['result'][0]['hotel_id']+'" onclick="loadshowprice2(this)"></div></div></div></div></div></div>';

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



</script>


<script src="index.js" type="text/javascript"></script>
</body>
</html>