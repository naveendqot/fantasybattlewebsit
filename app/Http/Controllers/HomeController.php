<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function sendmail(Request $request){


        $data = array('name'=>$request->first_name.' '.$request->last_name,'email'=>$request->email,"phone"=>$request->phone,'msg'=>$request->message);
        //return view('mail')->with($data);

        Mail::send('mail', $data, function($message) {
            $message->to('helpdesk@fantasybattle.in', 'Fantasybattle')->subject
               ('Contact us Inquiry');
            $message->from('fantasybattleofficial@gmail.com','Fantasybattle');
         });
        return redirect()->back()->with('message','Your Inquiry send successfully');
    }

    public function apkDownlaod(Request $request){
            //$apkfile=
            if(!empty($request['invite_code']) || !empty($request['invite_code'])){
                //echo $_SERVER['REMOTE_ADDR']."-------".$request['invite_code'];die;
                $code=!empty($request['invite_code'])?$request['invite_code']:$request['affiliate_code'];
                $ch = curl_init();
                echo "<pre>";print_r($_SERVER);die;
                $userIp=$_SERVER['HTTP_X_FORWARDED_FOR'];
                if(is_array($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    $userIp=$_SERVER['HTTP_X_FORWARDED_FOR'][0];
                }
                $url='https://api.fantasybattle.in/pages/invite/add?invite_code='.$code.'&ip='.$userIp;
                //echo $url;die;
                //set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
                //execute post
                $result = curl_exec($ch);
                $resultArray=json_decode($result,true);
                echo "<pre>ttt";print_r($resultArray);die;
                if($resultArray['status'] && !empty($resultArray['data'])){
                    $download = true;
                }
                curl_close($ch);
            }

            $appName=getenv('APKURL');
            $filename = public_path($appName);

            // Storage::disk('local')->put($appName, file_get_contents($filename));
            // $path = Storage::path($appName);
            // return $path;
            //$this->downloadapk($path);
            return redirect()->back();
            return response()->file($filename ,[
                'Content-Type'=>'application/vnd.android.package-archive',
            'Content-Disposition'=> 'attachment; filename="'.$appName.'"',
        ]) ;

            //return response()->download($filename);
    }
}
