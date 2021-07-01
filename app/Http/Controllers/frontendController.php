<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      ////  return  "hellow";
        
        //  $catagorys=\App\Models\Department::all();
        // return view('frontend.index',["catagorys"=>$catagorys]);

        return redirect("fronthome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cliend.register"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $Email=$r->txtemail;
        $phone=$r->txtphone;
        $companyname=$r->txtcompanyname;
        $password=$r->txtpassword;
        $repassword=$r->txtrepassword;
        $division=$r->selectdivition;
        if($password==$repassword){
            DB::insert("insert into cliend(email,phone,companyname,password,division)values('$Email','$phone','$companyname','$password','$division')");
            return redirect('cliendreg');
        }else{
            echo "incarrect username and password";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $sub_catagorys=DB::select("select id,department_id from tendersupload where department_id='$id'");
        return view("frontend.index",compact('sub_catagorys'));
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
