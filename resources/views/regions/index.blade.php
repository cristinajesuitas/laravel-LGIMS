@extends ('layouts.app')
@section('title','Regions')

@section('content')

<div class="container">
	
	@include('pscg.psgcNav')

	<div class="container" sytle="padding-top:100px">
						
		hello world			
	
		
												
					<table class="table table-striped">
					
						<thead class="thead-dark">
						
							<tr>
							  <th>ID</th>
							  <th>Region</th>
							  <th>PSG Code</th>
							  <th>Action</th>
							</tr>
						
						</thead>
						
						<tbody>
						
							@foreach($regions as $region)
							
							<tr class = "text-center">
								<td>{{ $region->id }}</td>
								<td>{{ $region->name }}</td>
								<td>{{ $region->psgCode }}</td>
								<td><a href="{{route('geocodes.edit',$geocode['id'])}}" class = "btn btn-info">Edit</a>
								<a href="{{route('geocodes.destroy',$geocode['id'])}}" class = "btn btn-danger">Delete</a>
							</tr>
						@endforeach
						</tbody>
					</table>
				
				</div>
	</div
</div>
				
@endsection