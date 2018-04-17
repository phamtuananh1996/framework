 @extends('layout.master') 
 @section('content')
<div class="main-content">
    <!-- Sản phẩm trang chủ -->
    <div class="product-list clearfix">

        @foreach ($groupCategorys as $group)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <aside class="styled_header  use_icon ">
                    <h2>GIÁ SỈ</h2>
                    <h3>{{$group->name}} - ZALO 0978825365</h3>
                    <span class="icon">
                        <img src="//theme.hstatic.net/1000177652/1000229231/14/icon_featured.png?v=101" alt="">
                    </span>
                </aside>
            </div>
        </div>
        <!--Product loop-->
        <div class="row content-product-list products-resize">

            @foreach ($group->products->take(8) as $product)
            <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                <div class="product-block product-resize fixheight" style="height: 345px;">
                    <div class="product-img image-resize view view-third" style="height: 261px;">
                        <a href="/chitietsanpham/{{$product->id}}" title="ĐỒNG HỒ NAM BAISHUN MẪU DH02">
                            <img @if ($product->image_more) class="first-image has-img" @endif alt="{{$product->name}}" src="{{$product->image}}">
                            @if ($product->image_more)
                            <img class="second-image" src="{{explode(',',$product->image_more)[0]}}" alt="{{$product->name}}"> @endif
                        </a>
                        <div class="actionss">
                            <div class="btn-cart-products">
                                <a href="/cart/add/{{$product->id}}">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="view-details">
                                <a href="/chitietsanpham/{{$product->id}}" class="view-detail">
                                    <span>
                                        <i class="fa fa-clone"> </i>
                                    </span>
                                </a>
                            </div>
                            <div class="btn-quickview-products">
                                <a href="/chitietsanpham/{{$product->id}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail clearfix">
                        <!-- sử dụng pull-right -->
                        <h3 class="pro-name">
                            <a href="/chitietsanpham/{{$product->id}}" title="ĐỒNG HỒ NAM BAISHUN MẪU DH02">{{$product->name}}</a>
                        </h3>
                        <div class="pro-prices">
                            <p class="pro-price">{{number_format($product->price)}}₫</p>
                            <p class="pro-price-del text-left"></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12  pull-center center">
                <a class="btn btn-readmore" href="/groupcategory/{{$group->id}}" role="button">Xem thêm</a>
            </div>
        </div>
        @endforeach
    </div>
    <!--Product loop-->
</div>


<div id="myCart" class="modal fade bs-example-modal-lg in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg" id="cart">
           
    </div>
</div>

<script>
    function addCart(id){
        $.get('/cart/ajax/add/'+id,function(res){
            $('#cart').html(res);
            $("#myCart").modal()
        })
    }
</script>

@stop