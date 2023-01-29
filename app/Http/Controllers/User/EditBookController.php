<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Trip;

use Illuminate\Http\Request;

class EditBookController extends Controller
{

    public function index($id)
    {

        $reservation = Reservation::where('id', $id)->get();

        $trip_id=$reservation[0]->trip_id;

        $trip = Trip::where('id', $trip_id)->get();

        // dd($trip);
        return view('publicUser.editBook', ['reservation' => $reservation,'trip'=>$trip]);
    }
    public function update(Request $request , $id)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10'],
            'res_date' => ['required'],
        ]);


        $data = Trip::findOrfail($id);
        if(  $data->guest_number ==1){
            $price =$request->guest_number*$data->price;
        }else{
            $price=$data->price;
        }
// dd($price);
        $user=$request->user_id;
        // dd($request->guest_number);

        $data = Reservation::findOrfail($id);
        $data->first_name = $request->first_name ;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->user_id = $user;
        $data->last_name = $request->last_name;
        $data->phoneNumber = $request->phoneNumber;
        $data->email = $request->email;
        $data->number_of_guest = $request->guest_number;
        $data->res_date = $request->res_date;
        $data->comment = $request->comment;
        $data->price = $price;
        $data->status = 'Pending';
        $data->trip_id = $id;
        $data->save();
     

        return redirect()->route('user.profile.index');

    }

}
