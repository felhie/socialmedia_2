<?php
session_start();
error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';

$Wall = new Wall_Updates();
$userprofile=$Wall->getUserProfile($uid);
$updatesarray=$Wall->getWallPost();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Forum wall post dengan PHP - Ajax - MySql</title>
        <!-- BOOTSTRAP -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- COSTUM CSS -->
        <link href="assets/css/wall.css" rel="stylesheet" type="text/css">
        <link href="assets/css/google-plus.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/jquery.oembed.js"></script>
        <script type="text/javascript" src="assets/js/wall.js"></script>
        <script type="text/javascript" src="assets/js/google-plus.js"></script>
        <!-- BOOTSTRAP JS -->
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- PROFIL -->
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/250x250.png" class="img-rounded img-responsive" />
                        <br />
                        <br />
                        <label>Registered Username</label>
                        <input type="text" class="form-control" placeholder="Demouser">
                        <label>Registered Name</label>
                        <input type="text" class="form-control" placeholder="Jhon Deo">
                        <label>Registered Email</label>
                        <input type="text" class="form-control" placeholder="jnondeao@gmail.com">
                        <br>
                        <a href="#" class="btn btn-success">Update Details</a>
                        <br />
                        <br/>
                    </div>
                    <div class="col-md-8">
                        <div class="alert alert-info">
                            <h2>User Bio : </h2>
                            <h4>Bootstrap user profile template </h4>
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </p>
                        </div>
                        <div>
                            <a href="#" class="btn btn-social btn-facebook">
                                <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                            <a href="#" class="btn btn-social btn-google">
                                <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                            <a href="#" class="btn btn-social btn-twitter">
                                <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                            <a href="#" class="btn btn-social btn-linkedin">
                                <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                        </div>
                        <div class="form-group col-md-8">
                            <h3>Change YOur Password</h3>
                            <br />
                            <label>Enter Old Password</label>
                            <input type="password" class="form-control">
                            <label>Enter New Password</label>
                            <input type="password" class="form-control">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" />
                            <br>
                            <a href="#" class="btn btn-warning">Change Password</a>
                        </div>
                    </div>
                </div>
                <!-- ROW END -->
            </section>
            <!-- SECTION END -->
        </div>
        <!-- CONATINER END -->
        <!-- ./PROFIL -->
    </body>

    </html>
