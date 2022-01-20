@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Success Application</li>
</ol>
@include('message.message')
<div class="card shadow mb-4" id="showApp">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Job Name</th>
              <th>Refer Code</th>
              <th>Name</th>
              <th>Father Name</th>
              <th>Mother Name</th>
              <th>NID</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Job Name</th>
              <th>Refer Code</th>
              <th>Name</th>
              <th>Father Name</th>
              <th>Mother Name</th>
              <th>NID</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($apps as $app)
            <tr>
              <td>{{ $i++ }}</td>
              <td><img src="{{ asset($app->image) }}" width="80" alt=""></td>
              <td>{{ $app->job_id }}</td>
              <td>{{ $app->refer_code }}</td>
              <td>{{ $app->applicants_name }}</td>
              <td>{{ $app->fathers_name }}</td>
              <td>{{ $app->mothers_name }}</td>
              <td>{{ $app->nid }}</td>
              <td>{{ $app->phone }}</td>
              <td>{{ $app->email }}</td>
              <td>
                <a href="{{ route("admin.job.show", ["job" => $app->id ]) }}" class="btn-circle btn-primary"><i class="fas fa-edit"></i></a></br></br>
                <a href="{{ route("admin.delete-app", ["id" => $app->id ]) }}" class="btn-circle btn-danger"><i class="fas fa-trash"></i></a></br></br>
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