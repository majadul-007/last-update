<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveluser;

class ProfileAPIController extends Controller
{
    //
    public function MyProfile(){
        // return view('pages.user.list'); 

        $myprofile = Traveluser::all();     

        return $myprofile;

    }
}
