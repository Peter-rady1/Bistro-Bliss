<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public  function index (){
        return view('admin.products.index');
    }


    public  function create (){

        return view('admin.products.create');
    }


    public function viewform(){

        $hat = images::all();
        return view('prodimg',compact('hat'));
       }
    
    public function insert(Request $request){
        $pname = $request->file('photo')->getClientOriginalName();
        $tmp = $request->file('photo')->storeAs('assets',$pname,'public');
        DB::table('products')->insert([
            'prodname' => $request->prodname,
            'prodprice'=> $request->prodprice,
            'discription'=> $request->discription,
        ]);
        return redirect('products/create');
    }
}
