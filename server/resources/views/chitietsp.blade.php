@extends('layout.master')
@section('content')
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" data-sticky_column>
		<div  id="wrapper-detail" class="product-page">
		
        @if($spct['id']>0)

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="surround">
						
						<div class="product-sale">

							<span>
								<label class="sale-lb">-</label> 20%
							</span>
						</div>				
						<a class="slide-prev slide-nav" href="javascript:">
							<i class="fa fa-arrow-circle-o-left fa-2"></i>
						</a>
						<a class="slide-next slide-nav" href="javascript:">
							<i class="fa fa-arrow-circle-o-right fa-2"></i>
						</a>
						<img class="product-image-feature" src= {{$spct['image']}} alt= {{$spct['name']}}>
						<div id="sliderproduct" class="">
							<ul class="slides" >
								
								<li class="product-thumb">
									<a href="javascript:" data-image= {{$spct['image']}} data-zoom-image= {{$spct['image']}} src= {{$spct['image']}}>
										<img alt={{$spct['name']}} data-image={{$spct['image']}} src={{$spct['image']}} >
									</a></li>	
								
								<li class="product-thumb">
									<a href="javascript:" data-image={{$spct['image']}} data-zoom-image={{$spct['image']}} src={{$spct['image']}}>
										<img alt={{$spct['name']}} data-image={{$spct['image']}} src={{$spct['image']}} >
									</a></li>	
								
                                    <li class="product-thumb">
									<a href="javascript:" data-image={{$spct['image']}} data-zoom-image={{$spct['image']}} src={{$spct['image']}}>
										<img alt={{$spct['name']}} data-image={{$spct['image']}} src={{$spct['image']}} >
									</a></li>
								
                                    <li class="product-thumb">
									<a href="javascript:" data-image={{$spct['image']}} data-zoom-image={{$spct['image']}} src={{$spct['image']}}>
										<img alt={{$spct['name']}} data-image={{$spct['image']}} src={{$spct['image']}} >
									</a></li>
								
							</ul>
						</div>
						

						
					</div>

				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="product-title">
						<h1>{{$spct['name']}}</h1>

						<span id="pro_sku"></span>

					</div>
					<div class="product-price" id="price-preview">
							
						<span>{{$spct['price']-$spct['price']*0.2}}</span><del>{{$spct['price']}}</del>
									

					</div>

					
					
					
					
					<form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">				
						<div class="select clearfix" style="display:none">
							<select id="product-select" name="id" style="display:none">
								
								<option value="1012006173">Default Title - 800,000₫</option>
								
							</select>
						</div>

						<div class="select-wrapper ">
							<label>Số lượng</label>
							<input id="quantity" type="number" name="quantity" min="1" value="1" class="tc item-quantity" />
						</div>


						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
								<button id="add-to-cart"   class=" btn-detail btn-color-add btn-min-width btn-mgt addtocart-modal" name="add"> 
										Thêm vào giỏ 
								</button>
							</div>
								
							<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">								
								<button id="buy-now"   class=" btn-detail btn-color-buy btn-min-width btn-mgt">
									Mua ngay
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
									<a href="/collections/all/phu-kien-nam">phụ kiện nam</a>
								</li>
								
								<li class="active">
									<a href="/collections/all/thoi-trang-nam">thời trang nam</a>
								</li>
								
								<li class="active">
									<a href="/collections/all/dong-ho-co">đồng hồ cơ</a>
								</li>
								
								<li class="active">
									<a href="/collections/all/dong-ho">đồng hồ</a>
								</li>
								
								<li class="active">
									<a href="/collections/all/tevise">tevise</a>
								</li>
								
							</ul>
						</div>
						

						<!-- End tags -->
					</div>
					

					<div class="pt20">																
						<!-- Begin social icons -->
					<div class="addthis_toolbox addthis_default_style ">
						
						<div class="info-socials-article clearfix">
							<div class="box-like-socials-article">
								<div class="fb-send" data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">
								</div>
							</div>
							<div class="box-like-socials-article">
								<div class="fb-like" data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat" data-layout="button_count" data-action="like">
								</div>
							</div> 
							<div class="box-like-socials-article">
								<div class="fb-share-button" data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat" data-layout="button_count">
								</div>
							</div>
						</div>
						

					</div>
					<!-- End social icons -->
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
					<div role="tabpanel" class="product-comment">
						<!-- Nav tabs -->
						<ul class="nav visible-lg visible-md" role="tablist">
							<li role="presentation" class="active"><a data-spy="scroll" data-target="#mota" href="#mota" aria-controls="mota" role="tab">Mô tả sản phẩm</a></li>
							
							<li role="presentation">
								<a data-spy="scroll" href="#binhluan" aria-controls="binhluan" role="tab">Bình luận</a>
							</li>
							
							
							<li role="presentation">
								<a data-spy="scroll" href="#like" aria-controls="like" role="tab">Sản phẩm khác</a>
							</li>
							
						</ul>
						<!-- Tab panes -->

						<div id="mota">		

							<div class="title-bl visible-xs visible-sm">
								<h2>Mô tả</h2>
							</div>										

							<div class="product-description-wrapper">
								
								{!! $spct['info'] !!}
								
							</div>
						</div>
						
						<div id="binhluan">
							<div class="title-bl">
								<h2>Bình luận</h2>
							</div>
							<div class="product-comment-fb">
								<div id="fb-root"></div>					
								<div class="fb-comments" data-href="http://happylive.vn/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat" data-numposts="5" width="100%" data-colorscheme="light"></div>
								<!-- script comment fb -->
								<script type="text/javascript">(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) return;
									js = d.createElement(s); js.id = id;
									js.src = "/connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
									fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>
							</div>
						</div>	
											
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="col-md-12 col-sm-12 col-xs-12  list-like">
			<div id="like">
				<div class="title-like">
					<h2>Sản phẩm khác</h2>
				</div>
				<div class="row product-list ">
					<div class="content-product-list">		
					@foreach($dsspht as $item)
					<div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
							<div class="product-block product-resize">
								<div class="product-img image-resize view view-third">
									<div class="product-sale" >
										<span><label class="sale-lb">- </label> 29%</span>
									</div>
									<a href="/chitiet/{{$item['id']}}" title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">
										<img class="first-image  has-img" alt=" {{$item['name']}}  " src= {{$item['image']}}  />					
										<img  class ="second-image" src="{{$item['image']}} "  alt=" {{$item['name']}} " />
									</a>
									<div class="actionss">
										<div class="btn-cart-products">
											<a href="javascript:void(0);" onclick="add_item_show_modalCart(1012030836)">
											<i class="fa fa-shopping-bag" aria-hidden="true"></i>
							</a>
										</div>
										<div class="view-details">
											<a href="#" class="view-detail" > 
												<span><i class="fa fa-clone"> </i></span>
											</a>
										</div>
										<div class="btn-quickview-products">
											<a href="#" class="quickview" data-handle="/products/dong-ho-nam-skmei-kim-xanh-duong"><i class="fa fa-eye"></i></a>
										</div>
									</div>
							
								</div>
							
								<div class="product-detail clearfix">
									
							
									<!-- sử dụng pull-left -->
									<h3 class="pro-name"><a href="/collections/dong-ho-chong-nuoc/products/dong-ho-nam-skmei-kim-xanh-duong" title="{{$item['name']}} ">{{$item['name']}}  </a></h3>
									<div class="pro-prices">	
										<p class="pro-price">{{$item['price']-$item['price']*0.2}} </p>
										<p class="pro-price-del text-left"><del class="compare-price">{{$item['price']}} </del></p>	
							
							
									</div>
									
							
								</div>
							</div>	
							
													</div>
													
													
													
													
							
													
													
													
		@endforeach
						

				</div>
				</div>
				</div>
				</div>
				
@stop
