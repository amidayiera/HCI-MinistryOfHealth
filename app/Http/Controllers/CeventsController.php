<?php

namespace App\Http\Controllers;
use App\User;
use App\Cevents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CeventsController extends Controller
{
    public function index()
    {
        return view('Events.Cevents');
    }

    

public function allevents(){

    $events = Cevents::all();


   return view('Events.Cevents')->with("events", $events);

}
}
