<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="cotainer">
        <div class="row">
            <div class="col-md-5 col-md-offset-4" style="margin-top:20px;">
                <h2>Welcome to your Dashboard</h2><hr>
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>  
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="logout">Log Out </a></td>
                        </tr>
                    </tbody>
                </table>

              

            </div>

        </div>

    </div>
</body>
</html>