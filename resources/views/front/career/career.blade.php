@extends('front.master')

@section('title')
    HDCTC - Career
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Short Name</th>
                    <th scope="col">Organization Name</th>
                    <th scope="col">WebLink</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    <tr>
                        <th scope="row"><img class="img-fluid" src="{{ asset($job->image) }}" alt="" style="width:100px;"></th>
                        <td>{{ $job->short_name }}</td>
                        <td>{{ $job->organization_name }}</td>
                        <td><a href="{{ route("job-details", ['id' => $job->id]) }}" target="_blank">View More Details</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </section>
@endsection