<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Packet;
class seedcontroller extends Controller
{
    // public function seeds1(){
    //     $data=DB::table('bactches')->get();
    //     $sum=DB::table('packets')->sum('weight');
   
    //     return view('admin.seeds1')->with(['data'=>$data,'sum'=>$sum]);
    //    }
    public function seeds1(){
        $data=DB::table('bactches')->get();
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');
        $count = DB::table('packets')->count();
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('packets')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.seeds1')->with(['data'=>$data,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
       public function insertseeds(Request $request)
       {
           $seeds1 = new Packet;
           $seeds1->batch = $request->get('batch');
           $seeds1->pcs = $request->get('pcs');
           $seeds1->shape = $request->get('shape');
           $seeds1->height = $request->get('height');
           $seeds1->length = $request->get('length');
           $seeds1->width = $request->get('width');
           $seeds1->weight = $request->get('weight');
           $seeds1->save();      
        return redirect('seeds1')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
}
