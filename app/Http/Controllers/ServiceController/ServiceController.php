<?php

namespace App\Http\Controllers\ServiceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function service_page(){
        return view('ServicePage.booking');
    }
}
