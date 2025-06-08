<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->q;
        
        $countries = country::when($search, function($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                      ->orWhere('nicename', 'like', '%'.$search.'%');
            })
            ->select(['id', 'name', 'nicename', 'phonecode as code'])
            ->limit(10)
            ->get();
            
        return response()->json($countries);
    }
}
