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
			<div class="padding-70by40">
				<!--Eco blog-->
				<div class="container main-container">
					<div class="row">
						<div class="masonry masonryFlyIn row">
							@php
							$openDir = opendir('images/overview');
      
					        while ($file_name = readdir($openDir)) {
					          
					           
					       
							@endphp
							<div class="masonry-item col-md-4">
								<a href="{{url('images/overview/'.$file_name)}}" data-rel='prettyPhoto' >
								<img src="{{url('images/overview/'.$file_name)}}" alt="">
								</a>
							</div>
							 @php
								}
							 @endphp
						</div>
					</div>
				</div>
				<!--Eco blog ends-->
			</div>
		</div>
		<!--Eco content ends-->
@endsection