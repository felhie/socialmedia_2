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
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Forum wall post dengan PHP - Ajax - MySql</title>
        <!-- BOOTSTRAP -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- COSTUM CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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
        <div class="section">
            <div class="container">
                <div class="row">
                    <!-- CONTENT KIRI -->
                    <div class="col-md-3">a</div>
                    <!-- CONTENT TENGAH -->
                    <div class="col-md-6">
                        <!-- Update Box -->
                        <?
		                echo("<pre>");
		                var_dump($_SESSION);
		                echo("</pre>");
		                ?>
                            <span><a href="user.php?id=<?=$userprofile['uid']?>">Profile</a></span>
                            <span><a href="logout.php">Logout</a></span>
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
                    <!-- CONTENT KANAN -->
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-heading" style="background-color:#555;color:#eee;">New Stories</div>
                            <div class="panel-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-thumbnail img-story" src="img/1.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="/tagged/modal" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Modal</strong></a></h5>
                                        <small>Kami dari Fakultas Teknologi Info UAJ...</small>
                                        <span class="badge"><span class="glyphicon glyphicon-comment"> 555</span></span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="/tagged/slider" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Carousel</strong></a></h5>
                                        <small>How to use the Bootstrap slider.</small>
                                        <br>
                                        <span class="badge">322</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="/tagged/typography" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Typography</strong></a></h5>
                                        <small>See the various textual elements and options.</small>
                                        <br>
                                        <span class="badge">44</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="/tagged/media" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>@Media</strong></a></h5>
                                        <small>Use @media queries to get the layout you want.</small>
                                        <br>
                                        <span class="badge">119</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/panel-->
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
