@extends('front.master')

@section('title')
    HOME - WORK SHEET
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-3 pb-lg-0 pb-md-0 pb-5">
                    <x-student-dashboard/>
                </div>
                <div class="col-lg-9">
                    <div class="shadow rounded table-responsive bg-white text-dark">
                        <table class="table">
                            <thead>
                                <tr class="">
                                    <th>Daily Working Hour</th>
                                    <th> {{ $length*10 }} Minuite</th>
                                </tr>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Link</th>
                                </tr>
                                @php( $i=1 )
                                @foreach( $unions as $union )
                                    @foreach( $union->works as $work )
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><a href="{{ $work->work_link }}" target="_blank">{{ $work->work_link }}</a></td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection