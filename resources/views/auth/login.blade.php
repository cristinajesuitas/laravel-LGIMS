@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
	@include('includes.header')
</div>
	
<body class="text-center">
	<img class="mb-4" src="images/lgimsicon.png" alt="" width="120" height=auto>
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<form method="POST" action="{{ route('login') }}">
				@csrf

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

					<div class="col-md-4">
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

                    <div class="col-md-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
						
				<div class="form-group row">
					<div class="col-md-4 offset-md-4">
                        <div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
					<div class="col-md-4 offset-md-4">
						<button type="submit" class="btn btn-lg btn-primary btn-block">
							{{ __('Sign in') }}
						</button>

						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</div>
				</div>
            </form>
</body>

<div class="card-footer"> 
	<div class="card text-center">
		<div class="form-group row mb-0">
			<div class="col align-middle"><span class="align-middle font-weight-bold">New to LGIMS?</span></div>
				<a class="btn btn-secondary" href="{{ route('register') }} ">Please  {{ __('Register') }}</a>
		</div>
	</div>
</div>

@endsection
