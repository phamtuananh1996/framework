@extends('layout.master') @section('content')
<div class="wrap-breadcrumb">
	<div class="clearfix container">
		<div class="row main-header">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
				<ol class="breadcrumb breadcrumb-arrows">
					<li>
						<a href="/" target="_self">Trang chủ</a>
					</li>
					<li>
						<a href="/collections/dong-ho-nam-2" target="_self">{{$product->category->name}}</a>
					</li>


					<li class="active">
						<span> {{$product->name}}</span>
					</li>

				</ol>
			</div>
		</div>
	</div>

</div>
<section id="content" class="clearfix container">
	<div class="row">
		<div id="product" class="content-pages" data-sticky_parent="">
			<div class="wrapper-sticky" style="display: block; height: 581px; width: 25%; margin: auto; position: relative; float: left; left: auto; right: auto; top: auto; bottom: auto; vertical-align: top;">
				<div class="col-md-3 col-sm-12 col-xs-12  leftsidebar-col" data-sticky_column="" style="width: 293px; bottom: auto; right: auto; position: absolute; top: 0px; left: 0px;">
					<div class="group_sidebar">

						<div class="list-group navbar-inner ">


							<div class="mega-left-title btn-navbar title-hidden-sm">
								<h3 class="sb-title">Danh mục </h3>
							</div>

							<ul class="nav navs sidebar menu" id="cssmenu">




								<li class="item  first">
									<a href="/collections/onsale">
										<span>Sản phẩm khuyến mãi</span>
									</a>
								</li>





								<li class="item  ">
									<a href="/collections/hot-products">
										<span>Sản phẩm nổi bật</span>
									</a>
								</li>





								<li class="item  last">
									<a href="/collections/all">
										<span>Tất cả sản phẩm</span>
									</a>
								</li>


							</ul>

						</div>

						<!-- Banner quảng cáo -->
						<div class="list-group_l banner-left hidden-sm hidden-xs">

							<a href="">
								<img src="//theme.hstatic.net/1000177652/1000229231/14/left_image_ad.jpg?v=101">
							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" data-sticky_column="">
				<div id="wrapper-detail" class="product-page">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div id="surround">


								<a class="slide-prev slide-nav" href="javascript:">
									<i class="fa fa-arrow-circle-o-left fa-2"></i>
								</a>
								<a class="slide-next slide-nav" href="javascript:">
									<i class="fa fa-arrow-circle-o-right fa-2"></i>
								</a>

								<img class="product-image-feature" src="{{$product->image}}"
								 alt="{{$product->name}}">
								 <div id="sliderproduct" class="">
									<ul class="slides">
										
										<li class="product-thumb active">
											<a href="javascript:" data-image="{{$product->image}}">
												<img alt="{{$product->name}}" data-image="{{$product->image}}" src="{{$product->image}}">
											</a></li>	
										
										@if ($product->image_more)
										
										@foreach (explode(',',$product->image_more) as $image)
										<li class="product-thumb">
											<a href="javascript:" data-image="{{$image}}">
													<img alt="{{$product->name}}" data-image="{{$image}}" src="{{$image}}">
											</a>
										</li>	
										@endforeach
										@endif
									</ul>
								</div>





							</div>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="product-title">
								<h1>{{$product->name}}</h1>

								<span id="pro_sku"></span>

							</div>
							<div class="product-price" id="price-preview">

								<span>{{number_format($product->price)}}₫</span>


							</div>





							<form id="add-item-form" action="/cart/add/{{$product->id}}" method="get" class="variants clearfix">
								<div class="select clearfix" style="display:none">
									<select id="product-select" name="id" style="display:none">

										<option value="1024744899">Default Title - 230,000₫</option>

									</select>
								</div>

								<div class="select-wrapper ">
									<label>Số lượng</label>
									<input id="quantity" type="number" name="qty" min="1" value="1" class="tc item-quantity">
								</div>


								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
										<button id="add-to-cart" class=" btn-detail btn-color-add btn-min-width btn-mgt addtocart-modal" name="add">
											Thêm vào giỏ
										</button>
									</div>
								</div>
							</form>

							<div class="pt20">
								<!-- Begin tags -->

								<div class="tag-wrapper">
									<label>
										Tags:
									</label>
									<ul class="tags">

										<li class="active">
											<a href="/collections/all/mat-tron">MẶT TRÒN</a>
										</li>

										<li class="active">
											<a href="/collections/all/dong-ho-kim">ĐỒNG HỒ KIM</a>
										</li>

										<li class="active">
											<a href="/collections/all/day-kimloai">DÂY KIMLOẠI</a>
										</li>

										<li class="active">
											<a href="/collections/all/dong-ho-nam">ĐỒNG HỒ NAM</a>
										</li>

										<li class="active">
											<a href="/collections/all/longbo">LONGBO</a>
										</li>

									</ul>
								</div>


								<!-- End tags -->
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">

							<div class="title-bl visible-xs visible-sm">
								<h2>Mô tả</h2>
							</div>

							<div class="product-description-wrapper">

								{!!$product->info!!}

							</div>

						</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12  list-like">
					<div id="like">
						<div class="title-like">
							<h2>Sản phẩm khác</h2>
						</div>
						<div class="row product-list ">
							<div class="content-product-list">
								<div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
									<div class="product-block product-resize fixheight" style="height: 271px;">
										<div class="product-img image-resize view view-third" style="height: 187px;">
											<a href="/products/curren-mat-mau-trang" title="curren mặt màu trắng">
												<img class="first-image " alt=" curren mặt màu trắng " src="//product.hstatic.net/1000177652/product/upload_3e9a4f01f6814e409fb6ee4483a03e28_large.jpg">
											</a>
											<div class="actionss">
												<div class="btn-cart-products">
													<a href="javascript:void(0);" onclick="add_item_show_modalCart(1024937854)">
														<i class="fa fa-shopping-bag" aria-hidden="true"></i>
													</a>
												</div>
												<div class="view-details">
													<a href="/collections/dong-ho-nam-2/products/curren-mat-mau-trang" class="view-detail">
														<span>
															<i class="fa fa-clone"> </i>
														</span>
													</a>
												</div>
												<div class="btn-quickview-products">
													<a href="javascript:void(0);" class="quickview" data-handle="/products/curren-mat-mau-trang">
														<i class="fa fa-eye"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="product-detail clearfix">
											<!-- sử dụng pull-left -->
											<h3 class="pro-name">
												<a href="/collections/dong-ho-nam-2/products/curren-mat-mau-trang" title="curren mặt màu trắng">curren mặt màu trắng </a>
											</h3>
											<div class="pro-prices">
												<p class="pro-price">155,000₫</p>
												<p class="pro-price-del text-left"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
									<div class="product-block product-resize fixheight" style="height: 271px;">
										<div class="product-img image-resize view view-third" style="height: 187px;">



											<a href="/products/day-da-nam-curren-cr4403k-mat-den" title="dây da nam Curren CR4403K mặt đen">
												<img class="first-image " alt=" dây da nam Curren CR4403K mặt đen " src="//product.hstatic.net/1000177652/product/upload_e659341ef19b4f1483f623feafecd234_large.jpg">

											</a>
											<div class="actionss">
												<div class="btn-cart-products">
													<a href="javascript:void(0);" onclick="add_item_show_modalCart(1024937636)">
														<i class="fa fa-shopping-bag" aria-hidden="true"></i>
													</a>
												</div>
												<div class="view-details">
													<a href="/collections/dong-ho-nam-2/products/day-da-nam-curren-cr4403k-mat-den" class="view-detail">
														<span>
															<i class="fa fa-clone"> </i>
														</span>
													</a>
												</div>
												<div class="btn-quickview-products">
													<a href="javascript:void(0);" class="quickview" data-handle="/products/day-da-nam-curren-cr4403k-mat-den">
														<i class="fa fa-eye"></i>
													</a>
												</div>
											</div>

										</div>

										<div class="product-detail clearfix">


											<!-- sử dụng pull-right -->
											<h3 class="pro-name">
												<a href="/collections/dong-ho-nam-2/products/day-da-nam-curren-cr4403k-mat-den" title="dây da nam Curren CR4403K mặt đen">dây da nam Curren CR4403K mặt đen </a>
											</h3>
											<div class="pro-prices">
												<p class="pro-price">150,000₫</p>
												<p class="pro-price-del text-left"></p>


											</div>


										</div>
									</div>

								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
									<div class="product-block product-resize fixheight" style="height: 271px;">
										<div class="product-img image-resize view view-third" style="height: 187px;">
											<a href="/products/dong-ho-longbo-mat-vuong-mau-trang-1" title="ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU ĐEN">
												<img class="first-image  has-img" alt=" ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU ĐEN " src="//product.hstatic.net/1000177652/product/3_6af5b079f1d34fda9b8317fac92c6197_large.jpg">
												<img class="second-image" src="//product.hstatic.net/1000177652/product/4_ec0319148ec348789ae2a59fc5289855_large.jpg" alt=" ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU ĐEN ">
											</a>
											<div class="actionss">
												<div class="btn-cart-products">
													<a href="javascript:void(0);" onclick="add_item_show_modalCart(1012031097)">
														<i class="fa fa-shopping-bag" aria-hidden="true"></i>
													</a>
												</div>
												<div class="view-details">
													<a href="/collections/dong-ho-nam-2/products/dong-ho-longbo-mat-vuong-mau-trang-1" class="view-detail">
														<span>
															<i class="fa fa-clone"> </i>
														</span>
													</a>
												</div>
												<div class="btn-quickview-products">
													<a href="javascript:void(0);" class="quickview" data-handle="/products/dong-ho-longbo-mat-vuong-mau-trang-1">
														<i class="fa fa-eye"></i>
													</a>
												</div>
											</div>

										</div>

										<div class="product-detail clearfix">


											<!-- sử dụng pull-left -->
											<h3 class="pro-name">
												<a href="/collections/dong-ho-nam-2/products/dong-ho-longbo-mat-vuong-mau-trang-1" title="ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU ĐEN">ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU ĐEN </a>
											</h3>
											<div class="pro-prices">
												<p class="pro-price">145,000₫</p>
												<p class="pro-price-del text-left"></p>


											</div>


										</div>
									</div>

								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
									<div class="product-block product-resize fixheight" style="height: 271px;">
										<div class="product-img image-resize view view-third" style="height: 187px;">
											<a href="/products/dong-ho-longbo-mat-vuong-mau-trang" title="ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU TRẮNG">
												<img class="first-image  has-img" alt=" ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU TRẮNG " src="//product.hstatic.net/1000177652/product/1_3f1f031ac44d4deda9653dacc81e09e7_large.jpg">
												<img class="second-image" src="//product.hstatic.net/1000177652/product/2_a62782b226174f41aaafdace1c25c94c_large.jpg" alt=" ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU TRẮNG ">
											</a>
											<div class="actionss">
												<div class="btn-cart-products">
													<a href="javascript:void(0);" onclick="add_item_show_modalCart(1012031096)">
														<i class="fa fa-shopping-bag" aria-hidden="true"></i>
													</a>
												</div>
												<div class="view-details">
													<a href="/collections/dong-ho-nam-2/products/dong-ho-longbo-mat-vuong-mau-trang" class="view-detail">
														<span>
															<i class="fa fa-clone"> </i>
														</span>
													</a>
												</div>
												<div class="btn-quickview-products">
													<a href="javascript:void(0);" class="quickview" data-handle="/products/dong-ho-longbo-mat-vuong-mau-trang">
														<i class="fa fa-eye"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="product-detail clearfix">


											<!-- sử dụng pull-right -->
											<h3 class="pro-name">
												<a href="/collections/dong-ho-nam-2/products/dong-ho-longbo-mat-vuong-mau-trang" title="ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU TRẮNG">ĐỒNG HỒ LONGBO MẶT VUÔNG MÀU TRẮNG </a>
											</h3>
											<div class="pro-prices">
												<p class="pro-price">145,000₫</p>
												<p class="pro-price-del text-left"></p>


											</div>


										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>



		<script>
			$(".product-thumb img").click(function () {
				$(".product-thumb").removeClass('active');
				$(this).parents('li').addClass('active');
				$(".product-image-feature").attr("src", $(this).attr("data-image"));
				$(".product-image-feature").attr("data-zoom-image", $(this).attr("data-zoom-image"));
			});

			$(".product-thumb").first().addClass('active');

		</script>


		<script>
			$(document).ready(function () {
				if ($(".slides .product-thumb").length > 4) {
					$('#sliderproduct').flexslider({
						animation: "slide",
						controlNav: false,
						animationLoop: false,
						slideshow: false,
						itemWidth: 95,
						itemMargin: 10,
					});
				}
				if ($(window).width() > 960) {
					jQuery(".product-image-feature").elevateZoom({
						gallery: 'sliderproduct',
						scrollZoom: true
					});
				} else {

				}
				jQuery('.slide-next').click(function () {
					if ($(".product-thumb.active").prev().length > 0) {
						$(".product-thumb.active").prev().find('img').click();
					}
					else {
						$(".product-thumb:last img").click();
					}
				});
				jQuery('.slide-prev').click(function () {
					if ($(".product-thumb.active").next().length > 0) {
						$(".product-thumb.active").next().find('img').click();
					}
					else {
						$(".product-thumb:first img").click();
					}
				});
			});
		</script>

	</div>
</section>

@stop