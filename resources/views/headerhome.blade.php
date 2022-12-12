
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('img/red-logo.png')}}" alt="#" class="img-fluid">
                    </a>
                    <a href="#" class="btn downloadbtn d-xl-none d-lg-none ">Download APP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('about-us')}}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('how-to-play')}}">HOW TO PLAY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact')}}">CONTACT US</a>
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
    <div class="" id="alert">
        {{ session()->get('message') }}

        <button type="button" class="btn-close"  aria-label="Close" ></button>
    </div>
    @endif
