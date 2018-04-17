<nav class="navbar-main navbar navbar-default cl-pri">
    <!-- MENU MAIN -->
    <div class="container nav-wrapper check_nav">
        <div class="row">
            <div class="navbar-header">
                <div class="mobile-menu-icon-wrapper">
                    <div class="menu-logo">
                        <h1 class="logo logo-mobile">
                            <a href="/">
                                <img src="/theme.hstatic.net/1000177652/1000229231/14/logo.png?v=90" alt="Happylive" class="img-responsive logoimg" />
                            </a>
                        </h1>
                        <div class="nav-login">
                            <a href="/account" class="cart " title="Tài khoản">
                                <svg class="icon icon-user" viewBox="0 0 32 32">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user">
                                    </use>
                                </svg>
                            </a>
                        </div>
                        <div class="menu-btn click-menu-mobile ">
                            <a href="#menu-mobile" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </div>
                        <div id="cart-targets" class="cart">
                            <a href="/cart" class="cart " title="Giỏ hàng">
                                <span>

                                    <svg class="shopping-cart">
                                        <use xmlns:xlink="/www.w3.org/1999/xlink" xlink:href="#icon-add-cart" />
                                    </svg>
                                </span>
                                <span id="cart-count" class="cart-number">0</span>
                            </a>
                        </div>
                    </div>
                    <div class="search-bar-top">
                        <div class="search-input-top">
                            <form action="/search">
                                <input type="hidden" name="type" value="product" />
                                <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..." />
                                <button type="submit" class="icon-search">
                                    <svg class="icon-search_white">
                                        <use xmlns:xlink="/www.w3.org/1999/xlink" xlink:href="#icon-search_white" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav clearfix">
                    <li>
                        <a href="/" class=" current" title="Trang chủ">
                            <span>Trang chủ</span>
                        </a>
                    </li>

                    @if(session("menu") && session("menucon"))
                    $menu=session("menu");$menucon=session("menucon");
                    @foreach($menu as $item)
                    <li class="dropdown">
                        <a href="{{$item['name']}}" title="{{$item['name']}}" class="">
                            <span>{{$item['name']}}</span>
                        </a><ul class="dropdown-menu" role="menu">
                    @foreach($menucon as $item1)
                    
                        
                            <li>
                                <a href="{{$item1['name']}}" title="{{$item1['name']}}">{{$item1['name']}}</a>
                            </li>
                            
                        
                   
                    @endforeach
                    </ul></li>
                    @endforeach
                    
                   @endif
                    <li>
                        <a href="/pages/dich-vu" class="" title="Dịch vụ">
                            <span>Dịch vụ</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/gioi-thieu" class="" title="Giới thiệu">
                            <span>Giới thiệu</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tintuc" class="" title="Blog">
                            <span>TIn tức</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden-xs pull-right right-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="col-md-12">
                        <div class="search-bar">
                            <div class="">
                                <form action="/search">
                                    <input type="hidden" name="type" value="product" />
                                    <input type="text" name="q" placeholder="Tìm kiếm..." autocomplete="off" />
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- End container  -->
    <script>
        $(window).resize(function () {
            $('li.dropdown li.active').parents('.dropdown').addClass('active');
            if ($('.right-menu').width() + $('#navbar').width() > $('.check_nav.nav-wrapper').width() - 40) {
                $('.nav-wrapper').addClass('responsive-menu');
            }
            else {
                $('.nav-wrapper').removeClass('responsive-menu');
            }
        })

        $(document).on("click", ".mobile-menu-icon .dropdown-menu ,.drop-control .dropdown-menu, .drop-control .input-dropdown", function (e) {
            e.stopPropagation();
        });
    </script>
    <script>
        $(function () {
            $('nav#menu-mobile').mmenu();
        });
        $(document).ready(function () {
            flagg = true;
            if (flagg) {
                $('.click-menu-mobile a').click(function () {
                    $('#menu-mobile').removeClass('hidden');
                    flagg = false;
                })
            }
        })
    </script>
</nav>