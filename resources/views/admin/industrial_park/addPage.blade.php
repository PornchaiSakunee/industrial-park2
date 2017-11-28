@extends('main.industrial_park.admin.layouts')

@section('title','News')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                	<?php 
                	$lang = isset($_GET['lang']) ? $_GET['lang'] : ""; 
                	$id_news = isset($_GET['id_news']) ? $_GET['id_news'] : "";
                	$lang_th =  $lang=='TH' ? "checked" : "";
                	$lang_en =  $lang=='EN' ? "checked" : "";
                	?>
                  <h2>{{ @trans('home.add') }} {{ @trans('home.news') }} & {{ @trans('home.events') }}  </h2>
                  <div class="nav navbar-right panel_toolbox">
                   <button type="submit" onclick="form_page_submit()" class="btn btn-success">Save</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form id="form_page" method="post" action="{{url('insertPage')}}" enctype="multipart/form-data" data-parsley-validate>
                  	{{ csrf_field() }}
                      <input name="id_news" type="hidden" value="{{$id_news}}">
                      <label for="fullname">{{ @trans('home.subject') }} * :</label>
                      <input type="text" id="subject" class="form-control" name="subject" required />
					   
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
                      <!--
					  @if($id_news=="")
                      <label for="fullname">{{ @trans('home.logo') }} * :</label>
                     
                       <input type="file" id="logo" class="form-control" name="logo[]" multiple required />
                       @endif
                      -->

  
                   <br>

                   <label for="fullname">{{ @trans('home.story') }} * :</label>
                    <textarea name="story" id="story" cols="110" rows="20"  ></textarea>
                    @php 
                    if($id_news==""){
						$folName = strtotime(date('Y-m-d H:i:s')).rand(11111, 99999);
						mkdir('images/news/'.$folName, 0777);
					}else{
						$folName = folder_img($id_news);
					}
					

                    @endphp
                   <input type="hidden" name="new_folder" id="new_folder" value="{{$folName}}">
                   </form>
                 
                </div>
              </div>
            </div>
<!-- upload file -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Photo Slider</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                  	 
                  	 <form action="{{url('imgUpload')}}" class="dropzone" id="my-dropzone" enctype="multipart/form-data" method="post">
					    {{ csrf_field() }}
					
                   <input type="hidden" name="new_folder" id="new_folder" value="{{$folName}}">
					</form>
                  </div>

                  <div align="right">
                    <br>
                  	<button type="submit" onclick="form_page_submit()" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>


@endsection