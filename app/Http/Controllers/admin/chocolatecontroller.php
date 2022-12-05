<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\chocolate;
use App\Models\webimage;
use Illuminate\Support\Facades\Storage;
class chocolatecontroller extends Controller
{
    public function chocolatedashboard(){

        return view('admin.chocolatedashboard');
       }
       public function createchocolatedashboard(){
        return view('admin.createchocolatedashboard');
       }
       public function insertchocolatedashboard(Request $request)
       {
           $chocolate = new chocolate;
           $chocolate->machineno = $request->get('no');
           $chocolate->startdate = $request->get('sdate');
           $chocolate->starttime = $request->get('stime');
           $chocolate->save();
      
        return redirect('createchocolatedashboard')->with(['message'=>'Insert chocolate Sucessfull!']);
       }
       public function store(Request $request)
       {
           $this->validate($request, [
                   'image' => 'required'
           ]);
   
           $pic= new webimage;
           $pic->image=$request->image;
           $pic->save();
           
           return back()->with('success', '');
       }
}
