<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="nav">
        <li class="nav-link"><a href="/" class="text-white"><i class="fas fa-home text-dark"></i> Home</a></li>
        <li class="nav-link"><a href="{{ route("about-us") }}" class="text-white"><i class="fas fa-user text-dark"></i> About</a></li>
        <li class="nav-link"><a href="{{ route("gallery") }}" class="text-white"><i class="fas fa-image text-dark"></i> Gallery</a></li>
        <li class="nav-link"><a href="#" class="text-white"><i class="fas fa-book text-dark"></i> Course <i class="fas fa-angle-down"></i></a>
            <ul class="nav d-none sub-menu bg-dark">
                @foreach($courses as $course)
                    <li class="nav-link"><a class="text-white" href="{{ route("course-details", ['id' => $course->id]) }}"><i class="fas fa-book text-light"></i> {{ $course->name }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="nav-link"><a href="#" class="text-white"><i class="fas fa-link text-dark"></i> Service <i class="fas fa-angle-down"></i></a>
            <ul class="nav d-none sub-menu bg-dark">
                <li class="nav-link"><a class="text-white" href="{{ route("vata") }}"><i class="fas fa-book text-light"></i>ভাতা</a></li>
            </ul>
        </li>
        <li class="nav-link"><a href="{{ route("career") }}" class="text-white"><i class="fas fa-link text-dark"></i> Career</a></li>
        <li class="nav-link"><a href="{{ route("registration") }}" class="text-white"><i class="text-dark fas fa-address-card"></i> Registration</a></li>
        <li class="nav-link"><a href="{{ route("contact-us") }}" class="text-white"><i class="fas fa-mobile text-dark"></i> Contact</a></li>
        @if(Session::get('student_id'))
        <li class="nav-link"><a href="{{ route("student-dashboard") }}" class="text-white"><i class="fas fa-bars text-dark"></i> Dashboard</a></li>
        @endif
    </ul>
</div>