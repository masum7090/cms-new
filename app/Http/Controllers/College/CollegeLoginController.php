<?php

namespace App\Http\Controllers\college;

use App\Models\adminUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class CollegeLoginController extends Controller
{
    public function index(){
        if(!Auth::guard('adminUser')->check()){
            return view('college.collegeLogin');
        }else{
            return redirect('college/dashboard');
        }
       
    }
    public function colLogin(Request $request){
       //return adminUser::where('email',$request->input('email'))->get();
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('adminUser')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('college/dashboard');
        }else{
            Session::flash('error-msg','Invalid clooege code or password');
            return redirect()->back();
        };
 
    }
}
