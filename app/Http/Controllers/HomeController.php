<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\Contact_u;
use App\Models\Location;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Slider;
use Firebase\Auth\Token\Exception\InvalidToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kreait\Laravel\Firebase\Facades\Firebase;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth')->except(['loginProvider']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }

    public function website()
    {
        $sliders = Slider::get();

        $companies = Company::where('parent_id', '=', 1)->get();

        $company = Company::where('parent_id', '=', 0)->first();

        $images = $company->getMediaResource('images') ?? '';

        $pages = Page::latest()->paginate(3);


        return view('frontend.index', compact('pages', 'sliders', 'companies', 'company', 'images'));
    }

    public function contacts()
    {

        $location = Location::first();
        return view('frontend.contacts', compact('location'));


    }

    public function contactstore(Request $request)
    {

        $contact = Contact_u::create($request->except('_token'));

        session()->flash('success', __('site.added_successfully'));

        return back();


    }

    public function companies()
    {
        $company = Company::where('parent_id', '=', 0)->first();

        return view('frontend.company', compact('company'));
    }

    public function abouts()
    {
        $company = Company::where('parent_id', '=', 0)->first();

        $companies = Company::where('parent_id', '=', 1)->latest()->paginate(3);

        $sliders = Slider::get();

        return view('frontend.abouts', compact('company','companies','sliders'));


    }

}
