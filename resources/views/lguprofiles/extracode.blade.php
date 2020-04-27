
LGU Profiles - extra codes
<!--	
	</div>
						   <p class="font-weight-bold">Address:</p>
							<div class="form-group">
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
								<label>Upload Municipal Logo:</label>
								<input type="file" name="file" id="munLogo">
							</div>	
							
							<div class="form-group">
								<label>Upload Barangay Logo:</label>
								<input type="file" name="file" id="bgyLogo">
							</div>
-->
			
			<div class="card-body">
				<div class="row mt-5">
					<div class="col-sm-8 offset-sm-2">
						<form action="/search" method="POST" role="search">
							@csrf
						
							<div class="form-group">
								<label for="lastname">Barangay:</label></div>
								
								<div class="input-group">
									<select name="barangay" class="form-control" id="barangay">;
										<option value="">Select Barangay</option>
											@foreach ($lguprofile_details as $lguprofile)
										{{ $lguprofile->$geocode->barangay }}
												
											@endforeach
									</select>
								</div>
						
	
							

								<?php
							/*
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
						<button type="button" class="btn btn-info">Search              
								</button>
					@endif
					
					

		
				<form action="{{route('lguprofiles.store')}}" method = "post">
					@csrf
	*/
								?>			