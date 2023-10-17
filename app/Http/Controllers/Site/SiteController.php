<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\WelcomPageController;
use App\Http\Controllers\Controller;
use App\Models\WelcomePage;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SiteController extends Controller
{
    public function index(){
        $welcoms = WelcomePage::select('id',
            'title_'. LaravelLocalization::getCurrentLocale() . ' as title',
            'sub_title_'. LaravelLocalization::getCurrentLocale() . ' as sub_title',
            'image',
        )->get();
        return view('front.home', compact('welcoms'));
    }
    

    public function about(){
        return view('front.about');
    }
}
