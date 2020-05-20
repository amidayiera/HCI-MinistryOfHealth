<?php

namespace App\Http\Controllers;
use App\Application;
use App\Task;
use Illuminate\Http\Request;

class vacanciesController extends Controller
{
    public function index()
    {
        $vacancies=Task::orderBy('created_at','asc')->paginate(3);

         return view('vacancies.vacancies')->with('vacancies',$vacancies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->action('vacanciesController@index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $this->validate($request,[
                'username'=>'required',
                'email'=>'required',
                'dropdown'=>'required',
                'cv'=>'required'

    ]);
    //handle fie upload
    if($request->hasFile('cv'))
    {
        $filenameWithExt=$request->file('cv')->getClientOriginalName();

        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('cv')->getClientOriginalExtension();
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        $path=$request->file('cv')->storeAs('public/cvs',$fileNameToStore);
    }
    $application=new Application;
    $application->username=$request->input('username');
    $application->email=$request->input('email');
    $application->task_id=$request->input('dropdown');
    $application->CVfile=$fileNameToStore;
    $application->save();
    return redirect('/')->with('success','application submitted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}