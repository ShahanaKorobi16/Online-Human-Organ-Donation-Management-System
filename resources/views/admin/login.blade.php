<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- <style type="text/css" href= "{{url('css/login.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">

<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">
                    {{session()->get('message')}}
                </p>
            @endif
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

	<form action ="{{route('admin.doLogin')}}" method='POST' class="form-signin">
        @csrf
		<h1 class="form-signin-heading text-muted">Admin Login</h1>
		<input type="Email" class="form-control" name="Email" placeholder="Email" required="" autofocus="">
        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
		<input type="password" class="form-control"  name="Password" placeholder="Password" required="">
        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
		<button type="submit" class="btn btn-lg btn-primary btn-block" type="submit">
			Submit
		</button>
	</form>

</div>
</body>
</style>