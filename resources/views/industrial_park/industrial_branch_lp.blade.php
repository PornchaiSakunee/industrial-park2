@extends('main.industrial_park.layouts')

@section('title','Industial Park Lamphun')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>{{ @trans('home.industial_park_lp') }}</b></h3>
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
			                    <h3><b>LAMPHUN</b></h3>
			                </div>
			                <div class="eco_normal-offers">
			                	<p>{{@trans('home.business_center_lp')}}</p>
			                	<ul class="">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_lp')}}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_lp_tel')}}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_lp_fax')}}</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_lp_time')}}</li>
								</ul>
			                </div>
	                	</div>
	                	<div class="masonry-item col-md-8 col-sm-12 ">
	                		
							<div class="blog_single_page">
									<!--Eco column img-->
								<!--
								<img width="100%" src="{{url('images/mp_lp2015.png')}}">
							-->
							<div class="blog_single_page">
								<!--Eco column img -->
									<figure>
										<div class="slider-blog">
											<div class="slide">
												<img src="{{url('extra-images/slider/L1.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/L2.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/L3.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/L4.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/L5.jpg')}}" alt="">
											</div>
										</div>
									</figure>	
								</div>
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
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_01.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.power_supply_h_lp')}}
										</h5>
										
										<p>{{@trans('home.power_supply_lp')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_06.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.water_supplies_h_lp')}}
										</h5>
										
										<p>{{@trans('home.water_supplies_lp')}}</p>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_03.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.water_treatment_h_lp')}}
										</h5>
										
										<p>{{@trans('home.water_treatment_lp')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_02.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.reservoir_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.reservoir_lp')}}</p>
										
									</div>
								</div>

							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_07.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
									   {{@trans('home.meeting_room_h_lp')}}
										</h5>
										
										<p>{{@trans('home.meeting_room_lp')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_05.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.airport_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.airport_lp')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_04.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.brahma_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.brahma_lp')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_09.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.health_park_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.health_park_lp')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/lam_10.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.driving_range_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.driving_range_lp')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/lp/masci.png')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.iso_h_lp')}}
										</h5>
										<small></small>
										<p>{{@trans('home.iso_lp')}}</p>
										
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.7527490358325!2d99.02437831434939!3d18.540072073417655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dbd2ccc6f86657%3A0x3c55b244dd43cabd!2z4Liq4Lir4Lie4Lix4LiS4LiZ4Liy4Lit4Li04LiZ4LmA4LiV4Lit4Lij4LmM4LmC4Liu4Lil4LiU4Li04LmJ4LiHIOC4quC4suC4guC4suC4peC4s-C4nuC4ueC4mQ!5e0!3m2!1sen!2sth!4v1448331994368" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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