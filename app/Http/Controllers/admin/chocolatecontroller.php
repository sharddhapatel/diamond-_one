<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\chocolate;
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
           $img = $request->image;
           $folderPath = "uploads/";
           
           $image_parts = explode(";base64,", $img);
           $image_type_aux = explode("image/", $image_parts[0]);
           $image_type = $image_type_aux[1];
           
           $image_base64 = base64_decode($image_parts[1]);
           $fileName = uniqid() . '.png';
           
           $file = $folderPath . $fileName;
           Storage::put($file, $image_base64);
           
           dd('Image uploaded successfully: '.$fileName);
       }
}
