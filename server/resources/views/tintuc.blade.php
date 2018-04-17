@extends('layout.master')

@section('content')
<div class="wrap-breadcrumb">
	<div class="clearfix container">
		<div class="row main-header">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ol class="breadcrumb breadcrumb-arrows">
					<li>
						<a href="/" target="_self">Trang chủ</a>
					</li>
					<li class="active">
						<span>Blog - Tin tức</span>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<section id="content" class="clearfix container">
	<div class="row">
		<div id="blog" class="page-content main-content content-pages" data-sticky_parent="">
			<!-- Begin content -->
			<div class="blog-content col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="wrapper-sticky" style="display: block; height: 403px; width: 25%; margin: auto; position: relative; float: left; left: auto; right: auto; top: auto; bottom: auto; vertical-align: top;">
						<div class="col-md-3  col-sm-12 col-xs-12 leftsidebar-col" data-sticky_column="" style="width: 293px; top: auto; bottom: auto; right: auto; left: 0px;">
							<!-- Begin sidebar blog -->
							@include("layout.danhmuc");
							<!-- End sidebar blog -->
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12 " id="blog-container" data-sticky_column="">
						<div class="row">
							<div class="articles clearfix" id="layout-page">
								<div class="col-md-12  col-sm-12 col-xs-12">
									<h1>Tin tức</h1>
								</div>
								<!-- Begin: Nội dung blog -->
								
								@foreach ($arrtintuc as $tintuc)
								<div class="news-content">

									<div class="col-md-5 col-xs-12 col-sm-12 img-article">
										<div class="art-img">
											<img src="{{$tintuc->image}}" alt="">
										</div>
									</div>
									<div class=" col-md-7 col-sm-12  col-xs-12">
										<!-- Begin: Nội dung bài viết -->
										<h2 class="title-article">
											<a href="/blogs/news/goi-y-su-dung-dong-ho">{{$tintuc->title}}</a>
										</h2>
										<div class="body-content">
											<ul class="info-more">
												<li>
													<i class="fa fa-calendar-o"></i>
													<time pubdate="" datetime="2017-03-26">{{$tintuc->created_at}}</time>
												</li>
												<li>
													<i class="fa fa-file-text-o"></i>
													<a href="#"> Tin tức </a>
												</li>

											</ul>
											{!!substr($tintuc->content,0,500)!!} ...
										</div>
										<!-- End: Nội dung bài viết -->
										<a class="readmore btn-rb clear-fix" href="/baiviet/{{$tintuc->id}}" role="button">Xem tiếp
											<span class="fa fa-angle-double-right"></span>
										</a>
									</div>
								</div>
								<hr class="line-blog">
								@endforeach
								<!-- End: Nội dung blog -->
							</div>
							<div class="col-md-12">
								<!-- Begin: Phân trang blog -->
								<div id="pagination" class="">
								</div>
								<!-- End: Phân trang blog -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End content -->
		</div>
	</div>
</section>


@stop