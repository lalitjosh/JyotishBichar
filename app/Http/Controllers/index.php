<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscribed_users;
use App\Models\User;
use App\Models\Schedules;
use Illuminate\Support\Facades\Auth;
use DB;

  class index extends Controller
   

{
    function dashboard(){
      $user = User::find((Auth::id()));
  
      return view('dashboard');
    }

   

   function subscription() {
    return view('subscription');
    }
   


  function show()
  {
   
       // $table = subscribed_users::all();
        //foreach ($table as $table) {
   $user = User::find((Auth::id()));


   if ($user->subscriptionStatus=='active'){
    return redirect()->route('jyotish_talk');
  }

  else {
    return redirect()->route('subscription')->with('message','Not Subscribe please subscribe');
  }


       // }


  }


  function conversation(){


     //$table = subscribed_users::all();
       // foreach ($table as $table) {
    $user =User::find((Auth::id()));
    if ($user->subscriptionStatus=='active'){

     $datas = User::whereNotNull('last_seen')->orderBy('last_seen', 'DESC')->get();
     return view('jyotish_talk',['datas'=>$datas]);
     
   }

   else {
    return redirect()->route('subscription')->with('message','Not Subscribe please subscribe');
  }


  }		

  function horscope(){
      // $user =User::find((Auth::id()));


      // return view('horscope');

   $datas = User::whereNotNull('last_seen')->orderBy('last_seen', 'DESC')->get();

   return view('horscope',['datas'=>$datas]);
  }
    
  
  

  function scheduleDate()
      {
       
       $user =User::find((Auth::id()));
       $time1 = '08:00:00';
       $time2 = '24:00:00';       
       $schedule = schedules::find(1);
       //dd($schedule);
       
       $t = date('H:i:s');
       //($t);

       
    if ($user->boolean_variable==1){
           
           
       
       if ($time1 < $t && $t <$time2){
        
         
           $Time = date('Y-m-d H:i:s');//, strtotime(' + 1 hours')); 
                                              
           $expectedTime = "00:40:00";                                    
           
           $secs = strtotime($schedule->endTime)-strtotime("00:00:00");

           $ScheduleTime =  date("H:i:s",strtotime($Time)+$secs);
           //dd($ScheduleTime);

           
              $serviceTime = strtotime($expectedTime)-strtotime("00:00:00"); 
              $endTime = date("H:i:s",strtotime($schedule->endTime)+$serviceTime); 
              $schedule->endTime = $endTime;
              
            if($time1 < $ScheduleTime && $ScheduleTime <$time2){  
              $user->boolean_variable=1;

              $schedule->ScheduleTime = date('m/d/Y h:i:s a', strtotime($ScheduleTime));
              $schedule->save();
              $user->save();
              //echo $ScheduleTime;
              return view('scheduleDate',['schedule'=>$schedule]);
            }
            else{
              return redirect()->route('jyotish_talk')->with('message','No Available Schedule Today,You Can Generate Schedule On Next Day');
            }
                

          
           
        
       }
        else
          {
            return redirect()->route('jyotish_talk')->with('message','You Cannot Get Schedule Time Now Schedule Time Is Between 8:00 am And 5:00 pm Or You Can Generate Schedule On Next Day Between This Time');
          
          }  

       
    } 

    else{
      return redirect()->route('jyotish_talk')->with('message','You Cannnot Generate Schedule Twice');
    }   // $time1 = strtotime('08:00:00'); 
        // $time2 = strtotime('17:00:00'); 
        // $t = strtotime(date('H:i:s')); 

        // if ($time1 < $t && $t <$time2)
        //   { 
        //     //echo 1;
        //   
        //    }
        //    else
        //     { 
        //       //echo 2;

        //     }

      }
 public function updateDeviceToken(Request $request)
    {
        Auth::user()->device_token =  $request->token;

        Auth::user()->save();

        return response()->json(['Token successfully stored.']);
    }

  public function sendNotification(Request $request)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';

        $FcmToken = User::whereNotNull('device_token')->pluck('device_token')->all();
            
        $serverKey = 'AAAA3tVe9d8:APA91bHHZRMTCVfCK3UmHEnR54Qh8kLAzm1vUE1Luo71yn0kn2kggpADT1Bf9pIIBO7Z7wXLHdY_WPiFx-h8NC62nPFqZbNuOtZUbzuyGzaC463V9uQ9RD_8hRiNvFkJ6XYQZTOKuThX';
    
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        dd($result);
    }
   
 


  }






   // function subscriber(Request $request){

    //       $subscribe =subscribed_users::find((Auth::id()));
    //       $subscribe->subscriptionStatus = "active";
    //       $subscribe->save();
     //      return redirect()->route('welcome');

      //  } 


  // function checkOnline(){
  //    $users = User::select("*")
  //                       ->whereNotNull('last_seen')
  //                       ->orderBy('last_seen', 'DESC');


  //       return view('jyotish_talk', compact('users'));
  // }




