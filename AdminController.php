<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_page(){
        return view('AdminPage.admin');
    }


    public function admin_dash(){
        return view('admin_dash.dashboard');
    }
}
