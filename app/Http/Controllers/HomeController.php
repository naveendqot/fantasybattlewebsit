<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function sendmail(Request $request){
        //echo "ttttttttttt".$request->email;
        //return $request->email;
        // $data = array('name'=>$request->email,'email'=>$request->email,"phone"=>$request->phone,'message'=>$request->phone);
        // Mail::send(['text'=>'mail'], $data, function($message) {
        //     $message->to('naveenoffice2324@gmail.com', 'Tutorials Point')->subject
        //        ('Laravel Basic Testing Mail');
        //     $message->from('fantasybattleofficial@gmail.com','Fantasybattle');
        //  });
        return redirect()->back()->with('message','Item created successfully!');
    }

    public function apkDownlaod(){
            $appName='fantasybattle_01.apk';
            $filename = public_path('fantasybattle_01.apk');

            Storage::disk('local')->put($appName, file_get_contents($filename));
            $path = Storage::path($appName);
            //$this->downloadapk($path);
            return redirect()->back();
            //return response()->download($path);
    }
}
