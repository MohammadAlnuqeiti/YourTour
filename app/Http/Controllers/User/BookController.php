<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id)
    {
        return view('publicUser.book',['id'=>$id]);

    }
}
