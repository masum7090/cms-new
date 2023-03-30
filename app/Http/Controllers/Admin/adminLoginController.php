<?php

namespace App\Http\Controllers\Admin;

use App\Models\adminUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class adminLoginController extends Controller
{
    public function index(){
        if(!Auth::guard('adminUser')->check()){
            return view('admin.adminLogin');
        }else{
            return redirect('admin/dashboard');
        }
       
    }
    public function colLogin(Request $request){
       //return adminUser::where('email',$request->input('email'))->get();
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('adminUser')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
        }else{
            Session::flash('error-msg','Invalid clooege code or password');
            return redirect()->back();
        };
 
    }
}
