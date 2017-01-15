<?session_start();
$konek = mysqli_connect("localhost", "root", "", "socialmedia");

if (isset($_POST["btn_masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($konek, "select * from users where username = '".$username."' and password = '".$password."' ");
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_row($query);
            $_SESSION['uid'] = $row[0];
            header("Location: index.php"); /* Redirect browser */
         }
        else
        {
            
        }
}
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- import semua file file external -->
        <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title>WEB TATA SURYA</title>
    </head>

    <body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><span>TATA<strong>SURYA.com</strong></span></a>
                    <strong></strong>
                </div>
                <strong>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <!-- navigasi utama -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">HOME</a>
                            </li>
                            <li>
                                <a href="image.html">IMAGE GALLERY</a>
                            </li>
                            <li>
                                <a href="video.html">VIDEO GALLERY</a>
                            </li>
                            <li class="active">
                                <a href="about.html">ABOUT US</a>
                            </li>
                        </ul>
                    </div>
                </strong>
            </div>
            <strong></strong>
        </div>
        <strong></strong>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Masuk </strong></h3></div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="username" class="form-control" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-default" name="btn_masuk">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    </div>
                </div>
                <!-- end row -->
            </div>
    </body>

    </html>
