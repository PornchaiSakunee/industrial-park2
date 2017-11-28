@extends('main.industrial_park.admin.layouts')

@section('title','News')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>{{ @trans('home.add') }} {{ @trans('home.news') }} & {{ @trans('home.events') }}  </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <?php 
                  $lang = $news[0]->lang; 
                  //$id_news = isset($_GET['id_news']) ? $_GET['id_news'] : "";
                  $lang_th =  $lang=='TH' ? "checked" : "";
                  $lang_en =  $lang=='EN' ? "checked" : "";
                  ?>
                  <form id="demo-form" method="post" action="{{url('news_update')}}" enctype="multipart/form-data" data-parsley-validate>
                  	{{ csrf_field() }}

                      <input type="hidden" name="id_news" value="{{$news[0]->id_news}}" name="">
                      <input name="d_logo" type="hidden" value="{{$images[0]->img_name}}">

                      <label for="fullname">{{ @trans('home.subject') }} * :</label>
                      <input type="text" id="subject" class="form-control" name="subject" value="{{$news[0]->subject}}" required />

                      <label>{{ @trans('home.category') }} *:</label>
                      <p>
                        {{ @trans('home.news') }}:
                        <?php 
                        $stn1 = $news[0]->status_news == 1 ? "checked" : "";
                        $stn2 = $news[0]->status_news == 2 ? "checked" : "";
                         ?>
                        <input type="radio" class="flat" name="status_news" id="status_news" value="1" <?php echo $stn1; ?>   /> 
                        {{ @trans('home.events') }}:
                        <input type="radio" class="flat" name="status_news" id="status_events" value="2" <?php echo $stn2; ?>  />
                      </p>
                       <p>
                        @if($lang=='TH' )

                        {{ @trans('home.th') }}:
                        <input type="radio" class="flat" name="lang" id="lang_th" value="TH" {{$lang_th}} /> 

                        @elseif($lang=='EN')
                        {{ @trans('home.en') }}:
            <input type="radio" class="flat" name="lang" id="lang_en" value="EN" {{$lang_en}}/>

                        @elseif($lang!='TH' || $lang!='EN')
                        {{ @trans('home.th') }}:
                        <input type="radio" class="flat" name="lang" id="lang_th" value="TH" checked="" /> 
                        {{ @trans('home.en') }}:
                        <input type="radio" class="flat" name="lang" id="lang_en" value="EN" />
            {{ @trans('home.all_lang') }}:
                        <input type="radio" class="flat" name="lang" id="lang_en" value="all_lang" />
                        @endif
            
                        
                        
            
                      </p>

                      <label for="fullname">{{ @trans('home.logo') }} * :</label>
                      <input type="file" id="logo" class="form-control" name="logo"  />

                   <br>

                   <label for="fullname">{{ @trans('home.story') }} * :</label>
                    <textarea name="story" id="story" cols="110" rows="20" >
                      <?php echo $news[0]->story; ?>
                    </textarea>
                  <div align="right">
                    <br>
                  	<button type="submit" class="btn btn-success">Submit</button>
                  </div>
                   
                  </form>
                </div>
              </div>
            </div>


@endsection