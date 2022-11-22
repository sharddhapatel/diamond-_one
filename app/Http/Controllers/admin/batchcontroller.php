<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\lotprocess;
use App\Models\processreson;
use App\Models\finishtype;
use App\Models\color;
use App\Models\purity;
use App\Models\Bactch;
use App\Models\batchsquare;
use App\Models\shap;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class batchcontroller extends Controller
{
    public function batch1(){
        return view('admin.batch1');
       }
       public function insertbatch(Request $request)
       {
           $batch = new Bactch;
           $batch->name = $request->get('name');
           $batch->save();
       
           return redirect()->back()->with('message', 'Batch added successfully');
       }
    public function shape(){       
        return view('admin.shape');
       }
       public function insertshape(Request $request)
       {
           $shape = new shap;
           $shape->name = $request->get('name');
           $shape->save();
        return redirect('shape')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }

       public function shaperemove(Request $request, $id)
       {
           $data = DB::table('shaps')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function lotprocess(){
        return view('admin.lotprocess');
       }
       public function insertlotprocess(Request $request)
       {
           $stockpackets = new lotprocess;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('lotprocess')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function lotprocessremove(Request $request, $id)
       {
           $data = DB::table('lotprocesses')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function processreson(){
        return view('admin.processreson');
       }
       public function insertprocessreson(Request $request)
       {
           $stockpackets = new processreson;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('processreson')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function processresonremove(Request $request, $id)
       {
           $data = DB::table('processresons')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function finishtype(){
        return view('admin.finishtype');
       }
       public function insertfinishtype(Request $request)
       {
           $stockpackets = new finishtype;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('finishtype')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function finishtyperemove(Request $request, $id)
       {
           $data = DB::table('finishtypes')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
       public function color(){
        return view('admin.color');
       }
       public function insertcolor(Request $request)
       {
           $stockpackets = new color;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('color')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function colorremove(Request $request, $id)
       {
           $data = DB::table('colors')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function purity(){
        return view('admin.purity');
       }
       public function insertpurity(Request $request)
       {
           $stockpackets = new purity;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('purity')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function purityremove(Request $request, $id)
       {
           $data = DB::table('purities')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
    //    public function createlot(Request $request){
    //     $requestData = ['id', 'name'];
    //     $current = new Carbon('first day of January 2016');
    //     $pro = $request->input('search');
    //     $data = DB::table('bactches')->where('name', "like", "%" . $request->search. "%")->get();
    
    //     return view('admin.createlot')->with(['current'=>$current,'data'=>$data,'pro'=>$pro]);
    //     // ->with('message', json_encode(['success'=>'Seeds sucessfull!']));
    //   }

      public function createlot(Request $request)
      {
          $requestData = ['id','name'];
          $pro = $request->input('batch');
          if (($pro) ) {
              $data = DB::table('bactches')
              ->where('name', "like", "%" . $pro. "%")->get();
          }
          elseif (! is_null($pro)) {
              $data = DB::table('bactches')
              ->where('name', "like", "%" . $pro. "%")->get();
          }
          else {
                  $data = DB::table('bactches')->get();
              }
     
              return view('admin.createlot')->with(['data'=>$data,'pro'=>$pro]);
      }
    //   public function clickbatch(){
    //     return view('admin.clickbatch');
    //    }

    //    public function editbatch($id)
    //    {
    //        $data = DB::table('packets')->where('id', $id)->first();
    //        return view('admin.clickbatch')->with('data', $data);
    //    }
       public function batchlist(Request $request){
        $requestData = ['id', 'name'];
        $pro = $request->input('search');
            $data = DB::table('bactches')->where('name', "like", "%" . $request->search. "%")->get();
        return view('admin.batchlist')->with(['data'=>$data,'pro'=>$pro]);
       }
       public function getbatch($id)
       {
        $pdata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id')
        ->where('bactches.id', $id)
        ->get();
           return view('admin.clickbatch')->with(['pdata' => $pdata]);
       }
   
    }
