<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiderLocationRequest;
use App\Models\RiderLocation;
use Illuminate\Http\Request;

class RiderInfoController extends Controller
{
    public function store_rider_location(RiderLocationRequest $request) {
        if ($request->fails()) {
            $errors = $request->errors()->all();
            return response()->json($errors, 400);
        }

        $riderLocation = RiderLocation::create($request->validated());

        return response()->json([]);
    }
    public function get_nearest_rider() {
        return response()->json([]);
    }
}
