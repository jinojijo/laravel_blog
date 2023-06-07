<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linux;

class LinuxCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linux = linux::all();
        //latest first 
        //$articles = Article::latest()->get();
        return view("linux.index",["linux"=>$linux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("linux.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* echo request("title");
        echo "<br/>";
        echo request("body"); */

        request()->validate(
            [
                'title'=>['required','min:3'],
                'body'=>'required'
            ]
        );
        
        $linux = new linux();
        $linux->title = request("title");
        $linux->body = request("body");
        $linux->save();

        return redirect("/linux");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linux = linux::find($id);
        return view("linux.show",["linux"=>$linux]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linux = linux::find($id);
        return view("linux.edit",["linux"=>$linux]);
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
        $linux = linux::find($id);
        $linux->title = request("title");
        $linux->body = request("body");
        $linux->save();

        return redirect("/linux");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linux = linux::find($id);
        $linux->delete();
        return redirect("/linux");
    }
}
