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
				<form method="POST" action="{{ route('password.update') }}">
					@csrf

					<input type="hidden" name="token" value="{{ $token }}">

					<div class="row mb-3">

						 <div class="col-md-12">
							  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="email">

							  @error('email')
									<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
									</span>
							  @enderror
						 </div>
					</div>

					<div class="row mb-3">

						 <div class="col-md-12">
							  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

							  @error('password')
									<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
									</span>
							  @enderror
						 </div>
					</div>

					<div class="row mb-3">

						 <div class="col-md-12">
							  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
						 </div>
					</div>

					<div class="row mb-0">
						 <div class="col-md-12">
							  <button type="submit" class="btn btn-primary">
									{{ __('Reset Password') }}
							  </button>
						 </div>
					</div>
			  </form>
			</div>
		</div>
		<div class="mockup right"><img src="{{asset('app-asset/images/star-shape.png')}}" alt=""></div>
	</div>
	
</div>
	
@endsection