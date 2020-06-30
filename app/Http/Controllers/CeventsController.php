<?php

namespace App\Http\Controllers;
use App\User;
use App\Cevents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
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

    public function download($id)
    {

        $application = Cevents::find($id);


         $image = $application->image; // your base64 encoded
         $image = str_replace('data:image/jpeg;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imageName = str_random(10).'.'.'jpeg';
         File::put(storage_path(). '/' . $imageName, base64_decode($image));
         $path = storage_path().'/'.$imageName;
         if (file_exists($path)) {
             return response()->download($path);
         }

    }
}