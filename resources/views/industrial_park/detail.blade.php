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
 <style type="text/css">
 	img{
 		width: auto;
 	
 	}
 </style>
		<!--Eco Template content-->
		<div class="content">
			<section>
				<div class="eco_blog_detail">

					<div class="container">
						<div class="row">
						
							<div class="col-md-12 col-sm-12 col-xs-12 responsive-991-width">
								<!--Eco Template section-->									
								<div class="eco_blog_detail_post">
									<figure>
										<img src="{{url('images/news/'.$news[0]->img_name)}}" alt="">
										
									</figure>
									<div class="eco_blog_detail_content">
										<h4>{{$news[0]->subject}}</h4>
										<ul class="eco_viewers_meta">
											<li><a href="#">{{$news[0]->created_at}}</a></li>
											<li><a href="#">{{$news[0]->views}} Views</a></li>
											
										</ul>
										<?php echo $news[0]->story; ?>
										
										
									</div>
								
								</div>		
								<!--Eco Template section ends-->
							</div>

				</div>
			</div>
		</div>
	</section>
		</div>
		<!--Eco content ends-->

@endsection