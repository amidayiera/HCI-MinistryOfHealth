<?php

namespace App\Http\Controllers;

use App\Http\Resources\News as NewsResource;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {

        $allnews = News::all();

        return view('landingPage',compact('allnews'));
    }

    public function store(Request $request)
    {
        $news = $request->isMethod('PUT') ?  News::findOrFail($request->id): new News;


        $news->id = $request->input('id');
        $news->title = $request->input('title');
        $news->link = $request->input('link');
        $news->image = $request->input('image');


        $news->save();
        return new NewsResource($news);
    }
    public function truncate(){
        News::query()->truncate();
    }
    public function checkifExists($id){
        $news = DB::table('news')->where('id', '=',$id)->first();

        return $news->id;

    }

    public function getAll(){

    }
    public function show($id)
    {
        //Get a single news value
        $news = News::findOrFail($id);

        //Return the single news article as a resource
        return new NewsResource($news);
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if($news->delete()){
            return new NewsResource($news);
        }
    }
}
