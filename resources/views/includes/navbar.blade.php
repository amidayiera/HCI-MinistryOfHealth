<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MinistryOfHealth</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS >
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script-->

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/feedback.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/aboutUs.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/landingPage.css') }}" rel="stylesheet" type="text/css" >

    </head>
    
<body data-spy="scroll" data-target=".navbar" data-offset="60">
        
  <div class="container">
    <nav class="navbar navbar-expand-md  navbar-light">
    <a class="navbar-brand" href="/"> <img src="{{ url('/images/mohlogo1.png') }}" style="height:90px; width:100px;" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item acitve">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/covidTracker">COVID-19 CASES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/healthcarelocations">Health care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feedback">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr class="black">
    <hr class="red">
    <hr class="green">
        </div>

        {{-- CONTENT --}}
        <main class="py-4">
            @yield('content')
             <!--Scripts-->
    
       
      
      
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <script src='js/script.js' type="text/javascript"></script> 
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkwI_0cQatRfacMb769So3VaGb2YrWPA8&libraries=places"></script>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
   
        </main>
        <br>
        <br>

        {{-- FOOTER --}}
        <div class="container">

            <hr class="black">
            <hr class="red">
            <hr class="green">

            <footer class="mastfoot">
                <div class="inner">
                    <div class="row align-items-end">
                        <div class="col mt-1">
                         <h5 class="footer-titles">contact us</h5>
                         <p class="footer-details">
                             Afya Centre, Cathedral Road<br>
                             TELEPHONE: +2547 192 2930<br>
                             EMAIL: ministryofhealth@health.co.ke
                         </p>
                        </div>
                        <div class="col">
                         <h5 class="footer-titles">external links</h5>
                         <p class="footer-details">
                            Presidency<br>
                            eCitizen Website<br>
                            Huduma Centre Kenya<br>
                         </p>
                        </div>
                        <div class="col">
                         <h5 class="footer-titles">others</h5>
                         <p class="footer-details">
                            Policies<br>
                            Tenders<br>
                            Reports<br>
                            
                         </p>
                        </div>
                      </div>
                </div>
              </footer>
        </div>
    </body>
</html>
