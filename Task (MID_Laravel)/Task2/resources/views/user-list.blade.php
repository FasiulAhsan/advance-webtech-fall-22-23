<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>User List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>User List</h3><hr>

                @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>
                                        <a href="{{url('edit-user/'.$user->id)}}" class="btn btn-primary">Edit</a>

                                        <a href="{{url('delete-user/'.$user->id)}}" class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>



            </div>
        </div>
    </div>
</body>
</html>