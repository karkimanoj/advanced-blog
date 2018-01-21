@extends('layouts.manage')

@section('content')
	<div class="main-container">

		<div class="row">
			<div class="col-md-4">
				<h1>Users</h1>
			</div>
			<div class="col-md-4 col-md-offset-4 ">
				<a href="{{ route('users.edit', $user->id) }}" class="btn  btn-primary pull-right"> Edit user</a>
			</div>
		</div> <!--end of ro-->

		<div class="row">
			<div class="col-md-8  m-t-20">
				<div class="panel panel-default">
				  <div class="panel-body">
						<p>
							<label>Name</label>
							<span>{{$user->name}}</span>
						</p>
						<p>
							<label>Email</label>
							<span>{{$user->email}}</span>
						</p>
				  </div>
				</div>
				
			</div>
		</div> <!--end of ro-->

	</div>	
@endsection

