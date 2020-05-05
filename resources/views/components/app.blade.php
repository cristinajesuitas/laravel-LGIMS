<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Tanay IMS Office">
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/x-icon" href="images/katbayaniLOGO.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<style>
body { 
    padding-top: 75px; 
	margin-bottom: 65px;
}	
.tab-pane{
	padding-top: 10px; 
	margin-bottom: 50px;
	
}	


<</style>    
</head>
<body>
    <div id="app">
	@if(Auth::check())
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm fixed-top ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="images/lgimsicon.png" class="figure-img img-fluid rounded" width="50" height=auto class="d-inline-block align-top" alt="">
                </a>
                
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
				   <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setup</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/lguprofiles">LGU Profiles</a>
						<a class="dropdown-item" href="/psgc">Philippine Standard Geographic Code</a>
						<a class="dropdown-item" href="/usermanagement">User Management</a>
						<a class="dropdown-item" href="#">Officials</a>
						<a class="dropdown-item" href="#">Rate of Taxes</a>
					</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Population</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/inhabitants">Households</a>
						<a class="dropdown-item" href="#">Institutional Populations</a>
						<a class="dropdown-item" href="#">Transients</a>
					</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Housing</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Household Housing</a>
						<a class="dropdown-item" href="#">Institution Housing</a>
					</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Permits</a>
						<a class="dropdown-item" href="#">Clearances</a>
						<a class="dropdown-item" href="#">Certification</a>
						<a class="dropdown-item" href="#">Justice</a>
						<a class="dropdown-item" href="#">Health</a>
						<a class="dropdown-item" href="#">Daycare</a>
					</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Legislature</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Attendance</a>
						<a class="dropdown-item" href="#">Committee Hearings</a>
						<a class="dropdown-item" href="#">Sessions</a>
						<a class="dropdown-item" href="#">Ordinances</a>
						<a class="dropdown-item" href="#">Resolutions</a>
					</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Barangay Profile</a>
						<a class="dropdown-item" href="#">Registry of Barangay Inhabitants</a>
						<a class="dropdown-item" href="#">Statistics</a>
					</div>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Utility</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Database Backup</a>
						<a class="dropdown-item" href="#">Database Restore</a>
						<a class="dropdown-item" href="#">Database Update</a>
					</div>
			
			</li>
						
        </ul>
@endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                       				 @guest
                     @if (Route::has('register'))
					
		
						
				 <!-- Authentication Links -->
				 
                        
                                    
                               
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<a class="dropdown-item" href="#">Change Password</a>
                            </li>
                        @endguest
							

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
								
						
					</div>
			
			</li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
	
<div class="container-expand-md fixed-bottom bg-light text-dark">

    <footer class="text-center">
		@include('includes.footer')
	</footer>

</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	
</body>

</html>
