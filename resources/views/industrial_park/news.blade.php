@extends('main.industrial_park.layouts')

@section('title','Home')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>{{ @trans('home.industial_park_sr') }}</b></h3>
			</div>
			<!--
			<ul class="eco_page_link">
				<li><a href="#">pages</a></li>
				<li class="active"><a href="#">services</a></li>
			</ul>
		-->
		</div>
		<!--Eco Template Banner ends-->
@endsection

@section('content')

		<!--Eco Template content-->
		<div class="content">
			<section>
				<!--Eco blog-->
				<div class="eco_blog_section">
					<div class="container">
						<div class="row">
							<!--Eco blog column-->
							@if(count($news)>=1)
							@foreach($news AS $vel_news)
							<div class="col-md-4 col-sm-6 col-xs-12">
								<!--Eco blog column-->
								<div class="eco_blog_column">
									<!--Eco blog column picture-->
									<figure>
										<div class="eco_thumb eco_hover_effect">
											<img src="{{url('images/news/'.$vel_news->img_name)}}" alt="">	
											<div class="eco_hover_btn">
												<a class="mediem_btn_02" href="{{url('detail/'.$vel_news->id_news)}}">blog details</a>
											</div>
										</div>
									</figure>
									<!--Eco blog column content-->
									<div class="eco_blog_content"> 
										<!--Eco blog date-->
										 
										<div class="eco-event-title">
											<h5>{{$vel_news->subject}}</h5>
										</div>
										<ul class="eco_viewers_meta">
											<li><a href="#">{{$vel_news->views}} Views</a></li>
											<li><a href="#">{{$vel_news->created_at}}</a></li>
										</ul>
										
									</div>
								</div>
							</div>
							@endforeach
							@else
							<div align="center">
								<h3>!ไม่พบข้อมูล</h3>
							</div>
							
							@endif
						
						</div>
					</div>
					<!--Eco pagination-->
					<!--
					<div class="eco_pagination_1">
						<ul>
							<li class="eco_prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">--</a></li>
							<li class="eco_next"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				-->
					<!--Eco pagination ends-->
				</div>
				<!--Eco blog ends-->
			</section>
		</div>
		<!--Eco content ends-->
@endsection