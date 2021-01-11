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
      <div class="col-lg-4">
          <div class="card-body border border-primary">
            <div class="alert alert-dark">Search By Student Email</div>
            <form action="{{ route("admin.search-register-student") }}" method="POST">
              @csrf
              <input type="search" name="email" class="form-control" placeholder="Enter Email..." id="" required>
            </form>
          </div>
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Student Name</th>
              <th>Refer Code</th>
              <th>Email</th>
              <th>Channel</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Student Name</th>
              <th>Refer Code</th>
              <th>Email</th>
              <th>Channel</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($students as $student)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->refer_code }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->channel }}</td>
              <td><img src="{{ asset($student->photo) }}" width="80" alt=""></td>
              <td>
                <form action="{{ route("admin.student-register.update", ['student_register' => $student->id])}}" method="post">
                    @csrf
                    @method('PUT')
                        <select name="status" id="">
                        <option value="{{ $student->status }}">{{ $student->status }}</option>
                        <option value="Success">Success</option>
                        <option value="Pending">Pending</option>
                    </select>
                    <hr>
                    <input class="btn btn-primary btn-sm btn-block" type="submit" name="update" value="Update" >
                    </form>
              </td>
              <td>
                <form action="{{route("admin.student-register.destroy",['student_register' => $student->id])}}" method="post">
                      @csrf
                      @method("DELETE")
                      <button class="btn-circle btn-danger" type="submit" onclick="return confirm('Are your sure')"><span class="fa fa-trash"></span></button>
                  </form>
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