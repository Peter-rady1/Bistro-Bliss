<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use App\Models\tables;
use App\Models\User;
use App\Notifications\booking;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification as FacadesNotification;

use function Laravel\Prompts\table;

class TablesController extends Controller
{
    public function index (){
        return view('content.table'); 
    }

    public function reserve (request $request ){
      if(auth()->user()){
        $table = new tables();
        $table->date =$request->date;
        $table->time =$request->time;
        $table->name =$request->customer;
        $table->phone =$request->phone;
        $table->users_id = auth()->user()->id;
        $table->save();
        
        $admin = User::find(1);
        // status pending 

         tables::where('id',auth()->user())->update(array('status'=>'pending'));

        FacadesNotification::send( $admin, new booking( auth()->user()->id , $request->customer, $request->time , $request->date , $request->phone  )) ;
        return redirect()->route('table')->with('status','Thank you for choosing us, Your booking is under review ');
      } 
      else {
        return redirect()->route('register')->with('status','You should Regist first!');
      }
    }

    public function accept ( $user_id ){
      tables::where('id',$user_id)->update(array('status'=>'Your booking reservation accepted'));
      
      $user_booked = tables::find($user_id);
      $user = User::where('id',$user_booked->users_id)->get();
      
    return redirect()->route('admin.notify');
    
    }


    public function reject ( $user_id ){
    
      tables::where('id',$user_id)->update(array('status'=>'Your booking reservation rejected'));
      
      $user_booked = tables::find($user_id);
      $user = User::where('id',$user_booked->users_id)->get();
      
    return redirect()->route('admin.notify');
    
    }
    
    
    public function notify (){
      $book=DB::table('tables')->get();
      return view('admin.notify',compact('book'));   
  }
  
  public function delete ($id){
    DB::table('tables')->where('id',$id)->delete();
    DB::table('notifications')->where('id',$id)->delete();
    return redirect()->route('admin.notify');
}

 
// public function stat($users_id){
//   $stat =DB::table('tables')->get();
//   return view('pageslayout',compact('stat'));
// }



}
			