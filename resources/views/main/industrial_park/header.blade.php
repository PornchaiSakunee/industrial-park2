<header>
			<!--Header-->
			<div class="kode_eco_navigations">
				<!--container-->
				<div class="container">
					<!--Header top row-->
					<div class="kode_eco-top_bar">
						<!--Header top row logo-->
						<div class="kode_eco_logo">
						<a href="{{url('/')}}">
							<img src="{{ asset('images/eco-logo.png') }}" alt="">
						</a>
						</div>
						<!--Header top row search-->
						<!--
						<div class="kode_eco_search">
							<form class="">
								<div class="kode-search-menu">
					  				<input placeholder="i’m searching for..." type="text" data-toggle="modal" data-target="#search">
					  				<button>
					  					<i class="fa fa-search" aria-hidden="true"></i>
					  				</button>
								</div>
							</form>
							<div id="search" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							     Modal content
							    <div class="modal-content">
							        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>

							      <div class="modal-body">
							        <div class="kode-search-menu">
						  				<input id="find-them12" placeholder="i’m searching for..." type="text">
						  				<button class="search-press"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
							      </div>
							
							    </div>
							  </div>
							</div>

						</div>
                     -->
						<!--Header top row social icons-->
						<div class="kode_eco_social_icons">
							<ul class="social-accounts">
								
								<li><a href="{{url('lang/th')}}"><img style="width: 32px; height: auto;" src="{{url('images/th.png')}}"></a>
								</li>
								<li><a href="{{url('lang/en')}}"><img style="width: 32px; height: auto;" src="{{url('images/en.png')}}"></a>
								</li>
								<li><a  href="{{ route('login')}}"><img style="width: 32px; height: auto;" src="{{url('images/login.png')}}"></a>
								</li>
							</ul>
							<!--Header top row buying items button-->
						</div>
					</div>
					<!--Header top row ends-->

					<!--Header nav row-->
					<div class="kode_navigaion_bar">
						<!--Responsive Menu Start-->
						<div id="kode-responsive-navigation" class="dl-menuwrapper">
							<button class="dl-trigger">Menu</button>
							

							<ul class="dl-menu">
					        	
					            <li class="menu-item">
					                <a href="#">
					                	{{ @trans('home.industial_park') }}
					                </a>
					                <ul class="dl-submenu">
					                	
					                    <li>
					                        <a href="{{url('branch/sr')}}">	
					                         {{ @trans('home.industial_park_sr') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/kb')}}">	
					                         {{ @trans('home.industial_park_kb') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/lp')}}">	
					                         {{ @trans('home.industial_park_lp') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/ms')}}">	
					                         {{ @trans('home.industial_park_ms') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/rb')}}">	
					                         {{ @trans('home.industial_park_rb') }}	
					                        </a>
					                    </li>
					                   
					                    
					                </ul>
					            </li>

					            <li class="menu-item">
					                <a href="#">
					                {{ @trans('home.utility') }}</a>
					            	<ul class="dl-submenu">
					                    <li>
					                        <a href="{{ url('action/2') }}">
					                        {{ @trans('home.commercial') }}
					                    	</a>
					                    </li>
					                    <li>
					                        <a href="{{url('action/1')}}">
					                        {{ @trans('home.power_supply_h') }}
					                    	</a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/4')}}">{{ @trans('home.security') }}
					                        </a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/6')}}">
					                        {{ @trans('home.treatment') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/7')}}">
					                        {{ @trans('home.flood_prevention') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/9')}}">
					                        {{ @trans('home.roads') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/11')}}">
					                        {{ @trans('home.telecommunications') }}
					                    	</a>  
					                    </li>
					                </ul>
					            </li>
					          
					            <li class="menu-item">
					                <a href="#">
					                {{ @trans('home.warehouses') }}</a>
					                 <ul class="dl-submenu">
					                    <li>
					                        <a href="{{url('action/13')}}">
					                        {{ @trans('home.building_type') }}</a> 
					                    </li>
					                    <!--
					                    <li>
					                        <a href="{{url('action/15')}}">
					                        {{ @trans('home.specification') }}
					                        </a> 
					                    </li>
					                	-->
					                    
					                </ul>
					            </li>
					            <li class="menu-item">
					                <a target="_blank" href="http://www.spi.co.th/main.php?action=about&view=history">
					                {{ @trans('home.about_us') }}</a>
					                <!--
					                <ul class="dl-submenu">
					                    <li>
					                        <a href="{{url('overview')}}">
					                        	{{ @trans('home.overview') }}
					                         </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/17')}}">
					                        	{{ @trans('home.history') }}
					                        </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/19')}}">
					                        	{{ @trans('home.code_of_conduct') }}
					                        </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/20')}}">
					                        	{{ @trans('home.vision') }}
					                        </a> 
					                    </li>
					                </ul>
					            -->
					            </li>
					            <li class="menu-item">
					             <a href="{{url('overview')}}">
					                {{ @trans('home.overview') }}
					             </a> 
					            </li>
					            <li class="menu-item">
					              <a href="{{url('news-evente/1')}}">{{ @trans('home.news_events') }}</a>
					                
					            </li>
					        </ul>
						</div>
<!--Responsive Menu END-->

						<!-- Kode navigation starts -->
					 	<nav class="navigation" id="trans-nav">
					        <!--Header nav use simple dropdown "use-dropdown" class in li -->
					        <!--example <li class="use-dropdown"> in <ul> <li> <a href="your link"></a> <li> </ul> <li> you create dropdown-->
					        <ul class="nav-menu">
					        	
					            <li class="use-dropdown">
					                <a href="#">
					                	{{ @trans('home.industial_park') }}
					                </a>
					                <ul class="children sub-menu">
					                	
					                    <li>
					                        <a href="{{url('branch/sr')}}">	
					                         {{ @trans('home.industial_park_sr') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/kb')}}">	
					                         {{ @trans('home.industial_park_kb') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/lp')}}">	
					                         {{ @trans('home.industial_park_lp') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/ms')}}">	
					                         {{ @trans('home.industial_park_ms') }}	
					                        </a>
					                    </li>
					                    <li>
					                        <a href="{{url('branch/rb')}}">	
					                         {{ @trans('home.industial_park_rb') }}	
					                        </a>
					                    </li>
					                   
					                    
					                </ul>
					            </li>

					            <li class="use-dropdown">
					                <a href="#">
					                {{ @trans('home.utility') }}</a>
					            	<ul class="children sub-menu">
					                    <li>
					                        <a href="{{ url('action/2') }}">
					                        {{ @trans('home.commercial') }}
					                    	</a>
					                    </li>
					                    <li>
					                        <a href="{{url('action/1')}}">
					                        {{ @trans('home.power_supply_h') }}
					                    	</a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/4')}}">{{ @trans('home.security') }}
					                        </a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/6')}}">
					                        {{ @trans('home.treatment') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/7')}}">
					                        {{ @trans('home.flood_prevention') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/9')}}">
					                        {{ @trans('home.roads') }}
					                    	</a>  
					                    </li>
					                    <li>
					                        <a href="{{url('action/11')}}">
					                        {{ @trans('home.telecommunications') }}
					                    	</a>  
					                    </li>
					                </ul>
					            </li>
					          
					            <li class="use-dropdown">
					                <a href="#">
					                {{ @trans('home.warehouses') }}</a>
					                 <ul class="children sub-menu">
					                    <li>
					                        <a href="{{url('action/13')}}">
					                        {{ @trans('home.building_type') }}</a> 
					                    </li>
					                    <!--
					                    <li>
					                        <a href="{{url('action/15')}}">
					                        {{ @trans('home.specification') }}
					                        </a> 
					                    </li>
					                	-->
					                    
					                </ul>
					            </li>
					            <li class="use-dropdown">
					                <a target="_blank" href="http://www.spi.co.th/main.php?action=about&view=history">
					                {{ @trans('home.about_us') }}</a>
					                <!--
					                <ul class="children sub-menu">
					                    <li>
					                        <a href="{{url('overview')}}">
					                        	{{ @trans('home.overview') }}
					                         </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/17')}}">
					                        	{{ @trans('home.history') }}
					                        </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/19')}}">
					                        	{{ @trans('home.code_of_conduct') }}
					                        </a> 
					                    </li>
					                    <li>
					                        <a href="{{url('action/20')}}">
					                        	{{ @trans('home.vision') }}
					                        </a> 
					                    </li>
					                </ul>
					            -->
					            </li>
					             <li class="last use-dropdown">
						             <a href="{{url('overview')}}">
						                {{ @trans('home.overview') }}
						             </a> 
					            </li>
					            <li class="last use-dropdown">
					              <a href="{{url('news-evente/1')}}">{{ @trans('home.news_events') }}</a>
					                
					            </li>
					        </ul>
				    	</nav>
				    	
						
					</div>
					<!--Header nav row ends-->
				</div>
			</div>
		</header>