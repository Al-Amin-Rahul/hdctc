@extends('front.master')

@section('title')
    HDCTC - SIGN UP
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            @include('message.message')
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="wrap shadow rounded bg-white p-3">
                        <form action="{{ route("submit-register") }}" method="post">
                            @csrf
                            <div class="title text-center font-weight-bold display-4 c-pink">SignUp</div>
                            <div class="form-group pt-3">
                                <label for="code">Refer Code</label>
                                <input type="text" class="form-control" name="refer_code" id="code">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="form-control btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection