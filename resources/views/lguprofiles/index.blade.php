@extends ('layouts.app')
@section('title','LGU Profile Index')

@section('content')


<div class="container">
	<div class="col mb-4">
		<div class="card">
			<div class="card-header">
				<h4 >GENERAL INFORMATION</h4>
			</div>		
				<div class="card-body">
					<table class="table table-borderless-sm"  style="width:400px" align="center">
						@foreach($lguprofiles as $lguprofile)
							<tr>
								<td>ID</td>
								<td>:</td>
								<td>{{ $lguprofile->id }}</td>
							</tr>
							<tr>
								<td>Barangay</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->barangay }}</td>
							</tr>
							<tr>
								<td>Municipality</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->municipal }}</td>
							</tr>
							<tr>
								<td>Province</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->province}}</td>
							</tr>
							<tr>
								<td>Congressional District</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->district }}</td>
							</tr>
							<tr>
								<td>Region</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->region }}</td>
							</tr>
							<tr>
								<td>Sitio/s</td>
								<td>:</td>
								<td>{{ $lguprofile->sitios_in_bgy }}</td>
							</tr>
							<tr>
								<td>Classification</td>
								<td>:</td>
								<td>{{ $lguprofile->classification }}</td>
							</tr>
							<tr>
								<td>Land Area</td>
								<td>:</td>
								<td>{{ $lguprofile->landarea }}</td>
							</tr>
							<tr>
								<td>Indigenous Group/s</td>
								<td>:</td>
								<td>{{ $lguprofile->indigenous_group }}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>:</td>
								<td>{{ $lguprofile->unitNo }} 
									{{ $lguprofile->floorNo }}
									{{ $lguprofile->phaseNo }}
									{{ $lguprofile->blockNo }}
									{{ $lguprofile->lotNo }}
									{{ $lguprofile->houseno }}
									{{ $lguprofile->street }}
									{{ $lguprofile->sitio }}
								</td>
							</tr>
							<tr>
								<td>Zipcode</td>
								<td>:</td>
								<td>{{ $lguprofile->geocode->zipcode }}</td>
							</tr>
						@endforeach	
					</table>
				</div>
		</div>
		<a class="btn btn-secondary" href="http://lgims.katbayani.tanay.gov.ph/lguprofiles/create" role="create">Setup LGU Profile</a>
			 
</div>

	
@endsection	