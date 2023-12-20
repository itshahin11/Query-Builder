<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrmController extends Controller
{
    public function OrmAction(Request $request)
    {
        return Brand::create($request->input());
    }
}
