<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    //
    public function UserService_page(){
        return view('frontend.UserPages.Userbooking');
    }
}

