<!DOCTYPE html>
<html>
<head>
	<title>test vue</title>
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app4">
	<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example notification</div>

                    <div class="panel-body">
                        <ul>
                            
                             <li v-for="msg in messages">
                                <a v-bind:href="msg.url"> @{{ msg.message }} </a>
                               
                            </li>
                        </ul>

                    
                       
                    </div>
                </div>
            </div>
        </div>

</div>

    
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
        var app4 = new Vue({
    el: '#app4',
    data:{
        messages:[],
        
         },

      created (){
        Echo.private('users-notify')
    .notification((notification) => {
        this.messages.push(notification);
       
    });
    }     

   
});

</script>

</body>
</html>


