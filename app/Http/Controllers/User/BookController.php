<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index($id)
    {
        $data = Trip::findOrfail($id);
        return view('publicUser.book',['data'=>$data]);

    }
    public function create(Request $request , $id)
    {
        $user=$request->user_id;
        // dd($request->guest_number);
        Reservation::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'number_of_guest' => $request->guest_number,
            'res_date' => $request->res_date,
            'price' => 55,
            'status' => 'Pending',
            'trip_id' => $id,


        ]);
        // return view('publicUser.book');
        return response('ok');

    }
}
