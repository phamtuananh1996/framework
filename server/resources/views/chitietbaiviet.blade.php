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
		<div id="article" class="content-pages main-content article-detail clearfix " data-sticky_parent="">
			<div class="col-md-12 col-sm-12 col-xs-12 article">
				<div class="row">
					<!-- Begin article -->
					<div class="article-body">
						<div class="wrapper-sticky" style="display: block; height: 268px; width: 25%; margin: auto; position: relative; float: left; left: auto; right: auto; top: auto; bottom: auto; vertical-align: top;">
							<div class="col-md-3 col-sm-12 col-xs-12   leftsidebar-col" data-sticky_column="" style="width: 293px; top: auto; bottom: auto; right: auto; left: 0px;">
							@include("layout.danhmuc");
									<!-- End: Danh mục tin tức -->










								</div>
								<!-- End sidebar -->
							</div>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12   articles " id="layout-page" data-sticky_column="">
							<span class="clearfix">
								<h1 class="sb-title-article">{{$bv->title}}</h1>
							</span>

							<div class="content-page row">
								<div class="col-md-12 col-sm-12 col-xs-12 article-content">

									<div class="body-content">
										<ul class="info-more">
											<li>
												<i class="fa fa-calendar-o"></i>
												<time pubdate="" datetime="2017-03-26">{{$bv->created_at}}</time>
											</li>
											<li>
												<i class="fa fa-file-text-o"></i>
												<a href="#"> Tin tức </a>
											</li>

										</ul>
										<div class="article-pages">
											{!!$bv->content!!}
										</div>
									</div>

								</div>

							</div>

						</div>
						<!-- End article-->


						<!-- Begin sidebar -->

					</div>
				</div>
			</div>
		</div>

	</div>
</section>
@stop