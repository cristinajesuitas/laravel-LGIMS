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
			
				@include('includes.error')
			
            <div class="form-group">
				<label for="code">PSG Code:</label>
				<input type="text" name = "code" id = "code" class="form-control" placeholder="123456789" >
            </div>
			
            <div class="form-group">
				<label for="region">Region:</label>
				<select type="text" name = "region" id = "region" class="form-control">
					<option>Select Region</option>
					<option value="Region I (ILOCOS REGION)">Region I (ILOCOS REGION)</option>
					<option value="Region II (CAGAYAN VALLEY)">Region II (CAGAYAN VALLEY)</option>
					<option value="Region III (CENTRAL LUZON)">Region III (CENTRAL LUZON)</option>
					<option value="Region IV-A (CALABARZON)">Region IV-A (CALABARZON)</option>
					<option value="Region IV-B (MIMAROPA REGION)">Region IV-B (MIMAROPA REGION)</option>
					<option value="Region V (BICOL REGION)">Region V (BICOL REGION)</option>
					<option value="Region VI (WESTERN VISAYAS)">Region VI (WESTERN VISAYAS)</option>
					<option value="Region VII (CENTRAL VISAYAS)">Region VII (CENTRAL VISAYAS)</option>
					<option value="Region VIII (EASTERN VISAYAS)">Region VIII (EASTERN VISAYAS)</option>
					<option value="Region IX (ZAMBOANGA PENINZULA)">Region IX (ZAMBOANGA PENINZULA)</option>
					<option value="Region X (NOTHERN MINDANAO)">Region X (NOTHERN MINDANAO)</option>
					<option value="Region XI (DAVAO REGION)">Region XI (DAVAO REGION)</option>
					<option value="Region XII (SOCCSKSARGEN)">Region XII (SOCCSKSARGEN)</option>
					<option value="Region XIII (CARAGA)">Region XIII (CARAGA)</option>
					<option value="Region NCR (NATIONAL CAPITAL REGION)">Region NCR (NATIONAL CAPITAL REGION)</option>
					<option value="Region CAR (CORDILLERA ADMINISTRATIVE REGION)">Region CAR (CORDILLERA ADMINISTRATIVE REGION)</option>
					<option value="Region ARMM (AUTONOMOUS REGION IN MUSLIM MINDANAO)">Region ARMM (AUTONOMOUS REGION IN MUSLIM MINDANAO)</option>
				</select>
            </div>
			
            <div class="form-group">
              <label for="province">Province:</label>
              <input type="text" name = "province" id = "province" class="form-control"  placeholder="Province">
            </div>
            <div class="form-group">
              <label for="municipal">Municipal:</label>
              <input type="text" name = "municipal" id = "municipal" class="form-control" placeholder="City or Municipality" >
            </div>
			<div class="form-group">
            </div>
			<div class="form-group">
              <label for="barangay">Barangay:</label>
              <input type="text" name = "barangay" id = "barangay" class="form-control"  placeholder="Barangay">
            </div>
			<div class="form-group">
              <label for="zipcode">Zip Code:</label>
              <input type="text" name = "zipcode" id = "zipcode" class="form-control" placeholder="1234">
            </div>
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection