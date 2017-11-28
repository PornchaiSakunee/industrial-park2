@extends('main.industrial_park.layouts')

@section('title','Industial Park Sriracha')

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
			<div class="eco_simple_services">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 responsive-991-width">
							<div class="eco_heading_style_02">
			                    <h3><b>Sriracha</b></h3>
			                </div>
			                <div class="eco_normal-offers">
			                	<p>{{@trans('home.business_center')}}</p>
			                	<ul class="">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_sr')}}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_sr_tel')}}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_sr_fax')}}</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_sr_time')}}</li>
								</ul>
			                </div>
	                	</div>
	                	<div class="masonry-item col-md-8 col-sm-12 ">
	                		
							<video width="100%" controls autoplay controlsList="nodownload">
							  <source src="{{url('video/saha_sr.mp4')}}" type="video/mp4">
							  
							  Your browser does not support HTML5 video.
							</video>			
						
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
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr02.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.power_supply_h')}}
										</h5>
										
										<p>{{@trans('home.power_supply')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr04.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.water_supplies_h')}}
										</h5>
										
										<p>{{@trans('home.water_supplies')}}</p>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr01.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.water_treatment_h')}}
										</h5>
										
										<p>{{@trans('home.water_treatment')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr05.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.reservoir_h')}}
										</h5>
										<small></small>
										<p>{{@trans('home.reservoir')}}</p>
										
									</div>
								</div>

							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr06.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
									   {{@trans('home.trade_exhibition_center_h')}}
										</h5>
										
										<p>{{@trans('home.trade_exhibition_center')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/park-sr03.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.brahma_h')}}
										</h5>
										<small></small>
										<p>{{@trans('home.brahma')}}</p>
										
									</div>
								</div>

							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section>
			<div class="row">
				<div class="col-md-12 col-sm-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.110865985326!2d100.97338481428534!3d13.092159615764992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b86c0496d5b9%3A0x5254b99c91fa6704!2sSahaphat+Industry!5e0!3m2!1sen!2sth!4v1448331551142" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>	
			</section>	
			<!--
			<div class="eco_donation_recycling">
				<div class="container">
					<div class="eco_donation-caption">
						<div class="eco_headings white-color"> 
							<h3>START donation for recycling</h3>	
						</div>
						<a href="#" class="logo"><img src="images/coming_soon_logo.png" alt=""></a>
						<p>Donec placerat mi et tortor bibendum, at accumsan nunc accumsan. Vivamus sed nisl sit amet ex convallis imperdiet. Ut eget egestas libero.</p>
						<a href="#" class="mediem_btn_02">donate</a>
					</div>
				</div>
			</div>
		-->
			<!--
			<section>
				<div class="container">
					<div class="eco_our_sponsors">
						<div class="eco_headings">
							<h3><b>our</b> sponsors</h3>
							<h6>Promote Your Environment</h6>
							<span><i class="icon-nature-2"></i></span>
						</div>
						<div class="eco-sponsors_logo promoted-slider">
							<div class="item"><a href="#"><img src="images/sponsors_img01.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img02.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img03.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img04.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img05.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img06.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img01.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img02.jpg" alt=""></a></div>
							<div class="item"><a href="#"><img src="images/sponsors_img03.jpg" alt=""></a></div>
						</div>
					</div>
				</div>	
			</section>	
		-->
				
		</div>
		<!--Eco content ends-->
@endsection