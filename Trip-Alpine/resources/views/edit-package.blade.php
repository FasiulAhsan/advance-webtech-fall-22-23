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
                <h3>Edit Tour Package</h3><hr>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                <form action="{{url('update-package')}}" method="post">
                @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">

                <div class="md-3">
                    <label class="form-lable">Place</label>
                    <input type="text" class="form-control" name="place" placeholder="Enter Place Name" value="{{$data->place}}">
                    @error('place')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-lable">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Place Description" value="{{$data->description}}"> </textarea>
                    @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-lable">Day</label>
                    <input type="text" class="form-control" name="day" placeholder="How Many Days" value="{{$data->day}}"">
                    @error('day')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="md-3">
                    <label class="form-lable">Facilities</label>
                    <input type="text" class="form-control" name="facilities" placeholder="Enter Facilities" value="{{$data->facilities}}">
                    @error('facilities')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-lable">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{$data->price}}">
                    @error('price')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-lable">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$data->phone}}"">
                    @error('phone')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <br>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('package-list')}}" class="btn btn-danger">Back</a>

              
                </form>
            </div>
        </div>
    </div>

</body>
</html>


	
		
