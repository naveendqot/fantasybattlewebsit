<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="css/swiper-bundle.min.css"
  />
</head>

<body>
    <header class="header other-page-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/red-logo.png" alt="#" class="img-fluid">
                    </a>
                    <a href="#" class="btn downloadbtn d-xl-none d-lg-none ">Download APP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="other-page-color nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="other-page-color nav-link" href="{{url('about-us')}}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="other-page-color nav-link" href="{{url('how-to-play')}}">HOW TO PLAY</a>
                            </li>
                            <li class="nav-item">
                                <a class="other-page-color nav-link" href="{{url('contact')}}">CONTACT US</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <button class="btn btn-primary btn-red d-xl-block d-lg-block d-md-none d-none" type="submit">Download APP</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="mobilefooterfixed d-lg-none d-xl-none d-md-none">
        <h6>Get free <strong>Signup Bonus</strong></h6>
        <a href="#" class="downloadbtn"><img src="img/downloadbutton.png" alt=""></a>
    </div>
    @if(session()->has('message'))
    <div class="" id="alert" style="z-index: 10000 !important;margin-top: 130px;text-align: center;">
        {{ session()->get('message') }}
        <button type="button" class="btn-close"  aria-label="Close" >X</button>
    </div>
    @endif
