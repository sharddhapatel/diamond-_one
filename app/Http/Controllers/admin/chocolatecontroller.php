<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\chocolate;
use App\Models\lots;
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
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $chocolate->image = $filename;
        }
           $chocolate->save();
      
        return redirect('createchocolatedashboard')->with(['message'=>'Insert chocolate Sucessfull!']);
       }
    //    public function store(Request $request)
    //    {
    //        $this->validate($request, [
    //                'image' => 'required'
    //        ]);
   
    //        $pic= new webimage;
    //        $pic->image=$request->image;
    //        $pic->save();
           
    //        return back()->with('success', '');
    //    }
       public function addchocolate(){

        return view('admin.addchocolate');
       }
       public function insertendgrowing(Request $request)
       {
           $growing = new lots;
           $growing->machineno = $request->get('no');
           $growing->enddate = $request->get('edate');
           $growing->endtime = $request->get('etime');
           $growing->growinghour = $request->get('ghour');
         
           if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $growing->machineimage = $filename;
        }
           $growing->save();
      
        return redirect('lots')->with(['message'=>'Insert Growing Sucessfull!']);
       }
       public function recivelot(){

        return view('admin.recivelot');
       }
}
