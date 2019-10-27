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

    <div class="modal-dialog modal-lg"  style=" background-color: #E9F0FA;">

        <!-- Modal Content: begins -->
        <div class="modal-content" style=" height: auto; background-color: white">

            <!-- Modal Header -->
            <div class="modal-header" style=" background-color: #E9F0FA;border-bottom: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <!--                <h4 class="modal-title" id="gridSystemModalLabel">Your Headings</h4>-->
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style=" background-color: #E9F0FA;">
                <div class="body-message" style=" background-color: #E9F0FA;">
                    <div class="row">
                    <div class="col-sm-8">
                    <div class="row" style=" background-color: #E9F0FA;">
                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12"
                             style=" height: 350px; background-color: #E9F0FA;">
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
                            <img id="img-1" class="img-thumbnail" src="" alt="" style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-2" class="img-thumbnail" src="" alt="" style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-3" class="img-thumbnail" src="" alt="" style="height: 80px; width: 100%;">
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                            <img id="img-4" class="img-thumbnail" src="" alt="" style="height: 80px; width: 100%;">
                        </div>
                    </div>

                </div>
                    <div class="col-sm-4">

                    <div style="width: 100%; height: auto" id="detailsforroom"></div>
                </div>
            </div>
                </div>
            </div>

            

        </div>
        <!-- Modal Content: ends -->

    </div>

</div>

<script type="text/javascript" src="index.js"></script>
</body>
</html>