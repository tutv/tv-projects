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
    <link rel="stylesheet" href="assets/css/main.css">
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

    <main id="main" class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Tools</a>
                    </li>
                    <li class="active">Zing Mp3</li>
                </ol>

                <!-- Content of tool -->
                <div id="main-tool">
                    <h1 class="post-title">Download Zing Mp3 320kpbs</h1>
                    <form role="form">
                        <div class="form-group">
                            <label>Link mp3.zing.vn: <button type="button" class="btn btn-success btn-xs" onclick="insertLink()">Link demo</button></label>
                            <input type="text" class="form-control" id="link-mp3">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-lg" onclick="getLink();">Download</button>
                            <span id="load" style="margin-left: 15px; display: none"><img src="assets/img/ZingMp3/load.gif" /></span>
                            <button type="button" class="btn btn-success btn-lg" onclick="resetX()" style="display: none" id="reset">Reset</button>
                        </div>
                    </form>

                    <ul class="list-group" id="list-function">
                        <li class="list-group-item list-group-item-success"><h3>Chức năng:</h3></li>
                        <li class="list-group-item list-group-item-info">1. Giúp lấy thông tin bài hát (đơn) bất kì (Hỗ trợ tải nhạc chất lượng cao 320kpbs).</li>
                        <li class="list-group-item list-group-item-info">2. Giúp lấy thông tin của 1 album bất kì (Hỗ trợ tải nhạc chất lượng bình thường 128kpbs).</li>
                    </ul>
                </div>

                <!-- Comment -->
                <div id="comment">
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES * * */
                        var disqus_shortname = 'tutvtools';

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </div>
            </div>

            <div class="col-md-3 col-lg-3" id="sidebar">
                <!-- List Tool -->
                <div class="panel panel-info" id="list-tool">
                    <div class="panel-heading">
                        <h3 class="panel-title">List tool</h3>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Zing Mp3<span class="badge">v2</span></a>
                        <a href="#" class="list-group-item">My IP <span class="badge">v1</span></a>
                        <a href="#" class="list-group-item">En/Decode URL <span class="badge">v3</span></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="container-fluid">
        <!-- Popular Posts on Tu Tran Blog -->
        <div class="row" id="popular-posts">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" class="img-post">
                            <img class="img-responsive img-fullwidth" src="assets/img/demo.png" alt="djfks">
                        </a>
                        <article class="post-info">
                            <h3><a href="#">Những thuộc tính quan trọng khi xây dựng...</a></h3>
                            <p class="post-content">vTrans - Ứng dụng từ điển online. Ứng dụng tích hợp từ điển Cambridge và hai Translator chính là Google Translate và Bing Translator.</p>
                        </article>
                    </div>
                    <div class="panel-footer">
                        <span class="time"><i class="fa fa-calendar-o"></i> 12.02.2015</span>
                        <a href="#" class="link-more pull-right"><i class="fa fa-eye"></i> More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" class="img-post">
                            <img class="img-responsive img-fullwidth" src="assets/img/demo-thumnail.jpg" alt="djfks">
                        </a>
                        <article class="post-info">
                            <h3><a href="#">vTrans - Ứng dụng từ điển online</a></h3>
                            <p class="post-content">vTrans - Ứng dụng từ điển online. Ứng dụng tích hợp từ điển Cambridge và hai Translator chính là Google Translate và Bing Translator.</p>
                        </article>
                    </div>
                    <div class="panel-footer">
                        <span class="time"><i class="fa fa-calendar-o"></i> 12.02.2015</span>
                        <a href="#" class="link-more pull-right"><i class="fa fa-eye"></i> More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" class="img-post">
                            <img class="img-responsive img-fullwidth" src="assets/img/demo.png" alt="djfks">
                        </a>
                        <article class="post-info">
                            <h3><a href="#">vTrans - Ứng dụng từ điển online</a></h3>
                            <p class="post-content">vTrans - Ứng dụng từ điển online. Ứng dụng tích hợp từ điển Cambridge và hai Translator chính là Google Translate và Bing Translator.</p>
                        </article>
                    </div>
                    <div class="panel-footer">
                        <span class="time"><i class="fa fa-calendar-o"></i> 12.02.2015</span>
                        <a href="#" class="link-more pull-right"><i class="fa fa-eye"></i> More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" class="img-post">
                            <img class="img-responsive img-fullwidth" src="assets/img/demo.png" alt="djfks">
                        </a>
                        <article class="post-info">
                            <h3><a href="#">vTrans - Ứng dụng từ điển online</a></h3>
                            <p class="post-content">vTrans - Ứng dụng từ điển online. Ứng dụng tích hợp từ điển Cambridge và hai Translator chính là Google Translate và Bing Translator.</p>
                        </article>
                    </div>
                    <div class="panel-footer">
                        <span class="time"><i class="fa fa-calendar-o"></i> 12.02.2015</span>
                        <a href="#" class="link-more pull-right"><i class="fa fa-eye"></i> More</a>
                    </div>
                </div>
            </div>
        </div>

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