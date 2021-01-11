@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Image</li>
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
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($contacts as $contact)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->phone }}</td>
              <td>{{ $contact->message }}</td>
              <td>
                  <!-- <a href="{{ route("admin.contact.edit", ["contact" => $contact->id ]) }}" class="btn btn-primary">Reply</a></br></br> -->
                  <form action="{{route("admin.contact.destroy",['contact' => $contact->id])}}" method="post">
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