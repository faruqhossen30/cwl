<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class fronthomeController extends Controller
{
    public function index(){
        $catagorys=\App\Models\Department::all();
        $types = DB::table('catagory')->get();

       // return view('user.index', ['users' => $users]);
        return view('frontend.dashboard',['catagorys'=>$catagorys,'types' => $types]);
    }
}
