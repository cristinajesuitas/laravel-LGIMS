<x-app>

<div class="container">

		<p style="font-size:30px;">Philippine Standard Geographic Code (PSGC)<p></div>

		<hr>

	<div class="container">

			<nav>

				<ul class="nav nav-tabs nav-fill" id="psgcTab" role="tablist">

				
					<li class="nav-item">
						<a class="nav-link active" id="region-tab" data-toggle="tab" role="tab" href="#region" aria-controls="region" aria-selected="true">Region</a>
						
					</li>

					<li class="nav-item">
						<a class="nav-link" id="province-tab"  data-toggle="tab" role="tab" href="#province" aria-controls="province" aria-selected="true">Province</a>
					</li>
									
					<li class="nav-item">
						<a class="nav-link" id="municipal-tab" data-toggle="tab" role="tab" href="#municipal" aria-controls="municipal" aria-selected="true">City/Municipal</a>
					</li>
									
					<li class="nav-item">
						<a class="nav-link" id="barangay-tab" data-toggle="tab" role="tab" href="#barangay" aria-controls="barangay" aria-selected="true">Barangay</a>
					</li>

					
					
									
				</ul>

				<div class="tab-content border border-white" id="psgcTabContent" >

					<div class="tab-pane active" id="region" role="tabpanel" aria-labelledby="region-tab">

						<div class="container p-1">
							@include('regions.create')
						</div>

						@include('regions.index')

					</div>

					<div class="tab-pane" id="province" role="tabpanel" aria-labelledby="province-tab">

						<h1>Province</h1>

					</div>

					<div class="tab-pane" id="municipal" role="tabpanel" aria-labelledby="municipal-tab">

						<h1>City/Municipal</h1>

					</div>

					<div class="tab-pane" id="barangay" role="tabpanel" aria-labelledby="barangay-tab">

						<h1>Barangay</h1>

					</div>
				</div>

				

			</nav>

	</div>
</div>

<script>
$('#psgcTab a').on('click', function (e) {
  e.preventDefault()
  $('#myTab a[href="#region"]').tab('show') // Select tab by name
  $('#myTab a[href="#province"]').tab('show') // Select tab by name
  $('#myTab a[href="#municipal"]').tab('show') // Select tab by name
  $('#myTab a[href="#barangay"]').tab('show') // Select tab by name
})
</script>

</x-app>