    @extends('layouts.app')
    @section('title','Edit Geocode')
    @section('content')
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('geocodes.update')}}" method = "post">
            @csrf
            <div class="form-group">
              <label for="code">PSG Code:</label>
              <input type="text" name = "code" id = "code" class="form-control" required value = "{{$geocode->code}}">
            </div>
            <div class="form-group">
              <label for="region">Region:</label>
              <input type="text" name = "region" id = "region" class="form-control" required value = "{{$geocode->region}}">
            </div>
            <div class="form-group">
              <label for="province">Province:</label>
              <input type="text" name = "province" id = "province" class="form-control" required value = "{{$geocode->province}}">
            </div>
            <div class="form-group">
              <label for="municipal">Municipal:</label>
              <input type="text" name = "municipal" id = "municipal" class="form-control" required value = "{{$geocode->municipal}}">
            </div>
			<div class="form-group">
              <label for="barangay">Barangay:</label>
              <input type="text" name = "barangay" id = "barangay" class="form-control" required value = "{{$geocode->barangay}}">
            </div>
			<div class="form-group">
              <label for="zipcode">Zip Code:</label>
              <input type="text" name = "zipcode" id = "zipcode" class="form-control" required value = "{{$geocode->zipcode}}">
            </div>
            <input type="hidden" name="id" value = "{{$geocode->id}}">
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection