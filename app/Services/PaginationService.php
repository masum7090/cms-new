<?php


namespace App\Services;

use Illuminate\Http\Request;

class PaginationService
{
    public static function paginate(Request $request, $data)
    {
        if ($request->input('size') == -1) {
//            need to count twice to maintain previous structure
            $total = $data->count();
            $data = $data->paginate($total);
        } else if ($request->input('size') > 200) {
            $size = 200;
            $data = $data->paginate($size);
        } else if ($request->input('size') < -1 || $request->input('size') == 0) {
            $size = 10;
            $data = $data->paginate($size);
        } else {
            $size = (int)$request->input('size');
            $data = $data->paginate($size);
        }
        return $data;
    }

}
