@extends('main.industrial_park.layouts')

@section('title','Industial Park Measod')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>{{ @trans('home.industial_park_ms') }}</b></h3>
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
			<div class="eco_simple_services">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 responsive-991-width">
							<div class="eco_heading_style_02">
			                    <h3><b>MEASOD</b></h3>
			                </div>
			                <div class="eco_normal-offers">
			                	<p>{{@trans('home.business_center_ms')}}</p>
			                	<ul class="">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_ms')}}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_ms_tel')}}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_ms_fax')}}</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_ms_time')}}</li>
								</ul>
			                </div>
	                	</div>
	                	<div class="col-md-8 col-sm-12">
	                		<div class="blog_single_page">
								<!--Eco column img -->
									<figure>
										<div class="slider-blog">
											<div class="slide">
												<img src="{{url('extra-images/slider/MS1.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/MS2.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/MS3.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/MS4.jpg')}}" alt="">
											</div>
											
										</div>
									</figure>	
								</div>
	                	</div>
	                	
	                </div>
				</div>
			</div>
			<section>
				<div class="eco_current_blog">
					<div class="container">
						<div class="eco_headings"> 
							<h3>{{ @trans('home.utility') }}</h3>
							<h6></h6>
							<span><i class="icon-nature-2"></i></span>
						</div>
						
						
						<div class="row">
						
	                	<div class="col-md-4 col-sm-12 responsive-devider-50">
	                		<div class="padding-top-services">
		                		<div class="eco_service_cols rtl_service">
									<span><i class="fa fa-bolt"></i></span>
									<div>
										<h4>{{@trans('home.power_supply_h_ms')}}</h4>
										<p>{{@trans('home.power_supply_ms')}}</p>
									</div>
								</div>
								
	                		</div>
	                	</div>
	                	<div class="col-md-4 col-sm-12 responsive-devider-50">
	                		<div class="padding-top-services">
	                			<div class="eco_service_cols rtl_service">
									<span><i class="icon-weather"></i></span>
									<div>
										<h4>{{@trans('home.water_supplies_h_ms')}}</h4>
										<p>{{@trans('home.water_supplies_ms')}}</p>
									</div>
								</div>
	                		</div>
	                	</div>
	                	<div class="col-md-4 col-sm-12 responsive-devider-50">
	                		<div class="padding-top-services">
		                		<div class="eco_service_cols rtl_service">
									<span><i class="fa fa-recycle"></i></span>
									<div>
										<h4>{{@trans('home.water_treatment_h_ms')}}</h4>
										<p>{{@trans('home.water_treatment_ms')}}</p>
									</div>
								</div>
								
	                		</div>
	                	</div>
	                	<div class="col-md-4 col-sm-12 responsive-devider-50">
	                		<div class="padding-top-services">
	                			<div class="eco_service_cols rtl_service">
									<span><i class="fa fa-users"></i></span>
									<div>
										<h4>{{@trans('home.labor_h_ms')}}</h4>
										<p>{{@trans('home.labor_ms')}}</p>
									</div>
								</div>
	                		</div>
	                	</div>	
	                </div>
					</div>
				</div>
			</section>
			

	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9807905947537!2d98.57557761435957!3d16.777631288446674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dda22c80620181%3A0xff6dd3e0da2aef6!2z4Liq4Lin4LiZ4Lit4Li44LiV4Liq4Lir4Liy4LiB4Lij4Lij4Lih4LmA4LiE4Lij4Li34Lit4Liq4Lir4Lie4Lix4LiS4LiZ4LmMIOC5geC4oeC5iOC4quC4reC4lA!5e0!3m2!1sen!2sth!4v1478145149541" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
		
				
				
		</div>
		<!--Eco content ends-->
@endsection