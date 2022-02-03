@extends('front.master')

@section('title')
    HDCTC - Apply Online
@endsection

@section('body')
    <section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    @include('message.message')
                    <form action="{{ route('submit-application') }}" method="post" class="bg-white p-3" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $id }}">
                        <div class="form-group row">
                            <label for="applicantsName" class="col-lg-3">Applicant's Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="applicants_name" class="form-control" value="{{ old("applicants_name") }}" id="applicantsName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fathersName" class="col-lg-3">Father's Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="fathers_name" class="form-control" value="{{ old("fathers_name") }}" id="fathersName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mothersName" class="col-lg-3">Mother's Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="mothers_name" class="form-control" value="{{ old("mothers_name") }}" id="mothersName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nid" class="col-lg-3">NID <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="number" name="nid" class="form-control" value="{{ old("nid") }}" id="nid">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-lg-3">Phone Number <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="number" name="phone" class="form-control" value="{{ old("phone") }}" id="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-lg-3">Email <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" value="{{ old("email") }}" id="email">
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
                                <input type="radio" value="Male" name="gender" id="gender" checked>Male
                                <input type="radio" value="Female" name="gender" id="gender">Female
                                <input type="radio" value="Others" name="gender" id="gender">Others
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="religion" class="col-lg-3">Religion <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="religion" id="" class="form-control">
                                    <option selected="true" disabled>Select Option</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maritialStatus" class="col-lg-3">Maritial Status <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="radio" value="Married" name="maritial" id="maritial" checked>Married
                                <input type="radio" value="Single" name="maritial" id="maritial">Single
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-lg-3">Image(2*2 Inches)<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="file" name="photo" class="form-control" id="">
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-lg-6">
                                <div class="alert alert-dark">Present Address</div>
                                <div class="form-group row">
                                    <label for="careOf" class="col-lg-3">Care Of <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" name="care_of" class="form-control" value="{{ old("care_of") }}" id="careOf">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-lg-3">Village/Town<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" name="address" class="form-control" value="{{ old("address") }}" id="address">
                                    </div>
                                </div>
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
                            </div>
                            <div class="col-lg-6">
                                <div class="alert alert-dark">Permenent Address</div>
                                <div class="form-group row">
                                    <label for="careOf" class="col-lg-3">Care Of <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" name="care_of_p" class="form-control" value="{{ old("care_of_p") }}" id="careOf">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-lg-3">Village/Town<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" name="address_p" class="form-control" value="{{ old("address_p") }}" id="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="selectDivP" class="col-lg-3">Division <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="division_p" id="selectDivP" class="form-control">
                                            <option >Select Division</option>
                                            @foreach($divisions as $division)
                                                <option value="{{ $division->id }}">{{ $division->div_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="districtP" class="col-lg-3">District <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="district_p" id="districtP" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="thanaP" class="col-lg-3">Thana <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="thana_p" id="thanaP" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="unionP" class="col-lg-3">Union <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="union_p" id="unionP" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post" class="col-lg-3">Post Code <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="number" name="post_code_p" value="{{ old("post_code_p") }}" class="form-control" id="post">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dark">SSC Or Equivalent Level</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="exam" class="col-lg-3">Examination</label>
                                    <div class="col-lg-9">
                                        <select name="exam" id="exam" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="SSC">SSC</option>
                                            <option value="Dakhil">Dakhil</option>
                                            <option value="SSC Vocational">SSC Vocational</option>
                                            <option value="BTEB">BTEB</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="board" class="col-lg-3">Board</label>
                                    <div class="col-lg-9">
                                        <select name="board" id="board" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Cumilla">Cumilla</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Jashore">Jashore</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Dinajpur">Dinajpur</option>
                                            <option value="Madrasah">Madrasah</option>
                                            <option value="Open Univarsity">Open Univarsity</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="BTEB">Bangladesh Technical Education Board (BTEB)</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="roll" class="col-lg-3">Roll No</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="roll" value="{{ old("roll") }}" class="form-control" id="roll">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="result" class="col-lg-3">Result</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="result" value="{{ old("result") }}" class="form-control" id="result">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="group" class="col-lg-3">Group</label>
                                    <div class="col-lg-9">
                                        <select name="group" id="group" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="Science">Science</option>
                                            <option value="Humanites">Humanites</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pass_year" class="col-lg-3">Passing Year</label>
                                    <div class="col-lg-9">
                                        <select name="pass_year" id="pass_year" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dark">HSC Or Equivalent Level</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="hscexam" class="col-lg-3">Examination</label>
                                    <div class="col-lg-9">
                                        <select name="hsc_exam" id="hscexam" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="HSC">HSC</option>
                                            <option value="Alim">Alim</option>
                                            <option value="Business Management">Business Management</option>
                                            <option value="Diploma Engineering">Diploma Engineering</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hscboard" class="col-lg-3">Board</label>
                                    <div class="col-lg-9">
                                        <select name="hsc_board" id="hscboard" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Cumilla">Cumilla</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Jashore">Jashore</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Dinajpur">Dinajpur</option>
                                            <option value="Madrasah">Madrasah</option>
                                            <option value="Open Univarsity">Open Univarsity</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="BTEB">Bangladesh Technical Education Board (BTEB)</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hscroll" class="col-lg-3">Roll No</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="hsc_roll" value="{{ old("hsc_roll") }}" class="form-control" id="hscroll">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="hscresult" class="col-lg-3">Result</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="hsc_result" value="{{ old("hsc_result") }}" class="form-control" id="hscresult">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hscgroup" class="col-lg-3">Group</label>
                                    <div class="col-lg-9">
                                        <select name="hsc_group" id="hscgroup" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="Science">Science</option>
                                            <option value="Humanites">Humanites</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hsc_pass_year" class="col-lg-3">Passing Year</label>
                                    <div class="col-lg-9">
                                        <select name="hsc_pass_year" id="hsc_pass_year" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dark">Graduation Or Equivalent Level</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="graduation_exam" class="col-lg-3">Examination</label>
                                    <div class="col-lg-9">
                                        <select name="graduation_exam" id="graduation_exam" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="B.Sc Engineering">B.Sc Engineering</option>
                                            <option value="B.Sc In Agriculture Science">B.Sc In Agriculture Science</option>
                                            <option value="M.B.B.S/B.D.S">M.B.B.S/B.D.S</option>
                                            <option value="Honours">Honours</option>
                                            <option value="B.B.A">B.B.A</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="graduation_board" class="col-lg-3">University Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="graduation_board" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="graduation_roll" class="col-lg-3">Roll No</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="graduation_roll" value="{{ old("graduation_roll") }}" class="form-control" id="graduation_roll">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="graduation_result" class="col-lg-3">Result</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="graduation_result" value="{{ old("graduation_result") }}" class="form-control" id="graduation_result">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="graduation_group" class="col-lg-3">Subject</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="graduation_group" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="graduation_pass_year" class="col-lg-3">Passing Year</label>
                                    <div class="col-lg-9">
                                        <select name="graduation_pass_year" id="graduation_pass_year" class="form-control">
                                            <option selected="true" disabled>Select</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="form-control btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection