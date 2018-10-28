<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>IPRO3D Contact Here</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<?php include '../header.php'?>
<br><br><br>
<br>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Contact Us</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>

                        <div class="form-row">
                            <div class="name">Mobile Number</div>
                            <div class="value">
                                <input class="input--style-6" type="mobno" name="email" placeholder="Enter 10 Digit">
                            </div>
                        </div>


                            <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                    <textarea class="textarea--style-6" name="message" placeholder="Message sent to the Company"></textarea>
                                </div>
                            </div>


                       <div class="form-row">

                            <div class="name">Designation</div>
                            <div class="value">
                               <select input class="input--style-6" class="form-control" name="info" maxlength="email" placeholder="Info">
                                    <option value="Student">Student</option>
                                    <option value="Industry">Industry</option>
                                    <option value="Employee">Employee</option>
                                    <option value="designer">Designer</option>
                                    <option value="maker">Maker</option>
                                    <option value="professional">Professional</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">

                                <div class="name">How You Know Us</div>
                                <div class="value">
                                    <select input class="input--style-6" class="form-control" name="info" maxlength="email" placeholder="How You Know us">
                                        <option value="social">Social Media</option>
                                        <option value="news">Newspaper</option>
                                        <option value="google">Google Search</option>
                                        <option value="youtube">YouTube</option>
                                        <option value="justdial">JustDial</option>
                                        <option value="friend">Friend</option>
                                        <option value="direct">Direct us</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                </div>

            </div>

            </form>
                </div>

               </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->