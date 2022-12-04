<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedHomeController extends Controller
{
    //
    public function medicine_page(){
        return view('medicine.medicinehome');
    }   
}
