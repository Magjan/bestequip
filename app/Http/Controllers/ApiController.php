<?php

namespace App\Http\Controllers;

use App\Models\ApiRequestLog;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function handleRequest(Request $request){

        ApiRequestLog::create([
            'endpoint'=>$request->path(),
            'method'=>$request->method(),
            'request_data'=>json_encode($request->all()),
            'ip_address'=>$request->ip()
        ]);
        return response()->json(['message'=>'Request logged successfully']);
    }
}
