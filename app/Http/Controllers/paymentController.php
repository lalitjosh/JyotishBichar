<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscribed_users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

//use Illuminate\Http\Request;

class paymentController extends Controller
{
    function verifyPayment(Request $request )
    {


       $token = $request->token;
       $amount = $request->amount;

		  $args = http_build_query(array(
		  'token' => $token,
		  'amount'  => $amount
		));

		$url = "https://khalti.com/api/v2/payment/verify/";

		# Make the call using API.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// $secret_key = config('app.khalti_secret_key');
		// $headers = ['Authorization: Key $secret_key'];
		$headers = ['Authorization: Key test_secret_key_eb31c55c399d471683f74a6f7045f245'];
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// Response
		$response = curl_exec($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
	    // dd($response);
		if($status_code==200){
			$khalti_response = json_decode($response);


              // return redirect()->route('welcome')->with('message','Payment Sucessfully');
			return response()->json([
    'success' => 'true',
    'location'=>route('dashboard'),

]);
		}
		else{
			return response()->json([

				'success'=>'false']);
		}


		
		

    }


   function store(Request $request)
   {


   	  // return redirect()->route('welcome');
      //$subscribe =subscribed_users::find((Auth::id()));
      //$subscribe->subscriptionStatus = "active";
      //$subscribe->save();
        $user = User::find((Auth::id()));
        $user->subscriptionStatus = "active";
        $user->save();


          return response()->json([
    'success' => 'true',
    // 'redirect_url'=>route('dashboard'),
    'location'=>route('dashboard')

]);
   } 
}
