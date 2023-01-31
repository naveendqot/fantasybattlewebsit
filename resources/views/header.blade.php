
    <header class="header other-page-bg moblie_footer">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('img/red-logo.png')}}" alt="#" class="img-fluid">
                    </a>
                    <a href="{{url('apk-download')}}" class="btn downloadbtn d-xl-none d-lg-none ">Download APP</a>
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
                        {{-- <form class="d-flex" role="search"> --}}
                            <a href="{{url('apk-download')}}">
                            <button class="btn btn-primary btn-red d-xl-block d-lg-block d-md-none d-none" type="submit">Download APP</button>
                            </a>
                        {{-- </form> --}}
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="mobilefooterfixed d-lg-none d-xl-none d-md-none moblie_footer">
        <h6>Get free <strong>Signup Bonus</strong></h6>
        <a href={{url('apk-download')}} class="downloadbtn"><img src="{{asset('img/downloadbutton.png')}}" alt=""></a>
    </div>
    @if(session()->has('message'))
    <div class="" id="alert" style="z-index: 10000 !important;margin-top: 130px;text-align: center;">
        {{ session()->get('message') }}
        <button type="button" class="btn-close"  aria-label="Close" >X</button>
    </div>
    @endif
