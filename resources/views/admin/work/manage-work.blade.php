@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Work</li>
</ol>
@include('message.message')
<div class="card shadow mb-4">
    <div class="card-body">
    <div class="delete-all py-3">
    <form action="{{route("admin.work.destroy",['work' => 1])}}" method="post">
        @csrf
        @method("DELETE")
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are your sure')">Delete All</button>
    </form>
    </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Work Link</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>No</th>
                <th>Work Link</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($works as $work)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $work->work_link }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection