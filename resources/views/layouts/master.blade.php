<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Demo</title>
    <meta name="description" content="Demo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="page-tools">
    <header id="header">
        <!-- Navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-magic"></i> My Tools</a>
                </div>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://tutran.me">Tu Tran Blog</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>

    <main id="main" class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">En/DeCode</a>
                    </li>
                    <li class="active">Link</li>
                </ol>
                <!-- Content of tool -->
                <div id="main-tool">
                    <form role="form">
                        <div class="form-group">
                            <label>Content: </label>
                            <textarea id="enText" class="form-control" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-lg" onclick="enCode();">Encode</button>
                            <button type="button" class="btn btn-success btn-lg" onclick="deCode();">Decode</button>
                        </div>
                        <div class="form-group">
                            <textarea id="deText" class="form-control" rows="7"></textarea>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-lg-4" id="sidebar">
                <ul class="list-group">
                    <li class="list-group-item">Item 1</li>
                    <li class="list-group-item">Item 2</li>
                    <li class="list-group-item">Item 3</li>
                </ul>
            </div>
        </div>



    </main>

    <footer id="footer">

    </footer>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
