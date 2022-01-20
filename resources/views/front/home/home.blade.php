@extends('front.master')

@section('title')
    HDCTC - HOME
@endsection

@section('meta')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection
@section('body')
<section class="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            
                <div id="carouselChange" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="carousel-inner">
                        @foreach($sliders as $slider)
                        <div class="carousel-item {{ $slider->active }} bangla">
                            <img src="{{asset($slider->slider_image)}}" class="d-block w-100" alt="..." height="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="display-4 font-weight-bolder">{{ $slider->title }}</h5>
                                <p>{{ $slider->short_description }}</p>
                            </div>
                        </div>
                        @endforeach
                        @if($news)
                        <div class="ticker-hd position-absolute  font-weight-bold bangla">
                            <span class="badge bg-white p-2">{{ $news->title }}</span>
                        </div>
                        <div class="ticker position-absolute w-100 font-weight-bold text-white bangla">
                            <marquee behavior="" direction="rtl">{{ $news->short_description }}</marquee>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-n5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 pb-md-0 pb-lg-0 pb-5">
                <div class="wrap shadow bg-pink p-5 rounded">
                    <a href="{{ route("registration") }}" class="text-decoration-none text-white">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="icon text-right">
                                    <i class="fa-2x fas fa-mouse"></i>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">
                                <div class="title font-weight-bold">APPLY ONLINE</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="wrap shadow bg-primary p-5 rounded">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-2">
                            <div class="icon text-right">
                                <i class="fa-2x fas fa-download"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-10">
                            <div class="title download font-weight-bold">DOWNLOAD PROSPECTS
                                <table class="table table-dark d-none position-absolute sub-menu">
                                    <tbody>
                                        @if ($prospects)
                                            @php($i=1)
                                            @foreach ($prospects as $prospect)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>Sample</td>
                                                    <td><a href="{{ asset($prospect->prospect) }}" download="">Download</a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pb-lg-0 pb-md-0 pb-3">
                <div class="wrap shadow border-radius-99 text-center p-3 bg-purple text-white">
                    <div class="icon"><i class="fas fa-birthday-cake fa-2x"></i></div>
                    <div class="description">1 year Of Journey</div>
                </div>
            </div>
            <div class="col-lg-4 pb-lg-0 pb-md-0 pb-3">
                <div class="wrap shadow border-radius-99 text-center p-3 bg-purple text-white">
                    <div class="icon "><i class="fas fa-user-graduate fa-2x"></i></div>
                    <div class="description">3000+ Trained Student</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wrap shadow border-radius-99 text-center p-3 bg-purple text-white">
                    <div class="icon "><i class="fas fa-chalkboard-teacher fa-2x"></i></div>
                    <div class="description">50+ Expert Trainers</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrap bg-secondary text-white p-5 shadow-sm rounded">
                    <div class="title heading-2 font-weight-bold">Registration</div>
                    <div class="description text-justify bangla">আয়ের সর্ববৃহৎ প্ল্যাটফর্ম এর যোগ দিন এবং বেকার মুক্ত সমাজ গঠনে ভূমিকা রাখুক।</div>
                    <br>
                    <a href="{{ route("registration") }}" class="btn btn-outline-warning font-weight-bold">Registration <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="facility pt-5">
    <div class="container">
        <h2 class="text-center font-weight-bold bg-green p-3 shadow rounded">Our Facilities</h2>
        <div class="row">
            <div class="col-lg-6 pb-lg-0 pb-md-0 pb-3">
                <div class="shadow border-radius-99 bg-white p-5">
                    <div class="icon text-center text-primary"><i class="fas fa-headphones fa-2x"></i></div>
                    <div class="title h4 font-weight-bold text-center text-success">24/7 Online Support</div>
                    <div class="description text-justify">24/7 Online Support- We always listen to our students. Any time they are in a problem, our team is always online for providing support to them. Even at night, we are online for your projects ongoing.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shadow border-radius-99 bg-white p-5">
                    <div class="icon text-center text-primary"><i class="fas fa-laptop fa-2x"></i></div>
                    <div class="title h4 font-weight-bold text-center text-success">Practice Lab Support</div>
                    <div class="description text-justify">We offer Practice Lab facilities for weak students where they can practice the task and be able to hold the attention by solving what is not understood by them.</div><br>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-lg-6 pb-lg-0 pb-md-0 pb-3">
                <div class="shadow border-radius-99 bg-white p-5">
                    <div class="icon text-center text-primary"><i class="fas fa-video fa-2x"></i></div>
                    <div class="title h4 font-weight-bold text-center text-success">Class Video</div>
                    <div class="description text-justify">Get the recorded lectures and class practical as video. It will create a good storage of materials for future. And you can practice at home with the help of these materials.</div><br>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shadow border-radius-99 bg-white p-5">
                    <div class="icon text-center text-primary"><i class="fas fa-user-graduate fa-2x"></i></div>
                    <div class="title h4 font-weight-bold text-center text-success">Review Class</div>
                    <div class="description text-justify">Ensure 100% learning of tools, techniques, designs by our review classes for each batch. Better understand the difficult terms by revising every topic.</div><br>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="students-say pt-5 pb-5">
    <div class="container">
        <h2 class="text-center font-weight-bold bg-green p-3 shadow rounded">Our Member's Say</h2>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($testimonials as $testimonial)
                <div class="item shadow border-radius-99 bg-white">
                    <div class="p-5 bangla">
                        <div class="image text-center"><img src="{{ asset($testimonial->image) }}" width="200px" alt="Client"></div>
                        <div class="name text-center font-weight-bold text-primary h4">{{ $testimonial->name }}</div>
                        <div class="title text-center font-weight-bold">{{ $testimonial->work_title }}</div>
                        <div class="comment text-justify">{{ $testimonial->comment }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection