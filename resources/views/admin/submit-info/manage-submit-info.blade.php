@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Student Submit Info</li>
</ol>
@include('message.message')
<div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Union</th>
              <th>Channel</th>
              <th>Link</th>
              <th>Watch Time</th>
              <th>Total Sub</th>
              <th>Total View</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Union</th>
              <th>Channel</th>
              <th>Link</th>
              <th>Watch Time</th>
              <th>Total Sub</th>
              <th>Total View</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($sInfos as $sInfo)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $sInfo->name }}</td>
              <td>{{ $sInfo->phone }}</td>
              <td>{{ $sInfo->union }}</td>
              <td>{{ $sInfo->channel }}</td>
              <td>{{ $sInfo->link }}</td>
              <td>{{ $sInfo->watch_time }}</td>
              <td>{{ $sInfo->total_sub }}</td>
              <td>{{ $sInfo->total_view }}</td>
              <td>
                  <form action="{{route("admin.student-submit-info.destroy",['student_submit_info' => $sInfo->id])}}" method="post">
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