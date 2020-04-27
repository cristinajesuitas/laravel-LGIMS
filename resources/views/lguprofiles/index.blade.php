@extends ('layouts.app')
@section('title','LGU Profile Index')

@section('content')


<div class="container">
	<div class="col mb-4">
		<div class="card">
			<div class="card-header">
				<h4 >BARANGAY PROFILE</h4>
			</div>		
				<div class="card-body">
				
					<table class="table table-borderless-sm"  style="width:400px" align="center">
						<p class="text-center">General Information</p>
						<tbody>
							<tr>
								<th>Barangay</th>
							</tr>
								
						@foreach ($lguprofiles as $row_lguprofile)
							<tr>
								<td>{{ $row_lguprofile->geocodes->barangay }}</td>
							</tr>
							<tr>
								<td>Municipality</td>
								<td>:</td>
								<td>{{ $row_lguprofile->geocode->municipal }}</td>
							</tr>
							<tr>
								<td>Province</td>
								<td>:</td>
								<td>{{ $row_lguprofile->geocode->province}}</td>
							</tr>
							<tr>
								<td>Congressional District</td>
								<td>:</td>
								<td>{{ $row_lguprofile->geocode->district }}</td>
							</tr>
							<tr>
								<td>Region</td>
								<td>:</td>
								<td>{{ $row_lguprofile->geocode->region }}</td>
							</tr>
							<tr>
								<td>Sitio/s</td>
								<td>:</td>
								<td>{{ $row_lguprofile->sitios_in_bgy }}</td>
							</tr>
							<tr>
								<td>Classification</td>
								<td>:</td>
								<td>{{ $row_lguprofile->classification }}</td>
							</tr>
							<tr>
								<td>Land Area</td>
								<td>:</td>
								<td>{{ $row_lguprofile->landarea }}</td>
							</tr>
							<tr>
								<td>Indigenous Group/s</td>
								<td>:</td>
								<td>{{ $row_lguprofile->indigenous_group }}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>:</td>
								<td>{{ $row_lguprofile->unitNo }} 
									{{ $row_lguprofile->floorNo }}
									{{ $row_lguprofile->phaseNo }}
									{{ $row_lguprofile->blockNo }}
									{{ $row_lguprofile->lotNo }}
									{{ $row_lguprofile->houseno }}
									{{ $row_lguprofile->street }}
									{{ $row_lguprofile->sitio }}
								</td>
							</tr>
							<tr>
								<td>Zipcode</td>
								<td>:</td>
								<td>{{ $row_lguprofile->geocode->zipcode }}</td>
							</tr>
						@endforeach	
						</tbody>
					</table>
				</div>
		</div>
		<a class="btn btn-secondary" href="http://lgims.katbayani.tanay.gov.ph/lguprofiles/create" role="create">Setup LGU Profile</a>
			 
</div>

	
@endsection	