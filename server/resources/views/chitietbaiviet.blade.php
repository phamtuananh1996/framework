@extends('layout.master')
@section('content')
<section id="content" class="clearfix container">
						<div class="row">
							  <div class="col-md-12 col-sm-12 col-xs-12 " id="layout-page">
<span class="header-page clearfix">
			 <h1>Dịch vụ</h1>
		</span>
		<div class="content-page">
        @if($bv['id'] > 0)
        <p><img src="{{$bv['image']}}" data-mce-src="{{$bv['image']}}">
        {!! $bv['content'] !!}
        @endif
			</p>
		</div>
  </div>
						</div>
					</section>
@stop