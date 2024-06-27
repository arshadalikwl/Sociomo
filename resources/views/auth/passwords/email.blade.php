@extends('layouts.login_app')
@section('content')
<div class="theme-layout">
	<div class="authtication bluesh high-opacity">
		<div class="bg-image" style="background-image: url(app-asset/images/resources/login-bg3.jpg)"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-1.png')}}" alt=""></figure>
				<h4>Ask questions with seniors Researchers</h4>
				<p>
					Ask questions and get the experienced answer by researchers and others fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-2.png')}}" alt=""></figure>
				<h4>Find New Researchers or Friends</h4>
				<p>
					Join Ifnets and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('app-asset/images/resources/login-3.png')}}" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with Ifnets.
				</p>
			</li>
			
		</ul>
	</div>
	<div class="auth-login">
		<div class="logo"><img src="{{asset('app-asset/images/logo.png')}}" alt=""><span>Ifnets</span></div>
		<div class="mockup left-bottom"><img src="{{asset('app-asset/images/mockup.png')}}" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
			@endif
				<h4><i class="icofont-key-hole"></i> {{ __('Reset Password') }}</h4>
				<form class="c-form"method="POST" action="{{ route('password.email') }}">
					@csrf
					<div class="fileds">
						<label class="input-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
						<input type="email" name="email" value="{{ old('email') }}" required placeholder="Email address" autofocus>
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i>
						{{ __('Send Password Reset Link') }}
				  </button>
					{{-- <button class="main-btn" type="submit"><i class="icofont-key"></i> Login</button> --}}
				</form>
			</div>
		</div>
		<div class="mockup right"><img src="{{asset('app-asset/images/star-shape.png')}}" alt=""></div>
	</div>
	
</div>
	
@endsection