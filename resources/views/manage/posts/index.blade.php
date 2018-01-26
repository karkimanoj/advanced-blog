@extends('layouts.manage')

@section('content')
<div class="main-container">

	<div class="row">
		<div class="col-md-10">
			<div class="page-header">
			   <h1>Posts <small>(create, update and delete posts)</small></h1>
			</div>
		</div>	
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn  btn-primary btn-block m-r-20"> create new user</a>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
		</div>
	</div>

</div>
@endsection