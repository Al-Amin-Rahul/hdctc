<div class="wrap shadow rounded" id="student-menu">
    <ul class="list-group">
        <a href="{{ route("student-dashboard") }}"><li class="list-group-item bg-green border-rds text-center text-white font-weight-bolder">Welcome {{ Session::get('student_name') }}</li> <br></a>
        <a class="text-white text-center" href="{{ route("student-profile") }}"><li class="list-group-item bg-dark border-rds">Profile</li></a>
        <a class="text-white text-center" href="{{ route("daily-work-sheet") }}"><li class="list-group-item bg-dark border-rds">Daily Work Sheet</li></a>
        <a class="text-white text-center" href="{{ route("submit-information") }}"><li class="list-group-item bg-dark border-rds">Submit Information</li></a>
        <a href="{{ route("student-logout") }}" class="text-white text-center"><li class="list-group-item bg-dark border-rds">Log Out</li></a>
    </ul>
</div>