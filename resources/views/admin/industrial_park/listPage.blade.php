@extends('main.industrial_park.admin.layouts')

@section('title','News')

@section('content')


 <meta name="_token" content="{{ csrf_token() }}"/>

<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>
                  
                    {{ @trans('home.list')." ".@trans('home.news') }}
                 
                   
                  </h2>
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
                   <table class="table table-striped">
                    <thead>
                      <tr>
                        <th width="5%">#</th>
                        <th width="5%">Link</th>
                        <th width="30%">หัวเรื่อง</th>
                        <th width="20%">วันที่เขียน</th>
                        <th width="5%">ไทย</th>
                        <th width="5%">อังกฤษ</th>
                        <th style="text-align: center;" width="30%">จัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                       $no = 0 ;
                      @endphp
                      @foreach($news AS $val_news)
                      @php
                       $no++ ;
                      @endphp
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{'action/'.$val_news->id_news}}</td>
                        <td>{{$val_news->subject}}</td>
                        <td>{{$val_news->created_at}}</td>
                        <td>
                        	 @php
								$l = $val_news->lang == 'TH' ? 'EN' : 'TH' ;
								$l_th = $val_news->lang=='TH' ? 'green' : '';
								$l_en = $val_news->lang=='EN' ? 'green' : '';
		                     @endphp
                        	 @if(check_lang_th($val_news->id_news_sub)==0)
                        	    <form action="{{Route('addPage')}}" method="get" style="float: right;">
		                         {{ csrf_field() }}
		                          <input name="id_news" type="hidden" value="{{$val_news->id_news}}">
		                          <input name="lang" type="hidden" value="{{$l}}">

		                          <button class="btn btn-success" type="submit">
		                          	<i class="fa fa-plus"  aria-hidden="true"></i>
		                          </button>
		                        </form>
								
							 @else
							    <i class="fa fa-check fa-2x" style=" color: {{$l_th}};"  aria-hidden="true"></i>	
                        	 @endif
                        </td>
                        <td>
                        	 @if(check_lang_EN($val_news->id_news_sub)==0) 
                        	 	<form action="{{Route('addPage')}}" method="get" style="float: right;">
		                         {{ csrf_field() }}
		                          <input name="id_news" type="hidden" value="{{$val_news->id_news}}">
		                          
								  <input name="lang" type="hidden" value="{{$l}}">
		                          <button class="btn btn-success" type="submit">
		                          	<i class="fa fa-plus" aria-hidden="true"></i>
		                          </button>
		                        </form>
							 @else
							    <i class="fa fa-check fa-2x" style="color: {{$l_en}};"  aria-hidden="true"></i>	
                        	 @endif
                        </td>
                        <td>
                        
                        <form action="{{Route('news_del')}}" method="post" onsubmit="return confirm('{{@trans('home.confirm_del')}}')" style="float: right;">
                         {{ csrf_field() }}
                          <input name="id_news" type="hidden" value="{{$val_news->id_news}}">
                           <input name="d_status_news" type="hidden" value="{{$val_news->status_news}}">
                           
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <form action="{{Route('editPage')}}" method="post" style="float: right;">
                         {{ csrf_field() }}
                          <input name="id_news" type="hidden" value="{{$val_news->id_news}}">

                          <button class="btn btn-success" type="submit">Edit</button>
                        </form>
                       
                        <a href="{{url('action-view/'.$val_news->id_news)}}" class="btn btn-info" role="button" target="_blank" style="float: right;">View</a>
                        
                    
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


@endsection