<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingAPIController extends Controller
{
    //

    public function BookingList(){
        $userorders = Booking::all();
        return $userorders;

    }

    public function Add(Request $request){

        

        $bookings = new Booking();
        $bookings->traveluserid = $request->traveluserid;
        $bookings->name = $request->name;
        $bookings->email = $request->email;
        $bookings->phone = $request->phone;
        
        $bookings->destination = $request ->destination;
        $bookings->members = $request ->members;
        $bookings->days = $request ->days;

       
        
        $bookings -> save();
       
        

        return $bookings;


        

    }
}
