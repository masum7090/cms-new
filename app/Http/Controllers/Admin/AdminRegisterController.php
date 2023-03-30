<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminUser;
use Illuminate\Support\Facades\Hash;


class AdminRegisterController extends Controller
{
    public function index(){
        $data = adminUser::all();
        return view('admin.adminregister' ,['user' =>$data]);
    }


    public function createAdmin(Request $req){
        $adminUser = new adminUser;
        $adminUser ->name = $req->name;
        $adminUser ->email = $req->email;
        $adminUser ->password = Hash::make($req->password);
        $adminUser -> save();
        $data = adminUser::all();
        return view('admin.adminregister' ,['user' =>$data]);
    }

    
}
