<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class cliendbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::select("select id,email,phone,companyname,password,division from cliend");
        return view("cliend.backindex",["users"=>$users]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = DB::table('cliend')->find($id);
        $user = DB::table('cliend')->where('id', $id)->first();
        // $user = DB::table('cliend')->get();

        // $another = json_encode($user);
        // $some = json_decode($another);


        // return $another;
        return view('cliend.singleclient', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('cliend')->find($id);

        // return dd($user);

        return view('cliend.edit', compact('user'));
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
        $data = [
            'companyname' => $request->companyname,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'division'    => $request->division
        ];

        $user = DB::table('cliend')->where('id', $id)->update($data);

        return redirect('/cliendback')->with('success', 'Company data has been updated !');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('cliend')->where('id', $id)->delete();

        return redirect('/cliendback')->with('success', 'Company has been deleted !');
    }
}
