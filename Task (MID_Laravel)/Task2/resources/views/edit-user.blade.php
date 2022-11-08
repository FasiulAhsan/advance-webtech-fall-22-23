<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit User</h3><hr>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    
                <form action="{{url('update-user')}}" method="post">
                @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">


                <div class="md-3">
                    <label class="form-lable">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{$data->name}}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-lable">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="md-3">
                    <label class="form-lable">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter Password" value="{{$data->password}}">
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <br>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('user-list')}}" class="btn btn-danger">Back</a>

              
                </form>
            </div>
        </div>
    </div>

</body>
</html>


	
		
