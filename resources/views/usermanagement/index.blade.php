@extends ('layouts.app')
@section('title','User Manager')
@section('content')
	
 <div class="container">
	<div class="col mb-4">
		<div class="card">
			<div class="card-header">
				<h3>Users Management</h3>
			</div>
				<div class="card-body">
					<form action="/search" method="GET" role="search">
						@csrf
						<div class="input-group">
							<input type="text" class="form-control" name="q" 
            placeholder="Search users">
								<button type="button" class="btn btn-info">Search              
								</button>
       
						</div>
					</form>

				@if(isset($details))
					 <p> The Search results for your query <b> {{ $query }} </b> are :</p>
						<table class="table table-striped">
							<thead>
								<tr>
								  <th>Name</th>
								  <th>UserName</th>
								  <th>Email</th>
								  <th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($details as $user)
								
									<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->username}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->status}}</td>
									
									</tr>
								@endforeach
							</tbody>
						</table>
						@elseif(isset($message))
						<p>{{$message}}</p>
						<button type="button" class="btn btn-info">Add Barangay              
								</button>
					@endif
				</div>
	

 <?php
 /*
						<table class="table table-striped">
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
								@foreach($details as $user)
									<tr>
									<td>{{$user->id}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->username}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->status}}</td>
									<td><a href="{{route('usermanagement.edit',['id'=>$user->id])}}" class = "btn btn-info">Edit</a></td>
									<td><a href="{{route('usermanagement.destroy',['id'=>$user->id])}}" class = "btn btn-danger">Delete</a></td>
									</tr>
								@endforeach
							</tbody>
						</table>*/
?>					
				</div>
		</div>
	</div>
</div>
</div>


@endsection

<?php
 // <td><a href="{{route('users.edit',['id'=>$user->id])}}" class = "btn btn-info">Edit</a></td>
  //          <td><a href="{{route('users.destroy',['id'=>$user->id])}}" class = "btn btn-danger">Delete</a></td>
  //@foreach($users (DB Table) as $user (assigned key value))
			?>