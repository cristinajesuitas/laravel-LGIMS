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
			
			<div class="card-body">
					<form action="/search" method="GET" role="search">
						@csrf
						<div class="input-group">
							<input type="text" class="form-control" name="q" 
            placeholder="Search users">
								<button type="button" class="btn btn-info">Search              
								</button>
       
						</div>
					</form>
					
					<div class="form-group">
						<label for="lastname">Barangay:</label>
							<div class="input-group">
								<input type="text" class="form-control" name="q" placeholder="Search barangay">
						
								<button type="button" class="btn btn-info">Search              
								</button>
							</div>
							
				@if(isset($details))
					 <p> The Search results for your query <b> {{ $query }} </b> are :</p>
						<table class="table table-striped">
							<thead>
								<tr>
								  <th>Barangay</th>
								  <th>City/Municipal</th>
								  <th>Province</th>
								  <th>Region</th>
								</tr>
							</thead>
							<tbody>
								@foreach($details as $geocode)
								
									<tr>
									<td>{{$geocode->barangay}}</td>
									<td>{{$geocode->municipal}}</td>
									<td>{{$user->province}}</td>
									<td>{{$user->region}}</td>
									
									</tr>
								@endforeach
							</tbody>
						</table>
						@elseif(isset($message))
						<p>{{$message}}</p>
					@endif
					
					

		<div class="row mt-5">
			<div class="col-sm-8 offset-sm-2">
				<form action="{{route('lguprofiles.store')}}" method = "post">
					@csrf
					
					
            <div class="form-group">
              <label for="lastname">Sitios in Barangay:</label>
              <input type="text" name = "sitios_of_bgy" id = "sitios_of_bgy" class="form-control">
            </div>
            <div class="form-group">
              <label for="department">Barangay Classification :</label>
			  <select class="form-control" id = "classification" name = "classification">
										<option>Select Barangay Classification</option>
										<option>Urban</option>
										<option>Rural</option>
									</select>
           </div>
            <div class="form-group">
              <label for="phone">Land Area:</label>
              <input type="text" name = "landarea" id = "landarea" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Indigenous Group:</label>
              <input type="text" name = "indigenous_group" id = "indigenous_group" class="form-control">
            </div>
			<div class="form-group">Address:
              <label for="phone">Unit #:</label>
              <input type="text" name = "unitNo" id = "unitNo" class="form-control">
			 </div>
			<div class="form-group">
              <label for="phone">Floor #:</label>
              <input type="text" name = "floorNo" id = "floorNo" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Phase #:</label>
              <input type="text" name = "phaseNo" id = "phaseNo" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Block #:</label>
              <input type="text" name = "blockNo" id = "blockNo" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Lot #:</label>
              <input type="text" name = "lotNo" id = "lotNo" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">House #:</label>
              <input type="text" name = "houseno" id = "houseno" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Street Name:</label>
              <input type="text" name = "street" id = "street" class="form-control">
            </div>
			<div class="form-group">
              <label for="phone">Sitio Name:</label>
              <input type="text" name = "sitio" id = "sitio" class="form-control">
            </div>
			<div class="form-group">
				<form action="" method="post"  enctype="multipart/form-data">
				@csrf
					<label>Upload Municipal Logo:</label>
						<input type="file" name="file" id="munLogo">
				</form>
			</div>	
			<div class="form-group">
				<form action="" method="post"  enctype="multipart/form-data">
				@csrf
					<label>Upload Barangay Logo:</label>
						<input type="file" name="file" id="bgyLogo">
				</form>
			</div>	
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection