<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Tool - Tu Tran Blog</title>
    <meta name="description" content="Demo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- CSS of Tool -->
    <link rel="stylesheet" href="assets/css/ZingMp3.css">
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="page-tools">
    <header id="header">
        <!-- Navbar top -->
        <nav class="navbar navbar-default" role="navigation" id="navbar-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-magic"></i> My Tools</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{  route('home.blog') }}">Tu Tran Blog</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>

    <main id="main">
        <header class="container-fluid">
            <h1>My Tool</h1>
            <p class="tools-description">Danh mục các ứng dụng của Tu Tran Blog</p>
        </header>

        <article class="container-fluid">
            <div class="row" id="tools">
                <div class="com-md-3">
                    <a href="#" title="Download Zing Mp3">
                        <div class="icon"><i class="fa fa-music"></i></div>
                        <h3>Zing Mp3</h3>
                        <p class="info">“Download Zing Mp3 320kpbs Free”</p>
                        <p class="version">Latest Version: <strong>1.2</strong></p>
                        <p class="website">Visit website for more info</p>
                    </a>
                </div><!-- #chrome -->

            </div>
        </article>
    </main>

    <footer id="footer" class="container-fluid">
        <!-- Copyright -->
        <div class="row" id="copyright">
            <div class="col-md-6 pull-left">Copyright © 2015 Tu Tran Blog - All Rights Reserved</div>
            <div class="col-md-6 pull-right text-right">Developed by <a href="http://tutran.me">Tu TV</a></div>
        </div>
    </footer>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Script of Tool -->
<script src="assets/js/ZingMp3.js"></script>
</body>
</html>