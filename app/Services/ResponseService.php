<?php


namespace App\Services;

use Exception;
use Illuminate\Http\JsonResponse;

class ResponseService
{

    public function __call($method, $args)
    {
        return $this->call($method, $args);
    }

    public static function __callStatic($method, $args)
    {
        return (new static())->call($method, $args);
    }

    private function call($method, $args)
    {
        if (!method_exists($this, '_' . $method)) {
            throw new Exception('Call undefined method ' . $method);
        }

        return $this->{'_' . $method}(...$args);
    }

    public function _successResponse($data): JsonResponse
    {
        $response = [
            'code' => 200,
            'status' => 'success',
            'message' => 'Record found'
        ];
        return response()->json([
            'response' => $response,
            'data' => $data
        ], 200);
    }

    public function _emptyResponse(): JsonResponse
    {
        $response = [
            'code' => 200,
            'status' => 'success',
            'message' => 'Data not available'
        ];

        return response()->json([
            'response' => $response,
            'data' => []
        ], 200);
    }

    public function _errorResponse($exception): JsonResponse
    {
        $response = [
            'code' => 400,
            'status' => 'failed',
            'message' => 'Something went wrong!',
            'error' => $exception->getMessage()
        ];
        return response()->json([
            'response' => $response
        ], 400);
    }

    public function _emptyBodyResponse(): JsonResponse
    {
        $response = [
            'code' => 400,
            'status' => 'failed',
            'message' => 'Empty Request Data'
        ];
        return response()->json([
            'response' => $response
        ], 400);
    }

    public function _invalidResponse($validator): JsonResponse
    {
        $response = [
            'code' => 422,
            'status' => 'failed',
            'message' => $validator->errors()
        ];
        return response()->json([
            'response' => $response
        ], 422);
    }

    public function _createSuccessResponse($data, $type = "data"): JsonResponse
    {
        $response = [
            'code' => 201,
            'status' => 'success',
            'message' => $type . ' created successfully.'
        ];
        return response()->json([
            'response' => $response,
            'data' => $data
        ], 201);
    }

    public function _updateSuccessResponse($data, $type = "data"): JsonResponse
    {
        $response = [
            'code' => 200,
            'status' => 'success',
            'message' => $type . ' updated successfully.'
        ];
        return response()->json([
            'response' => $response,
            'data' => $data
        ], 200);
    }

    public function _deleteSuccessResponse(): JsonResponse
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => "Deleted successfully"
        ], 200);
    }

    public function _notFoundResponse($id): JsonResponse
    {
        $response = [
            'code' => 400,
            'status' => 'failed',
            'message' => 'No Data found against id: ' . $id
        ];

        return response()->json([
            'response' => $response,
        ], 400);
    }

    public function _unAuthenticateAPIResponse($exception): JsonResponse
    {
        $response = [
            'code' => 403,
            'status' => 'failed',
            'message' => 'User is not authenticated'
        ];

        return response()->json([
            'response' => $response,
        ], 403);
    }

    public function _notFoundURLResponse($exception): JsonResponse
    {
        $response = [
            'code' => 404,
            'status' => 'failed',
            'message' => 'URL Not Found'
        ];

        return response()->json([
            'response' => $response,
        ], 404);
    }

    public function _registrationSuccessResponse($type): JsonResponse
    {
        $response = [
            'code' => 200,
            'status' => 'success',
            'message' => $type . ' Registered Successfully'
        ];
        return response()->json([
            'response' => $response,
        ], 200);
    }

    public function _globalResponse($status, $message, $code, $data = null): JsonResponse
    {
        $response = [
            'code' => $code,
            'status' => $status,
            'message' => $message
        ];

        if (is_null($data)) {
            return response()->json([
                'response' => $response,
            ], $code);
        }
        return response()->json([
            'response' => $response,
            'data' => $data
        ], $code);
    }

    public static function demo(): JsonResponse
    {
        return response()->json('ok from demo');
    }

}
