@extends('front.master')

@section('title')
    HDCTC - STUDENT COPY
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            @include('message.message')
            <div class="alert alert-light c-blue font-weight-bold">
                Student Copy
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap bg-dark text-white p-5 shadow-sm rounded">
                        <div class="title display-4 font-weight-bold">Student Copy</div>
                        <br>
                        <div class="shadow rounded table-responsive bg-warning text-dark" id="printContent">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>
                                        @if(session()->has("name"))
                                            {{ session("name") }}
                                        @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Refer Code</th>
                                        <th>
                                        @if(session()->has("code"))
                                            {{ session("code") }}
                                        @endif
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <br>
                        <a href="{{ route("download-reciept") }}" class="btn btn-outline-warning font-weight-bold">Download Copy <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection