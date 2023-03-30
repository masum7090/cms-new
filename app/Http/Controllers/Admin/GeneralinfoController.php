<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use Exception;
use App\Services\PaginationService;
use App\Services\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GeneralinfoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        try {
            $data = GeneralInfo::orderBy('created_at', 'DESC');

            if ($request->query('search')) {
                $data = $data->whereRaw($request->query('search'));
            }
            $data = PaginationService::paginate($request, $data);
            if ($data->total() == 0) {
                return ResponseService::emptyResponse();
            }
            return ResponseService::successResponse($data);
        } catch (Exception $e) {
            return ResponseService::errorResponse($e);
        }
    }

    public function store(Request $request): JsonResponse
    {
        if (empty($request)) {
            return ResponseService::emptyBodyResponse();
        }

//        $validator = Validator::make($request->all(), [
//            'en_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')],
//            'bn_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')],
//        ]);
//
//        if ($validator->fails()) {
//            return ResponseService::invalidResponse($validator);
//        }
        $data = $request->all();
        $data['created_by'] = auth()->id();

        $general_info = GeneralInfo::create($data);
        return ResponseService::createSuccessResponse($general_info, 'General Info');
    }

    public function show($id): JsonResponse
    {
        try {
            $data = GeneralInfo::find($id);

            if (empty($data)) {
                return ResponseService::notFoundResponse($id);
            }
            return ResponseService::successResponse($data);
        } catch (Exception $e) {
            return ResponseService::errorResponse($e);
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        if (empty($request)) {
            return ResponseService::emptyBodyResponse();
        }

        $validator = Validator::make($request->all(), [
            'en_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')->ignore($id)],
            'bn_name' => ['required', Rule::unique('divisions')->whereNull('deleted_at')->ignore($id)],
            'division_code' => ['required', 'numeric', Rule::unique('divisions')->whereNull('deleted_at')->ignore($id)],
            'country_code' => ['required', 'numeric', Rule::exists('countries', 'country_code')->whereNull('deleted_at')],
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return ResponseService::invalidResponse($validator);
        }

        $division_data = Division::find($id);
        if (is_null($division_data)) {
            return ResponseService::notFoundResponse($id);
        }
        $data = $request->only(['en_name', 'bn_name', 'division_code', 'country_code', 'status']);
        $data['updated_by'] = auth()->id();

        $division = tap(Division::findOrFail($id))->update($data);

        return ResponseService::updateSuccessResponse($division, 'Division');
    }

    public function destroy($id): JsonResponse
    {
        try {
            $data = Division::find($id);
            if (is_null($data)) {
                return ResponseService::notFoundResponse($id);
            }
            $data->delete();
            return ResponseService::deleteSuccessResponse();
        } catch (Exception $e) {
            return ResponseService::errorResponse($e);
        }
    }
}
