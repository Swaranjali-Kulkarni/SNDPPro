<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="vGraphic.css" rel="stylesheet" type="text/css">
<link href="whatsApp.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        min-height: 100%;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }




    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }

    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }

</style>
<body>

<!-- Navbar (sit on top) -->
<?php include 'header1.php';?>


<!-- Header with full-height image -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!--

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


        <div class="item active">
            <img src="img/slider/img13.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <a href="contact_and_quote/quote.php"> <button type="button" class="btn btn-primary">REQUEST A QUOTE</button></a>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/img1.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <button type="button" class="btn btn-primary">REQUEST A QUOTE</button>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/slide-2.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <button type="button" class="btn btn-primary">REQUEST A QUOTE</button>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Application of 3d Printing -->
    <div class="container-fluid text-center" style="color:darkslategrey;">
         <div class="row">
             <h3 style="font-weight: bolder;text-align: center;">Application of 3d Printing</h3>
             <div class="col-sm-2" style="margin: 5px;" id="">
                 <img src="img/application/Svenarchitecture.jpg" height="200px" width="200px" class="img img-rounded">
                 <h5 style="font-weight: bolder;color: darkslategrey;">3D printing applications  in Architecture and Construction</h5>
                 <p style="text-align: left;">
                     Beautiful and durable models for conception and promotion of construction industry
                 </p>
             </div>
             <div class="col-sm-2" style="margin: 5px;" id="">
                 <img src="img/application/syera4.jpg" style="margin: 5px;" height="200px" width="200px" class="img img-rounded">
                 <h5 style="font-weight: bolder;color: darkslategrey;">3D printing applications in Maritime Industry</h5>
                 <p style="text-align: left;">
                     Prototypes and improved spare part management for shipbuilding
                 </p>
             </div>

             <div class="col-sm-2" style="margin: 5px;" id="">
                 <img src="img/application/3D_printed_ancilarry_tool_for_an_elbow_orthopedic_surgery_.jpg" height="200px" width="200px" class="img img-rounded">
                 <h5 style="font-weight: bolder;color: darkslategrey;">3D printing applications in Healthcare and Medical</h5>
                 <p style="text-align: left;">
                     Surgical guides, custom prosthetics and education models for medical professionals
                 </p>
             </div>
             <div class="col-sm-2" style="margin: 5px;" id="">
                 <img src="img/application/molecule_380.jpg" height="200px" width="200px" class="img img-rounded">
                 <h5 style="font-weight: bolder;color: darkslategrey;">3d printing applications in Chemical Industry</h5>
                 <p style="text-align: left;">
                     Enlargement of molecular structures and mechanical parts for laboratory tooling.
                 </p>
             </div>

             <div class="col-sm-2" style="margin: 5px;" id="">
                 <img src="img/application/piecesmecaniquesglacier.jpg" height="200px" width="200px" class="img img-rounded">
                 <h5 style="font-weight: bolder;color: darkslategrey;">3d printing applications in Mechanics</h5>
                 <p style="text-align: left;">
                     Functional prototypes and final products like 3d printed gears. Masters and mechanical parts to be machined.
                 </p>

             </div>

         </div>

    </div>

    <!-- End 3d Application -->

    <!-- How we work  -->
    <div class="container-fluid text-center">
        <h3 style="font-weight: bolder;color:darkslategrey;">How We Work</h3>
        <div class="row">
            <div class="col-sm-2" id="">
                <img src="img/logo/idea.png" id="">
                <div id="">
                <h6 style="font-weight: bold;" >
                    IDEA
                </h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/logo/3dCAD.png">
                <div id="">
                <h6 style="font-weight: bold;">3D CAD<br>
                    Model in<br>
                    STL Format</h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/logo/stlUPload.png">
                <div id="">
                <h6 style="font-weight: bold;">
                    Upload
                    Design STL
                    Files on
                    website or<br>
                    email it to us
                </h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/logo/getQUta.png">
                <div id="">
                <h6 style="font-weight: bold;">
                    Get Quotation
                </h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/logo/3dadative.png">
                <div id="">
                <h6 style="font-weight: bold;">
                    3D Printing<br>
                    Additive
                    manufacturing
                    your product
                </h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/logo/delivery.png">
                <div id="">
                <h6 style="font-weight: bold;">
                    Delivery
                </h6>
                </div>
            </div>

        </div>

    </div>

    <!--  -->
<hr>
<!-- Services Demo -->
    <div class="container-fluid">
        <div class="row" style="color:white;background-color: lightgray;">
            <div class="col-sm-4">
                <img src="img/3dprinting-home1.png" height="450px">
            </div>
            <div class="col-sm-8 text-center">
                <h3 style="font-weight: bolder;color:darkslategrey;">Our Work</h3>
                <div class="row">
                    <div class="col-sm-3">
                    <img src="img/ourwork/wor1.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/ourwork/wor2.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/ourwork/wor3.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/ourwork/wor4.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/ourwork/teddy.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/ourwork/shoes.jpg" height="200px" width="200px" class="img img-rounded">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>


    <!-- Service End -->





    <!-- PRODUCTIOn  -->
    <div class="container-fluid text-center">
        <h3 style="font-weight: bolder;color:darkslategrey;">Prototype Your Product</h3>
        <div class="row">
            <div class="col-sm-2" id="">
                <img src="img/New%20folder/material.png" style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">Material</h6>

                <h6>
                    Select materials
                    from a wide<br>
                    variety in plastics,<br>
                    metals, metal
                    alloys and plastic
                    composites
                </h6>
                </div>
            </div>

            <div class="col-sm-2" id="">
                <img src="img/New%20folder/quality.png"  style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">Quality</h6>
                <h6 >We don’t<br>
                    compromise on
                    part / product
                    quality</h6>
            </div>
            </div>

            <div class="col-sm-2" id="">
                <img src="img/New%20folder/price.png" style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">Price </h6>
                <h6>
                    We provide the
                    best competitive
                    price compared
                    to any other
                    competitor in
                    India and world
                    3D printing
                    market.
                </h6>
                </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/New%20folder/profuction.png" style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">Production</h6>
                <h6>
                    We manufacture all
                    products at a time
                    and help reduce the
                    manufacturing time
                    and cost while
                    maintaining the
                    optimum part quality
                </h6>
            </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/New%20folder/delivery.png" style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">Delivery all
                    over India </h6>
                <h3>

                </h3>
            </div>
            </div>
            <div class="col-sm-2" id="">
                <img src="img/New%20folder/world.png" style="height: 150px;">
                <div id="">
                <h6 style="font-weight: bold;">World wide
                    delivery</h6>
                <h3>

                </h3>
            </div>

        </div>

    </div>

    <!--  -->
    <!-- Promo Section "Statistics" -->

    <div class="w3-container w3-row w3-center " style="background-color: #f2f2f2;">
        <h3 class="text-center" style="font-weight: bold;color: darkslategrey;">Statistics </h3>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">14+</span>
            <br><b>Partners</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">55+</span>
            <br><b>Projects Done</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">89+</span>
            <br><b>Happy Clients</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">150+</span>
            <br><b>Meetings</b>
            <br><br><br><br>
        </div>

    </div>



    <!-- About Section -->
    <div class="w3-container"  id="about">
        <h3 class="w3-center" style="font-weight: bold; color: darkslategrey;">Our Clients</h3>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
             <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
        </div>
    </div>
<br>

    <!-- Contact Section -->
    <div class="row" style="background-color: #bbbbbb;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.2523532716305!2d75.31352311425753!3d19.871563331647998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb99e84cc7f4e7%3A0x8ef52048513cb04!2sIPRO3D+Technologies+LLP!5e0!3m2!1sen!2sin!4v1534930979184" style="width:100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<?php include 'footer1.php';?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>
</html>
