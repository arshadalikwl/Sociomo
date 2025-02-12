
@extends('layouts.login_app')
@section('content')
<div class="theme-layout">
	
	<div class="authtication animated-circ">
		<div class="mockups"><img src="{{asset('app-asset/images/resources/login-1.png')}}" alt=""></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-1.png')}}" alt=""></figure>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-2.png')}}" alt=""></figure>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-3.png')}}" alt=""></figure>
			</li>
			
		</ul>
	</div>
	<div class="auth-login">
		<div class="logo"><img src="{{asset('app-asset/images/logo.png')}}" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4>Welcome back </h4>
				<span>Ifnets!</span>
				<form method="POST" action="{{ route('login') }}" class="c-form">
					@csrf
					<div class="fileds">
						<label class="input-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
							<input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required  autofocus>
								@error('login')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
					</div>
					<div class="fileds">
						<label class="input-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					</div>	@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
						<a href="#" title="">forgot password</a>
					</div>
					<button class="main-btn" type="submit">Login</button>
					<span class="no-account">If don't have an account? <a href="{{route('register')}}">Signup</a></span> 
					
				</form>
				<div class="login-with">
					<h5>Login With</h5>
					<a class="google-svg" href="{{route('google-auth')}}" title=""><i><svg width="16px" height="16px" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000">

						<g id="SVGRepo_bgCarrier" stroke-width="0"/>
						
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
						
						<g id="SVGRepo_iconCarrier">
						
						<path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"/>
						
						<path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"/>
						
						<path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"/>
						
						<path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"/>
						
						</g>
						
						</svg></i> Continue with Google</a>
					<a class="dark-bg" href="#" title=""><i class="icofont-brand-apple"></i> Continue with Apple</a>
				</div>
				<div class="download-app">
					<h5>Download Apps</h5>
					<a href="#" title=""><img src="{{asset('app-asset/images/google-play.svg')}}" alt=""></a>
					<a href="#" title=""><img src="{{asset('app-asset/images/apple-store.svg')}}" alt=""></a>
				</div>
				<div class="bottambar2">
					<p>By Signing up you are accepting the Service Terms <a href="#" title=""> Privacy Policy</a> and use of <a href="#" title=""> Cookies</a>.</p>
				</div>
			</div>
		</div>
		<div class="mockup right"><img src="{{asset('app-asset/images/star-shape.png')}}" alt=""></div>
	</div>
	
</div>
@endsection