@extends('main.industrial_park.layouts')

@section('title','Industial Park Kabinburi')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>{{ @trans('home.industial_park_kb') }}</b></h3>
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
			                    <h3><b>Kabinburi</b></h3>
			                </div>
			                <div class="eco_normal-offers">
			                	<p>{{@trans('home.business_center_kb')}}</p>
			                	<ul class="">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_kb')}}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_kb_tel')}}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_kb_fax')}}</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_kb_time')}}</li>
								</ul>
			                </div>
	                	</div>
	                	<div class="col-md-8 col-sm-12 ">
	                		
								<!--
								<img width="100%" src="{{url('images/mp_kb2015.png')}}" alt="">
								-->
								<div class="blog_single_page">
								<!--Eco column img -->
									<figure>
										<div class="slider-blog">
											<div class="slide">
												<img src="{{url('extra-images/slider/A1.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/A2.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/A3.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/A4.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/slider/A5.jpg')}}" alt="">
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
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/kabin_pic_01.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.power_supply_h_kb')}}
										</h5>
										
										<p>{{@trans('home.power_supply_kb')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/kabin_pic_05.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.water_supplies_h_kb')}}
										</h5>
										
										<p>{{@trans('home.water_supplies_kb')}}</p>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/kabin_pic_07.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">{{@trans('home.water_treatment_h_kb')}}
										</h5>
										
										<p>{{@trans('home.water_treatment_kb')}}</p>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/kabin_pic_04.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.reservoir_h_kb')}}
										</h5>
										<small></small>
										<p>{{@trans('home.reservoir_kb')}}</p>
										
									</div>
								</div>

							</div>

							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/bran.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.airport_h_kb')}}
										</h5>
										<small></small>
										<p>{{@trans('home.airport_kb')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/kabin_pic_09.jpg')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.incinerator_h_kb')}}
										</h5>
										<small></small>
										<p>{{@trans('home.incinerator_kb')}}</p>
										
									</div>
								</div>

							</div>
							<div class="col-md-6 col-sm-12 responsive-991-width">
								<div class="eco_project_listing_column">
									<figure>
										<img src="{{url('extra-images/kb/masci.png')}}" alt="">
									</figure>
									<div class="eco_listing_caption">
										<h5 class="eco_sm_titles">
											{{@trans('home.iso_h_kb')}}
										</h5>
										<small></small>
										<p>{{@trans('home.iso_kb')}}</p>
										
									</div>
								</div>

							</div>
							
						</div>

					</div>
				</div>
			</section>
		
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61940.22697768526!2d101.69115958756919!3d14.002343268290064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311c5fe541b88d19%3A0x97de72e57957aa24!2sSaha+Pathana+Group+Industrail+Park-Kabinburi!5e0!3m2!1sen!2sth!4v1448331700925" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>
	
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