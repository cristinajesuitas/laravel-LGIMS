@extends('layouts.app')

@section('content')

<div class="container">
 	<nav class="navbar navbar-expand-md navbar-light bg-light text-dark">
		<span class="align-middle font-weight-bold">Downloadable Forms:</span>
			<div class="navbar-nav">
				<ul class="navbar-nav mr-auto" >
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Permit Applications</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download >Barangay Form #01-Application for Barangay Business Permit</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #04-Application for the Use of Barangay Property and Facility</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #12-Outdoor Advertising and Signage Application Form</a></br>
							</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Request for Certifications/Clearances</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download >Barangay Form #01-Application for Barangay Business Permit</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #04-Application for the Use of Barangay Property and Facility</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #12-Outdoor Advertising and Signage Application Form</a></br>
							</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration Forms</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download >Barangay Form #01-Application for Barangay Business Permit</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #04-Application for the Use of Barangay Property and Facility</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #12-Outdoor Advertising and Signage Application Form</a></br>
							</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Freedom of Information</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download >Barangay Form #01-Application for Barangay Business Permit</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #04-Application for the Use of Barangay Property and Facility</a></br>
								<a class="text-secondary text-nowrap text-decoration-none" href="/images/DownloadableForms/BF01-ApplicationBarangayBusinessPermitForm.pdf" download>Barangay Form #12-Outdoor Advertising and Signage Application Form</a></br>
							</div>
					</li>
				</ul>
			</div>
</nav>
	
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <h4 class="card-header text-center"><a class="navbar-brand" href="{{ url('/') }}">
                   <img src="images/lgimsicon.png" class="figure-img img-fluid rounded" width="80" height=auto class="d-inline-block align-top" alt="">
                </a>Local Government Information Management Systems</h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
					
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
				 <div class="card-footer"> 
				 
					<div class="card text-center">
					<div class="form-group row mb-0">
					<div class="col align-middle"><span class="align-middle font-weight-bold">New to LGIMS?</span></div>
						<a class="btn btn-secondary" href="{{ route('register') }} ">Please  {{ __('Register') }}</a>
						</div></div></div>
            </div>
        </div>
    </div>
</div></div>

</div>

<div class="container bg-light text-dark fixed-bottom">

    <footer class="text-center"><p class="h6 "><small>©2020 <img src="images/imslogo.png" class="figure-img img-fluid rounded" width="50" height=auto class="d-inline-block align-top" alt=""> Information Management Systems (IMS) Office, Municipality of Tanay</small></p></footer>

</div>

@endsection
