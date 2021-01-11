@extends('front.master')

@section('title')
HDCTC - LOGIN
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            @include('message.message')
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="wrap shadow rounded bg-white p-3">
                        <form action="{{ route("submit-login") }}" method="post">
                            @csrf
                            <div class="title text-center font-weight-bold display-4 c-pink">Login</div>
                            <div class="form-group pt-3">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="name">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="form-control btn btn-outline-primary">
                            </div>
                            <small><span>Don't Have An Account <a href="{{ route("student-signup") }}">SignUp</a></span></small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection