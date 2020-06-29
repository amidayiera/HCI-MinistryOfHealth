<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function healthcare(){
        $title='HealthCare';
        return view('pages.healthcare')->with('title',$title);
    }
    public function healthcarelocations(){
        $title='HealthCare Locations';
        return view('pages.healthcarelocations')->with('title',$title);
    }
}
