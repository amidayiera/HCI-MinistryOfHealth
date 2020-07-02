<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome To Laravel!';
       // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function healthcare(){
        $title='HealthCare';
        return view('pages.healthcare')->with('title',$title);
    }
    public function healthcarelocations(){
        $title='HealthCare Locations';
        return view('pages.healthcarelocations')->with('title',$title);
        $title = 'Welcome ADMIN!';
        //return view('pages.index', compact('title'));
        return view('resourcesFolder.resources')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Hospitals', 'Resources', 'Top Doctors']

        );
        return view('pages.services')->with($data);
    }
}
