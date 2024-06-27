@extends('layouts.login_app')
@section('content')
    <div class="theme-layout">
        <section>
            <div class="gap no-gap signin whitish medium-opacity register">
                <div class="bg-image" style="background-image:url(app-asset/images/resources/theme-bg.jpg)"></div>
                <div class="container">
						@if ($errors->any())
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
                    <div class="signup-box">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card-item">
                                    <figure><img src="{{asset('app-asset/images/logo.png')}}" alt=""></figure>
                                    <h1>Welcome to Ifnets education Social Networking Platform.</h1>
                                    <p>
                                        Ifnets South Africa Educational Community Social networking Platform to transform
                                        the way we learn, teach, and connect. Our platform brings together a diverse
                                        community of learners, educators, professionals, and organizations passionate about
                                        education, empowering them to share knowledge, ideas, and resources through
                                        Collaborations
                                    </p>
                                    <p>Join Ifnets today! sign up now to start connecting, sharing, discovering, and growing
                                        with u</p>
                                    <p>You must be 16 & above to sign up</p>
                                    <div class="barcode">
                                        <figure><img src="{{asset('app-asset/images/resources/Barcode.jpg')}}" alt=""></figure>
                                        <div class="app-download">
                                            <span>Download Mobile App and Scan QR Code to login</span>
                                            <ul class="colla-apps">
                                                <li><a title="" href="https://play.google.com/store?hl=en"><img
                                                            src="{{asset('app-asset/images/android.png')}}" alt="">android</a></li>
                                                <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img
                                                            src="{{asset('app-asset/images/apple.png')}}" alt="">iPhone</a></li>
                                                <li><a title="" href="https://www.microsoft.com/store/apps"><img
                                                            src="{{asset('app-asset/images/windows.png')}}" alt="">Windows</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ver-center">
                                    <div class="reg-from">
                                        <span><i class="icofont-lock"></i> Create an Account</span>
                                        <p>Its quick and Easy</p>
                                        <form class="c-form old-inputs" method="POST" id="registrationForm" action="{{ route('register') }}">
														@csrf
                                            <div class="row merged-10">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input class="mb-2" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First-Name">
																	@error('first_name')
																		<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																		</span>
																	@enderror
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input class="mb-2" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last-Name">
																		@error('last_name')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																		@enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <input class="mb-2" placeholder="Email ID" type="email"  name="email" value="{{ old('email') }}" required>
																	 @error('email')
																		<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																		</span>
																	@enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <input class="mb-2" placeholder="Mobile" type="text" id="phone"  name="phone" value="{{ old('phone') }}" required>
																	 @error('phone')
																		<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																		</span>
																	@enderror
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input class="mb-2" type="password" name="password" required placeholder="Password">
																	 @error('password')
																	 <span class="invalid-feedback" role="alert">
																		 <strong>{{ $message }}</strong>
																	 </span>
																 @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input class="mb-2" type="password" name="password_confirmation" required placeholder="Retype Password">
																	 @error('password_confirmation')
																		<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																		</span>
																	@enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <label>Date of Birth</label>
                                                    <input class="mb-2" type="text" name="day" placeholder="Date">
																	 @error('password_confirmation')
																		<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																		</span>
																	@enderror
                                                </div>
																@php
																 $years = range(1900, strftime("%Y", time()));
																@endphp
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <label>Year</label>
                                                    <select class="mb-2" name="year">
																		@foreach ($years as $year)
																		<option value="{{$year}}">{{$year}}</option> 
																		@endforeach
                                                       
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <label>Month</label>
                                                    <select class="mb-2" name="month">
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="gender mb-2">
                                                        <label>Gender</label>
                                                        <div class="form-radio">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="gender" value="male" checked="checked"><i class="check-box"></i>Male
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="gender"  value="femail"><i  class="check-box"></i>Female
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="gender" value="transgender"><i class="check-box"></i>Transgender
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                                    <div class="checkbox mb-1">
                                                        <input type="checkbox" id="checkbox" name="terms" checked>
                                                        <label for="checkbox">
																			<span>
																				By clicking Sign Up, you agree to our
																				Terms, Data Policy and Cookie Policy. You may receive SMS
																				notifications from us and can opt out at any
																				time.
																			</span>
																			</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6 mt-2">
                                                    <span class="reg-with">Register With</span>
                                                    <ul class="social-reg signup-btns">
                                                        <li><a class="facebook" href="{{route('auth.facebook')}}" title=""
                                                                data-ripple=""><i class="icofont-facebook"></i> Facebook</a>
                                                        </li>
                                                        <li>
																				<a class="twitter" href="{{route('auth.twitter')}}" title="" data-ripple=""><i class="icofont-twitter"></i> Twitter</a>
                                                        </li>
                                                        <a class="signup-google" href="{{route('google-auth')}}" title="">
                                                            <svg width="16px" height="16px" viewBox="-3 0 262 262"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                preserveAspectRatio="xMidYMid" fill="#000000">

                                                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round" />

                                                                <g id="SVGRepo_iconCarrier">

                                                                    <path
                                                                        d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                                                        fill="#4285F4" />

                                                                    <path
                                                                        d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                                                        fill="#34A853" />

                                                                    <path
                                                                        d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                                                        fill="#FBBC05" />

                                                                    <path
                                                                        d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                                                        fill="#EB4335" />

                                                                </g>

                                                            </svg>Google</a>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-6 mt-2">
                                                    <button class="main-btn float-right"  type="submit">Signup</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
