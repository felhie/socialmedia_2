<?php
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

    <body style="background: #b8b8b8;">
        
        <div style="width:100%;min-width:600px;overflow:hidden">
            <div id="wall_container" style="margin:0 auto;">
                <!-- Update Box -->
                <div class="well">
                    <form class="form-horizontal" role="form" method="post" action="">
                        <h4>What's New</h4>
                        <div class="form-group" style="padding:14px;">
                            <textarea class="form-control" placeholder="Update your status" name="update" id="update"></textarea>
                            <button class="btn btn-success pull-right update_button" type="submit" style="margin-top:15px;" id="update_button">Post</button>
                        </div>
                    </form>
                </div>
                <!-- ./Update Box -->
                
                <div id='flashmessage'>
                    <div id="flash" align="left"></div>
                </div>

                <!-- Content -->
                <div id="content">
                    <?php include('load_messages.php'); ?>
                </div>
                <!-- ./Content -->
            </div>
        </div>
    </body>

    </html>
