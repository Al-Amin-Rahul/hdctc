@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage student</li>
</ol>
@include('message.message')
<div class="card shadow mb-4">
    <div class="card-body">
      @if($union)
      <div class="alert alert-info">
        {{$union->union_name}}
      </div>
      @endif
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
              <td>{{ $student->student_name }}</td>
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
                <form action="{{ route("admin.update-student-status")}}" id="updateStudentStatus" method="post">
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
                  <a href="{{ route("admin.student.edit", ["student" => $student->id ]) }}" class="btn-circle btn-primary"><i class="fas fa-edit"></i></a></br></br>
                  {{-- <form action="{{route("admin.student.destroy",['student' => $student->id])}}" method="post">
                      @csrf
                      @method("DELETE")
                      <button class="btn-circle btn-danger" type="submit" onclick="return confirm('Are your sure')"><span class="fa fa-trash"></span></button>
                  </form> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection