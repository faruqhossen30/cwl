<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class egp_regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('frontend.egp_reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $validatedDate = $r->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'chackvalue' => 'required',
        ]);

        $name=$r->name;
        $faname=$r->father_name;
        $maname=$r->mother_name;
        $designation=$r->designation;
        $organization=$r->organization;
        $address=$r->address;
        $number=$r->number;
        $email=$r->email;
        $vanu=$r->chackvalue;

        DB::insert("insert into traningreg(name,fathername,mothername,designation,organization,address,mobil,email,vanu)values('$name','$faname','$maname','$designation','$organization','$address','$number','$email','$vanu')");
        return view('frontend.model');
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
