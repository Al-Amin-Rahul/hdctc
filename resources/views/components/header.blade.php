<small>
<section class="top-header bg-dark d-sm-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="nav">
                    <li class="nav-link pl-0"><a href="https://facebook.com/hdctc" target="_blank"><i class="fab fa-facebook text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-twitter text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-linkedin text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-instagram text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-google-plus text-white"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="nav justify-content-end">
                    @if(Session::get('student_id'))
                    @else
                        <li class="nav-link"><a href="{{ route("student-signup") }}" class="text-decoration-none text-white"><i class="fas fa-user"></i>  SignUp</a></li>
                        <li class="nav-link"><a href="{{ route("student-login") }}" class="text-decoration-none text-white"><i class="fas fa-user"></i>  Login</a></li>
                    @endif
                        <li class="nav-link pr-0"><a href="{{ route("faq") }}" class="text-decoration-none text-white"><i class="fas fa-question"></i>  Faq</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
</small>
<section class="bg-white d-sm-none d-sm-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header-logo">
                    <a href="/"><img src="{{ asset('/front/images/logo.png') }}" class="img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9">
                <ul class="nav justify-content-end">
                    <li class="nav-link border-right">Email <br><span class="font-weight-bold"><i class="fas fa-envelope text-danger"></i> hdctc.bd@gmail.com</span></li>
                    <li class="nav-link">Phone <br><span class="font-weight-bold"><i class="fas fa-mobile text-danger"></i> +88 01406-175101</span></li>
                    @if(Session::get('student_id'))
                        <li class="nav-link pr-0"><a href="{{ route("student-dashboard") }}" class="btn btn-outline-primary"><i class="fas fa-bars text-dark"></i> Dashboard</a></li>
                    @else
                        <li class="nav-link pr-0"><a href="{{ route("student-login") }}" class="btn btn-outline-primary">Student Login <i class="fas fa-arrow-right text-danger"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sticky-top bg-green shadow-sm d-sm-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu">
                    <ul class="nav">
                        <li class="nav-link border-right border-dark"><a href="/" class="text-white"><i class="fas fa-home text-dark"></i> Home</a></li>
                        <li class="nav-link border-right border-dark"><a href="{{ route("about-us") }}" class="text-white"><i class="fas fa-user text-dark"></i> About</a></li>
                        <li class="nav-link border-right border-dark"><a href="{{ route("gallery") }}" class="text-white"><i class="fas fa-image text-dark"></i> Gallery</a></li>
                        <li class="nav-link border-right border-dark"><a href="" class="text-white"><i class="fas fa-book text-dark"></i> Course <i class="fas fa-angle-down"></i></a>
                            <ul class="nav d-none position-absolute sub-menu bg-dark">
                                @foreach($courses as $course)
                                <li class="nav-link"><a class="text-white" href="{{ route("course-details", ['id' => $course->id]) }}"><i class="fas fa-book text-light"></i> {{ $course->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-link border-right border-dark"><a href="#" class="text-white"><i class="fas fa-link text-dark"></i> Service <i class="fas fa-angle-down"></i></a>
                            <ul class="nav d-none position-absolute sub-menu bg-dark">
                                <li class="nav-link"><a class="text-white" href="{{ route("vata") }}"><i class="fas fa-book text-light"></i>ভাতা</a></li>
                            </ul>
                        </li>
                        <li class="nav-link border-right border-dark"><a href="{{ route("career") }}" class="text-white"><i class="fas fa-link text-dark"></i> Career</a></li>
                        <li class="nav-link border-right border-dark"><a href="{{ route("registration") }}" class="text-white"><i class="text-dark fas fa-address-card"></i> Registration</a></li>
                        <li class="nav-link border-right border-dark"><a href="{{ route("contact-us") }}" class="text-white"><i class="fas fa-mobile text-dark"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mobile menu  -->

<small>
<section class="moblie-top-header bg-pink d-sm-none d-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav justify-content-center">
                    <li class="nav-link"><a href=""><i class="fab fa-facebook text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-twitter text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-linkedin text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-instagram text-white"></i></a></li>
                    <li class="nav-link"><a href=""><i class="fab fa-google-plus text-white"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-12">
                <ul class="nav justify-content-center">
                    @if(Session::get('student_id'))
                    @else
                        <li class="nav-link"><a href="{{ route("student-signup") }}" class="text-decoration-none text-white"><i class="fas fa-user"></i>  SignUp</a></li>
                        <li class="nav-link"><a href="{{ route("student-login") }}" class="text-decoration-none text-white"><i class="fas fa-user"></i>  Login</a></li>
                    @endif
                        <li class="nav-link"><a href="{{ route("faq") }}" class="text-decoration-none text-white"><i class="fas fa-question"></i>  Faq</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
</small>

<section class="mobile-middle-header d-sm-none d-block bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-6">
                <ul class="nav justify-content-center">
                    <li class="nav-link border-right">Email <span class="font-weight-bold"><i class="fas fa-envelope text-danger"></i> hdctc.bd@gmail.com</span></li>
                </ul>
            </div>
            <div class="col-sm-6 col-6">
                <ul class="nav justify-content-center">
                    <li class="nav-link border-left">Phone <span class="font-weight-bold"><i class="fas fa-mobile text-danger"></i> <br> 01406175101</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mobile-bottom-header bg-white d-sm-none d-block sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-6">
                <div class="header-logo">
                    <a href="/"><img src="{{ asset('/front/images/logo.png') }}" class="img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-sm-6 col-6">
                <ul class="nav justify-content-end pt-1">
                    <li class="nav-link btn bg-pink py-3" onclick="openNav()" id="sideMenuBtn"><a class="c-blue"><i class="fas fa-bars"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>