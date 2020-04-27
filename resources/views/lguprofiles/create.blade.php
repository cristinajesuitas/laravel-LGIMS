@extends ('layouts.app')
@section('title','Setup LGU Profile')
@section('content')

<div class="container">
	<div class="col mb-4">
		<div class="card">
			<div class="card-header">
			
				<h4>Setup LGU Profile</br></h4>
				
					<h6>Instructions: All fields are required.  If not applicable, please indicate as "N/A". </h6>
					
			</div>
		
			<form action="{{ route('lguprofiles.store') }}" method="POST" role="store">
							@csrf
				<div class="form-group">
				
					@include('includes.error')
				
					<label for="lastname">Barangay:</label>
					
				</div>
				
					<div class="input-group">
						<select name="barangay" class="form-control" id="barangay">
							<option value="">Select Barangay</option>
								
								@foreach ($lguprofiles as $lguprofile)
								
							<option value="{{ $geocode }}">{{ $geocode }}</option>
								@endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label for="district">Congressional District:</label>
							<input type="text" name = "district" id = "district" class="form-control">
					</div>
							
					<div class="form-group">
						<label for="sitios_of_bgy">Sitios in Barangay:</label>
							<input type="text" name = "sitios_of_bgy" id = "sitios_of_bgy" class="form-control">
					</div>
							
							<div class="form-group">
								<label for="classification">Barangay Classification :</label>
									<select class="form-control" id = "classification" name = "classification">
										<option>Select Barangay Classification</option>
										<option value="Urban">Urban</option>
										<option value="Rural">Rural</option>
									</select>
						   
							<div class="form-group">
							  <label for="phone">Land Area in Hectares:</label>
							  <input type="text" name = "landarea" id = "landarea" class="form-control">
							</div>
							
							<div class="form-group">
							  <label for="phone">Indigenous Group:</label>
							  <input type="text" name = "indigenous_group" id = "indigenous_group" class="form-control">
							</div>
														
								
							
            <button type = "submit" class = "btn btn-success">Submit</button>
				</div>	
			
			</form>
		</div>
	</div>
</div>	
       

@endsection
	
	
				