<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function imprint() {
        return view('frontend_view.company.imprint');
    }
    public function terms_condition() {
        return view('frontend_view.company.terms_conditions');
    }
    public function aboutUs() {
        return view('frontend_view.company.about_me');
    }
    public function news() {
        $news_data = DB::table('news')
                    ->get();

        return view('frontend_view.company.news_view', compact('news_data'));
    }
    public function privacy_policy(){
        return view('frontend_view.company.privacy_policy');
    }
}
