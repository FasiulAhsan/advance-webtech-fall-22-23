<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Log In</title>
</head>
<body>
    
    <div class="cotainer">
        <div class="row">
            <div class="col-md-5 col-md-offset-4" style="margin-top:20px;">
                <h2>Log In</h2><hr>

                <form action="{{route('login-user')}}" method="post">
                    @if (Session::has('success'))
                    <div class="alert success">{{Session::get('success')}}</div>  
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert danger">{{Session::get('fail')}}</div>  
                    @endif
                    
                    {{ csrf_field() }}
                  
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{old('email')}}">
                        <span class="text danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value="">
                        <span class="text danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Log In</button>
                    </div><br>
                    <a href="registration">New User::Register Here</a>

                </form>

            </div>

        </div>

    </div>
</body>

</html>