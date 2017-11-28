@extends('main.industrial_park.layouts')

@section('title','Home')

@section('slider')
	@include('main.industrial_park.slider')
@endsection

@section('content')
<!--Eco Template section-->
			<section class="eco_services_environment">
				<!--Eco Template section content-->
				<div class="container">
					<!--Eco Template Heading-->
					<div class="eco_headings">
						<h3><b>{{ @trans('home.utility') }}</b></h3>
						<h6></h6>
						<span><i class="icon-nature-2"></i></span>
					</div>
					<!--Eco services-->
					<div class="eco_services">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="eco_items-services">
									<div class="eco_service_cols">
										<span><i class="fa fa-bolt"></i></span>
										<div>
											<h4>{{@trans('home.power_supply_h')}}</h4>
											<p>{{@trans('home.power_supply')}}</p>
										</div>
									</div>
									<div class="eco_service_cols">
										<span><i class="icon-weather"></i></span>
										<div>
											<h4>{{@trans('home.water_supplies_h')}}</h4>
											<p>{{@trans('home.water_supplies')}}</p>
										</div>
									</div>
								</div>
							</div>
							<!--Eco Template section content center img-->
							<div class="col-md-4 col-sm-6 col-xs-12 hidden-sm-down">
								<figure><div class="thumb-widthout-layer">
									<img src="{{url('images/eco-services-center-img.png')}}" alt=""></div></figure>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="eco_items-services">
									<div class="eco_service_cols rtl_service">
										<span><i class="fa fa-recycle"></i></span>
										<div>
											<h4>{{@trans('home.water_treatment_h')}}</h4>
											<p>{{@trans('home.water_treatment')}}</p>
										</div>
									</div>
									<div class="eco_service_cols rtl_service">
										<span><i class="icon-nature-1"></i></span>
										<div>
											<h4>{{@trans('home.reservoir_h')}}</h4>
											<p>{{@trans('home.reservoir')}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Eco Template section content ends-->
			</section>

           @if(count($news)>=1)
			<!--Eco section start-->
			<section>
				<!--Eco blog content-->
				<div class="container">
					<!--Eco Template Heading-->
					<div class="eco_headings">
						<h3><b>{{ @trans('home.news_events') }}</b></h3>
					
						<span><i class="icon-nature-2"></i></span>
					</div>
					<!--Eco blog-->
					<div class="eco_blog_section">
						<div class="row">
							@foreach($news AS $vel_news)
							<!--Eco blog column-->
							<div class="col-md-4 col-sm-6 responsive-col-xs">
								<!--Eco blog column-->
								<div class="eco_blog_column">
									<!--Eco blog column picture-->
									<figure>
										<div class="eco_thumb eco_hover_effect">
											<img src="images/news/{{$vel_news->img_name}}" alt="">	
											<div class="eco_hover_btn">
												<a class="mediem_btn_02" href="{{url('detail/'.$vel_news->id_news)}}">blog details</a>
											</div>
										</div>
									</figure>
									<!--Eco blog column content-->
									<div class="eco_blog_content"> 
										<!--Eco blog date
										<h3 class="event_date_03">22<b>dec</b></h3> 
										--> 
										<div class="eco-event-title">
											<h5>{{$vel_news->subject}}</h5>
										</div>
										<ul class="eco_viewers_meta">
											<li><a href="#">
												{{$vel_news->views}} Views</a>
											</li>
											<li><a href="#">
												{{$vel_news->created_at}}</a>
											</li>
											
										</ul>
										
									</div>
								</div>
							</div>
							@endforeach
							
							<div class="col-md-12 col-sm-12" align="center">
								<a href="{{url('news-evente/1')}}" class="btn btn-success" role="button">
								ทั้งหมด</a>
								
							</div>	
						</div>
					</div>
					<!--Eco blog ends-->
				</div>
				<!--Eco blog ends-->
			</section>
			@endif
			<!--Eco section ends-->
@endsection