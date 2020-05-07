


									
					<table class="table table-striped table-sm">
					
						<thead class="thead-light text-center">
						
							<tr>
								<th>No</th>
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
									<td>@include('regions.edit')</td>
								</tr>

							@endforeach
						</tbody>

					</table>
				
			

				
