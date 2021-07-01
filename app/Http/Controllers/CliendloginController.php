<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CliendloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cliend.index");
    }


    public function login(Request $request)
    {
        $username=$request->txtusername;
        $password=$request->pwdpassword;

        $result=DB::select("select id,email,password from cliend where email='$username' and password='$password'");
        
        //print_r($result);
        if(count($result)==1){
            $user_id=$result[0]->id;
            $user_name=$result[0]->email;

            $session_id=(session()->getId());
            session([
                'sess_id'=>$session_id,
                'sess_user_id'=>$user_id,
                'sess_user_name'=>$user_name,
            ]);
            return redirect("cli_user");
         }else{
            echo "Username or Password is incarrect";
         }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
