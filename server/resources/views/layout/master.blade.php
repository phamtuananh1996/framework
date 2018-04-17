<!doctype html>
<html class="no-js" lang="vi">

<head>
    <link rel="shortcut icon" href="/theme.hstatic.net/1000177652/1000229231/14/favicon.png?v=90" type="image/png" />
    <meta charset="utf-8" />
    <title>OxyWatch </title>
    <link rel="dns-prefetch" href="http://happylive.vn">
    <link rel="dns-prefetch" href="/hstatic.net">
    <script src="/hstatic.net/0/0/global/design/js/jquery.min.1.11.0.js"></script>
    <script src="/hstatic.net/0/0/global/design/js/bootstrap.min.js"></script>
    <script src='/hstatic.net/0/0/global/option_selection.js' type='text/javascript'></script>
    <script src='/hstatic.net/0/0/global/api.jquery.js' type='text/javascript'></script>
    <script src='/theme.hstatic.net/1000177652/1000229231/14/default_script.min.js?v=90' type='text/javascript'></script>
    <link href='/theme.hstatic.net/1000177652/1000229231/14/default_style.min.css?v=90' rel='stylesheet' type='text/css' media='all'
    />
    <!--[if lt IE 9]>
<script src="/hstatic.net/0/0/global/design/theme-default/html5shiv.js"></script>
<![endif]-->
    <script src="/hstatic.net/0/0/global/design/theme-default/jquery-migrate-1.2.0.min.js"></script>
    <script src='/hstatic.net/0/0/global/design/theme-default/jquery.touchSwipe.min.js' type='text/javascript'></script>
    <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="/hstatic.net/0/0/global/design/js/fixheightproductv2.js"></script>
    <script src="/hstatic.net/0/0/global/design/js/haravan.plugin.1.0.js"></script>
    <script src='/hstatic.net/0/0/global/design/theme-default/jquery.flexslider.js' type='text/javascript'></script>
    <link href='/hstatic.net/0/0/global/design/theme-default/flexslider.css' rel='stylesheet' type='text/css' media='all' />
    <script src='/theme.hstatic.net/1000177652/1000229231/14/scripts.js?v=90' type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="/hstatic.net/0/0/global/design/member/fonts-master/roboto.css">
    <link rel="stylesheet" href="/hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css">
    <!-- Latest compiled and minified JavaScript -->
    <link href='/hstatic.net/0/0/global/design/plugins/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'
        media='all' />
    <link href='/theme.hstatic.net/1000177652/1000229231/14/styles.css?v=90' rel='stylesheet' type='text/css' media='all' />
    <script src='//theme.hstatic.net/1000177652/1000229231/14/jquery.elevatezoom.min.js?v=101' type='text/javascript'></script>
</head>

<body>
    <div id="page">
        <section id="page_content" class="">
            <div id="pageContainer" class="clearfix">
                @include('layout.header')
                 @include('layout.menu')
                 
                 @if ($_SERVER['REQUEST_URI']=='/')
                 @include('layout.slide')
                 @endif
            </div>
            <section id="content" class="clearfix container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        @yield('content')

                    </div>
                </div>
            </section>

            @include('layout.footer')
        </section>
    </div>
</body>

</html>