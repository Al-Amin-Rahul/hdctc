@extends('front.master')

@section('title')
    HDCTC - Job Details
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="bg-white p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title">
                                    <h2 class="font-weight-bold">Mechanical Engineer (B.Sc)</h2>
                                    <h4>Tushar Ceramics Limited</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('front/images/logo.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="vacancy mt-5">
                                    <h5 class="font-weight-bold">Vacancy</h5>
                                    <span>Not Specific</span>
                                </div>
                                <div class="job-context mt-5">
                                    <h5 class="font-weight-bold">Job Context</h5>
                                    <div class="ml-3">
                                        <span>- We are looking for B.Sc in Mechanical Engineering from any reputed University & Diploma in Mechanical Engineering from reputed institution for Tushar Ceramics Ltd., at Factory: Village- Sharatola, Post: Khalishpur, Moheshpur, Jhenaidah.</span><br>
                                        <span>- Job Location : Job Location- Factory: Village- Sharatola, Post: Khalishpur, Moheshpur, Jhenaidah</span>
                                    </div>
                                </div>
                                <div class="responsibilities">
                                    <h5 class="font-weight-bold">Job Responsibilities</h5>
                                    <div class="ml-3">
                                        <span>- Plans, organizes, and coordinates planning activities.</span><br>
                                        <span>- Selects the most appropriate techniques and logical sequence of activities to complete project scope.</span> <br>
                                        <span>- Maintain and record update of site work progress obtained from Project Manager.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection