<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormFillupListController extends Controller
{
    public function index(){
        return view('admin.formFillupList');
    }
}
