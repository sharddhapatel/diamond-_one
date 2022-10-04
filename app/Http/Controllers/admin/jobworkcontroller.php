<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jangad;
use Illuminate\Http\Request;
use App\Models\party;
use App\Models\jobwork;
use Carbon\Carbon;

class jobworkcontroller extends Controller
{
    public function createparty(){
        return view('admin.createparty');
       }
       public function insertparty(Request $request)
       {
           $party = new party;
           $party->name = $request->get('name');
           $party->stat = $request->get('stat');
           $party->save();
      
        return redirect('createparty')->with(['message'=>'Insert Party Sucessfull!']);
       }
       public function party(){
        return view('admin.party');
       }
       public function createjobwork1(Request $request){
      $date= Carbon::now()->toDateTimeString();
      $length = Carbon::now()->addDays(2)->toDateTimeString();
        return view('admin.createjobwork1')->with(['date'=>$date,'length'=>$length]);
       }
       public function jobwork1(){
        return view('admin.jobwork1');
       }
       public function insertjobwork(Request $request)
       {
           $jobwork = new jobwork;
           $jobwork->party = $request->get('party');
           $jobwork->date = $request->get('date');
           $jobwork->expectedreturndate = $request->get('expectedreturndate');
           $jobwork->note = $request->get('note');
           $jobwork->save();
      
        return redirect('createjobwork1')->with(['message'=>'Insert Jobwork Sucessfull!']);
       }
       public function jangad(){
        return view('admin.jangad');
       }
       public function createJangad(){
        $date= Carbon::now()->toDateTimeString();
        $length = Carbon::now()->addDays(2)->toDateTimeString();
        return view('admin.createJangad')->with(['date'=>$date,'length'=>$length]);
       }
       public function insertjangad(Request $request)
       {
           $jobwork = new jangad;
           $jobwork->partys = $request->get('party');
           $jobwork->dates = $request->get('date');
           $jobwork->expectedreturndates = $request->get('expectedreturndate');
           $jobwork->notes = $request->get('note');
           $jobwork->save();
        return redirect('createJangad')->with(['message'=>'Insert Jangad Sucessfull!']);
       }
}
