<nav id="menu-mobile" class="hidden">
    <ul>
        <li>
            <a href="/">Trang chủ</a>
        </li>
        <li class="has-children">
            <a href="/collections/dong-ho-nam">Đồng hồ nam</a>
            <ul class="child count-nav-6">
                <li>
                    <a href="/collections/dong-ho-nam-tevise">Đồng hồ Tevise</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nam-skmei">Đồng hồ Skmei</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nam-halei">Đồng hồ Halei</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nam-longbo">Đồng hồ Longbo</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nam-curren">Đồng hồ nam Curren</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nam-baishuns">Đồng hồ nam Baishuns</a>
                </li>
            </ul>
        </li>
        <li class="has-children">
            <a href="/collections/dong-ho-nu">Đồng hồ nữ</a>
            <ul class="child count-nav-3">
                <li>
                    <a href="/collections/dong-ho-nu-beesister">Đồng hồ Beesister</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nu-skmei">Đồng hồ Skmei</a>
                </li>
                <li>
                    <a href="/collections/dong-ho-nu-halei">Đồng hồ Halei</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/pages/dich-vu">Dịch vụ</a>
        </li>
        <li>
            <a href="/pages/gioi-thieu">Giới thiệu</a>
        </li>
        <li>
            <a href="/blogs/news">Blog</a>
        </li>
    </ul>
</nav>
<header class="header bkg visible-lg">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
                        <!-- LOGO -->

                        <h1>
                            <a href="http://happylive.vn">
                                <img src="/theme.hstatic.net/1000177652/1000229231/14/logo.png?v=90" alt="Happylive" class="img-responsive logoimg" />
                            </a>
                        </h1>

                        <h1 style="display:none">
                            <a href="/">Happylive</a>
                        </h1>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-5 col-xs-5 mobile-icons">
                        <div>
                            <a href="#" title="Xem giỏ hàng" class="mobile-cart">
                                <span>{{Cart::count()}}</span>
                            </a>
                            <a href="#" id="mobile-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                <aside class="top-info">
                    <div class="cart-info hidden-xs">
                        <a class="cart-link" href="/cart">
                            <span class="icon-cart">
                            </span>
                            <div class="cart-number">
                                {{Cart::count()}}
                            </div>
                        </a>
                        <div class="cart-view clearfix" style="display: none;">
                            <table id="clone-item-cart" class="table-clone-cart">
                                <tr class="item_2 hidden">
                                    <td class="img">
                                        <a href="" title="">
                                            <img src="" alt="" />
                                        </a>
                                    </td>
                                    <td>
                                        <a class="pro-title-view" href="" title=""></a>
                                        <span class="variant"></span>
                                        <span class="pro-quantity-view"></span>
                                        <span class="pro-price-view"></span>
                                        <span class="remove_link remove-cart">
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            
                            @if (Cart::count()!=0)
                            <table id="cart-view">
                                @foreach (Cart::content() as $cart)
                                <tr>
                                    <td class="img">
                                        <a href="/products/dong-ho-nam-skmei-kim-xanh-duong">
                                            <img src="{{$cart->options->image}}" alt="{{$cart->name}}"
                                            />
                                        </a>
                                    </td>
                                    <td>
                                        <a class="pro-title-view" href="/chitietsanpham/{{$cart->id}}" title="{{$cart->name}}">{{$cart->name}}</a>
                                        <span class="variant">

                                        </span>
                                        <span class="pro-quantity-view">{{$cart->qty}}</span>
                                        <span class="pro-price-view">{{number_format($cart->price)}}₫</span>
                                        <span class="remove_link remove-cart">
                                            <a href='javascript:void(0);' onclick='deleteCart(1012030836)'>
                                                <i class='fa fa-times'></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <span class="line"></span>
                            <table class="table-total">
                                <tr>
                                    <td class="text-left">TỔNG TIỀN:</td>
                                    <td class="text-right" id="total-view-cart">{{Cart::subtotal()}}₫</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/cart" class="linktocart">Xem giỏ hàng</a>
                                    </td>
                                    <td>
                                        <a href="/checkout" class="linktocheckout">Thanh toán</a>
                                    </td>
                                </tr>
                            </table>
                            @endif
                        </div>
                    </div>
                    <div class="navholder">
                        <nav id="subnav">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 0978.828.888</a>
                                </li>
                                @if(Auth::check())
                                <li>
                                    <a class="log" href="#" title="account">Xin chào : {{ Auth::user()->name}} </a>
                                </li>
                                <li>
                                    <a class="log" href="/logout" title="Đăng xuất">Đăng xuất</a>
                                </li>
                                @else
                                <li>
                                    <a class="reg" href="register" title="Đăng ký">ĐĂNG KÝ</a>
                                </li>
                                <li>
                                    <a class="log" href="login" title="Đăng nhập">Đăng nhập</a>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        <div class="header_line">
                            <p>Miễn phí vận chuyển
                                <span class="mar-l5">ĐƠN HÀNG TRÊN 500K TP HÀ NỘI</span>
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</header>