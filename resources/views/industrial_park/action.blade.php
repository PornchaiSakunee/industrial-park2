@extends('main.industrial_park.layouts')

@section('title','Home')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3>{{$data_page[0]->subject}}</h3>
			</div>
			
		</div>
		<!--Eco Template Banner ends-->
@endsection

@section('content')
        
		<!--Eco Template content-->
		<div class="content">
			<section>
				<!--Eco detail starts-->
				<div class="eco_blog_detail">
				<!--Eco container-->
					<div class="container">
						<!--Eco row-->
						<div class="row">
							<!--Eco column-->
							<div class="col-md-12 col-sm-12 responsive-991-width">
								<!--Eco Template section-->									
								<div class="blog_single_page">
									<!--Eco column img-->
									<figure>
										<div class="slider-blog">
											@foreach($img_data AS $vel_img)
											<div class="slide">
												<img src="{{url('images/news/'.$vel_img->img_name)}}" alt="">
											</div>
											@endforeach
										</div>
									</figure>	
										
									<!--Eco column content-->
									<div class="eco_blog_detail_content">
										<!--Eco column content title-->
										<h4 class="eco_event_title">
											{{$data_page[0]->subject}}
										</h4>
										<br>
										<!--Eco column content detail-->
										{!!$data_page[0]->story!!}
										
									</div>
								
								</div>
							</div>
							<!--Eco col md ends-->

						</div>
						<!--Eco row ends-->
					</div>
					<!--Eco container ends-->
				</div>
				<!--Eco detail ends-->
			</section>
		</div>
		<!--Eco content ends-->
@endsection