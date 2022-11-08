<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Form Validation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4" style="margin-top:20px;">
                <H3>Form Validation</H3><hr>
                <form action="{{route('submit-validation')}}" method="post">
                    @csrf

                                             <!-- Name -->
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="">
                        <span class="text-danger"> @error('name'){{$message}} @enderror </span>
                    </div>

                                            <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                        <span class="text-danger"> @error('email'){{$message}} @enderror </span>
                    </div>

                                            <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                        <span class="text-danger"> @error('password'){{$message}} @enderror </span>
                    </div>

                                            <!-- DOB -->
                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Enter Full Name" name="dob" value="">
                        <span class="text-danger"> @error('dob'){{$message}} @enderror </span>
                    </div>

                                            <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="phone" value="">
                        <span class="text-danger"> @error('phone'){{$message}} @enderror </span>
                    </div>

<br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Submit</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>