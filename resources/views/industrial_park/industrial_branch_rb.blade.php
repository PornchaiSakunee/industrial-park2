@extends('main.industrial_park.layouts')

@section('title','Industial Park Ratchaburi')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>{{ @trans('home.industial_park_rb') }}</b></h3>
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
			                    <h3><b>Ratchaburi</b></h3>
			                </div>
			                <div class="eco_normal-offers">
			                	<p>{{@trans('home.business_center_rb')}}</p>
			                	<ul class="">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_rb')}}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_rb_tel')}}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_rb_fax')}}</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{@trans('home.contact_rb_time')}}</li>
								</ul>
			                </div>
	                	</div>
	                	<div class="col-md-8 col-sm-6 responsive-devider-50">
	                		
	                		<img width="100%" src="{{url('images/mp_rb2015_2.jpg')}}">


	                		<!--Eco column img
	                			<div class="blog_single_page">
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
										</div>
									</figure>
								</div>		
									-->
	                	</div>
	                	
	                </div>
				</div>
			</div>
			

	
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15517.641432513925!2d99.671847!3d13.51039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6bc77438448d141!2z4Liq4Lin4LiZ4Lit4Li44LiV4Liq4Liy4Lir4LiB4Lij4Lij4Lih4LmA4LiE4Lij4Li34Lit4Liq4Lir4Lie4Lix4LiS4LiZ4LmMLeC4o-C4suC4iuC4muC4uOC4o-C4tQ!5e0!3m2!1sen!2sth!4v1459481554442" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
		
				
				
		</div>
		<!--Eco content ends-->
@endsection