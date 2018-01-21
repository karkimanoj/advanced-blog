@extends('layouts.manage')

@section('content')
<div class="main-container">
    <div class="row ">
        <div class="col-md-6 col-md-offset-3 mtop-5 ">
        	<h2><center>Create New User</center></h2>
              <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{route('users.store')}} ">
                                {{csrf_field()}}

                            <div class="form-group {{ $errors->has('email')?'has-error':'' }} mtop-5">
                                <label >Name</label>
                                <input type="text" name="name"  class="form-control" required maxlength="100">
                               
                            </div>

                            <div class="form-group {{ $errors->has('email')?'has-error':'' }} mtop-5">
                                <label >Email address</label>
                                <input type="email" name="email"  class="form-control" required maxlength="100">
                               
                            </div>

                            <div class="form-group mtop-5{{ $errors->has('password')?'has-error':'' }} ">
                                <label >Password</label>
                                <input type="password" name="password" id="manage_password" disabled class="form-control" required minlength="8" >
                               
                            </div>

                            <div class="form-group " >
                                <input type="checkbox"  id="checkbox_auto_password"  checked> Auto generate password
                            </div>

                            <div class="form-group mtop-5">
                                <input type="submit" name="create" class="btn btn-primary btn-block">
                        </div>
                           
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){

			function check_checkbox(){
					if($("#checkbox_auto_password").prop("checked"))
					   
					   $('#manage_password').prop('disabled', true);
				    else 
					  $('#manage_password').prop('disabled', false);
			}

			$('#checkbox_auto_password').click( function(){
				check_checkbox();
				});	

			});	
	</script>
@endsection