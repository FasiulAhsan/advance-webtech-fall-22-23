
<!-- Header -->
@include('layouts.header')

<body>


	<!-- Navbar -->
    @include('layouts.navbar')


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4 col-md-offset-4">
                    <h2>Registration</h2><hr>
                    <form action="{{route('register-user')}}" method="post">

                        @if(Session::has('success'))
                        <div class="alert alert-sucess">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                        @csrf

                        <! --- Name -- >
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>

                        <! --- Nid -- >
                        <div class="form-group">
                            <label for="nid">NID</label>
                            <input type="text" class="form-control" placeholder="Enter NID Number" name="nid" value="{{old('nid')}}">
                            <span class="text-danger">@error('nid') {{$message}} @enderror</span>
                        </div>

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

                        <! --- Agency Name -- >
                        <div class="form-group">
                            <label for="agency_name">Agency Name</label>
                            <input type="text" class="form-control" placeholder="Enter Agency Name" name="agency_name" value="{{old('agency_name')}}">
                            <span class="text-danger">@error('agency_name') {{$message}} @enderror</span>
                        </div>

                        <! --- Agency Code -- >
                        <div class="form-group">
                            <label for="agency_code">Agency Code</label>
                            <input type="text" class="form-control" placeholder="Enter Agency Code" name="agency_code" value="{{old('agency_code')}}">
                            <span class="text-danger">@error('agency_code') {{$message}} @enderror</span>
                        </div>

                        

                        <div class="form-group">
                            <button class="btn btn-block btn-primary" type="submit">Register</button>

                        </div>

                        <div>
                            <a href="login">Already Registered !! Log In Here</a>
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