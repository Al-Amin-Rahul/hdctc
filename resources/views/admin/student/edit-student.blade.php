@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Student</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{ route("admin.student.update", ['student' => $student->id])}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group row">
                        <label for="studentName" class="col-lg-3">Student Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="student_name" value="{{ $student->student_name }}" class="form-control" id="studentName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="refer" class="col-lg-3">Refer Code</label>
                        <div class="col-lg-9">
                            <input type="text" name="refer_code" value="{{ $student->refer_code }}" class="form-control" id="refer">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob" class="col-lg-3">Date Of Birth</label>
                        <div class="col-lg-9">
                            <input type="date" name="dob" value="{{ $student->dob }}" class="form-control" id="dob">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-lg-3">Gender</label>
                        <div class="col-lg-9">
                            <input type="radio" value="1" name="gender" id="gender" {{$student->gender == 1 ? 'checked':''}}>Male
                            <input type="radio" value="2" name="gender" id="gender" {{$student->gender == 2 ? 'checked':''}}>Female
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="studentEmail" class="col-lg-3">Email</label>
                        <div class="col-lg-9">
                            <input type="email" name="student_email" value="{{ $student->student_email }}" class="form-control" id="studentEmail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="studentPhone" class="col-lg-3">Phone</label>
                        <div class="col-lg-9">
                            <input type="number" name="student_phone" value="{{ $student->student_phone }}" class="form-control" id="studentPhone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="educationQ" class="col-lg-3">Education Qualification</label>
                        <div class="col-lg-9">
                            <input type="radio" value="1" name="education" id="educationQ" {{$student->education == 1 ? 'checked':''}}>SSC
                            <input type="radio" value="2" name="education" id="educationQ" {{$student->education == 2 ? 'checked':''}}>HSC
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fatherName" class="col-lg-3">Father Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="father_name" value="{{ $student->father_name }}" class="form-control" id="fatherName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="motherName" class="col-lg-3">Mother Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="mother_name" value="{{ $student->mother_name }}" class="form-control" id="motherName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="selectDiv" class="col-lg-3">Division</label>
                        <div class="col-lg-9">
                            <select name="division" id="selectDiv" class="form-control">
                                <option selected="true" disabled="disabled">Select Division</option>
                                @foreach($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $s_div   ==  $division->id ? 'selected':''}}>{{ $division->div_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="district" class="col-lg-3">District</label>
                        <div class="col-lg-9">
                            <select name="district" id="district" class="form-control">
                                <option selected="true" disabled="disabled">Select District</option>
                                @foreach($districts as $district)
                                    <option value="{{ $district->id }}" {{ $s_dis   ==  $district->id ? 'selected':''}}>{{ $district->dis_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thana" class="col-lg-3">Thana</label>
                        <div class="col-lg-9">
                            <select name="thana" id="thana" class="form-control">
                                <option selected="true" disabled="disabled">Select Thana</option>
                                @foreach($thanas as $thana)
                                    <option value="{{ $thana->id }}" {{ $s_thana   ==  $thana->id ? 'selected':''}}>{{ $thana->thana_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="union" class="col-lg-3">Union</label>
                        <div class="col-lg-9">
                            <select name="union" id="union" class="form-control">
                                <option selected="true" disabled="disabled">Select Union</option>
                                @foreach($unions as $union)
                                    <option value="{{ $union->id }}" {{ $s_union   ==  $union->id ? 'selected':''}}>{{ $union->union_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="post" class="col-lg-3">Post Code</label>
                        <div class="col-lg-9">
                            <input type="number" name="post_code" value="{{ $student->post_code }}" class="form-control" id="post">
                        </div>
                    </div>
                    <input type="submit" value="Update" name="submit" class="btn btn-primary form-control">
                </form>
            </div>
        </div>
    </div>
@endsection