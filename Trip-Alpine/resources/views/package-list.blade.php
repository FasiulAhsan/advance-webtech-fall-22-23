<!-- Header -->
@include('layouts.header')

<body>


	<!-- Navbar -->
    @include('layouts.logednavbar')


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="">
                    <h3>Tour Package List</h3><hr>
                    
                    <div style="margin-right:10% ; float:right">
                         <a href="{{url('add-package')}}" class="btn btn-primary">Add Tour Package</a>
                         <br>
                    </div>
                    @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif


                    <table class="table">
                        <thead>
                            <tr>
                            <th>Serial No</th>
                            <th>Place</th>
                            <th>Description</th>
                            <th>Day</th>
                            <th>Facilities</th>
                            <th>Price</th>
                            <th>Phone</th>
                            <th>Action</th>
                            </tr>
                        
                        </thead>

                         <tbody>
                            @php
                                $i = 1;
                            @endphp
                             @foreach ($data as $pack)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$pack->place}}</td>
                                <td>{{$pack->description}}</td>
                                <td>{{$pack->day}}</td>
                                <td>{{$pack->facilities}}</td>
                                <td>{{$pack->price}}</td>
                                <td>{{$pack->phone}}</td>
                                <td>
                                <a href="{{url('edit-package/' .$pack->id)}}" class="btn btn-primary">Edit</a>

                                <a href="{{url('delete-package/' .$pack->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            
                </div>
				
			</div>
		</div>
	</div>


	<!-- Footer -->
    @include('layouts.footer')

</body>

</html>
