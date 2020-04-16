@extends ('layouts.app')
@section('title','User Management')
@section('content')

<div class="container">
	  <div class="row">
		<div class="card">
			<div class="card-header">
				<h3>Users Management</h3>
			</div>
				<div class="card-body">
					<div class="form-group">
						<input type="text" class="form=controller" name="search" id="search" placeholder="Search User"></input> 
					</div>  
					<div class="table-responsive">
						<h3 align="center">Total Data:<span id="total_records"></span></h3>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>ID</th>
								  <th>Name</th>
								  <th>UserName</th>
								  <th>Email</th>
								  <th>Status</th>
								</tr>
							</thead>
							<tbody>
							
							</tbody>
						</table>
				</div>
		</div>
	</div>
</div>

<script>

$(document).ready(function(){
	fetch_user_data
 function fetch_user_data(query = '')
 {
  $.ajax({
   url:"{{ route('search.search')}}",
   method:'GET',
   data:{query:query},
   dataType:'json'
   success:function(data)
   {
    $('tbody').html(data.table_data);
	$('#total_records').text(data.total_data);
 
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_user_data(query);
 });
});

</script>  

@endsection