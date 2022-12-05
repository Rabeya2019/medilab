<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAboutController extends Controller
{
    //
    public function userabout(){
        return view('frontend.UserPages.userabout');
    }
}
