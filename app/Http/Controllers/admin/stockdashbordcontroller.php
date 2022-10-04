<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class stockdashbordcontroller extends Controller
{
    
    public function stockdashboard1(){
        $a = DB::table("packets")->sum('pcs');
        $a1 = DB::table("packets")->sum('weight');
        $b = DB::table("chocolates")->sum('pcs');
        $b1 = DB::table("chocolates")->sum('weight');
        $c = DB::table("lots")->sum('pcs');
        $c1 = DB::table("lots")->sum('weight');
        $d = DB::table("stocklosses")->sum('pcs');
        $d1 = DB::table("stocklosses")->sum('weight');
        return view('admin.stockdashboard1')->with(['a'=>$a,'a1'=>$a1,'b'=>$b,'b1'=>$b1,'c'=>$c,'c1'=>$c1,'d'=>$d,'d1'=>$d1]);
       }
       public function clickstockdashboardseeds(){
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');
        $count = DB::table('packets')->count();
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('packets')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.clickstockdashboardseeds')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
}
