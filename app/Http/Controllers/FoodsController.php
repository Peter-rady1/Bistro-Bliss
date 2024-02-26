<?php

namespace App\Http\Controllers;

use App\Http\Requests\foodsrequest;
use App\Models\foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodsController extends Controller
{    
    public function adminpanal (){
        $fooddata = DB::table('foods')->get();
        return view('admin.adminpanal', compact('fooddata'));
    }
    


     
    public function addfood (foodsrequest $request  ){
        $food = new foods();
        $food->f_price = $request-> fprice;
        $food->f_name = $request-> fname;
        $food->f_disc = $request-> fdisc;
        $food->f_type = $request-> ftype;
        $name = $request->file('fimage')->getClientOriginalName();
        $file =$request->file('fimage')->storeAs('foodimg',$name,'public');
        $food->f_image = $name ;
    $food->save();

    return redirect()->route('admin');
}

 public function view(){
        $foodd=DB::table('foods')->get();
        return view('content.menu',compact('foodd') )
       ;
    }


    public function update($id){
        $updatedata = DB::table('foods')->where('id',$id)->first();
        return view('admin.foodupdate' ,compact('updatedata'));
    }

    public function updatedata( Request $request , $id ){
        $food = foods::find($id);
        $name = $request->file('fimage')->getClientOriginalName();
        $file =$request->file('fimage')->storeAs('foodimg',$name,'public');
        $food->f_image = $name ;
        $food->f_price = $request-> fprice;
        $food->f_name = $request-> fname;
        $food->f_disc = $request-> fdisc;
        $food->f_type = $request-> ftype;
    
        $food->save();
            return redirect()->route('admin');
        }

    
        public function delete ($id){
            DB::table('foods')->where('id',$id)->delete();
            return redirect()->route('admin');
        }
        
    }
    







     // DB::table('foods')->where('id',$id)->update([
        //     'f_name' => $request->f_name,
        //     'f_price' => $request->f_price,
        //     'f_disc' => $request->f_disc,
        //     'f_type' => $request->f_type,
        //     'f_image' => $request->f_image,
        //     ]);
   



    // public  function viewfood (){
    //     $fooddata = DB::table('foods')->get();
    //     return view('admin.viewfood',compact('fooddata') );
    // }


    // public  function index (){
    //    $foodd=DB::table('foods')->get();
    //  return view('content.menu',compact('foodd') ); 
    // }

    // $fooddata = DB::table('foods')->get();
    // return view('content.menu',compact('fooddata'));




