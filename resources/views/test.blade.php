<!DOCTYPE html>
<html>
<head>
	<title>test vue</title>
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app2">
	<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Chat</div>

                    <div class="panel-body">
                        <ul>
                            <li v-for="msg in messages">
                            @{{ msg.role.name }} @{{ msg.role.description }} </li>
                        </ul>

                    
                       
                    </div>
                </div>
            </div>
        </div>

</div>

    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


