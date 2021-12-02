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
                    <tr>
                    <th scope="row"><img class="img-fluid" src="{{ asset('front/images/logo.png') }}" alt="" style="width:100px;"></th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a href="{{ route("job-details") }}" target="_blank">View More Details</a></td>
                    </tr>
                    <tr>
                    <th scope="row"><img class="img-fluid" src="{{ asset('front/images/logo.png') }}" alt="" style="width:100px;"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a href="{{ route("job-details") }}" target="_blank">View More Details</a></td>
                    </tr>
                    <tr>
                    <th scope="row"><img class="img-fluid" src="{{ asset('front/images/logo.png') }}" alt="" style="width:100px;"></th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td><a href="{{ route("job-details") }}" target="_blank">View More Details</a></td>
                    </tr>
                </tbody>
                </table>
        </div>
    </section>
@endsection