<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class covidTrackerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client( [ 'headers' => ['Content-Type' => 'application/json']]);
        if (count($request->all())>0) {
            // foreach here.

            $this->validate($request, [

            'start' => 'required',

            'end' => 'required'
        ]);
        $response = Http::get('https://api.covid19api.com/dayone/country/kenya/status/confirmed?',[
            'from'=>$request->start,
            'to'=>$request->end

        ]);

       
        $body = json_decode($response->getBody(), true);

        return view('covidTracker',compact('body'));


    }else{



        $response = $client->request('GET', 'https://api.covid19api.com/dayone/country/kenya/status/confirmed?from=2020-06-04T00:00:00Z&to=2020-04-01T00:00:00Z');
      
        $body = json_decode($response->getBody(), true);

        return view('covidTracker',compact('body'));

    }


    }
    
}