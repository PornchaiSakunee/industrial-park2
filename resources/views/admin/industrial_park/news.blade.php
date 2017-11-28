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
                  <form id="demo-form" method="post" action="{{url('news_insert')}}" enctype="multipart/form-data" data-parsley-validate>
                  	{{ csrf_field() }}
                    <?php 
                    $lang = isset($_GET['lang']) ? $_GET['lang'] : ""; 
                    $id_news = isset($_GET['id_news']) ? $_GET['id_news'] : "";
                    $lang_th =  $lang=='TH' ? "checked" : "";
                    $lang_en =  $lang=='EN' ? "checked" : "";
                    ?>
                    <input name="id_news" type="hidden" value="{{$id_news}}">
                      <label for="fullname">{{ @trans('home.subject') }} * :</label>
                      <input type="text" id="subject" class="form-control" name="subject" required />

                      <label>{{ @trans('home.category') }} *:</label>
                      <p>
                        {{ @trans('home.news') }}:
                        <input type="radio" class="flat" name="status_news" id="status_news" value="1" checked="" required /> 
                        {{ @trans('home.events') }}:
                        <input type="radio" class="flat" name="status_news" id="status_events" value="2" />
                      </p>
                       <label>{{ @trans('home.lang') }} *:</label>
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
                       
                       <input type="file" id="logo" class="form-control" name="logo" required />

                   <br>

                   <label for="fullname">{{ @trans('home.story') }} * :</label>
                    <textarea name="story" id="story" cols="110" rows="20" ></textarea>
                  <div align="right">
                    <br>
                  	<button type="submit" class="btn btn-success">Submit</button>
                  </div>
                   
                  </form>
                </div>
              </div>
            </div>

   
@endsection