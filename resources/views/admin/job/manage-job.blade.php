@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Job</li>
</ol>
@include('message.message')
<div class="card shadow mb-4">
      
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Short Name</th>
              <th>Organization Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Short Name</th>
              <th>Organization Name</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($jobs as $job)
            <tr>
              <td>{{ $i++ }}</td>
              <td><img src="{{ asset($job->image) }}" width="80" alt=""></td>
              <td>{{ $job->short_name }}</td>
              <td>{{ $job->organization_name }}</td>
              <td>
                <form action="{{route("admin.job.destroy",['job' => $job->id])}}" method="post">
                      @csrf
                      @method("DELETE")
                      <button class="btn-circle btn-danger" type="submit" onclick="return confirm('Are your sure')"><span class="fa fa-trash"></span></button>
                  </form>
                  <br>
                  <a href="{{ route("admin.job-application",['id' => $job->id]) }}">View Applications</a>
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