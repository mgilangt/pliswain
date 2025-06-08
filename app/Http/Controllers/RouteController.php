<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }
    }
}
