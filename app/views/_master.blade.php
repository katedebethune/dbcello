<!DOCTYPE html>
<html>

<head>

	<title>@yield('title','Cello Lessons | Newton Brookline Wellesley &amp; Greater Boston | Suzuki Certified | Kate de Bethune Studio - cello instruction for all ages in Newton, MA')</title>
	<meta charset='utf-8'>
	<!-- <meta name="description" content="<meta property="og:title" content="Cello Lessons | Newton Brookline Wellesley &amp; Greater Boston | Suzuki Certified | Kate deBethune Studio - cello instruction for all ages in Newton, MA"/>
<meta property="og:site_name" content="cello instruction for all ages in Newton, MA"/> -->

	<!-- BOOTSTRAP CORE INCLUDED WITH THE SHIELD THEME -->
    {{ HTML::style('assets/css/bootstrap.css') }}

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
	{{-- ADDITIONAL SHIELD THEME ASSETS ADDED HERE --}}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('assets/css/icomoon.css') }}
    {{ HTML::style('assets/css/animate-custom.css') }}
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    {{ HTML::script('assets/js/jquery.min.js') }}
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	
	{{-- LINES BELOW MOVED FROM BENEATH BODY TAG DUE TO VALIDATION ERRORS --}}
	{{-- DATE PICKER WIDGET STYLES & JS--}}
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" type="text/css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  	<script src="//cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.js"></script>
  	<script>
  	$(function() {
    	$('#dt_picker').datetimepicker({
			altField: "#dt_picker_alt",
			minDate: 3,
			hourMin: 10,
			hourMax: 15,
			stepMinute: 10,
			timeFormat: 'h:mm TT'
		});
  	});
  	</script> 
  	{{-- END DATE PICKER ASSETS --}}
  	
  	{{-- SHIELD JS ASSETS --}}
  	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
	{{-- END SHIELD JS ASSETS --}}

	{{-- LOCAL STYLES --}}
	{{ HTML::style('styles/styles.css') }}

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
{{-- NOTE: CONTINUATION OF MENU CODE IS CALLED BY CHILD PAGES FROM global.php --}}
	
	<div class="page-wrap">
		@yield('content')
	</div>
	
	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif

	@yield('footer')
		{{ HTML::footer() }}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58565358-1', 'auto');
  ga('send', 'pageview');
</script>	
</body>

</html>

