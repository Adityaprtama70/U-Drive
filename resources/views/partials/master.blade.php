<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <h1> UDrive </h1>
        <div class="nav-menu">
            <p>Home</p>
            <p>About</p>
            <p>Course</p>
            <p>Service</p>
            <img src="{{ asset('images/instagram.svg') }}" alt="instagram">
            <img src="{{ asset('images/twitter.svg') }}" alt="twitter">
            <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
        </div>
    </nav>
    <section class="hero-container">
        <div>
            <div>
                <h1>Make Batter Driving Car </h1>
                <p>Why learn how to driving?</p>
            </div>
        </div>
        <img src="{{ asset('images/croods1.png') }}" alt="croods1">
    </section>
    <section class="description-container">
        <div>
            <div>
                <h2>A perfect driving school with latest vehicles</h2>
                <p>
                    Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.
                    Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the system expound.
                </p>
            </div>
            <div class="description-left-footer">
                <p>Isaac Herman</p>
                <p class="font-weight-bold">Founder</p>
            </div>
        </div>
        <img src="{{ asset('images/image.png') }}" alt="image">
    </section>
    <section class="contain-container">
        <div class="card">
            <img src="{{ asset('images/card1.png') }}" alt="card1">
            <div class="card-body">
                <h3>
                    Standard Driving Course
                </h3>
                <p>
                    Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil pain…
                </p>
            </div>
            <div class="card-footer">
                <p class="font-weight-bold">THEORY SESSIONS</p>
                <p>04 Hours</p>
            </div>
            <div class="card-footer-footer">
                <p class="font-weight-bold">PRACTICAL SESSION</p>
                <p>16 Hours</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card3.png')}}" alt="card2">
            <div class="card-body">
                <h3>
                    Advanced Driving Course
                </h3>
                <p>
                    Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil pain…
                </p>
            </div>
            <div class="card-footer">
                <p class="font-weight-bold">THEORY SESSIONS</p>
                <p>04 Hours</p>
            </div>
            <div class="card-footer-footer">
                <p class="font-weight-bold">PRACTICAL SESSION</p>
                <p>20 Hours</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card2.png')}}" alt="card3">
            <div class="card-body">
                <h3>
                    Extended Driving Course
                </h3>
                <p>
                    Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil pain…
                </p>
            </div>
            <div class="card-footer">
                <p class="font-weight-bold">THEORY SESSIONS</p>
                <p>04 Hours</p>
            </div>
            <div class="card-footer-footer">
                <p class="font-weight-bold">PRACTICAL SESSION</p>
                <p>24 Hours</p>
            </div>
        </div>
    </section>
    <section class="what-is-container">
        <div>
            <div>
                <h1>UDrive driving School has been a pioneer in the field of driving training since 2006!..</h1>
                <p>219 S Bolmar St, West Chester, PA 19382, United States</p>
                <p>XC65+M2 West Chester, Pennsylvania, USA</p>
                <p>+16107386902</p>
            </div>
        </div>
        <img src="{{ asset('images/maps1.png')}}" alt="maps1">
    </section>

    <section class="instructors">
        <div>
            <div>
                <h1>Instructors</h1>
            </div>
    </section>

    <section class="contain-container-driver">
        <div class="card-driver">
            <img src="{{ asset('images/card-panel-left.png') }}" alt="card-panel-left">
            <div class="card-body">
                <h3>
                    Marlo Vlasov 
                </h3>
            </div>
        </div>
        <div class="card-driver">
            <img src="{{ asset('images/card-panel-left2.png') }}" alt="card-panel-left2">
            <div class="card-body">
                <h3>
                    Sofia Pozdniakova
                </h3>
            </div>
        </div>
        <div class="card-driver">
            <img src="{{ asset('images/card-panel-left3.png') }}" alt="card-panel-left3">
            <div class="card-body">
                <h3>
                    Diana Avsaragova
                </h3>
            </div>
        </div>
    </section>

    <section class="button-container">
        <button class="btn">
            See More
        </button>
    </section>

    <section class="value">
        <div>
            <div>
                <h1>Valuable Packages & Offers</h1>
            </div>
    </section>

    <section class="contain-container-value">
        <div class="card-value">
            <div class="card-body">
                <h1>$49.99per course</h1>
                <h3>Basic Package</h3>
                <p>Righteous indignation & well dislike</p>
            </div>
            <div class="description-value">
                <p>Theory</p>
                <p>04 Hours</p>
                <hr class="solid">
                <p>Practical</p>
                <p>16 Lessons</p>
                <hr class="solid">
                <p>20 Days</p>
                <p>1 hr/day</p>
                <hr class="solid">
            </div>
        </div>
        <div class="card-value">
            <div class="card-body2">
                <h1>$124.99per course</h1>
                <h3>Ultra Package</h3>
                <p>Righteous indignation & well dislike</p>
            </div>
            <div class="description-value">
                <p>Theory</p>
                <p>04 Hours</p>
                <hr class="solid">
                <p>Practical</p>
                <p>16 Lessons</p>
                <hr class="solid">
                <p>20 Days</p>
                <p>1 hr/day</p>
                <hr class="solid">
            </div>
        </div>
        <div class="card-value">
            <div class="card-body3">
                <h1>$89.99per course</h1>
                <h3>Premium Package</h3>
                <p>Righteous indignation & well dislike</p>
            </div>
            <div class="description-value">
                <p>Theory</p>
                <p>04 Hours</p>
                <hr class="solid">
                <p>Practical</p>
                <p>16 Lessons</p>
                <hr class="solid">
                <p>20 Days</p>
                <p>1 hr/day</p>
                <hr class="solid">
            </div>
        </div>
    </section>

    <footer>
        <p><b>UDrive 2022</b>copyright all rights reserved</p>
        <div>
            <img src="{{ asset('images/instagram.svg') }}" alt="instagram">
            <img src="{{ asset('images/twitter.svg') }}" alt="twitter">
            <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
        </div>
    </footer>
</body>
</html>