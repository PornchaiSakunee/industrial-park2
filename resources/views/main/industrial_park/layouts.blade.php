<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kodeforest.net/html/eco-friendly/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2017 04:21:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of this page -->
    <title>@yield('title')</title>
	<!--scc-->
    @include('main.industrial_park.css')
</head>

<body>
	<!--eco content wrapper starts-->
	<div class="eco_wrapper"> 
		
		<!--eco Header starts-->
		@include('main.industrial_park.header')
		<!--Header ends-->
		
		<!--Eco Template Banner-->
		@yield('slider')
		
		<!--Eco Template Banner ends-->
			
		<!--Eco Template content-->
		<div class="content">
			@yield('content')
		</div>
		<!--Eco content ends-->
		
		<!--Eco footer starts-->
		@include('main.industrial_park.footer')
		<!--Eco footer ends-->
		
		<div class="kode_form_box">
			<div class="container">
				<div class="kode_form_modal_newsletter">
					<!-- Modal -->
					<div class="modal fade" id="newsletter-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>						 
								 <div class="modal-form">
									<div class="kode_login_social-account">
										<form>
											<div class="eco-login-registration">
												<div class="eco_title_form">
													<h3><b>login</b> for donation</h3>
													<p>Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit nulla or narjusto laoreet onse ctetur adipisci.</p>
												</div>
												<div class="kode-email-account">
													<label>
														<input placeholder="Your Email" type="text">
													</label>
													<label>
														<input placeholder="password" type="text">
													</label>
												</div>
												<div class="kode_checkbox_style login_registor-style">
													<label>
														<input type="checkbox"><span></span><small>Remember</small>
													</label>
												</div>
												<a class="eco-forgot-account" href="#">Forgot Password</a>
												<button class="btn-mediem login_style" type="submit" data-toggle="modal" data-target="#form02">donate now</button>
												<div class="login-user">  
													<p>Not A Member?  <a href="#">Register Now</a></p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--eco content wrapper ends-->
	
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- script -->
	@include('main.industrial_park.script')	
	
  </body>

<!-- Mirrored from kodeforest.net/html/eco-friendly/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2017 04:24:17 GMT -->
</html>