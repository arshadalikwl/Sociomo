<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Ifnets | Social Media Network Template</title>
    <link rel="icon" href="{{asset('app-asset/images/fav.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('app-asset/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('app-asset/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('app-asset/css/responsive.css')}}">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
	@yield('content')
		
	<script src="{{asset('app-asset/js/main.min.js')}}"></script>
	<script src="{{asset('app-asset/js/script.js')}}"></script>


</body>	
</html>
