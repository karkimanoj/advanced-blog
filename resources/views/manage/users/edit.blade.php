@extends('layouts.manage')

@section('content')
<div class="main-container">
    <div class="row ">
        <div class="col-md-6 col-md-offset-3  ">
        	<h2><center>Edit User</center></h2>
              <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{route('users.update', $user->id)}} ">
                                {{method_field('PUT')}}
                                {{csrf_field()}}

                            <div class="form-group {{ $errors->has('email')?'has-error':'' }} mtop-5">
                                <label >Name</label>
                                <input type="text" name="name"  class="form-control" value="{{$user->name}}" required maxlength="100">
                               
                            </div>

                            <div class="form-group {{ $errors->has('email')?'has-error':'' }} mtop-5">
                                <label >Email address</label>
                                <input type="email" name="email"  class="form-control" value="{{$user->email}}" required maxlength="100">
                               
                            </div>

                            <div class="form-group " >
                                 <div class="radio">
                                  <label><input type="radio" name="passedit_radio" value="keep"  checked >Do not change password</label>
                                </div>

                                <div class="radio">
                                  <label><input type="radio" name="passedit_radio"  value="auto" >Auto generate Password</label>
                                </div>
                                
                                <div class="radio">
                                  <label><input type="radio"  name="passedit_radio"  value="manual" >Manuall Paaword</label>
                                </div>
                            </div>


                            <div class="form-group mtop-5{{ $errors->has('password')?'has-error':'' }} ">
                                <label >Password</label>
                                <input type="password" name="password" id="manage_password" disabled class="form-control" required minlength="8" >
                               
                            </div>

                            
                            <div class="form-group mtop-5">
                                <input type="submit" name="update" class="btn btn-primary btn-block">
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

                var radio_value=$("input[name=passedit_radio]:checked").val();
                //alert(radio_value);
				if(radio_value=='keep' || radio_value=='auto')
				   $('#manage_password').prop('disabled', true);
			    else  
				  $('#manage_password').prop('disabled', false);
			}

			$('input[name=passedit_radio]').click( function(){
				check_checkbox();
				});	

			});	
	</script>
@endsection