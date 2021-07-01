<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("login.index");
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
    public function login(Request $request)
    {
        $username=$request->txtusername;
        $password=$request->pwdpassword;

        $result=DB::select("select id,username,role_id from users where username='$username' and password='$password'");
        
        if(count($result)==1){
            $user_id=$result[0]->id;
            $user_name=$result[0]->username;
            $role_id=$result[0]->role_id;

            $session_id=(session()->getId());
            session([
                'sess_id'=>$session_id,
                'sess_user_id'=>$user_id,
                'sess_user_name'=>$user_name,
                'sess_role_id'=>$role_id
            ]);
            return redirect("home");
         }else{
            echo "Username or Password is incarrect";
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        session()->forget(['sess_id','sess_user_id','sess_user_name','sess_email']);
        session()->flush();
        session()->regenerate();
        return redirect("/");
    }

}
