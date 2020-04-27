@extends ('layouts.app')
@section('title','Geocodes Index')

@section('content')

<div class="container">

	<p style="font-size:30px;">Geocodes<p>
		<a href="{{route('geocodes.create')}}" class = "btn btn-info">Add Geocode</a>
		
			
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th>ID</th>
		  <th>PSG Code</th>
          <th>Region</th>
          <th>Province</th>
          <th>Municipal</th>
          <th>Barangay</th>
		  <th>Zip Code</th>
		  <th>Action</th>
        </tr>
		</thead>
        <tbody>
		
            @foreach($geocodes as $geocode)
			
          <tr class = "text-center">
            <td>{{ $geocode->id }}</td>
            <td>{{ $geocode->code }}</td>
            <td>{{ $geocode->region }}</td>
            <td>{{ $geocode->province }}</td>
            <td>{{ $geocode->municipal }}</td>
			<td>{{ $geocode->barangay }}</td>
			<td>{{ $geocode->zipcode }}</td>
			<td><a href="{{route('geocodes.edit',$geocode['id'])}}" class = "btn btn-info">Edit</a>
            <a href="{{route('geocodes.destroy',$geocode['id'])}}" class = "btn btn-danger">Delete</a>
          </tr>
        @endforeach
        </tbody>
    </table>

	
	</div>
		
</div>

	
			
		
	




 
@endsection	