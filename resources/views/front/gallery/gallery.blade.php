@extends('front.master')

@section('title')
HDCTC - GALLERY
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="alert alert-light c-blue font-weight-bold">
                Gallery
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap shadow bg-pink p-3 bangla">
                        <div class="row">
                        @foreach($images as $image)
                            <div class="col-lg-3">
                                <a class='sample' data-height='720' data-lighter='samples/sample-01.jpg' data-width='1280'
                                href='{{asset($image->image)}}'>
                                <img src="{{asset($image->image)}}" title="Click" class="d-block w-100 img-thumbnail" alt=""></a>
                                <div class="title text-justify text-dark shadow list-group-item">{{ $image->title }}</div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection