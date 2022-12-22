
<!-- Header -->
@include('layouts.header')

<body>


	<!-- Navbar -->
    @include('layouts.navbar')


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4 col-md-offset-4">
                    <h2>Log In</h2><hr>
                    <form action="{{route('login-user')}}"  method="post">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-sucess">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                        @csrf

                        <! --- Email -- >
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <! --- Password -- >
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" type="submit">Log In</button>
                        </div>

                        <div>
                            <a href="registration">New User !! Registration Here</a>
                        </div>
                        

                    </form>
                </div>
				
			</div>
		</div>
	</div>


	<!-- Footer -->
    @include('layouts.footer')

</body>

</html>
