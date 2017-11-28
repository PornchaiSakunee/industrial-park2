@extends('main.industrial_park.layouts')

@section('title','Home')

@section('slider')
	<!--Eco Template Banner-->
		<div class="eco_banner eco_inner_page_banner">
			<!--Eco Template Banner img-->
			<div class="eco_headings">
				<h3><b>project</b> detail</h3>
			</div>
			<ul class="eco_page_link">
				<li><a href="#">project</a></li>
				<li class="active"><a href="#">project detail</a></li>
			</ul>
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
											<div class="slide">
												<img src="{{url('extra-images/project_images_01.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/project_images_01.jpg')}}" alt="">
											</div>
											<div class="slide">
												<img src="{{url('extra-images/project_images_01.jpg')}}" alt="">
											</div>
										</div>
									</figure>	
										
									<!--Eco column content-->
									<div class="eco_blog_detail_content">
										<!--Eco column content title-->
										<h4 class="eco_event_title">Maecenas rutrum libero acarcu lobortis, tristique</h4>
										<p><a href="#">Eco Energy</a><a href="#">,  Planting,</a><a href="#"> Recycling</a></p>
										<!--Eco column content detail-->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse congue feugiat libero sit amet blandit. Maecenas maximus tempus est, vel laoreet ante dapibus id. Donec orci tortor, dictum a auctor nec, viverra sit amet lacus. Aenean vel ligula varius, varius arcu vitae, tristique augue. Sed placerat vestibulum eros, et lacinia diam imperdiet non. Phasellus risus est, facilisis vel enim a, hendrerit pulvinar sapien. Duis elementum laoreet mauris, ut ultricies magna fermentum in. Nullam porta quam eget est blandit, id auctor odio luctus. Nullam nisi mi, ullamcorper in urna vel, finibus facilisis augue. Morbi fermentum vestibulum tempor.</p>
										<p>Ut id eros non nibh dictum mattis. Donec ut diam id nunc facilisis imperdiet sed non risus. In sit amet purus turpis. Nullam tincidunt, enim quis porttitor vulputate, erat nibh dapibus ante, ac interdum dui ipsum vel erat. Donec aliquet turpis ex, sed tristique mauris dictum et. Sed eu nulla auctor, semper massa et, fermentum dolor. Morbi lacinia augue eu feugiat mollis. Quisque condimentum augue ut tortor eleifend, quis bibendum nunc feugiat. Aliquam dapibus laoreet ex, et lobortis arcu posuere in. Nullam scelerisque, sem eget vehicula hendrerit, leo turpis blandit justo, vel convallis ipsum metus nec diam. Sed quis vulputate enim. Vivamus pulvinar tortor nec neque fringilla, et dapibus quam convallis. Duis et aliquam sem, sed sodales nisi.</p>
										<!--Eco column content blockquote-->
									</div>
									<!--Eco event orgnizer-->
									<div class="eco_picture-blog">
										<!--Eco event_slider nav item-->
										<div class="eco_width_menage">
											<figure>
												<img src="extra-images/project_gallery_sm_img01.jpg" alt="">
											</figure>
										</div>
										<!--Eco event_slider nav item-->
										<div class="eco_width_menage">
											<figure>
												<img src="extra-images/project_gallery_sm_img02.jpg" alt="">
											</figure>
										</div>
										<!--Eco event_slider nav item-->
										<div class="eco_width_menage">
											<figure>
												<img src="extra-images/project_gallery_sm_img03.jpg" alt="">
											</figure>
										</div>
										<!--Eco event_slider nav item-->
										<div class="eco_width_menage">
											<figure>
												<img src="extra-images/project_gallery_sm_img04.jpg" alt="">
											</figure>
										</div>
										<!--Eco event_slider nav ends-->
									</div>
									<div class="eco_nature_captions">
										<h5 class="eco_sm_titles">project gallery</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse congue feugiat libero sit amet blandit. Maecenas maximus tempus est, vel laoreet ante dapibus id. Donec orci tortor, dictum a auctor nec, viverra sit amet lacus. Aenean vel ligula varius, varius arcu vitae, tristique augue. Sed placerat vestibulum eros,tristique augue. Sed placerat vestibulum eros et lacinia diam imperdiet non. Phasellus risus est, facilisis vel enim a, hendrerit pulvinar sapien. Duis elementum laoreet mauris, ut ultricies magna fermentum in. Nullam porta quam eget est blandit, id auctor odio luctus. Nullam nisi mi, ullamcorper in urna vel, finibus facilisis augue.<br><br>Morbi fermentum vestibulum tempor. Ut id eros non nibh dictum mattis. Donec ut diam id nunc facilisis imperdiet sed non risus. In sit amet purus turpis. </p>
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