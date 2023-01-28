<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class Search extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Category::where('name', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->get();
        return view('publicUser.search', ['results' => $results]);
    }
}
