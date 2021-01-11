<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\AdmissionForm;
use App\StudentRegister;
use Illuminate\Http\Request;
use Session;
class DashboardController extends Controller
{
    public function index()
    {
        $code   =   Session::get('refer_code');
        $data['student']    =   AdmissionForm::where('refer_code', $code)->first();
        $data['photo']      =   StudentRegister::select('photo')->where('refer_code', $code)->first();
        return view('front.dashboard.dashboard', $data);
    }
}
