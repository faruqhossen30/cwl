<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    public function index(){
        $users=DB::select("select id,username,password from users");
        return view("user.index",["users"=>$users]);
    }
    public function create(){
        return view("user.create");
    }
    public function store(Request $r){
        // print_r($_POST);

        $username=$r->txtusername;
        $password=$r->pwdpassword;
        $repassword=$r->pwdrepassword;
        if($password==$repassword){
            DB::insert("insert into users(username,password,role_id)values('$username','$password','1')");
            return redirect('users');
        }else{
            echo "incarrect username and password";
        }
    }
    public function show($id)
    {
        
        $q=DB::select("select id,username,password from users where id='$id'");
        return view("user.show",["user"=>$q]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $users=DB::select("select id,username,password from users where id='$id'");
        return view("user.edit",["user"=>$users]);
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
        // print_r($r->all());
        $q=DB::update("update users set username='$r->txtusername',password='$r->pwdpassword' where id='$id'");
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        $q=DB::delete("delete from users where id='$id'");
        return redirect("users");
    }

    public function mmm(){
        $user_id=session('sess_id');
        if(!isset($user_id)){
            return redirect("/");
        }else{
            return view('dashboard');
        }
    }
    
}




