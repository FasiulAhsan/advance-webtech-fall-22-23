
<!-- Header -->
@include('layouts.header')

<body>


	<!-- Navbar -->
    @include('layouts.logednavbar')


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="">
                    <h3>Welcome to Dashboard</h3><hr>
                    <h1> this is id     {{  Session()->get('loginId')}}</h1>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>NID</th>
                            <th>Email</th>
                            <th>Agency Name</th>
                            <th>Agency Code</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->nid}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->agency_name}}</td>
                                <td>{{$data->agency_code}}</td>
                                <td><a href="#">update</a></td>
                            </tr>
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
