@extends('layout.master')

@section('content')




<div class="col-md-9 col-sm-12 col-xs-12 " id="blog-container" data-sticky_column>
				<div class="row">
					<div class="articles clearfix" id="layout-page">
						<div class="col-md-12  col-sm-12 col-xs-12">
							<h1>Tin tức</h1>
						</div>
					
						<!-- Begin: Nội dung blog -->      
						
						@if(count($arrtintuc)>0)
                            @foreach($arrtintuc as $item)
                            <div class="news-content">
							<div class="col-md-5 col-xs-12 col-sm-12 img-article">
								<div class="art-img">
									<img src="{{$item['image']}}" alt="" >
								</div>
							</div>
							

							<div class=" col-md-7 col-sm-12  col-xs-12" >
								<!-- Begin: Nội dung bài viết -->
								<h2 class="title-article"><a href="baiviet/{{$item['id']}}">{{$item['title']}}</a></h2>
								<div class="body-content">
									<ul class="info-more">
									 <li><i class="fa fa-calendar-o"></i><time pubdate datetime="{{$item['created_at']}}">{{$item['created_at']}}</time></li>
                                      
										<li><i class="fa fa-file-text-o"></i><a href="baiviet/{{$item['id']}}"> Tin tức	</a> </li>
											
									</ul>
									<p>{!! substr($item['content'],300,300) !!}</p>
								</div>
								<!-- End: Nội dung bài viết -->	
								<a class="readmore btn-rb clear-fix" href="baiviet/{{$item['id']}}" role="button">Xem tiếp <span class="fa fa-angle-double-right"></span></a>
							</div>


						</div>
            
           
                            @endforeach
                        @endif
						
						
						</div>
            </div>
            </div>
                       


            @stop