@extends('main.industrial_park.admin.layouts')

@section('title','User')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    	 	<div class="x_panel">
                <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <div class="nav navbar-right panel_toolbox">
                       <a class="btn btn-success" href="{{'user_add'}}">เพิ่ม</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
					
					<table id="datatable" class="table table-striped table-bordered">
	                    <thead>
	                        <tr>
	                          <th>ID</th>
	                          <th>Name</th>
	                          <th>E-mail</th>
	                          <th>สถานะ</th>
	                          <th>สิทธิ์</th>
	                          
	                        </tr>
	                    </thead>


	                    <tbody>
	                    	@foreach ($users as $user)
	                        <tr>
	                          <td>{{ $user->id}}</td>
	                          <td>{{ $user->name}}</td>
	                          <td>{{ $user->email}}</td>
	                          <td>
	                          	@if($user->status == 1)
									<span class="label label-success">ใช้งานอยู่</span>
	                          	@else
								    <span class="label label-danger">ยกเลิก</span>
								@endif


	                          	</td>
	                          <td>{{ $user->permission}}</td>
	                          
	                        </tr>
	                       @endforeach 
	                    </tbody>
	                </table>
                </div>
            </div>      
    </div>
</div>    
@endsection