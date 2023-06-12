
<!DOCTYPE html>
<html>

<head>
<title>PcHub</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/style1.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="{{asset('images/5.png')}}" alt="">PcHub</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="{{route('password.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{$request->route('token')}}" />
					<input  type="text" name="email" placeholder="email..." value="{{$request->email}}" required/>
                    @error('email')
                        <span style="color: crimson">
                          <strong>
                            {{$message}}
                          </strong>
                        </span>
                    @enderror
                    <input type="password" name="password" class="padding" placeholder="Password" required=""/>
                    @error('password')
                    <span style="color: crimson">
                        <strong>
                            {{$message}}
                          </strong>
                    </span>
                @enderror
                <input type="password" name="password_confirmation" class="padding" placeholder="Password Confirmation" required/>
                    <br>
                    <br>
                    <br>
					<input type="submit" value="Update">
				</form>
                <br> 
            <a style="color: aqua ; text-decoration: underline ;" href="{{route('register')}}">Create Account !!</a>    
			</div>
            
		</div>
	</div>
</body>
</html>