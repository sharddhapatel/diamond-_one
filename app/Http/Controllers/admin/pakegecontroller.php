<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Bactch;
use App\Models\Packet;

use App\Models\stockpacket;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use  Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
class pakegecontroller extends Controller
{

       public function demo(){ 
        return view('admin.demo');
       }


       public function index(){
              return view('admin.index');
             }
             public function adminlogin(Request $req)
             {
                 $email = $req->input('email');
                 $password = $req->input('password');
                 $data = DB::table('users')->where('email', $email)->first();
                 $count = DB::table('users')->where(['email' => $email])->count();
                 $count1 = DB::table('users')->where(['password' => $password])->count();
   
                 if ($email != " " && $password != " ") {
                     if ($count > 0 && Hash::check($password, $data->password)) {
                         Session::put('user_id', $data->id);
                         Session::put('studemail', $data->email);
         
                         return redirect('index1');
                     } else {
                         return redirect()->back()->with('error', "please enter right EMAIL and PASSWORD");
                     }
                 } else {
                     return redirect()->back()->with('error', "enter email and password");
                 }
             }
             public function logout()
             {
                 Session()->forget('user_id');
                 Session()->forget('studemail');
         
                 return redirect('/');
             }
            
            

    


}
