@extends('auth.login')

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
                <h5 class="text-center">Create User Account</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" >

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}">
									<option>Select Role</option>
									<option value="admin">Admin</option>
									<option value="superuser">Superuser</option>
									<option value="user">User</option>
								</select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		</div>
	</div>
</div>
@endsection
