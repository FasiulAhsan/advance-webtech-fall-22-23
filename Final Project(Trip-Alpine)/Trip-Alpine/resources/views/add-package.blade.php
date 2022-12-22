<!-- Header -->
@include('layouts.header')

<body>


	<!-- Navbar -->
    @include('layouts.logednavbar')


	<div class="hero">
		<div class="container" >
            
			<div class="row align-items-center">
                
				<div class="">
                    <h3>Add Tour Package</h3><hr>

                  
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
              


                    <form action="{{url('save-package')}}" method="post">
                    @csrf

                    <div class="md-3">
                        <label class="form-lable">Place</label>
                        <input type="text" class="form-control" name="place" placeholder="Enter Place Name" value="{{old('place')}}">
                        @error('place')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="md-3">
                        <label class="form-lable">Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter Place Description" value="{{old('description')}}"> </textarea>
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <input type="text" name="user_id" value="{{ Session()->get('loginId')}}" hidden>

                    <div class="md-3">
                        <label class="form-lable">Day</label>
                        <input type="text" class="form-control" name="day" placeholder="How Many Days" value="{{old('day')}}"">
                        @error('day')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="md-3">
                        <label class="form-lable">Facilities</label>
                        <input type="text" class="form-control" name="facilities" placeholder="Enter Facilities" value="{{old('facilities')}}">
                        @error('facilities')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lable">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{old('price')}}">
                        @error('price')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lable">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}"">
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
	</div>


	<!-- Footer -->
    @include('layouts.footer')

</body>

</html>
