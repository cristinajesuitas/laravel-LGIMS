<x-app>
<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<form action="{{route('region.update')}}" method = "post">
				@csrf
				<div class="form-group">
					<label for="name">Region Name:</label>
					<input type="text" name = "name" id = "name" class="form-control" required value = "{{$region->name}}">
				</div>
				<div class="form-group">
					<label for="psgCode">PSG Code:</label>
					<input type="text" name = "psgCode" id = "psgCode" class="form-control" required value = "{{$region->psgCode}}">
				</div>
				<input type="hidden" name="id" value = "{{$region->id}}">
				<button type = "submit" class = "btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</x-app>