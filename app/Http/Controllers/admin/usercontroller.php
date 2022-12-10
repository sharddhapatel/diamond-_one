<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class usercontroller extends Controller
{
    public function login(){ 
        return view('admin.login');
       }

     public function userlogin(Request $req)
     {
         $email = $req->input('useremail');
         $password = $req->input('userpassword');
         $data = DB::table('login')->where('email', $email)->first();
         $count = DB::table('login')->where(['email' => $email])->count();
         $count1 = DB::table('login')->where(['password' => $password])->count();
//    dd($count);
         if ($email != " " && $password != " ") {
            if($count>0 && $count1>0){
                Session::put('login_id', $data->id);
                 Session::put('loginemail', $data->email);
 
                 return redirect('createuserchocolate');
             }
              else {
                 return redirect()->back()->with('error', "please enter right EMAIL and PASSWORD");
                  }
         } else {
             return redirect()->back()->with('error', "enter email and password");
         }
     }
     public function createuserchocolate(){ 
        return view('admin.createuserchocolate');
       }
}
