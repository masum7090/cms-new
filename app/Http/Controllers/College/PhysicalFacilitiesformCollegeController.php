<?php

namespace App\Http\Controllers\college;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhysicalFacilitiesformCollegeController extends Controller
{
    public function index(){
        return view('college.physicalFacilitiescollege');
    }
}
