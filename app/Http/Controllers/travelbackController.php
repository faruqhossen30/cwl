<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class travelbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placess=DB::select("select id,image,title,discription from tourism");
        return view("tourism.index",["placess"=>$placess]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $fileName = time().'.'.$r->file->extension();
   
        $r->file->move(public_path('uploads'), $fileName);

        $title=$r->txttitle;
        $discription=$r->txtdetails;

        DB::insert("insert into tourism(image,title,discription)values('$fileName','$title','$discription')");
        return redirect('travelback');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $q=DB::select("select id,image,title,discription from tourism where id='$id'");
        return view("tourism.show",["user"=>$q]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=DB::select("select id,image,title,discription from tourism where id='$id'");
        return view("tourism.edit",["user"=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $q=DB::update("update tourism set image='$r->txtimg',image='$r->txttitle',discription='$r->txtdescrip' where id='$id'");
        return redirect("travelback");
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
