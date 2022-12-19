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

    public function apkDownlaod(){
            //$apkfile=

            $appName=getenv('APKURL');
            $filename = public_path($appName);

            // Storage::disk('local')->put($appName, file_get_contents($filename));
            // $path = Storage::path($appName);
            // return $path;
            //$this->downloadapk($path);
            //return redirect()->back();

            return response()->download($filename);
    }
}
