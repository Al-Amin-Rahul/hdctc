@extends('front.master')

@section('title')
HDCTC - Manage Student
@endsection

@section('body')
<div class="container pt-5">
@include('message.message')
<div class="card shadow mb-4" id="showStudentFront">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body border border-dark">
          <div class="alert alert-dark">Print Union Student</div>
          <form action="{{route("search-union-student")}}" method="POST">
            @csrf
              <div class="row">
                  <div class="col-lg-3">
                    <select name="district" id="selectDis" class="form-control" required>
                        <option selected="true" disabled="disabled">Select District</option>
                        @foreach($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->dis_name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <select name="thana" id="thana" class="form-control" required></select>
                  </div>
                  <div class="col-lg-3">
                    <select name="union" id="union" class="form-control" required></select>
                  </div>
                  <div class="col-lg-6 pt-3">
                    <input type="date" name="first_date" id="" class="form-control">
                  </div>
                  <div class="col-lg-6 pt-3">
                    <input type="date" name="last_date" id="" class="form-control">
                  </div>
                  <div class="col-lg-12 pt-3">
                    <select name="choice" id="" class="form-control">
                      <option selected="true" disabled="disabled">Select Option</option>
                      <option value="print">Print</option>
                      <option value="search">Search</option>
                    </select>
                  </div>
              </div>
              <br>
              <input type="submit" value="Print Union Student" class="form-control btn btn-primary">
          </form>
      </div>
      </div>
      <div class="col-lg-4">
          <div class="card-body border border-primary">
            <div class="alert alert-dark">Search By Phone</div>
            <form action="{{ route("search-student") }}" method="POST">
              @csrf
              <input type="search" name="phone" class="form-control" placeholder="Enter Phone.." id="" required>
            </form>
          </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Student Name</th>
              <th>Refer Code</th>
              <th>DOB</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Education</th>
              <th>Father</th>
              <th>Mother</th>
              <th>Division</th>
              <th>District</th>
              <th>Thana</th>
              <th>Union</th>
              <th>Post Code</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Student Name</th>
              <th>Refer Code</th>
              <th>DOB</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Education</th>
              <th>Father</th>
              <th>Mother</th>
              <th>Division</th>
              <th>District</th>
              <th>Thana</th>
              <th>Union</th>
              <th>Post Code</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($students as $student)
            <tr>
              <td>{{ $i++ }}</td>
              <td><img src="{{ asset($student->image) }}" width="80" alt=""></td>
              <td>{{ $student->	student_name }}</td>
              <td>{{ $student->refer_code }}</td>
              <td>{{ $student->dob }}</td>
              <td>{{ $student->gender }}</td>
              <td>{{ $student->student_email }}</td>
              <td>{{ $student->student_phone }}</td>
              <td>{{ $student->education }}</td>
              <td>{{ $student->father_name }}</td>
              <td>{{ $student->mother_name }}</td>
              <td>{{ $student->division }}</td>
              <td>{{ $student->district }}</td>
              <td>{{ $student->thana }}</td>
              <td>{{ $student->union }}</td>
              <td>{{ $student->post_code }}</td>
              <td>
                <form action="{{ route("update-student-status")}}" id="updateStudentStatusFront" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{ $student->id }}">
                    <select name="status" id="">
                      <option value="{{ $student->status }}">{{ $student->status }}</option>
                      <option value="Success">Success</option>
                      <option value="pending">Pending</option>
                  </select>
                  <hr>
                  <input class="btn btn-primary btn-sm btn-block" type="submit" name="update" value="Update" >
                </form>
              </td>
              <td>
                  <a href="{{ route("delete-student", ["id" => $student->id ]) }}" class="btn-circle btn-danger" onclick="return confirm('Are your sure')"><i class="fas fa-trash"></i></a>
                  <a href="{{ route("download-pdf", ["id" => $student->id ]) }}" class="btn-circle btn-warning"><i class="fas fa-download"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div id="ShowFront" data-url="{{ url('show-student-front') }}"></div>
@endsection