
$lguprofiles=App\Geocode::find(1)->lguprofiles

	<form action="{{route('lguprofiles.search')}}" method="POST" role="search">
		@csrf
			<div class="input-group">
				<input type="text" class="form-control" name="q" placeholder="Search geocodes">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-secondary">
							<span>Search</span>
						</button>
					</span>
			</div>
	</form>