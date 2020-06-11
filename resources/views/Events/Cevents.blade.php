@include('messages.messages')
<html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />


        <!-- Styles --></head>
    <header class="header">
        <div class="header__logo-box">
            <img src="/img/logokenya.png" alt="kenya logo" class="header__logo"/>
        </div>
        <div class="header__text-box">
        <h1 class="heading-primary">
        <span class="heading-primary--main">MOH</span>
        <span class="heading-primary--sub">See Available Events</span>
        </h1>
        <a href="#" class="btn btn--white btn--animated">Events</a>
    </div>
    </header>
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                 WHY ATTEND THIS EVENTS?
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">Be part of great things</h3>
                    <p class="paragraph">It’s no secret that some of the best ideas, discoveries and cures start with bright minds coming together.

Yet, whether you’re a researcher ready to share your work with the world or a doctor who needs to keep up with breakthrough treatments in your field, undoubtedly you’ve found asked yourself:</p>
                    <h3 class="heading-tertiary u-margin-bottom-small">Get in the radar of potential funders and collaborators</h3>
                    <p class="paragraph">
                        <br>
                        In the medical healthcare field, collective R&D projects such as special issues, journals and even books are quiet the commonplace. And what better way to meet like-minded people from your field, who are genuinely interested in your work than- scientific medical conferences.

Whether you present or not at a conference, you still have the upper hand of advocating for your work, face-to-face with people in your field. The more you share about your work., the higher the chances for you to attract potential collaborators.</p>

                    <a href="#" class="btn-text">See more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/pic1.jpg" alt="photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/pic2.jpg " alt="photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/pic3.jpg " alt="photo 3" class="composition__photo composition__photo--p3">
                    </div>


                </div>
        </section>
                <section class="jobs__available">
                @if(count($events)<1)
                <div clas="u-center-text">
                    <h3 class="heading-tertiary u-margin-bottom-small">No Events currently</h3>

                </div>

                @else
                <div class=" u-center-text u-margin-bottom-medium">
                    <h2 class="heading-secondary">
                       Events available
                    </h2>
                </div>
                @foreach($events as $events)


                <div class="row ">
                <h3 class="heading-tertiary u-margin-bottom-small"> {{ $events->image }}
                    <h3 class="heading-tertiary u-margin-bottom-small"> {{ $events->description }} <br> Event posted on {{ $events->created_at}}</h3><br>
                    <h3 class="heading-tertiary u-margin-bottom-small"> {{ $events->locaion}}</h3>
                    <h3 class="heading-tertiary u-margin-bottom-small"> {{ $events->time}}</h3>
                    <h3 class="heading-tertiary u-margin-bottom-small"> {{ $events->date}}</h3>
                
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
            
        </div>
             
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                   Testimonials
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
                <div class="u-center-text u-margin-bottom-small">
                    <a href="#" class="btn-text">See more &rarr;</a>
                </div>
        </section>
    </main>
</html>

