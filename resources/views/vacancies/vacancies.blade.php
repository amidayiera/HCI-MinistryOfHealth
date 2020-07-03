{{-- @extends('includes.navbar')

@section('content') --}}

@include('messages.messages')
<html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />


        <!-- Styles --></head>
        <div class="container center">
            <ul>
              <li class="animatedArrow">
                <a class="animated-arrow" href="/">
                  <span class="the-arrow -left">
                    <span class="shaft"></span>
                  </span>
                  <span class="main">
                    <span class="text">
                      Back To Main Page
                    </span>
                    <span class="the-arrow -right">
                      <span class="shaft"></span>
                    </span>
                  </span>
                </a>
              </li>
            </ul></div>
    <header class="header">
        {{-- <div class="header__logo-box">
            <img src="/img/logokenya.png" alt="kenya logo" class="header__logo"/>
        </div> --}}
        <div class="header__text-box">
        <h1 class="heading-primary">
        <span class="heading-primary--main">placements</span>
        <span class="heading-primary--sub">find your perfect career</span>
        </h1>
        <a href="#applyNow" class="btn btn--white btn--animated">Apply now</a>
    </div>
    </header>
    <main class="container">
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                  LIFE CHANGING OPPORTUNITIES
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">Be part of great things</h3>
                    <p class="paragraph">Join the authority in medicine. At Mayo Clinic, we believe there is a better path
                        to healing that humanizes the practice of health care and inspires hope in the
                        people who need it most. You will be part of an amazing team committed to
                        solving the most serious and complex medical challenges – one patient at a time.</p>
                    <h3 class="heading-tertiary u-margin-bottom-small">Apply</h3>
                    <p class="paragraph">
                        Apply for multiple jobs at the click of a button<br>
                        Candidates have higher success in their application when their experience strongly matched to the job requirement, and have a clearly drafted CV.
                        applications are read by real humans who are familiar with all the avaible vacancies, not just the one you applied for. This increases your chances of success</p>

                    {{-- <a href="#" class="btn-text">See more &rarr;</a> --}}
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/pic1.jpg" alt="photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/pic2.jpg " alt="photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/pic3.jpg " alt="photo 3" class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>
        </section>

                <section class="jobs__available">
                @if(count($vacancies)<1)
                <div class="u-center-text">
                    <h3 class="heading-tertiary u-margin-bottom-small lineWord">No vacancies currently</h3>

                </div>

                @else
                <div class=" u-center-text u-margin-bottom-medium">
                    <h2 class="heading-secondary">
                       Vacancies available
                    </h2>
                </div>
                @foreach($vacancies as $vacancy)


                <div class="row ">
                    <h3 class="heading-tertiary u-margin-bottom-small" > {{ $vacancy->title }} <br> <i>Vacancy posted on {{ $vacancy->created_at}}</i></h3>
                    <!--<h3 class="heading-tertiary u-margin-bottom-small" > {{ $vacancy->hospital}}</h3>-->
                    <p class="paragraph" style="color: cornflowerblue;">{{
                    $vacancy->description }}</p>
                </div>
                @endforeach
                @endif
                </section>
        <section class="section-book">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <div class="row">

                <div class="book" id="applyNow">
                    <div class="book__form">
                        <div >
                        <form id='form1' action="{{action('vacanciesController@store')}}" method="POST" class="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                  APPLY NOW
                                </h2>
                            </div>
                            <div class="form__group">
                                <input class="form__input" type="text" placeholder="Full name" name="username" id="name" required />
                                <label for="name" class="form__label">Full name</label>
                            </div>
                            <div class="form__group">
                                <input class="form__input" type="email" placeholder="Email Address" name="email" id="email" required />
                                <label for="email" class="form__label">Email Address</label>
                            </div>
                            <div class="form-group">
                                <select id="dropdown" name="dropdown" type="dropdown" class="form__input" required>
                                    <option disabled hidden selected>Choose vacancy:</option>
                                    @if(count($vacancies)<1)
                                    <div class="u-center-text">
                                        <h3 class=" ">No vacancies currently</h3>

                                    </div>

                                    @else

                                    @foreach($vacancies as $vacancy)
                                    <option value={{ $vacancy->id }}>{{ $vacancy->title }}</option>
                                    @endforeach
                                    @endif

                                </select>
                                <label for="dropdown" class="form__label">choose vacancy:</label>
                            </div>

                        <div class="form-group">
                            <div class="form__group u-margin-top-small">
                                <input class="form__input" type="file" name='cv'  id="file" required />
                                <label for="file" class="form__label">Curriculum Vitae(CV)</label>
                            </div>

                            </div>


                            <div class="form__group form__group-btn u-margin-top-small">
                              <a href="javascript:{}" onclick="document.getElementById('form1').submit(); return false;" class="btn btn--green btn--animated" id="form-submit">SUBMIT</a>
                            </div>
                        </form>

                    </div>
                    </div>

                </div>


        </section>
        <section class="section-stories">
            <div class="bg-video">
                <video autoplay muted class="bg-video__content">
                    <source src="img/video.mp4" type="video/mp4" />

                    <source src="img/video.webm" type="video/webm" />
                    YOUR BROWSER IS NOT SUPPORTED
                </video></div>
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    We make people genuinely happy
                </h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-8.jpg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">
                            Mary Smith

                        </figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary">
                           Living the dream
                        </h3>
                        <p>
                            Perfect!!!just perfect! Just at the click of button I am living the dream best.<br>
                            I cannot believe how easy and seemless it was for me to apply for job.
                            The response time by the support is unbelievable, response only took 2 days.
                        </p>
                    </div>
                </div>
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-9.jpg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">
                            just brian
                        </figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary">
                            OH! My, I got it
                        </h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non rerum quis at deleniti, ex provident iure odio ullam? Minus ducimus asperiores reiciendis corporis! Eligendi nobis quod ducimus officiis laboriosam fugit.
                        </p>
                    </div>
                </div>
                {{-- <div class="u-center-text u-margin-bottom-small">
                    <a href="#" class="btn-text">See more &rarr;</a>
                </div> --}}
        </section>
    </main>
    <br><br>
<div class="container center">
    <ul>
      <li class="animatedArrow">
        <a class="animated-arrow" href="/">
          <span class="the-arrow -left">
            <span class="shaft"></span>
          </span>
          <span class="main">
            <span class="text">
              Back To Main Page
            </span>
            <span class="the-arrow -right">
              <span class="shaft"></span>
            </span>
          </span>
        </a>
      </li>
    </ul></div>
</html>

{{-- @endsection --}}