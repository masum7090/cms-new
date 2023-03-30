<?php

namespace App\Http\Controllers\college;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use App\Services\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GeneralinfoformCollegeController extends Controller
{
    public function index(){
        return view('college.collegeGeneralincocollege');
    }

    public function create(Request $request)
    {
//        if (empty($request)) {
//            return ResponseService::emptyBodyResponse();
//        }

//        $validator = Validator::make($request->all(), [
//            'en_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')],
//            'bn_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')],
//        ]);
//
//        if ($validator->fails()) {
//            return ResponseService::invalidResponse($validator);
//        }
//        $data = $request->only('institute_name_bn', 'institute_name_en');
//        $data['created_by'] = auth()->id();
        dd($request->all());
        $general_info = GeneralInfo::create($data);
        return ResponseService::createSuccessResponse($general_info, 'General Info');
    }
}
