<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpUnitController extends Controller
{
    public function json(Request $request){

        return response()->json($request->all(),200);
    }
}
