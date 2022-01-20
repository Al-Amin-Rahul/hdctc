@extends('front.master')

@section('title')
HDCTC - CONTACT
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="alert alert-light c-blue font-weight-bold">
                Contact Us
            </div>
            @include('message.message')
            <div class="row">
                <div class="col-lg-4 pb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap shadow p-3 bg-yellow rounded">
                                <div class="icon"><i class="fas fa-home c-pink fa-2x"></i></div>
                                <div class="address font-weight-bold">Shaghata, Gaibandha</div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-12">
                            <div class="wrap shadow p-3 bg-purple rounded">
                                <div class="icon"><i class="fas fa-envelope c-pink fa-2x"></i></div>
                                <div class="email font-weight-bold text-white">hdctc.bd@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-12">
                            <div class="wrap shadow p-3 bg-green rounded">
                                <div class="icon"><i class="fas fa-globe c-pink fa-2x"></i></div>
                                <div class="email font-weight-bold text-white">www.hdctc.com.bd</div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-12">
                            <div class="wrap shadow p-3 bg-deepblue rounded">
                                <div class="icon"><i class="fas fa-mobile c-pink fa-2x"></i></div>
                                <div class="phone font-weight-bold text-white">+88 01939244833</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="alert bg-green">Drop A Line</div>
                    <form class="form-group bg-white p-3 shadow rounded" method="post" action="{{ route("submit-contact") }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="3" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="form-control btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection