@extends ('layouts.app')
@section('title','{{$geocode->barangay}}')

@section('content')

<div class="container">
	<h2>Barangay:  {{$geocode->barangay}} - {{ $geocode->code }}</h2>
	
	<p class="text-center">	{{$geocode->region}}</br>
		Province:			{{$geocode->province}}</br>
		City/Municipality:	{{$geocode->municipal}}</br>
		Zipcode:			{{$geocode->zipcode}}</p>
	<hr>
	
	<div class="lguprofiles">
		@foreach ($geocode->lguprofiles as @lguprofile)
			<p>
			{{$lguprofile->classification}}
			</p>
		@endforeach
</div>
@endsection