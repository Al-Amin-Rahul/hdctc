<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\District;
use App\Division;
use App\Thana;
use App\Union;
use App\Work;
use App\Contact;
use App\Image;
use App\Slider;
use App\NewsTicker;
use App\Testimonial;
use App\Prospect;
use App\Course;
use App\CourseDetail;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public $description    =   'উদ্যোক্তাদের জন্য HDCTC একটি প্লাটফ্রম তৈরি করে বাংলাদেশের বেকার ছাত্র-ছাত্রীদের সামনে এগিয়ে নিয়ে যাওয়া';
    public $metaTitle      =   'HDCTC - Human Development Computer Training Center';
    
    public function index()
    {
        $data['prospects']       =   Prospect::all();
        $data['testimonials']   =   Testimonial::all();
        $data['sliders']        =   Slider::where('publication_status',1)->get();
        $data['news']           =   NewsTicker::first();

        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('HDCTC - Human Development Computer Training Center');
        SEOMeta::setCanonical(URL::current());

        OpenGraph::addProperty('fb:app_id', '110079830845589');
        OpenGraph::setTitle($this->metaTitle);
        OpenGraph::setDescription($this->description);
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://hdctc.com.bd/front/images/slider1.jpg');
        OpenGraph::addProperty('site_name', 'HDCTC');
        OpenGraph::addProperty('locale', 'en_US');
        OpenGraph::addProperty('author', 'HDCTC');

        return view('front.home.home', $data);
    }
    public function aboutUs()
    {
        return view('front.about.about');
    }
    public function contacttUs()
    {
        return view('front.contact.contact');
    }
    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"     => "required",
            "phone"    => "required",
            "message"  => "required"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $contact = new Contact();
            $contact->insertContact($request);
            return redirect()->back()->with('message', 'Your Information Submitted');
        }
    }
    public function faq()
    {
        return view('front.faq.faq');
    }
    public function gallery()
    {
        $data['images'] =   Image::where('publication_status', 1)->get();
        return view('front.gallery.gallery', $data);
    }
    public function courseDetails($id)
    {
        $data['course']    =    CourseDetail::where("course_id", $id)->first();
        return view('front.course-details.course-details', $data);
    }
    public function registration()
    {
        $data['divisions']   =   Division::all();
        $data['courses']     =    Course::all();
        return view('front.registration.registration', $data);
    }
    public function getDistrict($id)
    {
        $district   =   District::where('div_id', $id)->get();
        return response()->json($district);
    }
    public function getThana($id)
    {
        $thana   =   Thana::where('dis_id', $id)->get();
        return response()->json($thana);
    }
    public function getUnion($id)
    {
        $thana   =   Union::where('thana_id', $id)->get();
        return response()->json($thana);
    }
    public function getMulDistrict($id)
    {
        $key = explode(',', $id);
        $district   =   District::whereIn('div_id', $key)->get();
        return response()->json($district);
    }
    public function getMulThana($id)
    {
        $key = explode(',', $id);
        $thana   =   Thana::whereIn('dis_id', $key)->get();
        return response()->json($thana);
    }
    public function getMulUnion($id)
    {
        $key = explode(',', $id);
        $union   =   Union::whereIn('thana_id', $key)->get();
        return response()->json($union);
    }

    public function securityPolicy()
    {
        return view('front.service.security-policy');
    }
    public function privacyPolicy()
    {
        return view('front.service.privacy-policy');
    }
    public function termsOfUse()
    {
        return view('front.service.terms-of-use');
    }
    public function vata()
    {
        return view('front.service.vata');
    }
    public function career()
    {
        $data['jobs']   =   Job::all();
        return view('front.career.career', $data);
    }
    public function jobDetails($id)
    {
        $data['job']    =   Job::where('id',$id)->first();
        return view('front.career.job-details', $data);
    }
    public function applyOnline($id)
    {
        $data['id']          =  $id;
        $data['divisions']   =   Division::all();
        return view('front.career.apply-now', $data);
    }
}
