<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use DB;
class paymentcontroller extends Controller
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
        return view('frontend.payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
         $customarname=$r->customer_name;
         $mobile=$r->customer_mobile;
         $email=$r->customer_email;
         $address=$r->address;
         $amount=$r->amount;
         $ref_id=$r->ref_id;
         $currency=$r->txtcurrency;
         


        //$merchant_order_id = DB::table('pay_data')->select('id')->latest('id')->first();
        //$id = $merchant_order_id++;
         //$merchant_order_id=DB::select("select max(id) from pay_data");
         //return $merchant_order_id;
         //dd($id);


        DB::insert("insert into pay_data(customar_name,mobil,Email,address,amount,ref_id)values('$customarname','$mobile','$email','$address','$amount','$ref_id')");

        $client = new Client();
        $res = $client->request('POST', 'https://epay.walletmix.com/init-payment-process?', [
            'form_params' => [
                'wmx_id' => 'WMX60866c2f2979b',
                'merchant_order_id' => '105',
                'merchant_ref_id' => $ref_id,
                'app_name' => 'catalystswings.com',
                'cart_info' => 'WMX607bcd02281a4,https://catalystswings.com/,catalystswings.com',
                'customer_name' => $customarname,
                'customer_email' => $email,
                'customer_add' => $address,
                'customer_phone' => $mobile,
                'product_desc' => 'dhfhg',
                'amount' => $amount,
                'currency' => $currency,
                'options' => 'cz1jYXRhbHlzdHN3aW5ncy5jb20saT0xOQoyLjE2OC4xLjM=',
                'callback_url' => 'https://catalystswings.com/',
                'access_app_key' => '100c113395079f6a99106d4eced3087caa5db839',
                'authorization' => 'Basic Y2F0YWx5c3Rzd2luZ3NiZF8xNTMxNTIwOTA6Y2F0YWx5c3Rzd2luZ3NiZF81NTI1MTMzNQ==',
            ]
        ]);

        $token= json_decode($res->getBody()->getContents())->token;
        return redirect("https://epay.walletmix.com/bank-payment-process/".$token);
        


        
        //echo $res->getStatusCode();
        //200
        //echo $res->getHeader('content-type');
        //'application/json; charset=utf8'
        //echo $res->getBody();
      // $response =json_decode($response); // Using this you can access any key like below
     // $responseData = json_decode($res->getBody(), true);
        //$key_value = $response->token; //access key
        // dd($res);
        //console.log($res);
        // {"type":"User"...'
            
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
