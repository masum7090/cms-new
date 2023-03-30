<?php

namespace App\Http\Controllers\Admin;
use App\Models\adminUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class DashboardController extends Controller
{
   public function index(){
      return view('admin.dashboard');
   } 

   public function colLogout(){
      Auth::guard('adminUser')->logout();
      return redirect('admin/login');
  }
}
