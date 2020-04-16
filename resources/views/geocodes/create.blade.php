@extends ('layouts.app')
@section('title','Add Geocodes')

@section('content')
<div class="container">
	<p style="font-size:30px;">Add Geocodes<p>
</div>
      <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('geocodes.store')}}" method = "post">
            @csrf
            <div class="form-group">
              <label for="firstname">PSG Code:</label>
              <input type="text" name = "code" id = "code" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="lastname">Region:</label>
              <input type="text" name = "region" id = "region" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="department">Province:</label>
              <input type="text" name = "province" id = "province" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="phone">Municipal:</label>
              <input type="text" name = "municipal" id = "municipal" class="form-control" required>
            </div>
			<div class="form-group">
            </div>
			<div class="form-group">
              <label for="phone">Barangay:</label>
              <input type="text" name = "barangay" id = "barangay" class="form-control" required>
            </div>
			<div class="form-group">
              <label for="phone">Zip Code:</label>
              <input type="text" name = "zipcode" id = "zipcode" class="form-control" required>
            </div>
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection