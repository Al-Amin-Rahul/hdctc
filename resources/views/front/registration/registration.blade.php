@extends('front.master')
@section('title')
    HDCTC - STUDENT REGISTER
@endsection
@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center bg-white pt-5 pb-1">
                        <h2 class="font-weight-bold">Human Development Computer Training Center</h2>
                        <span>Muktinagar, Shaghata, Gaibandha</span><br>
                        <span>Email- <u>hdctc.bd@gmail.com</u>, Website- <u>https://hdctc.com.bd</u></span>
                        <h2>Registration Form</h2>
                    </div>
                </div>
            </div>
            @include('message.message')
            <form action="{{ route("add-admission") }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap bg-white p-5">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn btn-link w-100 alert-danger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                ভাতা
                                                </a>
                                            </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="wrap ml-3">
                                                <input type="radio" value="1" name="vata" id="">বয়স্ক ভাতা <br>
                                                <input type="radio" value="2" name="vata" id="">বিধবা ভাতা<br>
                                                <input type="radio" value="3" name="vata" id="">মাতৃ কালীন ভাতা<br>
                                                <input type="radio" value="4" name="vata" id="">প্রতিবন্ধী ভাতা<br>
                                                <input type="radio" value="5" name="vata" id="">কিশোর কিশোরী ভাতা
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn btn-link collapsed w-100 alert-danger" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                মেডিকেল সুবিধা
                                                </a>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="wrap ml-3">
                                                <input type="radio" value="1" name="medical" id="">চক্ষু ক্যাম্প <br>
                                                <input type="radio" value="2" name="medical" id="">স্বাস্থ্য ক্যাম্প<br>
                                                <input type="radio" value="3" name="medical" id="">রক্তের গ্রুপ পরীক্ষা <br>
                                                <input type="radio" value="4" name="medical" id="">মাদক নিরাময় <br>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn btn-link collapsed w-100 alert-danger" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                পারিবারিক খামার
                                                </a>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="wrap ml-3">
                                                <input type="radio" value="1" name="paribarik" id="">হাঁস পালন<br>
                                                <input type="radio" value="2" name="paribarik" id="">মুরগী পালন <br>
                                                <input type="radio" value="3" name="paribarik" id="">ছাগল পালন<br>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn btn-link collapsed w-100 alert-danger" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                প্রশিক্ষণ
                                                </a>
                                            </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <div class="wrap ml-3">
                                                <input type="radio" value="1" name="prosikkhon" id="">কম্পিউটার প্রশিক্ষণ<br>
                                                <input type="radio" value="2" name="prosikkhon" id="">সেলাই প্রশিক্ষণ<br>
                                                <input type="radio" value="3" name="prosikkhon" id="">বিউটি পার্লার<br>
                                                <input type="radio" value="3" name="prosikkhon" id="">হস্ত ও কুটির শিল্প
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="alert alert-info">Personal Information</div>
                                    <div class="form-group row">
                                        <label for="studentName" class="col-lg-3">Name <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="student_name" class="form-control" value="{{ old("student_name") }}" id="studentName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-lg-3">Date Of Birth <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="date" name="dob" class="form-control" value="{{ old("dob") }}" id="dob">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-lg-3">Gender <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="radio" value="1" name="gender" id="gender" checked>Male
                                            <input type="radio" value="2" name="gender" id="gender">Female
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="studentEmail" class="col-lg-3">Email <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="email" name="student_email" value="{{ old("student_email") }}" class="form-control" id="studentEmail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="studentPhone" class="col-lg-3">Phone <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="number" name="student_phone" value="{{ old("student_phone") }}" class="form-control" id="studentPhone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="educationQ" class="col-lg-3">Education <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="radio" value="1" name="education" id="educationQ" checked>SSC
                                            <input type="radio" value="2" name="education" id="educationQ">HSC
                                        </div>
                                    </div>
                                    <div class="alert alert-info">Parents Information</div>
                                    <div class="form-group row">
                                        <label for="fatherName" class="col-lg-3">Father Name <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="father_name" value="{{ old("father_name") }}" class="form-control" id="fatherName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="motherName" class="col-lg-3">Mother Name <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="mother_name" value="{{ old("mother_name") }}" class="form-control" id="motherName">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="alert alert-info">Address</div>
                                    <div class="form-group row">
                                        <label for="selectDiv" class="col-lg-3">Division <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="division" id="selectDiv" class="form-control">
                                                <option >Select Division</option>
                                                @foreach($divisions as $division)
                                                    <option value="{{ $division->id }}">{{ $division->div_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="district" class="col-lg-3">District <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="district" id="district" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="thana" class="col-lg-3">Thana <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="thana" id="thana" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="union" class="col-lg-3">Union <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="union" id="union" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="post" class="col-lg-3">Post Code <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="number" name="post_code" value="{{ old("post_code") }}" class="form-control" id="post">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="alert alert-info">Payment Details</div>
                                    <div class="form-group row">
                                        <label for="cashDetails" class="col-lg-3">Cash Details (optional)</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="cash_details" value="{{ old("cash_details") }}" class="form-control" id="cashDetails">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bankDetails" class="col-lg-3">Bank Details (optional)</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="bank_details" value="{{ old("bank_details") }}" class="form-control" id="bankDetails">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Register" name="submit" class="btn btn-primary form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection