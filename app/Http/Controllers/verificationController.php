<?php

namespace App\Http\Controllers;

use App\category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verificationController extends Controller
{
    public function pendingList(){
     $pending= DB::table('Users')->where('role',2)->where('status',0)->get();
     return view('admin.verification.pendingList',compact('pending'));
     /*echo "<pre>";
     print_r($pending);
     exit();*/
    }

    public function verifiedList(){
        $verified= DB::table('Users')->where('role',2)->where('status',1)->get();
        return view('admin.verification.verifiedList',compact('verified'));
    }

    public function acceptList($id){

        $user= User::find($id);

        $user->status = 1;
        $user->save();
        return redirect('pendingList')->with('success','User Accepted successfully');
    }

    public function deleteList($id){
        $shopper = User::find($id);
        $shopper->delete();

        return redirect()->back()->with('success', 'User is Deleted Successfully');
    }
}
