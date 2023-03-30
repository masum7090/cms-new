<?php

namespace App\Http\Controllers\College;
use App\Models\adminUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;


class CollegeDashboardController extends Controller
{
    public function index(){
        return view('college.collegeDashboard');
    }

    
    public function colLogout(){
        Auth::guard('adminUser')->logout();
        return redirect('college/login');
    }
}
