<?php

namespace App\Http\Controllers\College;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeFormController extends Controller
{
    public function index(){
        return view('college.collegeForm');
    }
}
