<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machine;
use Illuminate\Support\Facades\DB;
class machinecontroller extends Controller
{
    public function createmachine(){
        return view('admin.createmachine');
       }
       public function insertmachine(Request $request)
       {
           $machine = new machine;
           $machine->name = $request->get('name');
           $machine->growthrate = $request->get('rate');
          
           $machine->save();
      
        return redirect('createmachine')->with(['message'=>'Insert Machine Sucessfull!']);
       }
       public function deletemachine(Request $request, $id)
    {
        $data = DB::table('machine')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
    // public function changeStatus(Request $request)
    // {
    //     $user = machine::find($request->user_id);
    //     $user->status = $request->status;
    //     $user->save();
    //     return response()->json(['success'=>'Status change successfully.']);
    // }
    public function updateStatus(Request $request)
    {
        $user = machine::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        
        return response()->json(['message' => 'User status updated successfully.']);
    }
}
