<?php

namespace App\Http\Controllers;
use App\Models\Tender;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
class tenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tenders=DB::select("select id,username,password from users");
        return view("tender.index",["tenders"=>$tenders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tender.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {      
        
        $inputs = \request()->validate([
            'registration_certificate' => 'required|file|mimes:jpg,jpeg,png',
            'trade_license' => 'required|file|mimes:jpg,jpeg,png',
            'tin_certificate' => 'required|file|mimes:jpg,jpeg,png',
            'vat_certificate' => 'required|file|mimes:jpg,jpeg,png',
            'authorized_letter' => 'required|file|mimes:pdf,docx',
            'cgp_registration' => 'required|file|mimes:jpg,jpeg,png',
            'admin_picture' => 'required|file|mimes:jpg,jpeg,png',
        ]);

        if(\request(['registration_certificate', 'trade_license', 'tin_certificate', 'vat_certificate', 'authorized_letter', 'cgp_registration', 'admin_picture'])) {
            $inputs['registration_certificate'] = \request('registration_certificate')->store('images/tender');
            $inputs['trade_license'] = \request('trade_license')->store('images/tender');
            $inputs['tin_certificate'] = \request('tin_certificate')->store('images/tender');
            $inputs['vat_certificate'] = \request('vat_certificate')->store('images/tender');
            $inputs['authorized_letter'] = \request('authorized_letter')->store('images/tender');
            $inputs['cgp_registration'] = \request('cgp_registration')->store('images/tender');
            $inputs['admin_picture'] = \request('admin_picture')->store('images/tender');
        }
        
        Tender::create($inputs);
        \session()->flash('create-message', 'Tender has been Created Successfully!');
        return back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view("tender.show");
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
