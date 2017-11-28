<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('main.industrial_park.admin.css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{'spiadm'}}" class="site_title"><i class="fa fa-paw"></i> <span>Control Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info 
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
             /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  @if(Auth::user()->permission == 2)
                  <li><a><i class="fa fa-home"></i> ผูู้แลระบบ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('user')}}">สมาชิก</a></li>
                      <li><a href="{{url('user_add')}}">เพิ่มสมาชิก</a></li>
                      <li><a href="{{url('menuAdd')}}">เมนู</a></li>
                      
                    </ul>
                  </li>
                  @endif
                  
                  <li>
                    <a >
                      <i class="fa fa-home"></i> {{ @trans('home.news') }} & {{ @trans('home.events') }}  
                      <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                        <li>
                          <a href="{{url('add_news')}}">{{ @trans('home.add') }}</a>
                        </li>
                        <li>
                          <a href="{{url('news/1')}}">
                          {{ @trans('home.list')." ".@trans('home.news') }}</a> 
                        </li>
                        <li>
                          <a href="{{url('news/2')}}">
                          {{ @trans('home.list')." ".@trans('home.events') }}
                        </a>
                        </li>
                     
                      </ul>
                    
                      
                  </li>
                  <li>
                    <a><i class="fa fa-home"></i> จัดการหน้าเว็บ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('listPage')}}">รายการหน้าเว็บ</a></li>
                      <li><a type="submit" href="{{url('addPage')}}">เพิ่ม</a></li>
                      
                    </ul>
                  
                  </li>
                  <li>
                    
                  </li>
                  <li>
                    <a href="{{URL::route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                  </li>
                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons 
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
             /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('main.industrial_park.admin.script')
	
  </body>
</html>
