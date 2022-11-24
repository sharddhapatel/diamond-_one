<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\packet;
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
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        round($divided,2);
        $sumlenth=DB::table('packets')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        $samedata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id')
        
        ->get();
        return view('admin.seeds1')->with(['data'=>$data,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided,'samedata'=>$samedata]);
       }
    //    public function insertseeds(Request $request)
    //    {
    //        $seeds1 = new packet;
    //        $seeds1->batch_id = $request->get('batch');
    //        $seeds1->pcs = $request->get('pcs');
    //        $seeds1->shape = $request->get('shape');
    //        $seeds1->height = $request->get('height');
    //        $seeds1->length = $request->get('length');
    //        $seeds1->width = $request->get('width');
    //        $seeds1->weight = $request->get('weight');
    //        $seeds1->save();      
    //     return redirect('seeds1')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
    //    }
    public function insertseeds(Request $request)
    {
        $batch= $request->input('batch_id');
        // dd($batch); 
        $pcs = $request->input('pcs');
        $shape = $request->input('shape');
        $height = $request->input('height');
        $length = $request->input('length');
        $width = $request->input('width');
        $weight = $request->input('weight');
        
        // number of rows submitted (use a required value)
        $n = count($height);

        // track valid student records
        $students = [];

        for ($i=0; $i < $n; $i++) {
            $data = [
                'batch_id' => $batch,
                'pcs' => $pcs,
                'shape' => $shape,
                'height' => $height[$i],
                'length' => $length[$i],
                'width' => $width[$i],
                'weight' => $weight[$i],

            ];

            $students[] = $data;
        }

        foreach ($students as $row) {
            Packet::create($row);
        }

        // $posts = Packet::create([
        //     'batch' => request('batch'),
        //     'pcs' => request('pcs'),
        //     'shape' => request('shape'),
        //     'pcs' => request('pcs'),
        //     'height' => json_encode(request('height')),
        //     'length' => json_encode(request('length')),
        //     'width' => json_encode(request('width')),
        //     'weight' => json_encode(request('weight')),
        //     ]);
    
    return redirect('seeds1')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
   }
       public function seedslist(){
        return view('admin.seedslist');
       }
}
