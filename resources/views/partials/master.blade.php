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
                <h2>long established</h2>
                <p>It is a long established fact that a reader will be 
                distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            </div>
            <div class="description-left-footer">
                <p>May 20th 2020</p>
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <img src="{{ asset('images/image 1.png') }}" alt="image">
    </section>
    <section class="contain-container">
        <div class="card">
            <img src="{{ asset('images/card1.png') }}" alt="card1">
            <div class="card-body">
                <h3>
                    long estabilished
                </h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
            </div>
            <div class="card-footer">
                <p>May 20th 2020</p>
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card2.png')}}" alt="card2">
            <div class="card-body">
                <h3>
                    long estabilished
                </h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
            </div>
            <div class="card-footer">
                <p>May 20th 2020</p>
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card3.png')}}" alt="card3">
            <div class="card-body">
                <h3>
                    long estabilished
                </h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
            </div>
            <div class="card-footer">
                <p>May 20th 2020</p>
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
    </section>
    <section class="what-is-container">
        <div>
            <div>
                <h1>What is Lorem Ipsum?</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution...</p>
            </div>
            <div class="footer">
                <p>May 20</p>
                <p class="font-weight-bold">Read More</p>
            </div>
        </div>
        <img src="{{ asset('images/image2.png')}}" alt="image2">
    </section>
    <section class="button-container">
        <button class="btn">
            See More
        </button>
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