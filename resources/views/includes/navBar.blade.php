<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MinistryOfHealth</title>

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/landingPage.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/aboutUs.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/feedback.css')}}" rel="stylesheet" type="text/css">

    </head>
<body  data-spy="scroll" data-target=".navbar" data-offset="60">
{{-- <div class='{{ $backgroundImageClass or "default"}}'> --}}
    <div>
  <div class="container">
    <nav class="navbar navbar-expand-md  navbar-light bg-light">
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
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Health care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('feedback.create')}}">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr class="black">
    <hr class="red">
    <hr class="green">
        </div>
{{-- </div> --}}


        {{-- CONTENT --}}
        <main class="py-4">
            @yield('content')
        </main>

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
                             telephone: +254-20-2717077<br>
                             email: ps@health.go.ke
                         </p>
                        </div>
                        <div class="col">
                         <h5 class="footer-titles">external links</h5>
                         <p class="footer-details">
                            <a href="https://www.president.go.ke/">Presidency</a><br>
                            <a href="https://www.ecitizen.go.ke/">eCitizen Website</a><br>
                            <a href="https://www.hudumakenya.go.ke/">Huduma Centre Kenya</a><br>
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
