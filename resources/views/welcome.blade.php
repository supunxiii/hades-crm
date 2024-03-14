<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hades</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link rel="icon" href="/png/Hades-Inc-Logo.png">
        <style>
            * {
                font-family: 'Montserrat', sans-serif;
            }
            .bg-light {
                background-color: transparent !important;
            }
            .carousel-item {
                height: 100vh;
                min-height: 300px;
            }
            .carousel-caption {
                bottom: 220px;
            }
            .carousel-caption h5 {
                font-size: 45px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-top: 25px;
            }
            .carousel-caption p {
                width: 60%;
                margin: auto;
                font-size: 18px;
                line-height: 1.9;
            }
            .carousel-caption a {
                text-transform: uppercase;
                text-decoration: none;
                background: darkorange;
                padding: 10px 30px;
                display: inline-block;
                color: #000;
                margin-top: 15px;
            }
            .navbar-nav a {
                font-size: 18px;
                text-transform: uppercase;
                font-weight: bold;
            }
            .navbar-light .navbar-brand {
                color: #fff;
                font-size: 25px;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
                color: #fff;
            }
            .navbar-light .navbar-nav .nav-link {
                color: #fff;
            }
            .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
                color: #fff;
            }
            .w-100 {
                height: 100vh;
            }
            .navbar-toggler {
                padding: 1px 5px;
                font-size: 18px;
                line-height: 0.3;
                background: #fff;
            }
            @media only screen and (max-width: 767px) {
                .navbar-nav {
                    text-align: center;
                    background: rgba(0, 0, 0, 0.5);
                }
                .carousel-caption {
                    bottom: 165px;
                }
                .carousel-caption h5 {
                    font-size: 17px;
                }
                .carousel-caption a {
                    padding: 10px 15px;
                    font-size: 15px;
                }
            }
            </style>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="/svg/hades_title_day.svg" alt="HADES" width="200" height="100"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (Route::has('login'))
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                @auth
                                    <a href="{{ url('/home') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">HOME</a>
                                </li>
                                <li class="nav-item">
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">LOG IN</a>
                                </li>
                                <br>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-link">REGISTER</a>
                                    @endif
                                </li>
                            </ul>
                        @endauth
                    @endif
                    </div>
        
                </div>
            </nav>
            <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
                <div class="carousel-indicators">
                    <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1677228843768-c6fb78d75636?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1229&q=80" style="object-fit: cover">
                        <div class="carousel-caption">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">GAMING KEYBOARDS</h5>
                            <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Discover the gaming keyboard for you equipped with speed, precision, and your desired typing experience from multi-award winning <img src="/svg/hades_title_day.svg" alt="HADES" width="80" height="40">&trade;<i> Mechanical Switches.</i></p>
        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1631749352438-7d576312185d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80" style="object-fit: cover">
                        <div class="carousel-caption">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">GAMING MICE</h5>
                            <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Whether you&apos;re looking for a wired or wireless mouse, one specialized for <i>FPS</i> or <i>MOBA</i>, our extensive arsenal of <br>high-performance mice has something for every gamer. <br><i>official sponsor of:</i> <img src="/svg/cyberpunk.svg" alt="HADES" width="80" height="40"></p>
        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1610041321327-b794c052db27?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" style="object-fit: cover">
                        <div class="carousel-caption">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">GAMING HEADSETS</h5>
                            <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Experience crystal-clear, powerful <img src="/svg/hades_title_day.svg" alt="HADES" width="80" height="40">&trade; <i>audio</i> that creates amazing soundscapes for a new level of immersion with our killer lineup of cutting-edge gaming headsets.</p>
        
                        </div>
                    </div>
        
                </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
            </script>
        </body>
</html>
