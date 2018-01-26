@extends('layouts.manage')

@section('content')
<div class="main-container">

	<div class="row">
		<div class="col-md-10">
			<div class="page-header">
			   <h1>Create new post </h1>
			</div>
		</div>	
		<div class="col-md-2">
			<a href="{{ route('posts.index') }}" class="btn  btn-primary btn-block m-r-20"> view all posts</a>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-12 ">
			<div class="row">
				<div class="col-md-8 " >
				    <div class="panel panel-default borderless">
	                    <div class="panel-body">
	                        <form method="POST" action="{{route('users.store')}} ">
	                                {{csrf_field()}}       
                                    <div class="form-group {{ $errors->has('title')?'has-error':'' }} m-t-20">
                                        <input type="text" name="title"  class="form-control" id="title" required placeholder="Post Title" maxlength="255">
                                       
                                    </div>

                                    <div class="form-group m-t-20"> 
                                        <span><i class="fa fa-link m-r-5" aria-hidden="true">
                                        </i>{{url('/blog')}}/<mark  id="slug"> </mark></span>
                                       
                                    </div>

                                    <div class="form-group {{ $errors->has('content')?'has-error':'' }} m-t-40">
                                        <textarea name="content"  class="form-control" required rows="18" placeholder="Compose your masterpiece">
                                        	Compose your masterpiece
                                        </textarea>
                                         @if($errors->has('content'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group " >
                                        <input type="checkbox"  id="checkbox_auto_password"  checked> Auto generate password
                                    </div>
                            </form> 
                        </div> 
                    </div>      
				</div>

				<div class="col-md-3" >
					<!-- widget-->
                    <div class="box box-widget widget-user">
			            <!-- Add the bg color to the header using any of the bg-* classes -->
			            <div class="widget-user-header bg-aqua-active">
				              <h3 class="widget-user-username">Alexander Pierce</h3>
				              <h6 class="widget-user-desc">Founder &amp; CEO</h6>
			            </div>
			            <div class="widget-user-image">
			              <img class="img-circle" src="/images/test-image.jpg" alt="User Avatar">
			            </div>
			            <div class="box-footer">
			              <div class="row" >
			                <div class="col-sm-4 border-right">
			                  <div class="description-block">
			                    <h5 class="description-header">3,200</h5>
			                    <span class="description-text">SALES</span>
			                  </div>
			                  <!-- /.description-block -->
			                </div>
			                <!-- /.col -->
			                <div class="col-sm-4 border-right">
			                  <div class="description-block">
			                    <h5 class="description-header">13,000</h5>
			                    <span class="description-text">FOLLOWERS</span>
			                  </div>
			                  <!-- /.description-block -->
			                </div>
			                <!-- /.col -->
			                <div class="col-sm-4">
			                  <div class="description-block">
			                    <h5 class="description-header">35</h5>
			                    <span class="description-text">PRODUCTS</span>
			                  </div>
			                  <!-- /.description-block -->
			                </div>
			                <!-- /.col -->
			              </div>
			              <!-- /.row -->
			              
			              <div class="row" >
			              	<div class="col-sm-6 ">
			              		<a href="" class="btn btn-primary btn-block btn-sm btn-nobg-color">save draft</a>
			              	</div>
			              	<div class="col-sm-6 ">
			              		<a href="" class="btn btn-primary btn-block btn-sm">publish</a>
			              	</div>
			              </div>

			            </div>
			         </div>

				<!-- widget -->
				</div>

			</div>
		</div>
	</div>

</div>
@endsection

@section('scripts')
<script src="{{ asset('js/speakingurl/speakingurl.min.js') }}"></script>
<script src="{{ asset('js/slugify.min.js') }}"></script>

<script>

$(document).ready(function(){

	    //api_token is for authenticating API
    api_token='{{ Auth::user()->api_token }}';
    host='{{ url('/') }}';
 
  // checking and returning slug for uniqueess
  $("input[name='title']").change(function(){

    slug=$('#slug').text();
    $.ajax({ 
    		type:'GET',
			url: host+'/api/posts/unique',
			data: {
					'api_token' : api_token,
					'slug': slug  
			},
			success: function(response){
				//console.log(response);
				data=JSON.parse(response);
				$('#slug').text(data);
				
			},
			error: function(error_data){
				console.log(error_data);
				//alert('error occured');
			}	
			});
		
		});	

   //generating slug
	$.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
    $('#slug').slugify('#title'); // Type as you slug


}); 

</script>
@endsection