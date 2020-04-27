

<div class="tab-pane show active" id="region" role="tabpanel" aria-labelledby=#exampleModal>
	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Add Region
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Region</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
        dito ung index
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


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
					</table><h3>wasa</h3>
								<p>London is the capital city of England.</p>
								
							</div>